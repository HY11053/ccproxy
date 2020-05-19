<?php

namespace App\Listeners;

use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use App\Events\PhoneEvent;
use App\Mail\MailerSendClass;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class PhoneEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $mailer;
    public function __construct(MailerSendClass $mailerSendClass)
    {
        //
        $this->mailer=$mailerSendClass;
    }

    /**
     * Handle the event.
     *
     * @param  PhoneEvent  $event
     * @return void
     */
    public function handle(PhoneEvent $event)
    {
        preg_match('#\/news\/(\d+)\.shtml#',$event->phonemanage->host,$matches);
        if (isset($matches[1]))
        {
            $brand=Archive::where('id',$matches[1])->value('bdname')?:'暂无品牌信息';
            $brandarticle=Brandarticle::where('id',Archive::where('id',$matches[1])->value('brandid'))->first();
            if ($brandarticle)
            {
                $cla=$brandarticle->arctype->typename;
            }else
            {
                $cla='暂未分类';
            }
        }else{
            preg_match('#\/xm\/(\d+)\.shtml#',$event->phonemanage->host,$matches);
            if (isset($matches[1])){
                $brand=Brandarticle::where('id',$matches[1])->value('brandname');
                $brandarticle=Brandarticle::where('id',$matches[1])->first();
                $cla=$brandarticle->arctype->typename;
            }else{
                $brand='暂无品牌信息';
                $cla='暂未分类';
            }
        }
        $url="https://message.5988.com/index.php/my_ci/into/";
        $post_data = array(
            "realm" => 'mip.jjedu.com.cn',
            "job" => 'guestbook',
            "title" => '中教招商网',
            "resolution" =>'resolution',
            "cla" => $cla,
            "combrand" => $brand,
            "username" => $event->phonemanage->name,
            "iphone" =>decrypt($event->phonemanage->phoneno),
            "content" => $event->phonemanage->note,
            "real_useraddr" => $event->phonemanage->ip,
            "real_httpurl" => $event->phonemanage->host,
        );
        $header=[
            "Accept-Language: zh-CN,zh;q=0.9",
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36",
        ];
        $response = $this->curl_https($url, $post_data,$header);
        Log::info($response);
    }

    /**curlHTTPS请求转发
     * @param $url
     * @param array $data
     * @param array $header
     * @param int $timeout
     * @param bool $debug
     * @return mixed
     */
    function curl_https($url, $data=array(), $header=array(), $timeout=30, $debug=true){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt ($ch, CURLOPT_REFERER, $data["real_httpurl"]);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        if($error=curl_error($ch)){
            die($error);
        }
        curl_close($ch);
        return $httpCode;
    }
}
