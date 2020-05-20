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
    <script type="text/javascript" src="/frontend/js/main.js"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="/frontend/js/PNG_0.0.8a.js" ></script>
    <script type="text/javascript">   DD_belatedPNG.fix('.block,.border,.cabye,.edu,.ent,.try,.gands-ftitle,.try-top,img')  </script>
    <![endif]-->
    <script language="javascript" type="text/javascript" src="/frontend/js/jquery.min.js"></script>
    <script type="text/javascript" src="/frontend/js/jquery.magnifier.js"></script>
    @yield('headlibs')
</head>
<body>
@yield('main_content')

@yield('footlibs')
</body>
</html>
