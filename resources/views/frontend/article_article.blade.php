@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" />
    <meta property="og:image" content="{{config('app.url')}}{{str_replace(config('app.url'),'',$thisarticleinfos->litpic)}}"/>
@stop
@section('main_content')
    <!--top 开始-->
    <div class="nav_top">
        <ul>
            <li><a href="/newsPage/1601/">安心网说</a></li>
            <li><a href="/newsPage/1602/">加盟费用</a></li>
            <li><a href="/newsPage/1603/">安心创业</a></li>
            <li><a href="/newsPage/1604/">选址筹备</a></li>
            <li><a href="/newsPage/1605/">经营之道</a></li>
            <li><a href="/newsPage/1606/">加盟资讯</a></li>
            <li><a href="/newsPage/1607/">加盟优势</a></li>
            <li><a href="/newsPage/1608/">加盟条件</a></li>
            <li><a href="/newsPage/1609/">加盟流程</a></li>
            <li><a href="/newsPage/1610/">品牌动态</a></li>
        </ul>
    </div>
    <!--top 结束-->
    <!--当前位置 开始-->
    <div class="path">当前位置<a href="/">首页</a> > <a href="/newsPage/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a>> {{$thisarticleinfos->title}}</div>
    <!--当前位置 结束-->
    <!--文章头部 开始-->
    @if(isset($thisarticlebrandinfos))
    <div class="article_top">
        <div class="img">
            <a href="/busInfo/{{$thisarticlebrandinfos->id}}.html"><img src="{{$thisarticlebrandinfos->litpic}}" width="130" height="98" alt="{{$thisarticlebrandinfos->brandname}}" /></a>
        </div>
        <div class="info">
            <p class="t_tit"><a href="/busInfo/{{$thisarticlebrandinfos->id}}.html">{{$thisarticlebrandinfos->brandname}}</a></p>
            <p class="t_info">
                <span>加盟品牌：<em class="e_m">{{$thisarticlebrandinfos->brandname}}</em></span>
                <span>所属行业：<em class="e_m">{{$thisbrandtypecidinfo->typeanem}}</em><em  class="e_m">{{$thisbrandtypeinfo->typename}}</em></span>
            </p>
            <p class="t_info"><span>投资金额：<em>{{$thisarticlebrandinfos->brandpay}}</em></span><span>意向加盟： <em>{{$thisarticlebrandinfos->brandattch}}</em></span></p>
        </div>
        <div class="btn"><a href="/busInfo/{{$thisarticlebrandinfos->id}}.html">免费索要资料</a></div>
    </div>
    @endif
    <!--文章头部 结束-->
    <div class="center_list">
        <!--左边模块 开始-->
        <div class="new_left">
            <div class="list_info">
                <div class="list_box">
                    <!--标题 开始-->
                    <div class="content_tit">
                        <h1>{{$thisarticleinfos->title}}</h1>
                        <div class="time_source"><span>{{$thisarticleinfos->created_at}}</span><span>来源：安心加盟网</span></div>
                    </div>
                    <!--标题 结束-->
                    <!--文章内容 开始-->
                    <div class="body_tit clearfix">
                        　{!! $content !!}
                    </div>
                    <!--文章内容 结束-->
                    <!--上一篇 开始-->
                    <div class="shangxiapian">
                        <p>上一篇：@if(isset($prev_article->id)) <a href="{{config('app.url')}}/news/{{$prev_article->id}}.html" title="{{$prev_article->title}}">{{str_limit($prev_article->title,40,'')}}</a> @else 没有了 @endif</p>
                        <p>下一篇：@if(isset($next_article->id))  <a href="{{config('app.url')}}/news/{{$next_article->id}}.html" title="{{$next_article->title}}">{{str_limit($next_article->title,40,'')}}</a> @else 没有了 @endif </p>
                        <div class="fenxiang">
                            <div class="fenxiangdao">分享到：</div>
                            <div class="bdsharebuttonbox bdshare-button-style1-16" data-tag="share_1" data-bd-bind="1497947902715">
                                <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪</a>
                                <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                <a class="popup_weixin" data-cmd="weixin" onclick="return false;" title="分享到微信">微信</a>
                            </div>
                        </div>
                        <script>
                            window._bd_share_config = {
                                "common": {
                                    "bdSnsKey": {},
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "1",
                                    "bdSize": "16"
                                },
                                "share": {}
                            };
                            with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'https://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                        </script>
                    </div>
                    <!--上一篇 结束-->
                </div>
              @include('frontend.liuyan')
                <!--相关文章 开始-->
                <div class="xg_news">
                    <div class="common_tit">
                        <h2>@if(isset($thisarticlebrandinfos)) {{$thisarticlebrandinfos->brandname}}@endif相关文章</h2>
                        <div class="top_924"></div>
                    </div>
                    <div class="xw">
                        <ul class="clearfix">
                            @foreach($latestbrandnews as $latestbrandnew)
                            <li><em>{{date('Y-m-d',strtotime($latestbrandnew->created_at))}}</em><a href="https://www.anxjm.com/news/{{$latestbrandnew->id}}/">{{$latestbrandnew->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--相关文章 结束-->
                <div class="tujian_brand">
                    <div class="common_tit">
                        <h2>@if(isset($thisarticlebrandinfos)) {{$thisarticlebrandinfos->brandname}}@endif推荐品牌</h2></div>
                        <div class="bd_cont">
                            <ul>
                                @foreach($brandarticles as $brandarticle)
                                <li>
                                    <a href="https://www.anxjm.com/busInfo/{{$brandarticle->id}}.html" target="_blank">
                                        <div class="img"><img src="{{$brandarticle->litpic}}" width="120" height="90" alt="{{$brandarticle->beandname}}"></div><span>{{$brandarticle->brandname}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                </div>
            </div>
        </div>
        <!--左边模块 结束-->
        <!-- 右侧 end -->
        <div class="context_right">
            <!-- 同类项目 start -->
            <div class="rightcon">
                <div class="context_title">
                    <span>@if(isset($thisbrandtypeinfo))<a href="/{{$thisbrandtypecidinfo->real_path}}/" target="_blank">更多&gt;&gt;</a>@endif</span>
                    <h2>@if(isset($thisbrandtypeinfo)){{$thisbrandtypeinfo->typename}}@endif品牌排行榜</h2>
                </div>
                <ul class="right_company">
                    @foreach($paihangbangs as $index=>$paihangbang)
                        <li> <span class="ico  @if($index<3) num @endif ">{{$index+1}}</span> <span class="name"><a href="/busInfo/{{$paihangbang->id}}.html" target="_blank" title="{{$paihangbang->brandname}}">{{$paihangbang->brandname}}</a></span> <span class="invest">[{{$investment_types[$paihangbang->tzid]}}]</span> </li>
                    @endforeach
                </ul>
            </div>
            <div class="rightcon bd_commit2">
                <div class="context_title">
                    <h2>@if(isset($thisbrandtypeinfo)){{$thisbrandtypeinfo->typename}}品牌@endif热点资讯</h2>
                </div>
                <div class="bd">
                    <ul>
                        @foreach($latesttypenews as $latesttypenew)
                            <li><a href="https://www.anxjm.com/news/{{$latesttypenew->id}}.html" target="_blank" title="{{$latesttypenew->title}}">{{$latesttypenew->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @if(isset($thisbrandtypeinfo))
            <div class="rightcon bd_commit ">
                <div class="context_title">
                    <h2 class="hd_tit">{{$thisbrandtypeinfo->typename}}最新入驻品牌</h2></div>
                <div class="bd_cont">
                    <ul>
                        @foreach($latestbrands as $latestbrand)
                            <li><a href="/busInfo/{{$latestbrand->id}}.html" target="_blank" ><div class="img"><img src="{{$latestbrand->litpic}}" width="120" height="90" alt="{{$latestbrand->brandname}}"/></div><span>{{$latestbrand->brandname}}</span></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <div class="rightcon bd_commit2">
                <div class="context_title">
                    <span><a href="https://www.anxjm.com/ms/" target="_blank">更多&gt;&gt;</a></span>
                    <h2>最新品牌新闻</h2>
                </div>
                <div class="bd">
                    <ul>
                        @foreach($latestnews as $latestnew)
                            <li><a href="/news/{{$latestnew->id}}.html" target="_blank" title="{{$latestnew->title}}">{{$latestnew->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="rightcon bd_commit ">
                <div class="context_title">
                    <h2 class="hd_tit">最新入驻品牌</h2></div>
                <div class="bd_cont">
                    <ul>
                        @foreach($newbrands as $newbrand)
                            <li><a href="/busInfo/{{$newbrand->id}}.html" target="_blank" ><div class="img"><img src="{{$newbrand->litpic}}" width="120" height="90" alt="{{$newbrand->brandname}}"/></div><span>{{$newbrand->brandname}}</span></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- 右侧 end -->
    </div>
@stop