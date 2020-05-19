@extends('admin.layouts.admin_app')
@section('title')品牌类型编辑@stop
@section('head')
@stop
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <b>品牌类型编辑</b>
        </div>
        <div class="register-box-body">
            <p class="login-box-msg">添加对应品牌类型信息</p>
            <form action="/admin/brandtype/edit/{{$thisbrandtype->id}}" method="post">
                {{csrf_field()}}
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="brandtype" placeholder="品牌类型名称" value="{{$thisbrandtype->brandtype}}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="brandname" placeholder="品牌类型别名" value="{{$thisbrandtype->brandname}}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">更改品牌分类</button>
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
