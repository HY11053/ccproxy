@extends('admin.layouts.admin_app')
@section('title') 文档发布汇总 @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">文档发布汇总</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover text-center">
                        <tr>
                            <th style="width: 10px">id</th>
                            <th>姓名</th>
                            <th>普通文档</th>
                            <th>品牌文档</th>
                            <th>今日总计</th>
                            <th>总计添加</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}.</td>
                                <td>{{$user->name}}</td>
                                <td>@if(\App\AdminModel\Archive::where('created_at','>',\Carbon\Carbon::today())->where('dutyadmin',$user->id)->count()) <strong style="color: red"> {{\App\AdminModel\Archive::where('created_at','>',\Carbon\Carbon::today())->where('dutyadmin',$user->id)->count()}} </strong>@endif </td>
                                <td>@if(\App\AdminModel\Brandarticle::where('created_at','>',\Carbon\Carbon::today())->where('dutyadmin',$user->id)->count()) <strong style="color: red">{{\App\AdminModel\Brandarticle::where('created_at','>',\Carbon\Carbon::today())->where('dutyadmin',$user->id)->count()}}</strong>@endif  </td>
                                <td>{{(\App\AdminModel\Archive::where('created_at','>',\Carbon\Carbon::today())->where('created_at','<',\Carbon\Carbon::tomorrow())->where('dutyadmin',$user->id)->count())+(\App\AdminModel\Brandarticle::where('created_at','>',\Carbon\Carbon::today())->where('created_at','<',\Carbon\Carbon::tomorrow())->where('dutyadmin',$user->id)->count())}} </td>
                                <td>{{(\App\AdminModel\Archive::where('created_at','>',\Carbon\Carbon::today())->where('dutyadmin',$user->id)->count())+(\App\AdminModel\Brandarticle::where('created_at','>',\Carbon\Carbon::today())->where('dutyadmin',$user->id)->count())}} </td>
                            </tr>
                            <tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">

                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop