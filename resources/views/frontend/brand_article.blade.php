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
    <meta property="article:author" content="{{config('app.name')}}" />
    <meta property="article:published_first" content="{{config('app.name')}}, {{config('app.url')}}{{Request::getrequesturi()}}" />
@stop
@section('main_content')
    <!--当前位置 开始-->
    <div class="path">当前位置：<a href="/">首页</a> > <a href="/{{$thisbrandtypecidinfo->real_path}}/">{{$thisbrandtypecidinfo->typename}}</a> > <a href="/{{$thisbrandtypeinfo->real_path}}/">{{$thisbrandtypeinfo->typename}}</a> > {{$thisarticleinfos->brandname}}</div>
    <!--当前位置 结束-->
    <!--main_strat-->
    <div class="c_bar_wrap">
        <div class="c_bar" id="c_bar">
            <ul>
                @foreach($navlists as $index=>$navlist)
                    @if(!$loop->last)
                        <li class="js_join"><a href="javaScript:void(0)" rel="nofollow">{{$navlist}}</a></li>
                    @else
                        <li  class="noactive"><a href="#msg" rel="nofollow">在线留言</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <div class="basic">
        <div class="show_img smallslider">
            <div class="hd">
                <ul>
                    <li  class="on" >1</li>
                    <li >2</li>
                    <li >3</li>
                </ul>
            </div>
            <div class="bd">
                <ul>
                    @foreach(explode(',',trim($thisarticleinfos->imagepics,',')) as $imagepic)
                     <li><img src="https://www.anxjm.com{{$imagepic}}" title="{{$thisarticleinfos->brandname}}" alt="{{$thisarticleinfos->brandname}}"></li>
                    @endforeach
                </ul>
            </div>

        </div>
        <div class="c_basic">
            <div class="context_title">
                <h1>{{$thisarticleinfos->brandname}}</h1>
                <div class="c_line">
                    <div class="cl"></div>
                </div>
            </div>
            <div class="c_info">
                <ul>
                    <li>
                        <b>投资金额：</b>
                        <a href="/search?invest=3" target="_blank">
                            <span class="money">{{$investment_types[$thisarticleinfos->tzid]}}</span>
                        </a>
                    </li>
                    <li class="ls">
                        <b>所属行业：</b>
                        <span class="fl"><a href="/{{$thisbrandtypecidinfo->real_path}}/" target="_blank">{{$thisbrandtypecidinfo->typename}}</a> &gt;<a href="/{{$thisbrandtypeinfo->real_path}}/" target="_blank">{{$thisbrandtypeinfo->typename}}</a></span>
                    </li>
                    <li  class="fline">
                        <b>企业名称：</b>
                        <span>{{$thisarticleinfos->brandgroup}}</span>
                    </li>
                    <li class="fline">
                        <b>更新时间：</b>
                        <span>{{$thisarticleinfos->created_at}}</span>
                    </li>
                    <li  class="fline">
                        <b>门店总数：</b>
                        <span>{{$thisarticleinfos->brandnum}}</span>
                    </li>
                    <li  class="fline">
                        <b>意向加盟：</b>
                        <span>{{$thisarticleinfos->brandgroup}}</span>
                    </li>
                    <li  class="fline">
                        <b>申请加盟：</b>
                        <span>{{$thisarticleinfos->brandattch}}</span>
                    </li>
                    <li  class="fline">
                        <b>加盟人群：</b>
                        <span>{{$thisarticleinfos->brandperson}}</span>
                    </li>
                    <li  class="fline">
                        <b>所在地区：</b>
                        <span>{{$thisarticleinfos->brandcountry}}</span>
                    </li>
                    <li class="fline">
                        <b>经营模式：</b>
                        <span>{{$thisarticleinfos->brandmoshi}}</span>
                    </li>
                    <li class="fline">
                        <b>发展模式：</b>
                        <span>{{$thisarticleinfos->branddevelop}}</span>
                    </li>
                    <li class="clear">
                        <b>总部地址：</b>
                        <strong>{{$thisarticleinfos->brandaddr}}</strong>
                    </li>
                    <li class="btn">
                        <a href="javaScript:void(0)" class="js_join_6 btn_ly" title="留言咨询">留言咨询</a>
                        <a href="javaScript:void(0)" class="js_join_6 btn_zl" title="获取资料">获取资料</a>
                    </li>
                </ul>
            </div>
            <div class="tel">
                <p>项目咨询热线</p>
                <p class="num">400-885-8878</p>
            </div>
        </div>
        <div class="c_logo">
            <div class="bd">
                <img src="{{$thisarticleinfos->litpic}}" title="{{$thisarticleinfos->brandname}}" alt="{{$thisarticleinfos->brandname}}" class="cl_logo" />
                <ul>
                    <li>意向加盟
                        <span>{{$thisarticleinfos->brandattch}}</span>
                    </li>
                    <li>申请加盟
                        <span>{{$thisarticleinfos->brandapply}}</span>
                    </li>
                    <li>
                        <a onclick="AddFavorite(window.location,document.title)" href="javascript:void(0)">收藏该项目</a>
                        <span>{{$thisarticleinfos->brandclick}}</span>
                    </li>
                </ul>
            </div>
            <div class="renZ_info">
                <ul>
                    <li>
                        <span class="beian1"></span>
                        <em>开店指导</em>
                    </li>
                    <li>

                        <span class="renzheng1"></span>
                        <em>店铺选址</em>
                    </li>
                    <li>
                        <span class="baozhang1"></span>
                        <em>经营技巧</em>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="company_context">
        <!-- 左侧 start -->

        <div class="context_left">
            <div class="body_tit">
                {!! $content !!}
            </div>
            <div class="c_line2"></div>
            @include('frontend.liuyan')
            <!-- 相关文章 start -->
            <div class="context_title">
                <div style="font-weight:bold;font-size: 20px; height: 40px;line-height: 40px;color: #D71318;">{{$thisarticleinfos->brandname}}相关文章</div>
                <div class="c_line">
                    <div class="cl"></div>
                </div>
            </div>
            <div class="company_contact">
                <div class="rela_news nb">
                    <ul>
                        @foreach($latestbrandnews as $latestbrandnew)
                        <li><a href="/news/{{$latestbrandnew->id}}.html" target="_blank" title="{{$latestbrandnew->title}}">{{$latestbrandnew->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="c_line2"></div>
            <!-- 相关文章 end -->
            <div class="tujian_brand">
                <div class="common_tit">
                    <h2>{{$thisbrandtypeinfo->typename}}推荐品牌</h2></div>
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
            <!-- 添加留言 end -->
        </div>
        <!-- 右侧 end -->
        <div class="context_right">
            <!-- 同类项目 start -->
            <div class="rightcon">
                <div class="context_title">
                    <h2>{{$thisbrandtypeinfo->typename}}品牌排行榜</h2>
                </div>
                <ul class="right_company">
                    @foreach($paihangbangs as $index=>$paihangbang)
                        <li> <span class="ico  @if($index<3) num @endif ">{{$index+1}}</span> <span class="name"><a href="/busInfo/{{$paihangbang->id}}.html" target="_blank" title="{{$paihangbang->brandname}}">{{$paihangbang->brandname}}</a></span> <span class="invest">[{{$investment_types[$paihangbang->tzid]}}]</span> </li>
                    @endforeach
                </ul>
            </div>
            <div class="rightcon bd_commit2">
                <div class="context_title">
                    <span><a href="https://www.anxjm.com/ms/" target="_blank">更多&gt;&gt;</a></span>
                    <h2>{{$thisbrandtypeinfo->typename}}热点资讯</h2>
                </div>
                <div class="bd">
                    <ul>
                        @foreach($latesttypenews as $latesttypenew)
                            <li><a href="https://www.anxjm.com/news/{{$latesttypenew->id}}.html" target="_blank" title="{{$latesttypenew->title}}">{{$latesttypenew->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
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

        <p class="clr"></p>
    </div>

    <!--main_end-->
@stop
@section('footlibs')
    <script>
        $("#c_bar ul li.js_join").each(function(i){
            $(this).click(
                function () {
                    var sTop=$(".context_left").find("h2:eq("+i+")").offset().top-45;
                    $('html,body').animate({scrollTop:sTop+"px"},500);
                }
            );
        });
    </script>
@stop