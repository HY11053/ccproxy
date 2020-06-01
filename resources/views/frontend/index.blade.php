@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('main_content')
    <div class="index-banner-bg">
        <div class="index-banner">
            <div class="swiper" style="background: #fff; width: 700px; height: 389px; margin-left: 101px; margin-top: 28px; float:left;">
                <img src="/frontend/images/ts.jpg" alt="" style="width: 100%;  overflow: hidden; border-radius: 1px;">
            </div>
            <div class="bannerright" style="float: right">
                <ul >
                    <li class="banner-title">GOPROXY </li>
                    <li class="banner-text">高性能代理 <i class="windowsicon"></i> <i class="macosicon"></i> <i class="linuxicon"></i> <i class="androidicon"></i> </li>
                    <li class="banner-textp"><p>灵活的API控制，全平台支持<br>多级代理，通讯加密，相互转换，动态IP</p></li>
                </ul>
                <div class="index-banner-right"><a href="/download/" class="button-banner green" title="Proxy Server Software Download"><img src="/frontend/images/arrow_down.gif" alt="">免费使用</a><a href="/purchase/" class="button-banner yellow" title="bussguide Proxy Server Software"><img src="/frontend/images/arrow_buy.gif" alt="">商业授权</a></div>
                <div class="facebook">
                </div>
            </div>

        </div>
    </div>
    <div class="main">
        <div class="item item2" style="padding-bottom:0">
            <div class="item2-tit">
                <h3 class="m-tit">轻量级、功能强大、高性能服务，支持API代理认证</h3>
                <p class="s-tit">http代理、https代理、socks5代理、内网穿透代理服务器、ss代理、游戏盾、游戏代理</p>
            </div>
            <div class="item-content item2-content">
                <ul class="clear">
                    <li class="clear">
                        <div class="info-l fl">
                            <img src="/frontend/images/ddos.png">
                        </div>
                        <div class="info-r fr">
                            <p>链式代理</p>
                            <span>程序本身可以作为一级代理，如果设置了上级代理那么可以作为二级以作为二级以作为二级代理，乃至N级代理。级代理，乃至N级代理。</span>
                        </div>
                    </li>
                    <li class="clear">
                        <div class="info-l fl">
                            <img src="/frontend/images/cc.png">
                        </div>
                        <div class="info-r fr">
                            <p>通讯加密</p>
                            <span>可以加密和上级代理之间的通讯，采用底层tls高强度加密，安全无特强度加密，安全无特强度加密，安全无特强度加密，安全无特强度加密，安全无特征</span>
                        </div>
                    </li>
                    <li class="clear" style="margin-bottom:0">
                        <div class="info-l fl">
                            <img src="/frontend/images/cdn.png">
                        </div>
                        <div class="info-r fr">
                            <p>智能HTTP代理</p>
                            <span>智能HTTP代理，HTTPS代理，SOCKS5代理，会自动判断访问的网站是否屏蔽，如果被屏否屏蔽，如果被屏否屏蔽，如果被屏蔽那么就会使用上级代理</span>
                        </div>
                    </li>
                    <li class="clear" style="margin-bottom:0">
                        <div class="info-l fl">
                            <img src="/frontend/images/rz.png">
                        </div>
                        <div class="info-r fr">
                            <p>跨平台支持</p>
                            <span>兼容各种平台 无论widows，linux，还是mac，甚至是树莓派，都可以很好的莓派，都可以很好的莓派，都可以很好都可以很好的莓派，都可以很好的运行proxy</span>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <a href="/download/" target="_blank" class="zx" id="shiyongbutton">立即免费试用</a>
        </div>
        <div class="home-solution clear-fix">
            <div class="container section-main">
                <div class="section-title">
                    <div class="section-title-text text-light">
                        解决方案
                    </div>
                    <div class="section-title-bg text-light">
                        SOLUTION
                    </div>
                </div>
                <div class="container clear-fix j-box" data-active-class="sd-animated sd-fadeInRight">
                    <div class="solution-nav j-header">
                        <a class="one">电商</a>
                        <a class="one">金融</a>
                        <a class="one">网站</a>
                        <a class="one active">游戏</a>
                    </div>
                    <div class="j-body">
                        <div class="solution-item" style="display: none;">
                            <div>
                                <img src="/frontend/images/icon_solution_ecommerce.png" alt="电商解决方案icon">
                            </div>
                            <div class="title">
                                电商云解决方案
                            </div>
                            <div class="desc">
                                充足的IDC专网带宽，可针对业务场景一对一定制专属防御算法和策略，帮助用户应对各类DDoS攻击，保障活动和业务顺利进行。
                            </div>
                            <a class="more" href="/solution/ecommerce">了解更多</a>
                        </div>
                        <div class="solution-item" style="display: none;">
                            <div>
                                <img src="/frontend/images/icon_solution_finance.png" alt="金融解决方案icon">
                            </div>
                            <div class="title">
                                金融云解决方案
                            </div>
                            <div class="desc">
                                金融级别的防御解决方案，可为P2P、支付、担保、众筹、信贷等业务场景提供量身定制的DDoS防御解决方案，全方面安全护航。
                            </div>
                            <a class="more" href="/solution/finance">了解更多</a>
                        </div>
                        <div class="solution-item" style="display: none;">
                            <div>
                                <img src="/frontend/images/icon_solution_web.png" alt="网站解决方案icon">
                            </div>
                            <div class="title">
                                网站云解决方案
                            </div>
                            <div class="desc">
                                全面的网站业务场景DDoS防御解决方案，完美支持Http，Https，Http2协议的DDoS和CC防御，自研的AI-Engine为业务提供安全堡垒。
                            </div>
                            <a class="more" href="/solution/website">了解更多</a>
                        </div>
                        <div class="solution-item sd-animated sd-fadeInRight" style="">
                            <div>
                                <img src="/frontend/images/icon_solution_game.png" alt="游戏解决方案icon">
                            </div>
                            <div class="title">
                                游戏云解决方案
                            </div>
                            <div class="desc">
                                全新的游戏DDoS防御解决方案，以柔克刚，一招制敌，彻底解决游戏所面临的DDoS攻击难题，无上限防御各种DDoS攻击和CC攻击。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="home-advantage section-bg">
            <div class="container section-main">
                <div class="section-title">
                    <div class="section-title-text">
                        产品优势
                    </div>
                    <div class="section-title-bg">
                        ADVANTAGE
                    </div>
                </div>
                <div class="advantage-content clear-fix">
                    <div class="advantage-item">
                        <div class="advantage-item-title">
                            多协议支持
                        </div>
                        <div>
                            <img src="/frontend/images/icon_zynl.png" alt="资源优势icon">
                        </div>
                        <div class="advantage-item-desc">
                            <div class="desc-strong">
                                支持HTTP(S)
                            </div>
                            <div class="desc">
                                TCP、UDP
                            </div>
                            <div class="desc-strong">
                                Websocket
                            </div>
                            <div class="desc">
                                SOCKS5代理
                            </div>
                            <div class="desc-strong">
                                TCP/UDP端口转发
                            </div>
                            <div class="desc">
                                内网穿透
                            </div>
                        </div>
                    </div>
                    <div class="advantage-item">
                        <div class="advantage-item-title">
                            KCP协议支持
                        </div>
                        <div>
                            <img src="/frontend/images/icon_jsnl.png" alt="技术能力icon">
                        </div>
                        <div class="advantage-item-desc">
                            <div class="desc-strong">
                                HTTP(S)，SOCKS5代理
                            </div>
                            <div class="desc">
                                支持KCP协议传输数据
                            </div>
                            <div class="desc-strong">
                                降低延迟，提升浏览体验
                            </div>
                            <div class="desc">
                                降低延迟，提升浏览体验
                            </div>
                            <div class="desc-strong">
                                加密渠道传输玩家IP
                            </div>
                            <div class="desc">
                                保持接入防御前后的功能体验一致性
                            </div>
                        </div>
                    </div>
                    <div class="advantage-item no-mr">
                        <div class="advantage-item-title">
                            服务优势
                        </div>
                        <div>
                            <img src="/frontend/images/icon_fwnl.png" alt="服务能力icon">
                        </div>
                        <div class="advantage-item-desc">
                            <div class="desc-strong">
                                24小时
                            </div>
                            <div class="desc">
                                不间断售后服务
                            </div>
                            <div class="desc-strong">
                                7天
                            </div>
                            <div class="desc">
                                全网攻击态势报告
                            </div>
                            <div class="desc-strong">
                                365天
                            </div>
                            <div class="desc">
                                专业团队快速定位异常
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="index-module hosting-frame">
            <div class="solution-super-contant">
                <p class="hosting-title">
                    优质合作案例</p>
                <p class="hosting-tit">
                    覆盖互联网金融、电商、汽车、在线教育、企业服务、医疗等众多领域</p>
                <div class="solution-super mt20">
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-1.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-2.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-3.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-4.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-5.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-6.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-7.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-8.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-9.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-10.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-11.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-12.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-13.png">
                    </div>
                    <div class="solution-list partner-group">
                        <img src="/frontend/images/icon-partner-14.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footlibs')

@stop
