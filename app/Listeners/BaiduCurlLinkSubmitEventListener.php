<?php

namespace App\Listeners;

use App\AdminModel\Baidusubmitlink;
use App\Events\BaiduCurlLinkSubmitEvent;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BaiduCurlLinkSubmitEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BaiduCurlLinkSubmitEvent  $event
     * @return void
     */
    public function handle(BaiduCurlLinkSubmitEvent $event)
    {
        if (isset($event->args) && count($event->args))
        {
            if (isset($event->args[1]))
            {
                $prefxname=$event->args[1];
            }else{
                $prefxname='';
            }
            //web端api推送
            $this->BaiduCurl(config('app.api'),array_first($event->args),$prefxname.'百度PC主动推送',0);
            $mobile_remain=Baidusubmitlink::where('mid',1)->where('created_at','>=',Carbon::today())->latest()->first();
            if (isset($mobile_remain->id) && $mobile_remain->remain>0)
            {
                $this->BaiduCurl(config('app.mip_api'),str_replace('www.','mip.',array_first($event->args)),$prefxname.'熊掌号天级推送',1);
            }elseif(isset($mobile_remain->id) && $mobile_remain->remain<1){
                $this->BaiduCurl(config('app.mip_history'),str_replace('www.','mip.',array_first($event->args)),$prefxname.'熊掌号周级推送',2);
            }else{
                $this->BaiduCurl(config('app.mip_api'),str_replace('www.','mip.',array_first($event->args)),$prefxname.'熊掌号天级推送',1);
            }
            //小程序端api推送
            $accesstoken=$this->getAccessToken();
            $url='https://openapi.baidu.com/rest/2.0/smartapp/access/submitsitemap/api?access_token='.$accesstoken;
            if (str_contains(array_first($event->args),'/news/')){
                preg_match("#(\d+)#",array_first($event->args),$match);
                $pageurl='pages/article/article?index='.$match[0];
            }elseif(str_contains(array_first($event->args),'/xm/')){
                preg_match("#(\d+)#",array_first($event->args),$match);
                $pageurl='pages/brandarticle/brandarticle?index'.$match[0];
            }
            $datas=['type'=>1,'url_list'=>$pageurl];
            $this->baiduSmartappApi($url,$datas);
        }
    }

    /**Client Credentials 授权 获取 Access Token
     * @param Request $request
     * @return mixed
     */

    public function getAccessToken(){
        $client = new Client();
        $api = "https://openapi.baidu.com/oauth/2.0/token?grant_type=client_credentials&client_id=4MFua7olCsYZHLvOd3IH4O7jjYvXiQ0b&client_secret=iFANr8UfqaBOiOfvSgxHIaGPhN6npi4u&scope=smartapp_snsapi_base";
        $accessinfo = json_decode($client->get($api,['verify' => false])->getBody());
        if (isset($accessinfo->access_token))
        {
            return $accessinfo->access_token;
        }

    }

    /**百度主动推送
     * @param $thisarticleurl
     * @param $token
     * @param $type
     */
    private function BaiduCurl($token,$thisarticleurl,$type,$mid=0)
    {
        $urls = array($thisarticleurl);
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL =>$token,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode(PHP_EOL, $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = json_decode(curl_exec($ch),true);
        if (!empty($result) && !isset($result['error']))
        {
            $result['url']=$thisarticleurl;
            $result['type']=$type;
            $result['mid']=$mid;
            if ($mid==2)
            {
                $result['remain']=0;
            }
            Baidusubmitlink::create($result);
        }
    }

    /**小程序api接口数据推送
     * @param $url
     * @param null $data
     * @return mixed
     */
    private function baiduSmartappApi($url, $data=null) {
        //创建一个新cURL资源
        $curl = curl_init();
        //设置URL和相应的项
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        if(!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //抓取URL并把它传递给浏览器
        $output = curl_exec($curl);
        // 关闭cURL资源，并且释放系统资源
        curl_close($curl);
        return $output;
    }
}
