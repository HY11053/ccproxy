@extends('admin.layouts.admin_app')
@section('title')品牌分类列表@stop
@section('head')
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;} </style>
    <link href="/adminlte/plugins/select2/select2.min.css" rel="stylesheet">
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">品牌分类列表 <span style="color: red">{{$datas->total()}}</span></h3>
                    {{Form::open(array('route' => 'pbrandlists','files' => false,'class'=>'form-inline pull-right','method'=>'get'))}}

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-location-arrow" style="width:10px;"></i>
                            </div>
                            {{Form::select('type', $brandtypes, null,array('class'=>'form-control select2 pull-right','style'=>'width: 150px;','data-placeholder'=>"品牌分类",'multiple'=>"multiple"))}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-line-chart" style="width:10px;"></i>
                            </div>
                            {{Form::select('status', [1=>'已使用',3=>'未使用'], null,array('class'=>'form-control select2  pull-right','style'=>'width: 100%','style'=>'width: 150px;','data-placeholder'=>"品牌状态",'multiple'=>"multiple"))}}

                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">筛选数据</button>
                    </form>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th style="text-align: left">品牌名称</th>
                            <th>店铺数量</th>
                            <th>是否发布</th>
                            <th>店面信息</th>
                            <th>操作</th>
                        </tr>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->id}}.</td>
                                <td style="text-align: left">{{$data->brand}}</td>
                                <td>{{$data->num}}</td>
                                <td style="text-align: center">
                                    @if($data->status==1)
                                        <span class="badge bg-green" style=" font-weight: normal;">已使用</span>
                                    @else
                                        <span class="badge bg-red" style="cursor: pointer; font-weight: normal;" id="status{{$data->id}}" onclick="statuschick('status{{$data->id}}',{{$data->id}})">未使用</span>
                                    @endif
                                </td>
                                <td><a href="{{$data->url}}" target="_blank">店面信息详情</a></td>
                                <td><a href="/admin/branddatas/del/{{$data->id}}">删除</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {!! $datas->appends($arguments)->links() !!}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->
    <!-- /.content -->
@stop

@section('libs')
    <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script src="/adminlte/plugins/select2/select2.full.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });
        $(function () {
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        });
        $('.select2').select2();
        function statuschick(element,id) {
            $.ajax({
                //提交数据的类型 POST GET
                type:"POST",
                //提交的网址
                url:"/admin/brandstatus/"+id,
                //提交的数据
                data:{"id":id},
                //返回数据的格式
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                success:function (response, stutas, xhr) {
                    //$(".modal-s-m"+id+" .modal-body").html(response);
                    $('#'+element).text(response);
                    $('#'+element).removeClass( "bg-red" );
                    $('#'+element).addClass( "bg-green" );

                }
            });
        }
    </script>
@stop