<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\Zhanhui;
use App\Helpers\UploadImages;
use App\Http\Requests\CreateBrandArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZhanhuiArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /**展会文档列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index(){
        $articles=Zhanhui::where('mid',2)->orderBy('id','desc')->paginate(30);
        return view('admin.zhanhui',compact('articles'));
    }

    /**展会普通文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ZhanhuiCreate(){
        $allnavinfos=Arctype::where('is_write',1)->where('mid',2)->pluck('typename','id');
        return view('admin.zhanhui_create',compact('allnavinfos'));
    }

    /**展会普通文档创建处理
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function PostZhanhuiCreate(CreateBrandArticleRequest $request){
        if (!empty($request['bdname']))
        {
            $brandinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake',1)->where('brandname','like','%'.$request['bdname'].'%')->first(['id','published_at']);
            if (isset($brandinfos->id))
            {
                $request['brandid']=$brandinfos->id;
                if ( Carbon::parse($brandinfos->published_at)>Carbon::now())
                {
                    $request['published_at']=Carbon::parse($brandinfos->published_at)->addMinutes(rand(1,300))->addSeconds(rand(1,59));
                }
            }else{
                $request['brandid']=0;
            }
        }
        $this->RequestProcess($request);
        if ( Zhanhui::create($request->all())->wasRecentlyCreated)
        {
            return redirect(action('Admin\ZhanhuiArticleController@Index'));
        }
    }

    public function ZhanhuiUpdate($id){
        $articleinfos=Zhanhui::findOrfail($id);
        $allnavinfos=Arctype::where('is_write',1)->where('mid',2)->pluck('typename','id');
        $pics=explode(',',trim(Zhanhui::where('id',$id)->value('imagepics'),','));
        return view('admin.zhanhui_edit',compact('id','articleinfos','allnavinfos','pics'));
    }

    /**展会内容编辑处理
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postZhanhuiUpdate(CreateBrandArticleRequest $request,$id){
        if (!empty($request['bdname']))
        {
            $brandinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake',1)->where('brandname','like','%'.$request['bdname'].'%')->first(['id','published_at']);
            if (isset($brandinfos->id))
            {
                $request['brandid']=$brandinfos->id;
                if ( Carbon::parse($brandinfos->published_at)>Carbon::now())
                {
                    $request['published_at']=Carbon::parse($brandinfos->published_at)->addMinutes(rand(1,300))->addSeconds(rand(1,59));
                }
            }else{
                $request['brandid']=0;
            }
        }
        $this->RequestProcess($request);
        Zhanhui::findOrFail($id)->update($request->all());
        return redirect(action('Admin\ZhanhuiArticleController@Index'));

    }

    /**展会文档内容删除
     * @param $id
     * @return string
     */

    public function postZhanhuiDelete($id){
        if(auth('admin')->user()->id)
        {
            Zhanhui::where('id',$id)->delete();
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }
    /**
     *自定义文档属性及缩略图处理
     * @param Request $request
     * @return Request
     */
    private function RequestProcess(Request $request)
    {
        $request['keywords']=$request['keywords']?$request['keywords']:$request['title'];
        $request['click']=rand(100,900);
        $request['description']=(!empty($request['description']))?str_limit($request['description'],180,''):str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,'\t'],'',strip_tags(htmlspecialchars_decode($request['body']))), $limit = 180, $end = '');
        $request['write']=auth('admin')->user()->name;
        $request['dutyadmin']=auth('admin')->id();
        $request['body']=str_replace('<h2></h2>','',$request->body);
        //自定义文档属性处理
        if(isset($request['flags']))
        {
            $request['flags']=UploadImages::Flags($request['flags']);
        }
        //缩略图处理
        if($request['image'])
        {
            $request['litpic']=UploadImages::UploadImage($request,'image');
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }elseif (isset($request['litpic']) && !empty($request['litpic']))
        {
            $request['litpic']=$request['litpic'];
        }elseif (preg_match('/<[img|IMG].*?src=[\' | \"](.*?(?:[\.jpg|\.jpeg|\.png|\.gif|\.bmp]))[\'|\"].*?[\/]?>/i',$request['body'],$match)){
            $request['litpic']=$match[1];
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }
        //首页推荐图处理
        if($request['indexlitpic']) {
            $request['indexpic'] = UploadImages::UploadImage($request, 'indexlitpic');
        }
        //图集处理
        $request['imagepics']=rtrim($request->input('imagepics'),',');
        return $request;

    }
}
