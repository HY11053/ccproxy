<li>
    <i class="fa fa-file-text bg-maroon"></i>
    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>
        <h3 class="timeline-header"><a href="#">项目首页</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('ppindextitle', '项目首页标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('ppindextitle', null, array('class' => 'form-control col-md-10','id'=>'ppindextitle','placeholder'=>'项目首页标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content no-padding">
                                @include('admin.layouts.ueditor')
                                <script id="container" name="body" type="text/plain">
                                    @if(isset($articleinfos->body))
                                        {!! $articleinfos->body !!}
                                    @endif
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
{{--end--}}
<li>
    <i class="fa fa-tags bg-maroon"></i>
    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>
        <h3 class="timeline-header"><a href="#">品牌介绍</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('ppjstitle', '品牌介绍标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('ppjstitle', null, array('class' => 'form-control col-md-10','id'=>'ppjstitle','placeholder'=>'品牌介绍标题'))}}
            </div>
        </div>
        <div class="timeline-body">
        <div class="wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content no-padding">
                            <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                                var ue2 = UE.getEditor('container2',{
                                        toolbars: [
                                            [ 'paragraph', 'fontfamily', 'fontsize','customstyle','bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'unlink', 'insertimage', //源代码
                                                'emotion', 'fullscreen','insertvideo','music','autotypeset','removeformat','pasteplain','source' ]
                                        ],
                                        elementPathEnabled: false,
                                        enableContextMenu: true,
                                        autoClearEmptyNode:true,
                                        initialFrameHeight:300,
                                        removeFormatAttributes:'class,style,lang,width,height,align,hspace,valign',
                                        wordCount:false,
                                        imagePopup:true,
                                        removeClass: true,
                                        allowDivTransToP:true,
                                        autotypeset:{ indent: true,imageBlockLine: 'center' }
                                    });
                                    ue2.ready(function() {
                                        ue2.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                    });
                                </script>
                                <script id="container2" name="ppjs_content" type="text/plain">
                                    @if(isset($articleinfos->ppjs_content))
                                        {!! $articleinfos->ppjs_content !!}
                                    @endif
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>
    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>
        <h3 class="timeline-header"><a href="#">加盟详情</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('jmxqtitle', '加盟详情标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('jmxqtitle', null, array('class' => 'form-control col-md-10','id'=>'jmxqtitle','placeholder'=>'加盟详情标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content no-padding">
                                <script type="text/javascript">
                                    var ue3 = UE.getEditor('container3',{
                                        toolbars: [
                                            [ 'paragraph', 'fontfamily', 'fontsize','customstyle','bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'unlink', 'insertimage', //源代码
                                                'emotion', 'fullscreen','insertvideo','music','autotypeset','removeformat','pasteplain','source' ]
                                        ],
                                        elementPathEnabled: false,
                                        enableContextMenu: true,
                                        autoClearEmptyNode:true,
                                        initialFrameHeight:300,
                                        removeFormatAttributes:'class,style,lang,width,height,align,hspace,valign',
                                        wordCount:false,
                                        imagePopup:true,
                                        removeClass: true,
                                        allowDivTransToP:true,
                                        autotypeset:{ indent: true,imageBlockLine: 'center' }
                                    });
                                    ue3.ready(function() {
                                        ue3.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                    });
                                </script>
                                <script id="container3" name="jmxq_content" type="text/plain" >
                                    @if(isset($articleinfos->jmxq_content))
                                        {!! $articleinfos->jmxq_content !!}
                                    @endif
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<li>
<i class="fa fa-tags bg-maroon"></i>
    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>
        <h3 class="timeline-header"><a href="#">利润分析</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('lrfxtitle', '利润分析标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
            {{Form::text('lrfxtitle', null, array('class' => 'form-control col-md-10','id'=>'lrfxtitle','placeholder'=>'利润分析标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content no-padding">
                                <script type="text/javascript">
                                    var ue4 = UE.getEditor('container4',{
                                            toolbars: [
                                                [ 'paragraph', 'fontfamily', 'fontsize','customstyle','bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'unlink', 'insertimage', //源代码
                                                    'emotion', 'fullscreen','insertvideo','music','autotypeset','removeformat','pasteplain','source' ]
                                            ],
                                            elementPathEnabled: false,
                                            enableContextMenu: true,
                                            autoClearEmptyNode:true,
                                            initialFrameHeight:300,
                                            removeFormatAttributes:'class,style,lang,width,height,align,hspace,valign',
                                            wordCount:false,
                                            imagePopup:true,
                                            removeClass: true,
                                            allowDivTransToP:true,
                                            autotypeset:{ indent: true,imageBlockLine: 'center' }
                                        });
                                    ue4.ready(function() {
                                        ue4.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                    });
                            </script>
                            <script id="container4" name="lrfx_content" type="text/plain" >
                                @if(isset($articleinfos->lrfx_content))
                                    {!! $articleinfos->lrfx_content !!}
                                @endif
                            </script>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <div class="timeline-footer">
        <button type="submit"  class="btn btn-md bg-maroon">提交文档</button>
    </div>
    </div>
</li>