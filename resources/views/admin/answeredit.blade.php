@extends('admin.layouts.admin_app')
@section('title')回答编辑@stop
@section('head')
    <link href="/adminlte/plugins/iCheck/all.css" rel="stylesheet">
@stop
@section('content')
    <!-- row -->
    <div class="row">
        {{Form::model($thisanswerinfo,array('route' => array('answer_edit',$thisanswerinfo->id),'files' => true,'method' => 'put'))}}
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

                        <h3 class="timeline-header"><a href="#">问答基本信息|</a> 按需填写</h3>

                        <div class="timeline-body basic_info">
                            <div class="form-group col-md-12">
                                {{Form::label('title', '问答标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('title', $thisanswerinfo->ask->title, array('class' => 'form-control','id'=>'title','placeholder'=>'问答标题'))}}
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                {{Form::label('tags', '问答标签', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12'))}}
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    {{Form::text('tags', $thisanswerinfo->ask->tags, array('class' => 'form-control','id'=>'title','placeholder'=>'问答标签'))}}
                                </div>
                            </div>

                        </div>
                        <div class="timeline-footer">
                            <div class="col-sm-12 basic_info">
                                {{Form::radio('is_hidden', '1', true,array('class'=>"flat-red"))}} 已审核
                                {{Form::radio('is_hidden', '0',false,array('class'=>"flat-red"))}} 未审核
                            </div>
                            <button class="btn btn-primary btn-xs">Read more</button>
                        </div>
                    </div>
                </li>

                <li>
                    <i class="fa fa-file-text bg-maroon"></i>

                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

                        <h3 class="timeline-header"><a href="#">问答描述</a>问答内容编辑</h3>

                        <div class="timeline-body">
                            @include('vendor.ueditor.assets')
                                    <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                                var ue = UE.getEditor('container',{
                                    toolbars: [
                                        ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'insertimage','unlink','inserttable','charts','forecolor','backcolor','source', 'drafts','autotypeset','fullscreen']
                                    ],
                                    elementPathEnabled: false,
                                    enableContextMenu: false,
                                    autoClearEmptyNode:true,
                                    wordCount:false,
                                    imagePopup:false,
                                    autotypeset:{ indent: true,imageBlockLine: 'center' }
                                });
                                ue.ready(function() {
                                    ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                });
                            </script>

                            <!-- 编辑器容器 -->
                            <script id="container" name="content" type="text/plain">   {!! $thisanswerinfo->content!!}</script>
                        </div>
                        <div class="timeline-footer">
                            <button type="submit"  class="btn btn-md bg-maroon">提交问答</button>
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
    @if(count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <!-- /.row -->

    </section>
@stop

@section('libs')
    <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
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
@stop

