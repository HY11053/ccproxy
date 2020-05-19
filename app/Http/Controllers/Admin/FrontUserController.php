<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\ChargeHistory;
use App\Http\Requests\UserRegsiterRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontUserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /**
     * 前台用户列表
     * @param
     *
     * @return
     */
    function Index()
    {
        $userlists=User::all();
        return view('admin.userlist',compact('userlists'));
    }
    /**
     * 前台用户添加
     * @param
     *
     * @return
     */
    function UserAdd(){
        echo '后台暂时不注册用户!，请从前台注册';
    }

    /**
     * 前台用户编辑
     * @param
     *
     * @return
     */

    function UserEdit($id)
    {
        $User=User::find($id);
        return view('admin.useredit',compact('User'));

    }

    /**
     * 前台会员用户编辑处理
     * @param
     *
     * @return
     */
    function PostUserEdit(UserRegsiterRequest $request,$id)
    {
        User::find($id)->update($request->all());
        return redirect(action('Admin\FrontUserController@Index'));
    }

    /**
     * 前台会员删除
     * @param
     *
     * @return
     */

    function UserDelete($id)
    {
        echo '禁止删除';
        //User::find($id)->delete();
        //return redirect(action('Admin\FrontUserController@Index'));
    }

    /**前台会员充值界面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function UserCharge()
    {
        $users=User::pluck('group','email');
        return view('admin.usercharge',compact('users'));
    }

    /**前台会员充值操作
     * @param Request $request
     * @return string
     */
    public function PostUserCharge(Request $request)
    {
        $user=User::where('email',$request->user)->first();
        User::where('email',$request->user)->update(['score'=>$request->score,'total_score'=>$user->total_score+$request->score,'remain_score'=>$user->remain_score+$request->score]);
        ChargeHistory::create(['score'=>$request->score,'group'=>$user->group,'operater'=>auth('admin')->user()->name,'ip'=>$request->getClientIp()]);
        return '充值成功';
    }

    public function UserChargeHistory()
    {
        $chrageLitsts=ChargeHistory::paginate(30);
        return view('admin.charge_histroy',compact('chrageLitsts'));
    }
}
