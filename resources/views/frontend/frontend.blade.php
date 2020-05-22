<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="{{config('app.url')}}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/frontend/css/style.css" rel="stylesheet" type="text/css" />
    @yield('headlibs')
</head>
<body>
<div class="header-bg">
    <div class="header">
        <h1>GOPROXY 高性能http,https,websocket,tcp,socks5代理服务</h1>
        <div class="navbar">
            <ul>
                <li><a class="now" href="/">主页</a></li>
                <li><a href="/introduce/">产品介绍</a></li>
                <li><a href="/download/">产品下载</a></li>
                <li><a href="/purchase/">商业授权</a></li>
                <li><a href="/guide/">使用指南</a></li>
                <li><a href="/contact/">联系我们</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="index-banner-bg">
    <div class="index-banner">
        <div class="swiper" style="background: #fff; width: 700px; height: 389px; margin-left: 101px; margin-top: 28px; float:left;">
            <img src="/frontend/images/ts.jpg" alt="" style="width: 100%;  overflow: hidden; border-radius: 1px;">
        </div>
       <div class="bannerright" style="float: right">
           <ul >
               <li class="banner-title">GOPROXY </li>
               <li class="banner-text">高性能代理 <i class="windowsicon"></i> <i class="macosicon"></i> <i class="linuxicon"></i> <i class="androidicon"></i> </li>
               <li class="banner-textp"><p>支持内网穿透<br>链式代理,通讯加密智能HTTP,SOCKS5代理</p></li>
           </ul>
           <div class="index-banner-right"><a href="/download/" class="button-banner green" title="Proxy Server Software Download"><img src="/frontend/images/arrow_down.gif" alt="">产品下载</a><a href="/purchase/" class="button-banner yellow" title="Purchase Proxy Server Software"><img src="/frontend/images/arrow_buy.gif" alt="">商业授权</a></div>
           <div class="facebook">
           </div>
       </div>

    </div>
</div>
@yield('main_content')
<div class="cl"></div>
<div id="main-bottom">
    <p class="h1f12">GoProxy  a high-performance http proxy, https proxy, socks5 proxy, ss proxy, websocket proxies, tcp proxies</p>
</div>
<script src="/frontend/js/jquery.min.js"></script>
<script>
    $(".solution-nav a").click(function () {
        $(".solution-item").hide().eq($(this).index()).show();
        $(this).addClass("sd-animated sd-fadeInRight active").siblings().removeClass("sd-animated sd-fadeInRight active");
    });
</script>
@yield('footlibs')
</body>
</html>
