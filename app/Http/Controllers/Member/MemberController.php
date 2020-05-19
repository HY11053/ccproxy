<?php

namespace App\Http\Controllers\Member;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    /**会员信息首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index()
    {
        $thisuserinfo=auth('web')->user();
        return view('member.index',compact('thisuserinfo'));
    }

    /**会员信息编辑界面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function memberInfoEditor()
    {
        $thisuserinfo=auth('web')->user();
        return view('member.infoeditor',compact('thisuserinfo'));
    }

    /**会员信息编辑处理
     * @param Request $request
     */
    public function postMemberInfoEditor(Request $request)
    {
        User::where('id',$request->id)->update(['name'=>$request->name,'group'=>$request->group,'mobilephone'=>$request->mobilephone,'address'=>$request->address]);
        return redirect(action('Member\MemberController@Index'));
    }

    /**会员密码修改
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rePassword()
    {
        $thisuserinfo=auth('web')->user();
        return view('member.repassword',compact('thisuserinfo'));
    }

    /**会员密码修改
     * @param Request $request
     */
    public function postRePassword(Request $request)
    {
        $thisuserinfo=auth('web')->user();
        $this->validate($request, [
            'password' => 'required',
            'newpassword' => 'required',
        ]);
        if (Hash::check($request->password,$thisuserinfo->password))
        {
            User::where('id',$request->id)->update(['password'=>bcrypt($request->newpassword)]);
            echo '密码修改成功';
        }else{
            exit('旧密码不正确 无法修改');
        }
    }

    /**会员消费记录
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function expensesRecord()
    {
        return view('member.expensesrecord');
    }
}
