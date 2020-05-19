<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Admin;
use App\AdminModel\Phonemanage;
use App\Events\PhoneEvent;
use App\Notifications\MailSendNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
class PhoneController extends Controller
{
    function phoneComplate(Request $request)
    {
        if(empty(Phonemanage::where('ip', $request->getClientIp())->where('created_at','>',Carbon::now()->subSeconds(120))->where('created_at','<',Carbon::now())->value('ip')))
        {
            $request['host']=$request->input('host');
            $request['ip']=$request->getClientIp();
            if (Phonemanage::create($request->all())->wasRecentlyCreated){
                Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));
                //event(new PhoneEvent(Phonemanage::latest() ->first()));
                $info=['statusinfo'=>'电话提交成功，我们将尽快与您联系'];
                echo $request->input('callback')."(".json_encode($info).")";
            }else{
                $info=['statusinfo'=>'service error'];
                echo $request->input('callback')."(".json_encode($info).")";
            }
        }else{
            $info=['statusinfo'=>'电话已存在,请直接点击咨询我们'];
            echo $request->input('callback')."(".json_encode($info).")";
        }
    }
}
