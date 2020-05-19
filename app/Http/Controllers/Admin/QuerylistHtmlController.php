<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Admin;
use App\AdminModel\Brandarticle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use QL\QueryList;

class QuerylistHtmlController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function getQueryListHtml()
    {


        $data = QueryList::get('http://www.guisd.com/hd/139/sichuan/')->find('#heilongjiang a')->attrs('href');
        //打印结果
        $urls=$data->all();
        foreach ($urls as $url)
        {
            //采集某页面所有的超链接和超链接文本内容
            //可以先手动获取要采集的页面源码
            $html = file_get_contents('http://www.guisd.com'.$url);
//然后可以把页面源码或者HTML片段传给QueryList
            $data = QueryList::html($html)->rules([  //设置采集规则
                // 采集所有a标签的href属性
                'content' => ['#numlist','text'],

            ])->query()->getData();
//打印结果
            preg_match_all('/13[123569]{1}\d{8}|15[1235689]\d{8}|188\d{8}/',$data->all()[0]['content'],$matches);
           foreach ($matches[0] as $match)
           {
               if (preg_match('/(^139)(.*?)804$/',$match))
               {
                   echo  $match.'<br/>';
                   Storage::append('tel.txt', $match);
               }
           }
        }




    }
}
