@extends('admin.layouts.admin_app')
@section('title') 网站栏目管理_添加栏目 @stop
    @section('head')
    <link href="/adminlte/plugins/iCheck/all.css" rel="stylesheet">
    <link href="/adminlte/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/adminlte/dist/css/fileinput.min.css" rel="stylesheet">
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab">常规选项</a></li>
                    <li><a href="#timeline" data-toggle="tab">高级选项</a></li>
                    <li><a href="#activity" data-toggle="tab">栏目内容</a></li>
                </ul>
                {{Form::open(array('route' => 'category_create','files' => true,'class'=>"form-horizontal"))}}
                <div class="tab-content">
                    <div class="active tab-pane" id="settings">
                        <div style="margin-bottom: 15px;"></div>

                        <div class="form-group">
                         {{Form::label('typename', '栏目名称', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('typename', null, array('class' => 'form-control','id'=>'typename','placeholder'=>'栏目名称'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('typedir', '栏目路径', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('typedir', null, array('class' => 'form-control','id'=>'typedir','placeholder'=>'栏目路径'))}}
                            </div>
                        </div>
                        @if($id!=0)
                        <div class="form-group">
                            {{Form::label('selectd', '父级栏目', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::select('selectd', $allnavinfos, "$thisnavinfos->id",array('class'=>'form-control select2','style'=>'width: 100%'))}}
                            </div>
                            {{Form::hidden('topid', "$topid",array('id'=>'topid'))}}
                            {{Form::hidden('reid', "$thisnavinfos->id",array('id'=>'topid'))}}
                        </div>
                        @endif

                        <div class="form-group  ">
                            {{Form::label('dirposition', '目录相对位置', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5 basic_info">
                                {{Form::radio('dirposition', '1', true,array('class'=>"flat-red"))}} 站点根目录
                                {{Form::radio('dirposition', '0',false,array('class'=>"flat-red"))}} 上级目录
                            </div>
                        </div>


                        <div class="form-group">
                            {{Form::label('sortrank', '栏目排序', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('sortrank', '', array('class' => 'form-control','id'=>'sortrank','placeholder'=>'栏目排序'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('description', '栏目描述', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::textarea('description', '', array('class' => 'form-control','id'=>'description','placeholder'=>'栏目描述','cols'=>'','rows'=>''))}}

                            </div>
                        </div>

                        <div class="form-group  ">
                            {{Form::label('mid', '栏目类型', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5 basic_info">
                                {{Form::radio('mid', '1', true,array('class'=>"flat-red"))}} 品牌类型
                                {{Form::radio('mid', '0',false,array('class'=>"flat-red"))}} 普通文章
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('title', '栏目标题', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('title', '', array('class' => 'form-control','id'=>'title','placeholder'=>'栏目标题'))}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('keywords', '栏目关键字', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5">
                                {{Form::text('keywords', '', array('class' => 'form-control','id'=>'keywords','placeholder'=>'栏目关键字'))}}
                            </div>
                        </div>

                        <div class="form-group  ">
                            {{Form::label('is_write', '是否允许发布文档', array('class' => 'col-sm-2 control-label'))}}
                            <div class="col-sm-5 basic_info">
                                {{Form::radio('is_write', '1', true,array('class'=>"flat-red"))}} 允许
                                {{Form::radio('is_write', '0',false,array('class'=>"flat-red"))}} 不允许
                            </div>
                        </div>

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->

                        <ul class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-camera  bg-blue"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                                    <h3 class="timeline-header no-border"><a href="#">缩略图处理</a> 图片上传</h3>
                                    <div class="timeline-body">
                                        {{Form::file('image', array('class' => 'file col-md-10','id'=>'input-2','multiple data-show-upload'=>"false",'data-show-caption'=>"true"))}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-camera bg-purple"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                                    <h3 class="timeline-header"><a href="#">图集处理</a> 批量上传图集</h3>

                                    <div class="timeline-body">
                                        {{Form::file('image', array('name'=>'input-image','class' => 'file-loading','id'=>'input-image-1','accept'=>'image/*'))}}
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
                                        {{Form::hidden('typeimages', null,array('id'=>'typeimages'))}}
                                    </div>
                                </div>
                            </li>
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                            </li>
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- /.tab-pane -->
                    <div class=" tab-pane" id="activity">
                        @include('admin.layouts.summernote')
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {{Form:: button('提交',array('class'=>'btn btn-danger','type'=>'submit'))}}
                    </div>
                </div>
                {!! Form::close() !!}
                        <!-- /.tab-content -->

            </div>
            <!-- /.nav-tabs-custom -->
            @if(count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    @stop

    @section('libs')
    <script src="/adminlte/plugins/summernote/summernote.min.js"></script>
    <script src="/adminlte/plugins/summernote/lang/summernote-zh-CN.js"></script>
    <!-- iCheck -->
    <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script src="/js/fileinput.min.js"></script>
    <script>
        $(function () {
            //iCheck for checkbox and radio inputs
            $('.basic_info input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('.basic_info input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('.basic_info input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });

        });
    </script>
    <script>
        $("#input-image-1").fileinput({
            uploadUrl: "/admin/upload/images",
            allowedFileExtensions: ["jpg", "png", "gif"],
            maxImageWidth: 3000,
            maxFileCount: 6,
            resizeImage: true
        }).on('filepreupload', function() {
            $('#kv-success-box').html('');
        }).on('fileuploaded', function(event, data) {
            $('#kv-success-box').append(data.response.link);
            $('#kv-success-modal').modal('show');
            $("#typeimages").val($("#typeimages").val()+data.response.link+',');
            console.log($("#typeimages").val())
        }).on('filepreremoved', function(e, params) {
            console.log('File sorted params', params);
        }).on('filedeleted', function(event, key) {
            console.log('Key = ' + key);
            arrs=key.split(',')
            $("#typeimages").val($("#typeimages").val().replace(arrs[1]+',',''));
        });
    </script>
@stop

