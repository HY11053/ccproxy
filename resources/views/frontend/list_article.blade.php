@extends('frontend.frontend')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
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
        <!--top 开始-->
        <div class="nav_top">
            <ul>
                @foreach($toparticlenavs as $toparticlenav)
                    <li><a href="/newsPage/{{$toparticlenav->real_path}}/">{{$toparticlenav->typename}}</a></li>
                @endforeach
            </ul>
        </div>
        <!--top 结束-->
        <!--当前位置 开始-->
        <div class="path">当前位置：<a href="/">首页</a> > {{$thistypeinfo->typename}}</div>
        <!--当前位置 结束-->
        <div class="center_list">
            <!--左边模块 开始-->
            <div class="new_left">
                <!--资讯列表 开始-->
                <div class="list_new">
                    <div class="common_hd"><h2>安心创业</h2></div>
                    <div class="bd">
                        <ul>
                            @forelse($pagelists as $pagelist) @if($loop->index % 5 == 0)
                                <li>
                                    @endif
                                    <a href="{{$pagelist->url()}}">
                                        <span class="info">{{$pagelist->title}}</span>
                                        <span class="time">{{date('Y-m-d',strtotime($pagelist->created_at))}}</span>
                                    </a>
                                    @if($loop->iteration % 5 == 0)
                                </li>
                            @endif
                            @empty
                            @endforelse
                        </ul>
                    </div>

                    <!--分页 开始-->
                    <div class="page">
                        {!! str_replace(['cid=&amp;','cid=/'],'',str_replace('page=','p',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links())))) !!}
                    </div>
                    <!--分页 结束-->
                </div>
                <!--资讯列表 结束-->
            </div>
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
                        <h2>品牌热点资讯</h2>
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
                            @foreach($latestbrands as $latestbrand)
                                <li><a href="/busInfo/{{$latestbrand->id}}.html" target="_blank" ><div class="img"><img src="{{$latestbrand->litpic}}" width="120" height="90" alt="{{$latestbrand->brandname}}"/></div><span>{{$latestbrand->brandname}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 右侧 end -->
        </div>
@stop
