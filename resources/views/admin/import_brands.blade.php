@extends('admin.layouts.admin_app')
@section('title')品牌数据导入@stop
@section('head')
@stop
@section('content')
    <h1 class="text-center">品牌数据导入</h1>
    <hr/>
    <div class="col-md-12">
        {{Form::open(array('route' => 'importbrands','method'=>'put'))}}
        <div class="form-group col-md-12">
            {{Form::select('type', $brandtypes, null,array('class'=>'form-control select2'))}}
        </div>
        <div class="col-md-12">
            <p class="timeline-header">数据导入区域 一条一行</p>
        </div>
        <div class="form-group col-md-12">
            <textarea class="form-control" name="content" rows="27"></textarea>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">提交数据</button>
        </div>
        {!! Form::close() !!}

    </div>
@stop
