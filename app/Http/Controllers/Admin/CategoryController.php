<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Arctype;
use App\Events\CategoryCacheCreateEvent;
use App\Helpers\UploadImages;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * 网站后台栏目管理首页
     * @param
     *
     * @return
     */
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    function Index(){
        $topnavs=Arctype::where('reid',0)->pluck('typename','id');
        foreach ($topnavs as $key=>$topnav)
        {
            if(!empty(Arctype::where('reid',$key)->pluck('typename','id')->toArray()))
            {
                $recursivestypeinfos[$key]=$this->GetRecursiveType($key);
            }
        }
        return view('admin.category',compact('topnavs','recursivestypeinfos'));
    }


    /**
     * 栏目创建界面
     * @param 栏目id
     *
     * @return
     */
    function Create($id=0)
    {
        $thisnavinfos=Arctype::find($id);
        $allnavinfos=Arctype::pluck('typename','id');
        if($id!=0)
        {
            $topid=empty(Arctype::where('id',$id)->value('topid'))?$thisnavinfos->id:Arctype::where('id',$id)->value('topid');
        }
        return view('admin.category_create',compact('id','thisnavinfos','allnavinfos','topid'));
    }

    /**
     * 栏目创建提交数据处理
     * @param request验证
     *
     * @return
     */

    function PostCreate(StoreCategoryRequest $request){
        //dd($request->all());
        $requestdata=$request->all();
        if(array_key_exists('image',$requestdata))
        {
            $requestdata['litpic']=UploadImages::UploadImage($request,'image');
        }else{
            $requestdata['litpic']='';
        }
        if($requestdata['dirposition']==1)
        {
            $requestdata['real_path']=$requestdata['typedir'];
        }else
        {
            $requestdata['real_path']=$this->GetRealPath($request->input('reid')).'/'.$requestdata['typedir'];
        }
        //dd($requestdata);
        Arctype::create($requestdata);
        $thistyppeinfos=Arctype::first();
        event(new CategoryCacheCreateEvent($thistyppeinfos));
        return redirect(action('Admin\CategoryController@Index'));


    }
    /**
     * 栏目编辑界面
     * @param 栏目id
     *
     * @return
     */
    function Edit($id){
        $typeinfos=Arctype::findOrFail($id);
        $thisnavinfos=Arctype::find($id);
        $allnavinfos=Arctype::pluck('typename','id');
        $topid=Arctype::where('id',$id)->value('topid');
        $reid=Arctype::where('id',$id)->value('reid');
        $pics=array_filter(explode(',',Arctype::where('id',$id)->value('typeimages')));
        return view('admin.category_edit',compact('typeinfos','thisnavinfos','allnavinfos','topid','id','pics','reid'));
    }
    /**
     * 栏目更改数据提交处理界面
     * @param   request验证 ，栏目id
     *
     * @return redirect
     */
    function PostEdit(StoreCategoryRequest $request,$id)
    {
        if($this->RecursiveReid($id,$request->input('reid'))){
            exit('父级不可以移动到子级');
        }
        $requestdata=$request->all();

        if(array_key_exists('image',$requestdata))
        {
            $requestdata['litpic']=UploadImages::UploadImage($request,'image');
        }
        if($requestdata['dirposition']==1)
        {
            $requestdata['real_path']=$requestdata['typedir'];
        }else
        {
            $requestdata['real_path']='';
           foreach(array_reverse(explode('/',$this->GetRealPath($request->input('reid')))) as $realpaths){
               $requestdata['real_path'].=$realpaths.'/';
           };
            $requestdata['real_path'].=$requestdata['typedir'];
        }
        //dd($requestdata);
        Arctype::findOrFail($id)->update($requestdata);
        $thistyppeinfos=Arctype::where('id',$id)->first();
        event(new CategoryCacheCreateEvent($thistyppeinfos));
        return redirect(action('Admin\CategoryController@Index'));
    }

    /*
     *
     * 递归向上查找子级
     */
    function RecursiveReid($id,$reid)
    {
        $reid=Arctype::where('id',$reid)->value('reid');

        if($id==$reid )
        {
            return true;
        }elseif(Arctype::where('id',$reid)->value('reid')==0){
          return false;
        }
        return $this->RecursiveReid($id,$reid);

    }
    /**
     * 栏目删除
     * @param   $request验证，栏目id
     *
     * @return redirect
     */
    function DeleteCategory(Request $request,$id){
        
        if(empty(Arctype::where('reid',$id)->value('id')))
        {
            Arctype::findOrFail($id)->delete();
            return '栏目删除成功';
        }else{
            return '当前栏目包含子栏目，请先删除子栏目';
        }

    }

    /**
     * 递归当前栏目自栏目
     * @param 栏目id
     *
     * @return arraydatas
     */
    function GetRecursiveType($id)
    {
        $typeinfos=Arctype::where('reid',$id)->pluck('typename','id')->toArray();
        if(!empty($typeinfos))
        {
            foreach ($typeinfos as $key=>$typeinfo)
            {
                if(!empty($this->GetRecursiveType($key))){
                    $typeinfoitems[$key]['list']=$typeinfo;
                    $typeinfoitems[$key]['next']=$this->GetRecursiveType($key);
                }else{
                    $typeinfoitems[$key]=$typeinfo;
                }
            }

            return $typeinfoitems;
        }


    }

    /**
     * 递归当前栏目自栏目
     * @param $reid 当前栏目reid
     *
     * @return 递归后的栏目实际地址
     */
    function GetRealPath($reid){
        $relapath=Arctype::where('id',Arctype::where('id',$reid)->value('id'))->value('typedir');

        if(Arctype::where('id',Arctype::where('id',$reid)->value('id'))->value('reid')!=0)
        {
            $relapath.='/'.$this->GetRealPath(Arctype::where('id',Arctype::where('id',$reid)->value('id'))->value('reid'));
        }
        return $relapath;
    }
}

