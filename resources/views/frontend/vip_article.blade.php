@extends('frontend.frontend')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('headlibs')
<meta name="Copyright" content="{{config('app.name')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.name')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" />
    <meta property="og:image" content="{{config('app.url')}}{{str_replace(config('app.url'),'',$thisarticleinfos->litpic)}}"/>
    <meta property="article:author" content="{{config('app.name')}}" />
    <meta property="article:published_first" content="{{config('app.name')}}, {{config('app.url')}}{{Request::getrequesturi()}}" />
@stop
@section('main_content')
    <div class="vip_main ">
        <!--top 结束-->
        <!--header 开始-->
        <div class="vip_nav_wrap">
            <div class="vip_nav vip_nav_fixed">
                <div class="vip_nav_inner">
                    <div class="img_show"><a href="/busInfo/{{$thisarticleinfos->id}}.html" target="_blank"><img width="80" height="60" src="{{$thisarticleinfos->litpic}}" alt="{{$thisarticleinfos->brandname}}"></a></div>
                    <div class="vip_nav_detail">
                        <p></p><h3><a href="/busInfo/{{$thisarticleinfos->id}}.html" target="_blank" title="{{$thisarticleinfos->brandname}}">{{$thisarticleinfos->brandname}}</a></h3><span class="crumb"><a href="/{{$thisbrandtypecidinfo->real_path}}/">{{$thisbrandtypecidinfo->typename}}</a> &gt; <a href="/{{$thisbrandtypeinfo->real_path}}/">{{$thisbrandtypeinfo->typename}}</a></span><p></p>
                        <p><i class="rz">认证1年</i> 推荐指数：<i class="star star5"></i></p>
                    </div>
                    <div class="vip_nav_price">
                        投资金额：<em>{{$investment_types[$thisarticleinfos->tzid]}}</em>
                    </div>
                    <div class="vip_nav_r">
                        <ul>
                            <li><a href="/busInfo/{{$thisarticleinfos->id}}.html" target="_blank"><i class="icon icon1"></i>品牌首页</a></li>
                            <li><a href="/busInfo/{{$thisarticleinfos->id}}.html" target="_blank"><i class="icon icon2"></i>品牌详情</a></li>
                            <li><a href="/busInfo/{{$thisarticleinfos->id}}.html#jmys" target="_blank"><i class="icon icon3"></i>加盟优势</a></li>
                            <li><a href="/busInfo/{{$thisarticleinfos->id}}.html#jmtj" target="_blank"><i class="icon icon4"></i>加盟条件</a></li>
                            <li><a href="#msg"><i class="icon icon5"></i>免费索取资料</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="vip_content">
           {!! $thisarticleinfos->contentindex !!}
            </div>
            <!--专题内容 结束-->
        </div>


        <!--相关资讯 开始-->
        <div class="rela_vip_news">
            <div class="hd">{{$thisarticleinfos->brandname}}相关资讯</div>
            <div class="bd">
                <ul>
                    @foreach($latestbrandnews as $latestbrandnew)
                        <li><a href="/news/{{$latestbrandnew->id}}.html" target="_blank" title="{{$latestbrandnew->title}}">{{$latestbrandnew->title}}</a></li>
                    @endforeach
             </ul>
            </div>
        </div>
        <!--相关资讯 结束-->


        <!--用户留言 开始-->
        <div class="vip_msg_list">
            <div class="msg_tit">
                <h3>用户留言</h3>
            </div>
            <div class="bd">
                <div class="tempWrap" style="overflow:hidden; position:relative; height:230px"><ul style="height: 966px; position: relative; padding: 0px; margin: 0px; top: -535px;"><li class="clone" style="height: 22px;"><span class="data">06-02 06:09</span><span class="red">戴先生&nbsp;&nbsp;131******53</span>对该项目产生意向：对该项目产生意向：我想知道加盟费用是多少。谢谢</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">李女士&nbsp;&nbsp;135******24</span>对该项目产生意向：请问店面面积需要多大？</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">张先生&nbsp;&nbsp;131******98</span>对该项目产生意向：你们的总部在哪里部在哪里？</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">孙女士&nbsp;&nbsp;135******77</span>对该项目产生意向：初步打算加入贵公司，请寄资料。</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">周女士&nbsp;&nbsp;139******92</span>对该项目产生意向：我想加盟，请联系我。</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">邓女士&nbsp;&nbsp;170******31</span>对该项目产生意向：你们的总部在哪里部在哪里？</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">孙先生&nbsp;&nbsp;150******98</span>对该项目产生意向：你好！我想加盟代理你们的品牌，请联系我。</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">赵先生&nbsp;&nbsp;152******57</span>对该项目产生意向：初步打算加入贵公司，请寄资料。</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">孙先生&nbsp;&nbsp;150******84</span>对该项目产生意向：你好！我想加盟代理你们的品牌，请联系我。</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">戴女士&nbsp;&nbsp;170******87</span>对该项目产生意向：请问店面面积需要多大？</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">周女士&nbsp;&nbsp;136******24</span>对该项目产生意向：你好！我想加盟代理你们的品牌，请联系我。</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">唐先生&nbsp;&nbsp;152******73</span>对该项目产生意向：你好！我想加盟代理你们的品牌，请联系我。</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">邓女士&nbsp;&nbsp;134******15</span>对该项目产生意向：对该项目产生意向：我想知道加盟费用是多少。谢谢</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">邓先生&nbsp;&nbsp;170******29</span>对该项目产生意向：你好！我想加盟代理你们的品牌，请联系我。</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">王女士&nbsp;&nbsp;135******77</span>对该项目产生意向：初步打算加入贵公司，请寄资料。</li>
                        <li style="height: 22px;"><span class="data">{{date('m-d H:i:s',time()-rand(1000,5000))}}</span><span class="red">戴先生&nbsp;&nbsp;131******53</span>对该项目产生意向：对该项目产生意向：我想知道加盟费用是多少。谢谢</li>
                        <li class="clone" style="height: 22px;"><span class="data">05-30 03:39</span><span class="red">李女士&nbsp;&nbsp;135******24</span>对该项目产生意向：请问店面面积需要多大？</li><li class="clone" style="height: 22px;"><span class="data">05-30 07:53</span><span class="red">张先生&nbsp;&nbsp;131******98</span>对该项目产生意向：你们的总部在哪里部在哪里？</li><li class="clone" style="height: 22px;"><span class="data">05-31 12:17</span><span class="red">孙女士&nbsp;&nbsp;135******77</span>对该项目产生意向：初步打算加入贵公司，请寄资料。</li><li class="clone" style="height: 22px;"><span class="data">05-31 04:51</span><span class="red">周女士&nbsp;&nbsp;139******92</span>对该项目产生意向：我想加盟，请联系我。</li><li class="clone" style="height: 22px;"><span class="data">05-31 09:31</span><span class="red">邓女士&nbsp;&nbsp;170******31</span>对该项目产生意向：你们的总部在哪里部在哪里？</li></ul></div>
            </div>
        </div>
        <!--用户留言 结束-->
        <!--我要留言 开始-->
        <div class="vip_gbook">
            <a name="msg" rel="nofollow"></a>
            <div class="hd">我要咨询<span class="gb_tips">（想进一步了解或有疑问，请在下面留言，您将获得免费寄送的资料和专业解答）</span></div>
            <div class="bd">
                <div class="bd_phone">
                    <div class="kefu_log"> <img src="/public/images/kef.jpg" width="114" height="109" alt=""> <span>在线客服小梅</span> </div>
                    <div class="kefu_tit">
                        <p>汇聚海量知名、诚信招商品牌随时为您提供招商信息!</p>
                        <p>十万创业者通过渠道网找项目迈出成功创富第一步!</p>
                        <p>多留言、多咨询、零风险投资是您快速创富的最好途径!</p>
                    </div>
                </div>
                <div class="bd_mag">
                    <form class="message_form" onsubmit="return false">
                        {{csrf_field()}}
                        <ul>
                            <li> <span class="txt"><i>*</i>姓名</span>
                                <input name="username" id="sub_name" value="" class="input_bk" placeholder="您的真实姓名" type="text">
                            </li>
                            <li><span class="txt"><i>*</i>手机</span>
                                <input class="input_bk" name="iphone" id="sub_iphone" placeholder="电话是与您联系的重要方式" type="text">
                            </li>
                            <li><span class="txt"><i>*</i>金额</span>
                                <select name="jine" style="line-height:35px;height:35px;">
                                    <option value="0">请选择金额</option>
                                    <option value="1">1万元以下</option>
                                    <option value="2">1~5万元</option>
                                    <option value="3">5~10万元</option>
                                    <option value="4">10~20万元</option>
                                    <option value="5">20~50万元</option>
                                    <option value="6">50~100万元</option>
                                    <option value="7">100万以上</option>
                                </select>
                            </li>
                            <li> <span class="txt"><i>*</i>留言</span>
                                <textarea id="content" name="content" class="textarea_bk" placeholder="请输入您的留言内容或选择快捷留言"></textarea>
                                <div class="check_msg">
                                    <div class="check_msg_tit"><i>◆</i>您可以根据下列意向，快捷留言</div>
                                    <div class="check_msg_bd">
                                        <ul>
                                            <li><a href="javascript:;" class="no" target="_self">我有意向，请问加盟费是多少？</a></li>
                                            <li><a href="javascript:;" class="no" target="_self">很想合作，来电话细谈吧。</a></li>
                                            <li><a href="javascript:;" class="no" target="_self">请问具体的加盟流程是怎样的？</a></li>
                                            <li><a href="javascript:;" class="no" target="_self">请问贵公司哪里有样板店或直营店？</a></li>
                                            <li><a href="javascript:;" class="no" target="_self">请给我打电话并寄送加盟资料。</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @if(isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
                                <input type="hidden" name="project_id" id="project_id" value="{{$thisarticlebrandinfos->id}}">
                                <input type="hidden" name="cid" id="cid" value="{{$thisbrandtypecidinfo->id}}">
                                <input type="hidden" name="title"  id="fm_title" value="{{$thisarticlebrandinfos->brandname}}">
                                <input type="hidden" name="cla" id="cla" value="{{$thisbrandtypeinfo->typename}}">
                                <input type="hidden" name="combrand" id="combrand" value="{{$thisarticlebrandinfos->brandname}}">
                            @elseif(isset($thisarticleinfos) && !empty($thisarticleinfos->brandname))
                                <input type="hidden" name="project_id"  id="project_id" value="{{$thisarticleinfos->id}}">
                                <input type="hidden" name="cid" id="cid" value="{{$thisbrandtypecidinfo->id}}">
                                <input type="hidden" name="title" id="fm_title" value="{{$thisarticleinfos->brandname}}">
                                <input type="hidden" name="cla" id="cla" value="{{$thisbrandtypeinfo->typename}}">
                                <input type="hidden" name="combrand" id="combrand" value="{{$thisarticleinfos->brandname}}">
                            @else
                                <input type="hidden" name="title" id="fm_title"  value="未知分类">
                                <input type="hidden" name="cla"  id="cla" value="未知分类">
                                <input type="hidden" name="combrand"  id="combrand"  value="未知分类">
                            @endif
                            <li> <span class="txt">&nbsp;</span>
                                <input value="提交-立即获得最新加盟资料" id="sub_btn" class="btn" type="submit">
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <!--我要留言 结束-->
    </div>
@stop