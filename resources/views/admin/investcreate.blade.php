@extends('admin.layouts.admin_app')
@section('title')投资分类添加@stop
@section('head')
@stop
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <b>投资分类添加</b>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">添加对应投资分类信息</p>

            <form action="/admin/investmentcreate" method="post">
                {{csrf_field()}}
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="type" placeholder="投资金额">
                    <span class="glyphicon glyphicon-usd form-control-feedback"></span>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">添加投资分类</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div>
    @if(count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <!-- /.register-box -->
@stop
