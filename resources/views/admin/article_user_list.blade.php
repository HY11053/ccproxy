@extends('admin.layouts.admin_app')
@section('title')文档发布筛选 @stop
@section('position') <li class="active">文档发布筛选</li> @stop
@section('head')
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
    <link href="/adminlte/plugins/select2/select2.min.css" rel="stylesheet">
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">文档发布筛选 总计{{$articles->total()}}</h3>
                        {{Form::open(array('route' => 'admin_articles','files' => false,'class'=>'form-inline pull-right','method'=>'get'))}}
                        <div class="form-group">
                            <div class="input-group date " >
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar" style="width:10px;"></i>
                                </div>
                                {{Form::text('start_at', null, array('class' => 'form-control pull-right','id'=>'datepicker','placeholder'=>'开始时间', 'autocomplete'=>"off",'style'=>'width:100%'))}}
                            </div>
                        </div>
                        <div class="input-group date " >
                            <div class="input-group-addon">
                                <i class="fa fa-calendar" style="width:10px;"></i>
                            </div>
                            {{Form::text('end_at', null, array('class' => 'form-control pull-right','id'=>'datepicker1','placeholder'=>'结束时间','autocomplete'=>"off",'style'=>'width:100%'))}}
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-location-arrow" style="width:10px;"></i>
                                </div>
                                {{Form::select('advertisement', ['普通文档','品牌文档'], null,array('class'=>'form-control select2 pull-right','style'=>'width: 150px;','data-placeholder'=>"文章类型",'multiple'=>"multiple"))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user" style="width:10px;"></i>
                                </div>
                                {{Form::select('name', $users, null,array('class'=>'form-control select2  pull-right','style'=>'width: 100%','style'=>'width: 150px;','data-placeholder'=>"修改人员",'multiple'=>"multiple"))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-edit" style="width:10px;"></i>
                                </div>
                                {{Form::select('write', $users, null,array('class'=>'form-control select2  pull-right','style'=>'width: 100%','style'=>'width: 150px;','data-placeholder'=>"发布人员",'multiple'=>"multiple"))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-line-chart" style="width:10px;"></i>
                                </div>
                                {{Form::select('ismake', [1=>'已审核',2=>'未审核',3=>'已修改',4=>'未修改'], null,array('class'=>'form-control select2  pull-right','style'=>'width: 100%','style'=>'width: 150px;','data-placeholder'=>"文档状态",'multiple'=>"multiple"))}}

                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">筛选数据</button>
                    </form>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th>标题</th>
                            <th>栏目</th>
                            <th>发布时间</th>
                            <th>发布人</th>
                            <th>点击</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}@if($article->mid==1) <span class="fa fa-flag" style="color: red"></span> @elseif($article->mid==2) <span class="fa fa-product-hunt"></span>@endif</td>
                                <td>{{\App\AdminModel\Arctype::where('id',$article->typeid)->value('typename')}}</td>
                                <td>{{$article->created_at}}</td>
                                <td>@if($article->editor) {{$article->editor}} @else {{$article->write}} @endif</td>
                                <td>{{$article->click}}</td>
                                <td>@if($article->ismake) 已审核 @else 未审核 @endif</td>
                              @if($article->mid==0)
                                    <td class="astyle"><span class="label label-success"><a href="/news/{{$article->id}}.shtml" target="_blank">预览</a></span><span class="label label-warning"></span></td>
                                @elseif($article->mid==1)
                                    <td class="astyle"><span class="label label-success"><a href="/xm/{{$article->id}}.shtml" target="_blank">预览</a></span><span class="label label-warning"></span></td>
                                @endif
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {!! $articles->appends($arguments)->links() !!}
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
    <script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="/adminlte/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js"></script>
    <script src="/adminlte/plugins/select2/select2.full.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
        $('.select2').select2();
        $(function () {
            $('#datepicker,#datepicker1').datepicker({
                autoclose: true,
                language: 'zh-CN',
                todayHighlight: true
            });
        });
    </script>
@stop