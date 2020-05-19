@extends('admin.layouts.admin_app')
@section('title')网站文档列表@stop
@section('head')
    <style>.red{color: red;}</style>
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">文档列表管理 文档总计{{$articles->total()}}</h3>
                    <div class="box-tools">
                        <div class="pull-right" style="display:inline-block; width: 210px">
                            <a href="{{action('Admin\ArticleController@Create')}}" style="color: #ffffff ; display: inline-block; padding-left: 3px;"><button  class="btn btn-sm btn-default bg-blue"><i class="fa  fa-pencil-square" style="padding-right: 3px;"></i>添加文档</button></a>
                            <a href="{{action('Admin\ArticleController@BrandCreate')}}" style="color: #ffffff; display: inline-block; padding-left: 3px;"><button  class="btn btn-sm btn-default bg-purple"><i class="fa  fa-pencil-square-o" style="padding-right: 3px;"></i>添加品牌文档</button></a>
                        </div>
                        <form action="/admin/brand_search" method="post" class="form-group pull-right col-md-2 col-xs-6">
                            <div class="input-group input-group-sm ">
                                <input type="text" name="title" class="form-control pull-right" placeholder="品牌搜索">
                                {{csrf_field()}}
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>文章标题</th>
                            <th>栏目</th>
                            <th>发布时间</th>
                            <th>点击</th>
                            <th>状态</th>
                            <th>领取人</th>
                            <th>操作</th>
                        </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>@if($article->ismake) {{$article->title}} @else <s class="red">{{$article->title}}</s> @endif </td>
                                <td>{{$article->arctype->typename}}</td>
                                <td>{{$article->created_at}}</td>
                                <td>{{$article->click}}</td>
                                <td>@if($article->editor_id) 已领取 @else <span id="update_{{$article->id}}" class="red" style="text-decoration:line-through">未领取</span> @endif</td>
                                <td><span id="update_n{{$article->id}}">@if($article->editor){{$article->editor}} @else 暂无领取 @endif</span></td>
                                @if(!$article->editor_id)
                                <td class="astyle"><span class="label label-success"><a href="/news/{{$article->id}}.shtml" target="_blank">预览</a></span><span class="label label-warning"><a href="/admin/article/brandedit/{{$article->id}}">编辑</a></span><span class="label label-danger" style="cursor: pointer" id="btn_{{$article->id}}" onclick="updateReceive({{$article->id}})">未领取</span>
                                @else
                                <td class="astyle"><span class="label label-success"><a href="/news/{{$article->id}}.shtml" target="_blank">预览</a></span><span class="label label-warning"><a href="/admin/article/brandedit/{{$article->id}}">编辑</a></span><span class="label label-success">已领取</span>
                                @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $articles->links() !!}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    <!-- /.content -->
@stop
@section('libs')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });
        function updateReceive (id,node) {
            $.ajax({
                type:"POST",
                url:"/admin/article/updatereceive/"+id,
                data:{"id":id},
                datatype: "html",
                success:function (response, stutas, xhr) {
                    alert(response+'！！！请及时认真完善品牌信息 谢谢');
                    $("#btn_"+id).attr("disabled","disabled");
                    $("#btn_"+id).text("已领取").removeClass('label-danger').addClass('label-success').removeAttr("onclick");
                    $("#update_"+id).text("已领取").removeAttr("style").removeClass('red').addClass('green');
                    $("#update_n"+id).text(response[0]);
                }
            });
        }
    </script>
@stop


