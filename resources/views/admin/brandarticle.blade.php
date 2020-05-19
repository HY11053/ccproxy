@extends('admin.layouts.admin_app')
@section('title')网站文档列表@stop
@section('head')
    <link href="/adminlte/plugins/iCheck/all.css" rel="stylesheet">
    <link href="/adminlte/plugins/iCheck/flat/green.css" rel="stylesheet">
    <style>.red{color: red;}</style>
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">文档列表管理 文档总计{{$articles->total()}}</h3>
                    <div class="box-tools">
                        <div class="pull-right" style="display:inline-block; width: 220px">
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
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa  fa-check-circle"></i> 全选</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm  delete-event" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash-o"> 批量删除</i></button>
                            <button type="button" class="btn btn-default btn-sm  edittype-event"  data-toggle="modal" data-target="#modal-default2"><i class="fa  fa-paint-brush"></i> 批量更改分类</button>
                        </div>
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover">

                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>文章标题</th>
                            <th>栏目</th>
                            <th>创建时间</th>
                            <th>发布时间</th>
                            <th>发布人</th>
                            <th>点击</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td><input type="checkbox" name="articlecheck" value="{{$article->id}}"></td>
                                <td>{{$article->id}}</td>
                                <td>@if($article->ismake) {{$article->title}} @else <s class="red">{{$article->title}}</s> @endif @if($article->mid) <span class="fa fa-flag red"></span> @endif</td>
                                <td>{{$article->arctype->typename}}</td>
                                <td>@if(\Carbon\Carbon::now() > \Carbon\Carbon::parse($article->created_at)->addDays(7)) @if($article->ismake) {{$article->created_at}} @else 审核中 @endif @else @if($article->ismake) {{\Carbon\Carbon::parse($article->created_at)->diffForHumans()}} @else 审核中 @endif @endif </td>
                                <td>@if(\Carbon\Carbon::now() > \Carbon\Carbon::parse($article->published_at)->addDays(7)) @if($article->ismake) {{$article->published_at}} @else 审核中 @endif @else @if($article->ismake) {{\Carbon\Carbon::parse($article->published_at)->diffForHumans()}} @else 审核中 @endif @endif </td>
                                <td>{{$article->write}}</td>
                                <td>{{$article->click}}</td>
                                <td>@if($article->ismake) 已审核 @else <s class="red">未审核</s> @endif</td>
                                <td class="astyle"><span class="label label-success"><a href="/xm/{{$article->id}}.shtml" target="_blank">预览</a></span><span class="label label-warning"><a href="/admin/article/brandedit/{{$article->id}}">编辑</a></span><span class="label label-danger"><a data-toggle="modal" data-target=".modal-sm{{$article->id}}" >删除</a></span>
                                    <div class="modal fade modal-sm{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel{{$article->id}}">
                                        <div class="modal-dialog modal-sm modal-s-m{{$article->id}}" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h5 class="modal-title" id="mySmallModalLabel{{$article->id}}">是否要删除当前文章</h5>
                                                </div>
                                                <div class="modal-body">
                                                    {{$article->title}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">返回</button>
                                                    <button type="button" class="btn btn-primary" id="btn-{{$article->id}}" onclick="AjDelete({{$article->id}},'modal-s-m{{$article->id}}')">删除</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                    </div>
                        @if(isset($title))
                        {{ $articles->appends(['title' => $title])->links() }}
                    @else
                        {!! $articles->links() !!}
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">批量删除</h4>
                </div>
                <div class="modal-body">
                    <p>确定要删除选址的文档吗？此操作不可逆</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary pulldelete">确定</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="modal-default2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">批量修改分类</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {{Form::select('typeid', \App\AdminModel\Arctype::where('is_write',1)->where('mid',1)->pluck('typename','id'), null,array('class'=>'form-control select2','id'=>'typeid'))}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary pulledit">确定</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.content -->
@stop

@section('libs')
    <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            //Enable iCheck plugin for checkboxes
            //iCheck for checkbox and radio inputs
            $('.mailbox-messages input[type="checkbox"]').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });

            //Enable check and uncheck all functionality
            $(".checkbox-toggle").click(function () {
                var clicks = $(this).data('clicks');
                if (clicks) {
                    //Uncheck all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                    $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
                } else {
                    //Check all checkboxes
                    $(".mailbox-messages input[type='checkbox']").iCheck("check");
                    $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
                }
                $(this).data("clicks", !clicks);
            });

            //批量删除文档
            $(".delete-event").click(function (e) {
                e.preventDefault();
                var checkId=$("input[name='articlecheck']:checked");
                if (checkId.length>0){
                    $(".pulldelete").click(function () {
                        var arr = new Array();
                        $.each($("input[name='articlecheck']:checked"),function(){
                            arr.push($(this).val());
                        });
                        $("#modal-default .modal-body").html('删除中 请稍后');
                        $(".pulldelete").attr("disabled","disabled");
                        $.ajax({
                            //提交数据的类型 POST GET
                            type:"POST",
                            //提交的网址
                            url:"/admin/article/deletebrandarticles/",
                            //提交的数据
                            data:{"ids":JSON.stringify(arr)},
                            //返回数据的格式
                            datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                            success:function (response, stutas, xhr) {
                                $("#modal-default .modal-body").html(response+'跳转中，请稍后');
                                setInterval("startRequest()", 5000);
                            }
                        });
                    })
                } else {
                    alert('请至少选中一个文档')
                    return false;
                }

            });

            //批量修改文档分类
            $(".edittype-event").click(function (e) {
                e.preventDefault();
                var checkId=$("input[name='articlecheck']:checked");
                if (checkId.length>0){
                    $(".pulledit").click(function () {
                        var arr = new Array();
                        $.each($("input[name='articlecheck']:checked"),function(){
                            arr.push($(this).val());
                        });
                        var typeid=$('#typeid option:selected').val();
                        $("#modal-default2 .modal-body").html('修改中 请稍后');
                        $(".pulledit").attr("disabled","disabled");
                        $.ajax({
                            //提交数据的类型 POST GET
                            type:"POST",
                            //提交的网址
                            url:"/admin/article/edit_brandarticles_type/",
                            //提交的数据
                            data:{"ids":JSON.stringify(arr),"typeid":typeid},
                            //返回数据的格式
                            datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                            success:function (response, stutas, xhr) {
                                $("#modal-default2 .modal-body").html(response+'跳转中，请稍后');
                                setInterval("startRequest()", 5000);
                            }
                        });
                    })
                } else {
                    alert('请至少选中一个文档')
                    return false;
                }

            });
        });
        function startRequest() {
            window.location.reload()
        }
        function AjDelete (id,node) {
            var id = id;
            var node=node;
            $.ajax({
                //提交数据的类型 POST GET
                type:"POST",
                //提交的网址
                url:"/admin/article/branddelete/"+id,
                //提交的数据
                data:{"id":id,'node':node},
                //返回数据的格式
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                success:function (response, stutas, xhr) {
                    $(".modal-s-m"+id+" .modal-body").html(response);
                    $("#btn-"+id).attr("disabled","disabled");
                    setInterval("startRequest()", 10000);

                }
            });
        }
    </script>
@stop


