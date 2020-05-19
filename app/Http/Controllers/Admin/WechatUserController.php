<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Weachtopenid;
use EasyWeChat\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WechatUserController extends Controller
{
    public $wechat;
    function __construct(Application $wechat)
    {
        $this->wechat=$wechat;
    }

    public function Usercheck()
    {
        $wechatusers=$this->wechat->user->lists()->toArray();
        foreach ($wechatusers['data']['openid'] as $wechatuser)
        {
            $user=$this->wechat->user->get($wechatuser)->toArray();
            $user['nickname']=base64_encode($user['nickname']);
            Weachtopenid::where('openid',$wechatuser)->value('openid')?: Weachtopenid::create($user);
        }

    }
    public function UserLists()
    {
        $users=Weachtopenid::where('id','<>',0)->paginate(30);
        return view('admin.wechatusers',compact('users'));
    }
    public function User($openid)
    {
        $user=Weachtopenid::where('openid',$openid)->findOrFaild();
        return view('admin.wechatuseredit',compact('user'));
    }
    public function PostUser($openid)
    {
        $this->wechat->user->remark($openid, '');
        $user=$this->wechat->user->get($openid)->toArray();
    }
}
