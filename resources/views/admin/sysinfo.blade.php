@extends('admin.layouts.admin_app')
@section('title')系统运行信息@stop
    @section('head')
    @stop
    @section('content')
        <div class="right_col" role="main">
            简介：LARSTYCMSV3.0 是基于laravel6.5框架开发的CMS系统
            <hr/>
            当前版本V2.0
            <hr/>
            运行环境信息：{{$_SERVER['SERVER_SOFTWARE']}}
            <hr/>
            数据库类型：{{env('DB_CONNECTION')}}
            <hr/>
            当前登录用户名：{{auth('admin')->user()->name}}
            <hr/>
            文章总数：{{\App\AdminModel\Archive::max('id')}}
            <hr/>
            问答总数：{{\App\AdminModel\Ask::max('id')}}
            <hr/>
            收录量：
            <hr/>
            当日收录：
            <hr/>

        </div>
    @stop
