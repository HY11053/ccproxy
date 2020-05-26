@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('main_content')
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
                            <a class="more" href="/solution/game">了解更多</a>
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

        <div class="section section-a4 animating" id="section-a4">
            <div class="section-header">
                <h1>架构部署</h1>
            </div>
            <div class="section-body">
                <div class="m w1200 clear">
                    <div class="animate-div fl">
                        <div class="animate-fixed">
                        </div>
                        <svg id="svg01" xmlns="http://www.w3.org/2000/svg" width="571" height="408" viewBox="0 0 571 408">
                            <path id="path01" data-name="path01" d="M310.24,163.468l-129.747,77.6L77.752,179.52,207.5,105.13Z"></path>
                            <path id="path02" data-name="path02" d="M538.426,284.387L375.469,381.248,288.8,329.331,451.754,236.75Z"></path>
                            <g id="line09">
                                <path id="line-09" class="cls-1 line" d="M427.655,163.672L542.925,230.3l-48.631,28.924"></path>
                                <path id="tri-09" class="cls-2 tri" d="M503.219,259.258H493.6v-0.106l-0.031-5.247,4.729,2.623,0.193,0.107Z"></path>
                            </g>
                            <g id="line08">
                                <path id="line-08" class="cls-1 line" d="M289.014,373L326,351.986"></path>
                                <path id="tri-08" class="cls-2 tri" d="M327.355,351.357v0.106l0,0.214,0.027,5.025-4.535-2.512-0.192-.107-4.921-2.726h9.619Z"></path>
                            </g>
                            <g id="line07">
                                <path id="line-07" class="cls-1 line" d="M69.559,260.418l162.617,101.2"></path>
                                <path id="tri-07" class="cls-2 tri" d="M233.071,356.634l0.032,5.353h-9.639l4.613-2.571,0.192-.107Z"></path>
                            </g>
                            <g id="line06">
                                <path id="line-06" class="cls-1 line" d="M71.056,230.437L114.047,206.7"></path>
                                <path id="tri-06" class="cls-2 tri" d="M117.381,204.687v0.32l0.028,5.025-4.535-2.512-0.193-.107-4.921-2.726h9.619Z"></path>
                            </g>
                            <g id="line05">
                                <path id="line-05" class="cls-1 line" d="M133.012,212.987L85.99,239"></path>
                                <path id="tri-05" class="cls-2 tri" d="M94.913,238.927H85.3v-0.106l-0.031-5.248,4.729,2.624,0.193,0.107Z"></path>
                            </g>
                            <g id="line04">
                                <path id="line-04" class="cls-1 line" d="M238.968,123.691l31.991-17.733"></path>
                                <path id="tri-04" class="cls-2 tri" d="M271.648,105.17v0.319l0.028,5.026L267.142,108l-0.193-.107-4.92-2.726h9.619Z"></path>
                            </g>
                            <g id="line03">
                                <path id="line-03" class="cls-1 line" d="M287.007,113.015L255.985,131"></path>
                                <path id="tri-03" class="cls-2 tri" d="M265.249,130.849h-9.618v-0.106L255.6,125.5l4.729,2.623,0.193,0.107Z"></path>
                            </g>
                            <g id="line02">
                                <path id="line-02" class="cls-1 line" d="M380.989,138l-50-28.988"></path>
                                <path id="tri-02" class="cls-2 tri" d="M328.488,112.66l-0.032-5.352H338.1l-4.613,2.57-0.192.107Z"></path>
                            </g>
                            <g id="line01">
                                <path id="tri-01" class="cls-2 tri" d="M254.568,202.547l-0.031-5.353h9.638l-4.612,2.57-0.192.107Z"></path>
                                <path id="line-01" class="cls-1 line" d="M386.3,273.17L256.319,198.054"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="animate-info fr">
                        <p>
                            专用智能清洗引擎
                        </p>
                        <span>
                    DDOS防御无上限，不管多少G  ,CC零误封，不管多少肉鸡。研发的新SocKet协议，弥补了WinSock链接失败会断开的问题，链接失败自动无缝切换。智能多线节点分布，配合独家研发的隧道填补技术，保证每一条线路都是优质的网络。所有提供的单线防护节点，均具备运营商级别的UDP封禁能力，UDP攻击流量不计入攻击流量。流量、SDK调用、DDoS攻击、CC攻击等多维度数据统计分析，快速定位异常，助力业务发展。


                </span>
                        <ul class="list-item clear">
                            <li>
                                <i class="icon icon-24 icon13"></i> 任何tcp端类应用
                            </li>
                            <li>
                                <i class="icon icon-24 icon13"></i> 智能开放端口
                            </li>
                            <li>
                                <i class="icon icon-24 icon13"></i> 登陆器列表保护
                            </li>
                            <li>
                                <i class="icon icon-24 icon13"></i> 数据报表
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="index-module hosting-frame">
            <div class="solution-super-contant">
                <p class="hosting-title">
                    商业授权</p>
                <p class="hosting-tit">
                    安卫士云端接入新模式，无视任何网络攻击，实时升级</p>
                <div class="solution-super">
                    <div class="solution-list product-list shade">
                        <div class="product-header">
                            <i class="icon-product"></i>活动产品
                        </div>
                        <div class="product-body">
                            <div class="product-introduce">
                                安卫士云端接入新模式，无视任何网络攻击，实时升级</div>
                            <ul class="product-param">

                                <li>峰值用户数400</li>
                                <li>ddos防护无限</li>
                                <li>CC防护100%</li>
                                <li>全网加速</li>
                            </ul>
                            <div class="product-price">
                                <p>
                                    ¥<span>1</span>/元7天</p>
                                <a class="btn" onclick="goOpenUrl('/Web/WH/WHProductDetails.aspx?ProductID=22')">
                                    立即购买</a>
                            </div>
                        </div>
                    </div>
                    <div class="solution-list product-list shade">
                        <div class="product-header">
                            <i class="icon-product"></i>入门产品
                        </div>
                        <div class="product-body">
                            <div class="product-introduce">
                                让用户的网络安全成本降到最低，买到真正安全的产品</div>
                            <ul class="product-param">

                                <li>峰值用户数200</li>
                                <li>ddos防护无限</li>
                                <li>CC防护100%</li>
                                <li>全网加速</li>
                            </ul>
                            <div class="product-price">
                                <p>
                                    ¥<span>799<i>+</i></span>/元月</p>
                                <a class="btn" onclick="goOpenUrl('/WebNew/product.aspx')">立即购买</a>
                            </div>
                        </div>
                    </div>
                    <div class="solution-list product-list shade">
                        <div class="product-header">
                            <i class="icon-product"></i>基础产品
                        </div>
                        <div class="product-body">
                            <div class="product-introduce">
                                我们郑重承诺任何“安卫士”用户被打死的，全额退款</div>
                            <ul class="product-param">

                                <li>峰值用户数400</li>
                                <li>ddos防护无限</li>
                                <li>CC防护100%</li>
                                <li>全网加速</li>
                            </ul>
                            <div class="product-price">
                                <p>
                                    ¥<span>1999<i>+</i></span>/元月</p>
                                <a class="btn" onclick="goOpenUrl('/WebNew/product.aspx')">立即购买</a>
                            </div>
                        </div>
                    </div>
                    <div class="solution-list product-list shade">
                        <div class="product-header">
                            <i class="icon-product"></i>更多产品
                        </div>
                        <div class="product-body">
                            <div class="product-introduce">
                                所有在线人数是指“峰值”同时在线，不是日活</div>
                            <ul class="product-param">

                                <li>峰值用户数更多</li>
                                <li>ddos防护无限</li>
                                <li>CC防护100%</li>
                                <li>全网加速</li>
                            </ul>
                            <div class="product-price">
                                <p style="height: 36px;">
                                </p>
                                <a class="btn" onclick="goOpenUrl('/WebNew/product.aspx')">查看更多</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="solution-super-contant whole pt60">
            <p class="hosting-title">
                视频演示</p>
            <p class="hosting-tit">
                通过演示安卫士安全接入模拟本地网络掉线后，客户端游戏防掉线的功能</p>
            <div class="solution-super">
                <div class="video-group">
                    <a class="solution-list video-list shade" onclick="play('/Web/data/gamefdx.mp4','1030px','580px')">
                        <div class="video-head">
                            <img src="/frontend/images/video.jpg">
                        </div>
                        <div class="video-content">
                            了解游戏防掉线视频</div>
                    </a><a class="solution-list video-list shade" onclick="play('/Web/data/game1.mp4','1030px','580px')">
                        <div class="video-head">
                            <img src="/frontend/images/video.jpg">
                        </div>
                        <div class="video-content">
                            游戏IP配置和转发规则演示</div>
                    </a><a class="solution-list video-list shade" onclick="play('/Web/data/game2.mp4','1030px','580px')">
                        <div class="video-head">
                            <img src="/frontend/images/video.jpg">
                        </div>
                        <div class="video-content">
                            加速效果演示</div>
                    </a><a class="solution-list video-list shade" onclick="alert('视频录制中，敬请期待。。。')">
                        <div class="video-head">
                            <img src="/frontend/images/video.jpg">
                        </div>
                        <div class="video-content">
                            Cocos视频演示</div>
                    </a>
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
