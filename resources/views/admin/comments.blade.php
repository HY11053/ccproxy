@extends('admin.layouts.admin_app')
@section('title')  评论列表@stop
@section('head')
    <link rel="stylesheet" href="/adminlte/plugins/switchery/switchery.css" />
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">问答列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th>文档ID</th>
                            <th>评论内容</th>
                            <th>创建时间</th>
                            <th>IP地址</th>
                            <th>审核状态</th>
                            <th>好评数</th>
                            <th>评论用户</th>
                            <th>操作</th>

                        </tr>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{$comment->id}}.</td>
                                <td>{{$comment->archive_id}}</td>
                                <td>{{str_limit(strip_tags($comment->content),30,'...')}}</td>
                                <td>{{$comment->created_at}}</td>
                                <td>{{$comment->ip}}</td>
                                <td>@if($comment->is_hidden) 已审核 @else 未审核 @endif</td>
                                <td>{{$comment->goodpost}}</td>
                                <td>{{$comment->user->name}}</td>
                                <td class="newcolor"><span class="badge bg-green"><a href="/admin/comment/edit/{{$comment->id}}">编辑</a></span> <span class="badge bg-red"><a href="/admin/comment/delete/{{$comment->id}}">删除</a> </span></td>

                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{--!! $comments->links() !!--}}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </div>

    <!-- /.row -->
    <!-- /.content -->
@stop

@section('libs')
    <script src="/adminlte/plugins/switchery/switchery.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

        });
        $(function () {
            $(".switchery").click(function () {

            })
        })
    </script>
    <script type="text/javascript">

        // Default
        // if-else statement used only for fixing <IE9 issues

        // Switch sizes
        var small = document.querySelector('.js-switch-small');
        var switchery = new Switchery(small, { size: 'small' });

        var large = document.querySelector('.js-switch-large');
        var switchery = new Switchery(large, { size: 'large' });

    </script>
@stop


