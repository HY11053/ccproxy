<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
        <h1>GOPROXY 一个高性能，军用级安全的HTTP(S)、SOCKS5、TCP、UDP、SS、DNS代理服务。</h1>
        <div class="navbar">
            <ul>
                <li><a  @if(Request::getrequesturi() =='/') class="now"  @endif href="/">主页</a></li>
                <li><a @if(Request::getrequesturi() =='/introduce') class="now"  @endif  href="/introduce">产品介绍</a></li>
                <li><a @if(Request::getrequesturi() =='/download') class="now"  @endif  href="/download">下载使用</a></li>
                <li><a @if(Request::getrequesturi() =='/vs') class="now"  @endif  href="/vs">功能对比</a></li>
                <li><a @if(Request::getrequesturi() =='/guide') class="now"  @endif  href="/guide">使用手册</a></li>
                <li><a @if(Request::getrequesturi() =='/contact') class="now"  @endif  href="/contact">联系我们</a></li>
            </ul>
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
