@extends('admin.layouts.admin_app')
@section('title')关键词相关搜索 @stop
    @section('head')
    @stop
    @section('content')
            <!-- Main content -->
    <div class="error-page">

        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> 相关关键词搜索</h3>

            <p> 提供百度、搜狗、360、神马、必应相关关键词搜索.</p>

            <form class="search-form">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="输入需要查询的关键词">

                    <div class="input-group-btn">
                        <button type="submit" name="submit" class="btn btn-warning btn-flat" value="提交"><i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- /.input-group -->
            </form>

        </div>
        <!-- /.error-content -->
    </div>
<hr/>
    <div class="row">
        <ul class="list-group col-md-4">
            <li  class="list-group-item active"> 百度PC</li>
            @foreach($baiduinfos as $baiduinfo)
            <li  class="list-group-item"> {{$baiduinfo}}</li>
            @endforeach
        </ul>
        <ul class="list-group col-md-4">
            <li  class="list-group-item active"> 搜狗PC</li>
            @foreach($sogouinfos as $sogouinfo)
                <li  class="list-group-item"> {{$sogouinfo}}</li>
            @endforeach
        </ul>
        <ul class="list-group col-md-4">
            <li  class="list-group-item active"> 好搜PC</li>
            @foreach($haosoinfos as $haosoinfo)
                <li  class="list-group-item"> {{$haosoinfo}}</li>
            @endforeach
        </ul>
        <ul class="list-group col-md-4">
            <li  class="list-group-item active"> 神马移动</li>
            @foreach($msminfos as $msminfo)
                <li  class="list-group-item"> {{$msminfo}}</li>
            @endforeach
        </ul>
        <ul class="list-group col-md-4">
            <li  class="list-group-item active"> 百度移动</li>
            @foreach($mbdinfos as $mbdinfo)
                <li  class="list-group-item"> {{$mbdinfo}}</li>
            @endforeach
        </ul>
    </div>
    <!-- /.content -->


    @stop


