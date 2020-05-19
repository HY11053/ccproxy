<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <title>@yield('title') | LRASTYCMS </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/adminlte/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/adminlte/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/adminlte/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/skins/overwrite.min.css">
    <link rel="stylesheet" href="/adminlte/plugins/jquery-toast-plugin/dist/jquery.toast.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('admin.layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.layouts.man_sidebar')
    <!-- Content Wrapper. Contains page content -->
    @include('admin.layouts.content_wrapper')
    <!-- /.content-wrapper -->
    @include('admin.layouts.footer')
    @include('admin.layouts.control_sidebar')
</div>
<script src="/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/adminlte/bootstrap/js/bootstrap.min.js"></script>
<script src="/adminlte/plugins/fastclick/fastclick.js"></script>
<script src="/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/adminlte/dist/js/app.min.js"></script>
<script src="/adminlte/dist/js/demo.js"></script>
<script src="/adminlte/plugins/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.toast({
            heading: '通用提示信息',
            text: [
                '为保证后台功能的正常使用',
                '和获得最佳的浏览体验',
                '推荐使用chrome浏览器',
                '请勿使用IE9以下内核版本的浏览器'
            ],
            icon: 'info',
            loader: true,        // Change it to false to disable loader
            loaderBg: '#9EC600' , // To change the background
            position: 'bottom-right',
            hideAfter: 15000,
        })
    })

</script>
@yield('libs')
</body>
</html>