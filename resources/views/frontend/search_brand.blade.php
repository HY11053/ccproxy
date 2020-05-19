@extends('frontend.frontend')
@section('title')品牌搜索页面-安心加盟网@stop
@section('keywords')品牌搜索页面 @stop
@section('description')品牌搜索页面@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
@stop
@section('main_content')
    <!--当前位置 开始-->
    <div class="path">当前位置： <a href="/">首页</a> >品牌搜索页面</div>
    <!--当前位置 结束-->
    <!--项目分类 开始-->
    <div class="cate_sort">
        <div class="cate_channel">
            <div class="hd">全部行业：</div>
            <div class="bd area_wrap">
                <ul>
                    <li @if(trim(Request::getrequesturi(),'/') == $thistypeinfo->real_path) class="hover" @endif><a href="/search/" class="">不限</a></li>
                    @foreach($topbrandtypeinfos as $topbrandtypeinfo)
                        <li><a href="/{{$topbrandtypeinfo->real_path}}/"  @if(trim(Request::getrequesturi(),'/') == $topbrandtypeinfo->real_path || $topbrandtypeinfo->real_path == $thistypeinforeid->real_path) class="hover" @endif>{{$topbrandtypeinfo->typename}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        @if($thistypeinforeid->real_path!='search')
            <div class="cate_channel">
                <div class="hd">{{$thistypeinforeid->typename}}：</div>
                <div class="bd area_wrap">
                    <ul>
                        @if(isset($thistypeinforeid))<li  @if(trim(Request::getrequesturi(),'/') == $thistypeinfo->real_path) class="hover" @endif><a href="/{{$thistypeinforeid->real_path}}/" class="">不限</a></li>@endif
                        @foreach($sontypes as $sontype)
                            <li><a href="/{{$sontype->real_path}}/"  @if(trim(Request::getrequesturi(),'/') == $sontype->real_path) class="hover" @endif >{{$sontype->typename}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="cate_channel">
            <div class="hd">投资金额：</div>
            <div class="bd ">
                <ul>
                    @foreach($type_investment_types as $investment_type)
                        @if(array_key_exists($investment_type->id,$investment_ids))<li><a href="/{{$thistypeinfo->real_path}}/{{$investment_type->url}}/">{{$investment_type->type}}</a> </li>@endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--项目分类 结束-->

    <div class="center_list">
        <!--左边模块 开始-->
        <div class="new_left">
            <div class="white_bg">
                <div class="item_tit">
                    <span class="info">共<i>{{$pagelists->total()}}</i>个匹配商家</span>
                </div>
                <div class="bd">
                    @foreach($pagelists as $pagelist)
                        <div class="item">
                            <div class="t_Logo">
                                <a href="/busInfo/{{$pagelist->id}}.html" title="{{$pagelist->brandname}}" target="_blank"><img src="{{$pagelist->litpic}}" alt="{{$pagelist->brandname}}" width="113" height="87"></a>
                                <span><a href="/busInfo/{{$pagelist->id}}.html" target="_blank">{{$pagelist->brandname}}</a></span>
                            </div>
                            <div class="content">
                                <div class="titBox">
                                    <h2><a href="/busInfo/{{$pagelist->id}}.html" target="_blank" title="{{$pagelist->brandname}}">{{$pagelist->brandname}}</a></h2>
                                </div>
                                <div class="info">
                                    <p>项目分类：<a href="/{{$thistypeinforeid->real_path}}/" target="_blank">{{$thistypeinforeid->typename}}</a> &gt; <a href="/{{$thistypeinfo->real_path}}/" target="_blank">{{$thistypeinfo->typename}}</a></p>
                                    <p>意向加盟：<em>{{$thistypeinfo->click}}</em></p>
                                    <p>人　　气：<span>{{$thistypeinfo->brandattch}}</span></p>
                                    <p>投资金额：<span class="price">{{$investment_types[$pagelist->tzid]}}</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--左边模块 结束-->
        <!-- 右侧 end -->
        <div class="context_right">
            <!-- 同类项目 start -->
            <div class="rightcon">
                <div class="context_title">
                    <span><a href="/{{$thistypeinfo->real_path}}/" target="_blank">更多&gt;&gt;</a></span>
                    <h2>{{$thistypeinfo->typename}}品牌排行榜</h2>
                </div>
                <ul class="right_company">
                    @foreach($paihangbangs as $index=>$paihangbang)
                        <li> <span class="ico  @if($index<3) num @endif ">{{$index+1}}</span> <span class="name"><a href="/busInfo/{{$paihangbang->id}}.html" target="_blank" title="{{$paihangbang->brandname}}">{{$paihangbang->brandname}}</a></span> <span class="invest">[{{$investment_types[$paihangbang->tzid]}}]</span> </li>
                    @endforeach
                </ul>
            </div>
            <div class="rightcon bd_commit2">
                <div class="context_title">
                    <h2>{{$thistypeinfo->typename}}品牌热点资讯</h2>
                </div>
                <div class="bd">
                    <ul>
                        @foreach($latestbrandnews as $latestbrandnew)
                            <li><a href="/news/{{$latestbrandnew->id}}.html" target="_blank" title="{{$latestbrandnew->title}}">{{$latestbrandnew->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="rightcon bd_commit ">
                <div class="context_title">
                    <h2 class="hd_tit">{{$thistypeinfo->typename}}最新入驻品牌</h2></div>
                <div class="bd_cont">
                    <ul>
                        @foreach($latestbrands as $latestbrand)
                            <li><a href="/busInfo/{{$latestbrand->id}}.html" target="_blank" ><div class="img"><img src="{{$latestbrand->litpic}}" width="120" height="90" alt="{{$latestbrand->brandname}}"/></div><span>{{$latestbrand->brandname}}</span></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
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
