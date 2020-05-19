@extends('admin.layouts.admin_app')
@section('title')微信关注用户列表
@stop
@section('head')
<style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">微信关注用户列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th>头像</th>
                            <th>昵称</th>
                            <th>关注时间</th>
                            <th>关注状态</th>
                            <th>性别</th>
                            <th>语言版本</th>
                            <th>国家</th>
                            <th>省份</th>
                            <th>城市</th>
                            <th>分组</th>
                            <th>操作</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><img src="{{$user->headimgurl}}" style="width: 50px; height: 50px; border-radius: 50%" /></td>
                            <td>@if(base64_decode($user->nickname)){{base64_decode($user->nickname)}} @else {{$user->nickname}} @endif</td>
                            <td>{{date('Y-m-d H:i:s',$user->subscribe_time)}}</td>
                            <td>@if($user->subscribe==1) 已关注 @endif</td>
                            <td>@if($user->sex==1) 男 @else 女 @endif</td>
                            <td>{{$user->language}}</td>
                            <td>{{$user->country}}</td>
                            <td>{{$user->province}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->groupid}}</td>
                             <td class="newcolor"><span class="badge bg-green"><a href="/admin/user/edit/{{$userlist->id}}">编辑</a></span></td>

                        </tr>
                       @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $users->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->
    <!-- /.content -->
@stop


