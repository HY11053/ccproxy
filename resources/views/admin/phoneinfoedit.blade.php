@extends('admin.layouts.admin_app')
@section('title')电话提交管理编辑@stop
@section('head')
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')

            {!! Form::model($thisPhoneInfo,array('action' =>array('Admin\PhoneManageController@PhoneManageEdit', $thisPhoneInfo->id),'method' => 'put')) !!}
            <div class="form-group has-feedback">
                {{Form::text('name', null,array('class'=>'form-control','id'=>'name','disabled'=>'disabled','placeholder'=>'用户名'))}}
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::text('phoneno', null,array('class'=>'form-control','id'=>'phoneno','readonly'=>'readonly','placeholder'=>'电话号码'))}}
                <span class="glyphicon glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::text('gender', null,array('class'=>'form-control','id'=>'gender','readonly'=>'readonly','placeholder'=>'性别'))}}
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::text('address', null,array('class'=>'form-control','id'=>'address','placeholder'=>'地址'))}}
                <span class="glyphicon glyphicon glyphicon-globe form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::text('referer', null,array('class'=>'form-control','id'=>'referer', 'disabled'=>'disabled', 'placeholder'=>'来源'))}}
                <span class="glyphicon glyphicon glyphicon-globe form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::text('host', null,array('class'=>'form-control','id'=>'host', 'disabled'=>'disabled', 'placeholder'=>'提交页面'))}}
                <span class="glyphicon glyphicon glyphicon-globe form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::text('ip', null,array('class'=>'form-control','id'=>'host', 'disabled'=>'disabled', 'placeholder'=>'IP地址'))}}
                <span class="glyphicon glyphicon glyphicon-globe form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {{Form::textarea('note', null,array('class'=>'form-control','id'=>'note','readonly'=>'readonly','placeholder'=>'备注'))}}
                <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
            </div>

            <div class="row">
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

