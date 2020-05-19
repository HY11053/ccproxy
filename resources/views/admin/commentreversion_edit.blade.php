@extends('admin.layouts.admin_app')
@section('title')评论提交审核@stop
@section('head')
    <link href="/adminlte/plugins/iCheck/all.css" rel="stylesheet">
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')

    {!! Form::model($thiscommentreversion,array('action' =>array('Admin\CommentReversionController@PostReversionEdit', $thiscommentreversion->id),'method' => 'put')) !!}
    <div class="form-group has-feedback">
        {{Form::text('archive_id', null,array('class'=>'form-control','disabled'=>'disabled','id'=>'name','placeholder'=>'文档id'))}}
        <span class="glyphicon glyphicon-minus form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        {{Form::text('updated_at', null,array('class'=>'form-control','id'=>'phoneno','disabled'=>'disabled','placeholder'=>'创建时间'))}}
        <span class="glyphicon glyphicon-time form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        {{Form::text('ip', null,array('class'=>'form-control','id'=>'gender','disabled'=>'disabled','placeholder'=>'IP地址'))}}
        <span class="glyphicon glyphicon-eye-open form-control-feedback"></span>
    </div>

    <div class="form-group basic_info has-feedback">
        {{Form::textarea('content', null,array('class'=>'form-control','id'=>'note','placeholder'=>'评论内容'))}}
        <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback " style="clear: both; margin-bottom: 15px; height: 25px;">
        <div class="col-sm-12 basic_info">
            {{Form::radio('is_hidden', '1', true,array('class'=>"flat-red"))}} 已审核
            {{Form::radio('is_hidden', '0',false,array('class'=>"flat-red"))}} 未审核
        </div>
    </div>
    <div class="row" style="clear: both">
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">提交</button>
        </div>
        <!-- /.col -->
    </div>
    {!! Form::close() !!}
    @if(count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <!-- /.register-box -->
    <!-- /.row -->
    <!-- /.content -->
@stop

@section('libs')
    <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {

            //iCheck for checkbox and radio inputs
            $('.basic_info input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('.basic_info input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('.basic_info input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        });
    </script>
@stop


