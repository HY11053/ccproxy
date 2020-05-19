<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Ask;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /**
     * 问答列表
     * @param
     *
     * @return
     */
    function Index()
    {
        $asklists=Ask::latest()->paginate(30);
        return view('admin.ask',compact('asklists'));
    }
    public function PendingAsks()
    {
        $asklists=Ask::where('is_hidden',0)->latest()->paginate(30);
        return view('admin.ask',compact('asklists'));
    }
    /**
     * 文档添加问题
     * @param
     *
     * @return
     */

    function Add()
    {
        return view('admin.askadd');
    }

    /**
     * 问题提交创建处理
     * @param
     *
     * @return
     */

    function PostAdd(Request $request){
        $request['ip']=$request->getClientIp();
        $request['user_id']=1;
        //dd($request->all());
       Ask::create($request->all());
       return redirect()->route('adminasklists');
    }
    //编辑问题
    public function AskEdit($id)
    {
        $thisaskinfo=Ask::findOrFail($id);
        return view('admin.askedit',compact('thisaskinfo'));
    }
    //编辑创建提交
    public function PostEdit(Request $request,$id)
    {
       // dd($request->all());
        Ask::find($id)->update($request->all());
        return redirect()->route('adminasklists');
    }
    //删除问题
    public function Delete(Request $request,$id)
    {
        // dd($request->all());
        Ask::where('id',$id)->delete();
        return redirect()->route('adminasklists');
    }
}
