<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Extensions\AuthenticatesLogout;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;
    use AuthenticatesUsers, AuthenticatesLogout {
        AuthenticatesLogout::logout insteadof AuthenticatesUsers;
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/index';
    protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
        $this->username = config('admin.global.username');
    }
    /**
     * 重写登录视图页面
     * @author 晚黎
     * @date   2016-09-05T23:06:16+0800
     * @return [type]                   [description]
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
    /**
     * 自定义认证驱动
     */
    protected function guard()
    {
        return auth()->guard('admin');
    }
    
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required',
            'password' => 'required',
            'captcha'=>'required|captcha'
        ]);
    }
}
