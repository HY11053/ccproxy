<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Admin;
use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use App\Http\Requests\UserRegsiterRequest;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**后台用户列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    function Index()
    {
        $adminlists=Admin::orderBy('id','desc')->take(1000)->get();
        return view('admin.adminlist',compact('adminlists'));
    }

    /**后台用户注册
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    function Register()
    {
        return view('admin.adminregister',compact('adminlists'));
    }

    /**后台用户注册处理
     * @param UserRegsiterRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostRegister(UserRegsiterRequest $request)
    {
        $request['password']=bcrypt($request['password']);
        Admin::create($request->all());
        return redirect(action('Admin\AdminController@Index'));
    }

    /**后台用户编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    function Edit($id)
    {
        $adminUser=Admin::find($id);
        return view('admin.adminedit',compact('adminUser'));
    }

    /**后台用户编辑提交处理
     * @param UserRegsiterRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostEdit(UserRegsiterRequest $request,$id)
    {
        $request['password']=bcrypt($request['password']);
        Admin::find($id)->update($request->all());
        return redirect(action('Admin\AdminController@Index'));
    }

    /**删除后台用户
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function Delete($id)
    {
        Admin::find($id)->delete();
        redirect(action('Admin\AdminController@Index'));
        return redirect(action('Admin\AdminController@Index'));
    }

    /**后台用户文档统计
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Userauth()
    {
        Admin::where('name',auth('admin')->user()->name)->value('type')?:abort(403);
        $users=Admin::all();
        return view('admin.users',compact('users'));
    }

    /**通知信息清除
     * @return \Illuminate\Http\RedirectResponse
     */
    public function NotificationClear()
    {
        $admin=Admin::find(auth('admin')->user()->id);
        $admin->unreadNotifications->markAsRead();
        return redirect()->back();

    }

    /**用户文档信息筛选
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ArticleInfos(Request $request)
    {
        Admin::where('name',auth('admin')->user()->name)->value('type')?:abort(403);
        $users=Admin::pluck('name','id');
        $arguments=$request->all();
        if ($request->advertisement==0)
        {
            $articles=Archive::withoutGlobalScope(PublishedScope::class)->when($request->name, function ($query) use ($request) {

            return $query->where('editor',Admin::where('id',$request->name)->value('name'));

            })->when($request->start_at, function ($query) use ($request) {

            return $query->where('created_at', '>',Carbon::parse($request->start_at));

            })->when($request->end_at, function ($query) use ($request) {

            return $query->where('created_at', '<',Carbon::parse($request->end_at));

            })->when($request->write, function ($query) use ($request) {

            return $query->where('write', Admin::where('id',$request->write)->value('name'));

            })->when($request->ismake, function ($query) use ($request) {

            return $query->where('ismake',1);

            })->paginate(50);

        }elseif ($request->advertisement==1)
        {
            $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->when($request->name, function ($query) use ($request) {

                return $query->where('editor',Admin::where('id',$request->name)->value('name'));

            })->when($request->write, function ($query) use ($request) {

                return $query->where('write', Admin::where('id',$request->write)->value('name'));

            })->when($request->start_at, function ($query) use ($request) {

                return $query->where('created_at', '>',Carbon::parse($request->start_at));

            })->when($request->end_at, function ($query) use ($request) {

                return $query->where('created_at', '<',Carbon::parse($request->end_at));

            })->when($request->ismake==1, function ($query) use ($request) {

                return $query->where('ismake',1);

            })->when($request->ismake==2, function ($query) use ($request) {

                return $query->where('ismake',0);

            })->when($request->ismake==3, function ($query) use ($request) {

                return $query->where('ismake',0)->where('isedit',1);

            })->when($request->ismake==4, function ($query) use ($request) {

                return $query->where('ismake',0)->where('isedit',0);

            })->paginate(50);
        }
        return view('admin.article_user_list',compact('users','articles','arguments'));
    }

}
