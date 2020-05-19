@extends('admin.layouts.admin_app')
@section('title')违禁品牌词编辑@stop
@section('head')
@stop
@section('content')
    <h1 class="text-center">违禁品牌词编辑</h1>
    <hr/>
    <div class="col-md-12">
        {{Form::open(array('route' => 'edit_guarded_keywords','method'=>'post'))}}
        <div class="col-md-8 col-md-offset-2">
            <p class="timeline-header">违禁词列表 按行分割</p>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <textarea class="form-control" name="contents" rows="15">{{$keywords}}</textarea>
        </div>
        <hr>
        <div class="col-md-8 col-md-offset-2">
            <button type="submit" class="btn btn-primary">提交数据</button>
        </div>
        {!! Form::close() !!}
    </div>
@stop
