@extends('admin.layouts.admin_app')
@section('title')电话提交列表@stop
@section('head')
    <style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
    <link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
    <link href="/adminlte/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="/adminlte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
@stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">电话提交列表</h3>
                    {{Form::open(array('route' => 'phone_filter','files' => false,'class'=>'form-inline pull-right','method'=>'get'))}}
                    <div class="form-group">
                        <div class="input-group date " >
                            <div class="input-group-addon">
                                <i class="fa fa-calendar" style="width:10px;"></i>
                            </div>
                            {{Form::text('start_at', null, array('class' => 'form-control pull-right','id'=>'datepicker','placeholder'=>'开始时间','autocomplete'=>"off",'style'=>'width:100%'))}}
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
                            {{Form::select('advertisement', ['jjedu.com.cn'=>'jjedu.com.cn'], null,array('class'=>'form-control select2 pull-right','style'=>'width: 200px;','data-placeholder'=>"筛选域名",'multiple'=>"multiple"))}}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">筛选数据</button>
                    {!! Form::close() !!}
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped  table-hover dataTable">
                        <thead>
                        <tr role="row">
                            <th style="width: 10px">#ID</th>
                            <th>品牌名称</th>
                            <th>提交链接</th>
                            <th>留电数量</th>
                        </tr>
                        </thead>
                        @foreach($phoneNos as $phoneNo)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    @php
                                        preg_match('#\/news\/(\d+)\.shtml#',$phoneNo->host,$matches);
                                        if (isset($matches[1]))
                                        {
                                        $thisartcileinfos=\App\AdminModel\Archive::where('id',$matches[1])->first(['id','brandid','created_at','typeid']);
                                        if (!empty($thisartcileinfos)){
                                            $thisbrandartcileinfos=\App\AdminModel\Brandarticle::where('id',$thisartcileinfos->brandid)->first(['id','brandname','typeid']);
                                        }else{
                                        $thisbrandartcileinfos='';
                                        }
                                        if (isset($thisartcileinfos->brandid) && isset($thisbrandartcileinfos->brandname))
                                        {
                                         $brand=$thisbrandartcileinfos->brandname;
                                         $type=$thisbrandartcileinfos->arctype->typename;
                                        }elseif(isset($thisartcileinfos->bdname) && $thisartcileinfos->bdname){
                                         $brand=$thisartcileinfos->bdname;
                                         $type='暂未分类';
                                        }else{
                                        $brand='暂未分类';
                                         $type='暂未分类';
                                        }
                                        $isnew=\App\AdminModel\Archive::where('id',$matches[1])->value('created_at')>\Carbon\Carbon::now()->subMonth()?'<i class="fa  fa-fire"></i>':'';
                                        }else{
                                            preg_match('#\/xm\/(\d+)\.shtml#',$phoneNo->host,$matches);
                                            if (isset($matches[1])){
                                                $brand=\App\AdminModel\Brandarticle::where('id',$matches[1])->value('brandname');
                                                if(empty($brand))
                                                {
                                                $brand='品牌已删除';
                                                 $type='';
                                                 $isnew='';
                                                }else{
                                                $brandarticle=\App\AdminModel\Brandarticle::where('id',$matches[1])->first();
                                                $isnew=\App\AdminModel\Brandarticle::where('id',$matches[1])->value('created_at')>\Carbon\Carbon::now()->subMonth()?'<i class="fa  fa-fire"></i>':'';
                                                $type=$brandarticle->arctype->typename;
                                                }
                                            }else{
                                            $brand='暂未分类';
                                            $type='';
                                            $isnew='';
                                            }
                                        }
                                    echo '<span style="color:red;">'.$isnew.'</span>'.$brand.'——<strong style="color:red;">'.$type.'</strong>';
                                    @endphp
                                </td>
                                <td><a href="{{$phoneNo->host}}" target="_blank">{{$phoneNo->host}}</a></td>
                                <td>{{$phoneNo->host_count}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {!! $phoneNos->links() !!}
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
