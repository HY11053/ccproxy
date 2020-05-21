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
