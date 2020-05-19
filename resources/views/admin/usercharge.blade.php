@extends('admin.layouts.admin_app')
@section('title')会员积分充值@stop
@section('head')
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;} .register-box{width: 450px;}</style>
@stop
@section('content')

    <div class="register-box">
        <div class="register-box-body">
            <p class="login-box-msg">会员积分充值</p>
            {!! Form::open(array('action' =>array('Admin\FrontUserController@PostUserCharge'),'method' => 'put')) !!}
            <div class="form-group has-feedback">
                <div class="input-group">
                    <div class="input-group-addon" style="background-color: #e9ecef;">充值账号</div>
                    {{Form::select('user', $users, null,array('class'=>'form-control select2'))}}
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user form-control-feedback"  style="padding-left: 10px;"></span></div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="input-group">
                    <div class="input-group-addon" style="background-color: #e9ecef; color: #a180da">充值金额</div>
                    {{Form::text('score',null, array('class' => 'form-control','id'=>'score','placeholder'=>'请输入充值金额'))}}
                    <div class="input-group-addon"><span class="glyphicon glyphicon-jpy form-control-feedback" style="padding-left: 10px;"></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">充值</button>
                </div>
            </div>
            {!! Form::close() !!}
            @if(count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
    <!-- /.row -->
    <!-- /.content -->
@stop

