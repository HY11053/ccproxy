@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <link rel="stylesheet" href="/frontend/css/lists.css">
    <link rel="stylesheet" href="/frontend/css/d.css">
@stop
@section('main_content')
    @include('frontend.header')
    <div class="top-nav-bar-wrap">
        <div id="nav_bar" class="index-module navBar">
            <div class="top-nav">
                <a href="#super">联系我们</a>
            </div>
        </div>
    </div>
    <div class="index-module">
        <div class="solution-super-contant help-contant">
            <div class="content">
                <h2>联系方式：</h2>
            </div>
        </div>
    </div>
@stop
