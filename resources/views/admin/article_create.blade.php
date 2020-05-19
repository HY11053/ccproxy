@extends('admin.layouts.admin_app')
@section('title')添加普通文档@stop
@section('head')
<link href="/adminlte/plugins/iCheck/all.css" rel="stylesheet">
<link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
<link href="/adminlte/plugins/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet">
@stop
@section('content')
        <!-- row -->
<div class="row">
    {{Form::open(array('route' => 'article_create','files' => true,))}}
    <div class="col-md-12">
        <!-- The time line -->
        <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                     {{date("M j, Y")}}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-pencil-square bg-blue"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('H:i')}}</span>

                    <h3 class="timeline-header"><a href="#">文章基本信息|</a> 按需填写</h3>

                    <div class="timeline-body basic_info">
                        <div class="form-group col-md-12" id="checktitle">
                            {{Form::label('title', '文章标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12 ">
                                {{Form::text('title', null, array('class' => 'form-control','id'=>'title','placeholder'=>'文章标题'))}}
                                <span class="help-block" style="display: none;"><i class="fa fa-bell-o"></i><em>标题已存在,请勿提交重复标题</em></span>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-2 col-sm-3 col-xs-12 control-label">自定义文档属性</label>
                            <div class="checkbox" style="margin-top: 0px;">
                                <label>
                                    {{Form::checkbox('flags[]', 'h',false,array('class'=>'flat-red'))}} 头条
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'p',false,array('class'=>'flat-red'))}} 图片
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'c',false,array('class'=>'flat-red'))}} 推荐
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'f',false,array('class'=>'flat-red'))}} 幻灯
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 's',false,array('class'=>'flat-red'))}} 滚动
                                </label>
                                <label>
                                    {{Form::checkbox('flags[]', 'a',false,array('class'=>'flat-red'))}} 特荐
                                </label>
                            </div>

                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('shorttitle', '简略标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('shorttitle',null, array('class' => 'form-control','id'=>'shorttitle','placeholder'=>'短标题'))}}
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            {{Form::label('tags', 'tag标签', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('tags', null, array('class' => 'form-control','id'=>'tags','placeholder'=>'文档tag标签'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('keywords', '关键字', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('keywords',null, array('class' => 'form-control','id'=>'keywords','placeholder'=>'文档关键词'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('bdname', '所属品牌', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::text('bdname',null, array('class' => 'form-control','id'=>'keywords','placeholder'=>'所属品牌'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12 ">
                            {{Form::label('typeid', '文章所属栏目', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-md-4">
                                {{Form::select('typeid', $allnavinfos, null,array('class'=>'form-control select2'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {{Form::label('description', '文档描述', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="col-md-4 col-sm-9 col-xs-12">
                                {{Form::textarea('description',null, array('class' => 'form-control col-md-10','id'=>'desrciption','rows'=>3,'placeholder'=>'不填写将自动提取首段'))}}
                            </div>
                        </div>
                        <div class="form-group col-md-12 ">
                            {{Form::label('ismake', '文章状态', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="radio col-md-4 col-sm-9 col-xs-12">
                                {{Form::radio('ismake', '1', true,array('class'=>'flat-red'))}} 已审核
                                {{Form::radio('ismake', '0', false,array('class'=>'flat-red'))}}未审核
                            </div>
                        </div>
                        <div class="form-group col-md-12 ">
                            {{Form::label('published_at', '预选发布时间', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                            <div class="input-group date  col-md-4 " style="padding-right: 15px; padding-left: 15px;">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                {{Form::text('published_at', \Carbon\Carbon::now(), array('class' => 'form-control pull-right','id'=>'datepicker','placeholder'=>'点击选择时间',"autocomplete"=>"off"))}}
                            </div>
                        </div>

                    </div>
                    <div class="timeline-footer">
                        <button class="btn btn-primary btn-xs">Read more</button>
                    </div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-photo bg-aqua"></i>
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('D M j')}}</span>
                    <h3 class="timeline-header no-border"><a href="#">缩略图处理</a> 图片上传</h3>
                    <div class="timeline-body">
                        {{Form::file('image', array('class' => 'file col-md-10','id'=>'input-2','data-show-upload'=>"false",'data-show-caption'=>"true",'accept'=>'image/*'))}}
                    </div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-user bg-yellow"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{Carbon\Carbon::now()}}</span>
                    <h3 class="timeline-header"><a href="#">产品信息</a> 产品信息描述</h3>
                    <div class="timeline-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                {{Form::label('brandname', '品牌名称', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandname',null, array('class' => 'form-control col-md-10','id'=>'brandname','disabled'=>'disabled','placeholder'=>'品牌名称'))}}
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                {{Form::label('brandtime', '成立时间', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandtime', null, array('class' => 'form-control col-md-10','id'=>'brandtime','disabled'=>'disabled','placeholder'=>'1970-1-1'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandorigin', '品牌发源地', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandorigin', null, array('class' => 'form-control col-md-10','id'=>'brandorigin','disabled'=>'disabled','placeholder'=>'品牌发源地'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandnum', '门店总数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandnum', null, array('class' => 'form-control col-md-10','id'=>'brandnum','disabled'=>'disabled','placeholder'=>'门店总数'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandpay', '加盟费用', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandpay', null, array('class' => 'form-control col-md-10','id'=>'brandpay','disabled'=>'disabled','placeholder'=>'加盟费用'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandarea', '加盟区域', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandarea', null, array('class' => 'form-control col-md-10','id'=>'brandarea','disabled'=>'disabled','placeholder'=>'加盟区域'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandmap', '经营范围', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandmap', null, array('class' => 'form-control col-md-10','id'=>'brandmap','disabled'=>'disabled','placeholder'=>'经营范围'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandperson', '加盟人群', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandperson', null, array('class' => 'form-control col-md-10','id'=>'brandmap','disabled'=>'disabled','placeholder'=>'加盟人群'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandattch', '加盟意向人数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandattch', null, array('class' => 'form-control col-md-10','id'=>'brandattch','disabled'=>'disabled','placeholder'=>'加盟意向人数'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandapply', '申请加盟人数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandapply', null, array('class' => 'form-control col-md-10','id'=>'brandapply','disabled'=>'disabled','placeholder'=>'申请加盟人数'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandchat', '项目咨询人数', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandchat', null, array('class' => 'form-control col-md-10','id'=>'brandchat','disabled'=>'disabled','placeholder'=>'项目咨询人数'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandgroup', '公司名称', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandgroup', null, array('class' => 'form-control col-md-10','id'=>'brandgroup','disabled'=>'disabled','placeholder'=>'公司名称'))}}
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                {{Form::label('brandaddr', '公司地址', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandaddr', null, array('class' => 'form-control col-md-10','id'=>'brandaddr','disabled'=>'disabled','placeholder'=>'公司地址'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                {{Form::label('brandduty', '是否区域授权', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    {{Form::text('brandduty', null, array('class' => 'form-control col-md-10','id'=>'brandduty','disabled'=>'disabled','placeholder'=>'是否区域授权'))}}
                                    {{Form::hidden('mid', '0', array('class' => 'form-control col-md-10','id'=>'mid'))}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                    </div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                   {{date("M j, Y")}}
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-camera bg-purple"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('j, n,y')}}</span>

                    <h3 class="timeline-header"><a href="#">图集处理</a> 批量上传图集</h3>

                    <div class="timeline-body">
                        {{Form::file('image', array('name'=>'input-image','class' => 'file-loading','id'=>'input-image-1','multiple','accept'=>'image/*'))}}
                        <div id="kv-success-modal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Yippee!</h4>
                                    </div>
                                    <div id="kv-success-box" class="modal-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{Form::hidden('imagepics', null,array('id'=>'imagepics'))}}
                    </div>
                </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
                <i class="fa fa-file-text bg-maroon"></i>

                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

                    <h3 class="timeline-header"><a href="#">文档处理</a>文章内容编辑</h3>

                    <div class="timeline-body">
                   @include('admin.layouts.ueditor')

                        <!-- 编辑器容器 -->
                        <script id="container" name="body" type="text/plain" ></script>
                        <!--<div style="display: none"><textarea  name="body" id="lawsContent"></textarea></div>-->
                    </div>
                    <div class="timeline-footer">
                        <button type="submit"  class="btn btn-md bg-maroon">提交文档</button>
                    </div>
                </div>
            </li>

            <!-- END timeline item -->
            <li>
                <i class="fa fa-clock-o bg-gray"></i>
            </li>
        </ul>

    </div>
    <!-- /.col -->
    {!! Form::close() !!}

</div>
        <button onsubmit="return false;" onclick="getLocalData ()" class="btn btn-md bg-green">恢复内容</button>
        @if(count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
<!-- /.row -->
<script>
    function getLocalData () {
        if(!ue.hasContents())
        {
            body=ue.execCommand( "getlocaldata" );
            ue.setContent(body);
        }
    }
</script>
@stop

@section('libs')
<!-- iCheck -->
<script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
<script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="/adminlte/plugins/datepicker/locales/bootstrap-datepicker.zh-CN.js"></script>
<script src="/adminlte/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
<script src="/adminlte/plugins/bootstrap-fileinput/js/locales/zh.js"></script>
<script>
    $(function () {
        $('#datepicker').datepicker({autoclose: true,language: 'zh-CN',todayHighlight: true });
        $('.basic_info input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({ checkboxClass: 'icheckbox_flat-green', radioClass: 'iradio_flat-green'});
        $("#input-image-1").fileinput({
            theme: 'fa',
            uploadUrl: "/admin/upload/images",
            allowedFileExtensions: ["jpg", "png", "gif",'jpeg'],
            maxImageWidth: 1000,
            minFileCount: 1,
            maxFileCount: 6,
            language: 'zh',
            overwriteInitial: false,
            resizeImage: true,
            initialPreviewAsData: true,
        }).on('fileuploaded', function(e, params) {
            $('#kv-success-box').html('上传成功！');
            $('#kv-success-modal').modal('show');
            $('.kv-file-remove').hide();
            $("#imagepics").val($("#imagepics").val()+params.response.link+',');
        });
    });
</script>

<script>
    $("#checktitle input").blur(function(){
        if ($("#checktitle input").val().length)
        {
            $.ajax(
                {type:"POST",url:"/admin/article/titlecheck",data:{"title":$("#checktitle input").val()},
                    datatype: "html",
                    success:function (response, stutas, xhr) {
                        if (response=='违禁词，不允许发布' || response==$("#checktitle input").val())
                        {
                            $("#checktitle").addClass('has-error');
                            $("#checktitle span em").html("品牌为违禁词或标题已存在，禁止发布");
                            $("#checktitle span").css("display","block");

                        }else {
                            $("#checktitle").removeClass('has-error').addClass('has-success');
                            $("#checktitle span").css("display","none");
                        }
                    }
                });
        }
    });
</script>
@stop

