<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeoInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    //
    function Index()
    {
      abort(403);

    }
    /**
     * 相关搜索内容提取
     * @param
     *
     * @return
     */
    function SearchKey(Request $request)
    {
        isset($request['search'])?$request['search']:$request['search']='奶茶店加盟';
        $baiduurl='http://www.baidu.com/s?ie=utf-8&wd='.$request['search'];
        $sogouurl='http://www.sogou.com/web?query='.$request['search'].'&ie=utf8';
        $haosourl='https://www.so.com/s?ie=utf-8&fr=none&src=360sou_newhome&q='.$request['search'];
        $smurl='http://m.sm.cn/s?q='.$request['search'];
        $mbaiduurl='https://m.baidu.com/ssid=37eed2bbb8f6bfd3b6f8d2d13c2f/from=844b/s?word='.$request['search'];
        //百度
        $baiduinfos=$this->getTagData($this->Curls($baiduurl),'<div class="tt">相关搜索','</table></div>');
        preg_match_all('#<a\b[^>]*\bhref=([^\s>]+)[^>]*>[\s\S]*?([^<>]*)</a>#', $baiduinfos,$matches);
        $baiduinfos=$matches[2];
        //搜狗
        $sogouinfos=$this->getTagData($this->Curls($sogouurl),'<caption>相关搜索</caption>','</tr></table></div>');
        preg_match_all('#<a\b[^>]*\bhref=([^\s>]+)[^>]*>[\s\S]*?([^<>]*)</a>#', $sogouinfos,$matches);
        $sogouinfos=$matches[2];
        //好搜
        //dd($this->Curls($haosourl));
        $haosoinfos=$this->getTagData($this->Curls($haosourl),'<h3>相关搜索</h3>','</th><td></td>        </tr>');
        preg_match_all('#<a\b[^>]*\bhref=([^\s>]+)[^>]*>[\s\S]*?([^<>]*)</a>#', $haosoinfos,$matches);
        $haosoinfos=$matches[2];
        //神马
        $msminfos=$this->getTagData($this->Curls($smurl),'<h2>相关搜索:</h2><ul><li>','</li></ul></div>');
        preg_match_all('#<a\b[^>]*\bhref=([^\s>]+)[^>]*>[\s\S]*?([^<>]*)</a>#', $msminfos,$matches);
        $msminfos=$matches[2];
        //百度移动

        $mbdinfos=$this->getTagData($this->Curls($mbaiduurl),'<div id="relativewords" class="se-relativewords"><div class="rw-title">相关搜索','</div></div><div id="page-rcol" class="se-page-rcol"><div id="reword" class="se-reword"><div class="rw-title">相关搜索</div>');
        preg_match_all('#<a\b[^>]*\bhref=([^\s>]+)[^>]*>[\s\S]*?([^<>]*)</a>#',$mbdinfos,$matches);
        $mbdinfos=$matches[2];
        return view('admin.keyword_search',compact('baiduinfos','sogouinfos','haosoinfos','msminfos','mbdinfos'));

    }
    /**
     * 执行Curl
     * @param
     *
     * @return
     */
    function Curls($url)
    {
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        $rs=curl_exec($curl);
        curl_close($curl);
    return $rs;
    }
    /**
     * 数据截取
     * @param
     *
     * @return
     */
    function getTagData($str, $start, $end)
    {
        if ( $start == '' || $end == '' )
        {
            return;
        }
        $str = explode($start, $str);
        $str = explode($end, $str[1]);
        return $str[0];
    }

    public function BrandsView()
    {
        $brands= Archive::where('mid','=',1)->get();
        return view('frontend.brandview',compact('brands'));
    }

    public function WorkLinks()
    {
        $links=Brandarticle::where('created_at','<',Carbon::now())->skip(6000)->take(2000)->get();
        return view('admin.worklinks',compact('links'));
    }
    /*
     * 监测空短标题
     */
    public function WorkCheck()
    {
        $urls=Archive::where('shorttitle','')->get();
        foreach ($urls as $url)
        {
            echo $url->id.'-------'.$url->title.'----------------'.$url->write.'----------'.'发布时间:'.$url->published_at.'<br/>';
        }
    }
}
