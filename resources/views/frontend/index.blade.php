@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('main_content')
    <div class="header-bg">
        <div class="header">
            <h1>GOPROXY 高性能http,https,websocket,tcp,socks5代理服务</h1>
            <div class="navbar">
                <ul>
                    <li><a class="now" href="https://www.youngzsoft.net/ccproxy/">主页</a></li>
                    <li><a href="https://www.youngzsoft.net/ccproxy/features.htm">产品介绍</a></li>
                    <li><a href="https://www.youngzsoft.net/ccproxy/proxy-server-download.htm">产品下载</a></li>
                    <li><a href="https://www.youngzsoft.net/ccproxy/purchase.htm">商业授权</a></li>
                    <li><a href="https://www.youngzsoft.net/ccproxy/wiki.htm">使用指南</a></li>
                    <li><a href="https://www.youngzsoft.net/ccproxy/contact.htm">联系我们</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="index-banner-bg">
        <div class="index-banner">
            <ul>
                <li class="banner-title">GOPROXY </li>
                <li class="banner-text">高性能代理</li>
                <li class="banner-textp"><p>支持内网穿透<br>链式代理,通讯加密智能HTTP,SOCKS5代理</p></li>
            </ul>

            <div class="index-banner-right"><a href="proxy-server-download.htm" class="button-banner green" title="Proxy Server Software Download"><img src="images/arrow_down.gif" alt="">产品下载</a><a href="purchase.htm" class="button-banner yellow" title="Purchase Proxy Server Software"><img src="images/arrow_buy.gif" alt="">商业授权</a></div>
            <div class="facebook">
                <a href="http://forum.icafeman.com/" target="_blank"><img src="/frontend/images/top-forum.png" alt="CCProxy Forum" title="CCProxy Forum"></a>
                <a href="http://www.facebook.com/ccproxyhome" target="_blank"><img src="/frontend/images/top-facebook.png" alt="CCProxy Facebook" title="CCProxy Facebook"></a>
            </div>
        </div>
    </div>
    <br>
    <div id="wrap">
        <div id="wrap-left">
            <div id="content">
                <!-- begin -->
                <h2>GOPROXY-产品介绍</h2>
                <p>
                    GOPROXY是基于golang开发的一款轻量级、功能强大、高性能的http代理、https代理、socks5代理、内网穿透代理服务器、ss代理、游戏盾、游戏代理，支持API代理认证。
                   </p>
                <p>
                    websocke代理、tcp代理、udp代理、socket代理、高防服务器。支持正向代理、反向代理、透明代理、TCP内网穿透、UDP内网穿透、HTTP内网穿透、HTTPS内网穿透、https代理负载均衡、http代理负载均衡、socks5代理负载均衡、socket代理负载均衡、ss代理负载均衡、TCP/UDP端口映射、SSH中转、TLS加密传输、协议转换、防污染DNS代理，限速，限连接数。
                </p>
                <h2>goproxy能干什么？</h2>
                <ul>
                    <li>链式代理，程序本身可以作为一级代理，如果设置了上级代理那么可以作为二级代理，乃至N级代理。</li>
                    <li>通讯加密，如果程序不是一级代理，而且上级代理也是本程序，那么可以加密和上级代理之间的通讯，采用底层tls高强度加密，安全无特征</li>
                    <li>智能HTTP代理，HTTPS代理，SOCKS5代理，会自动判断访问的网站是否屏蔽，如果被屏蔽那么就会使用上级代理(前提是配置了上级代理)访问网站;如果访问的网站没有被屏蔽，为了加速访问，代理会直接访问网站，不使用上级代理。</li>
                    <li>域名黑白名单，更加自由的控制网站的访问方式。</li>
                    <li>跨平台性，无论你是widows，linux，还是mac，甚至是树莓派，都可以很好的运行proxy。</li>
                    <li>多协议支持，支持HTTP(S)，TCP，UDP，Websocket，SOCKS5代理。</li>
                    <li>TCP/UDP端口转发。</li>
                    <li>游戏盾，游戏代理，高防服务器。</li>
                    <li>内网穿透，P2P传输，协议支持TCP和UDP，针对HTTP的优化穿透。</li>
                    <li>SSH中转，HTTP(S)，SOCKS5代理支持SSH中转，上级Linux服务器不需要任何服务端，本地一个proxy即可开心上网。</li>
                    <li>KCP协议支持，HTTP(S)，SOCKS5代理支持KCP协议传输数据，降低延迟，提升浏览体验。</li>
                    <li>动态选择上级代理，通过外部API，HTTP(S)，SOCKS5，SPS代理可以实现基于用户或者IP的限速，连接数限制，动态获取上级。</li>
                    <li>灵活的上级分配，HTTP(S)，SOCKS5，SPS代理可以通过配置文件实现基于用户或者IP的限速，连接数限制，指定上级。</li>
                    <li>反向代理，支持直接把域名解析到proxy监听的ip，然后proxy就会帮你代理访问需要访问的HTTP(S)网站。</li>
                    <li>透明HTTP(S)代理，配合iptables，在网关直接把出去的80，443方向的流量转发到proxy，就能实现无感知的智能路由器代理。</li>
                    <li>协议转换，可以把已经存在的HTTP(S)或SOCKS5或SS代理转换为一个端口同时支持HTTP(S)和SOCKS5和SS代理，转换后的SOCKS5和SS代理如果上级是SOCKS5代理，那么支持UDP功能，同时支持强大的级联认证功能。</li>
                    <li>自定义底层加密传输，http(s)\sps\socks代理在tcp之上可以通过tls标准加密以及kcp协议加密tcp数据，除此之外还支持在tls和kcp之后进行自定义加密，也就是说自定义加密和tls|kcp是可以联合使用的，内部采用AES256加密，使用的时候只需要自己定义一个密码即可</li>
                    <li>底层压缩高效传输，http(s)\sps\socks代理在tcp之上可以通过自定义加密和tls标准加密以及kcp协议加密tcp数据，在加密之后还可以对数据进行压缩，也就是说压缩功能和自定义加密和tls|kcp是可以联合使用的。</li>
                    <li>安全的DNS代理，可以通过本地的proxy提供的DNS代理服务器与上级代理加密通讯实现安全防污染的DNS查询。</li>
                    <li>负载均衡，高可用，HTTP(S)\SOCKS5\SPS代理支持上级负载均衡和高可用，多个上级重复-P参数即可。</li>
                    <li>指定出口IP，HTTP(S)\SOCKS5\SPS代理支持客户端用入口IP连接过来的，就用入口IP作为出口IP访问目标网站的功能。如果入口IP是内网IP，出口IP不会使用入口IP</li>
                    <li>支持限速，HTTP(S)\SOCKS5\SPS\TCP代理支持限速。</li>
                    <li>支持限连接数，HTTP(S)\SOCKS5\SPS\TCP代理支持限连接数。</li>
                    <li>SOCKS5代理支持级联认证。</li>
                    <li>证书参数使用base64数据，默认情况下-C，-K参数是crt证书和key文件的路径，如果是base64://开头，那么就认为后面的数据是base64编码的，会解码后使用。</li>
                    <li>支持客户端IP黑白名单，更加安全的控制客户端对代理服务的访问，如果黑白名单同时设置，那么只有白名单生效。socks/http(s)/sps/tcp/udp/dns/内网穿透bridge/内网穿透tbridge，都支持客户端IP黑白名单。</li>
                    <li>端口范围批量监听，HTTP(S)\SOCKS5\SPS\TCP代理支持指定端口范围监听，避免启动过多进程，提高性能。</li>
                </ul>
                <h2>goproxy用途</h2>
                <ul>
                    <li>当由于某某原因，我们不能访问我们在其它地方的服务，我们可以通过多个相连的proxy节点建立起一个安全的隧道访问我们的服务。</li>
                    <li>微信接口本地开发，方便调试。</li>
                    <li>远程访问内网机器。</li>
                    <li>和小伙伴一起玩局域网游戏。</li>
                    <li>以前只能在局域网玩的，现在可以在任何地方玩。</li>
                    <li>替代圣剑内网通，显IP内网通，花生壳之类的工具。</li>
                    <li>有大量IP资源，想变现，对外提供IP代理服务。</li>
                    <li>有大量拨号VPS，想对外提供IP代理服务。</li>
                    <li>公司安全要求，审计员工对互联网的访问</li>
                    <li>想要一个高性能稳定的，认证功能齐全的代理服务。</li>
                    <li>其他更多需求 ...</li>
                </ul>
            </div>
        </div>
        <div id="slider">
            <div class="topic">Contacts</div>
            <div class="right-contacts">
                <div>
                    <img src="images/r-phone.gif" width="50" height="50">
                    <p>Tel: 086-731-85537391</p>
                    <p>Mon - Fri, 9.00-18.00 (GMT+8.00)</p>
                    <p>MSN: support@youngzsoft.net</p>
                </div>
                <div>
                    <img src="images/r-email.gif" width="50" height="50">
                    <p><br>support@youngzsoft.net</p>
                </div>
                <div>
                    <img src="images/r-submit.gif" width="50" height="50">
                    <p><br><a href="http://help.ccboot.com/" target="_blank">Submit Your Questions Online</a></p>
                </div>
            </div>
            <div class="topic">POP Links</div>
            <p><a href="http://user.youngzsoft.com/ccproxy/update/ccproxysetup.exe">Download CCProxy</a></p>
            <p><a href="quick_start.htm">Quick Start</a></p>
            <p><a href="install.htm">Server Installation</a></p>
            <p><a href="advanced.htm">Server Configuration</a></p>
            <p><a href="client.htm">Client Configuration</a></p>
            <p><a href="accmgr.htm">Account Management</a></p>
            <p><a href="screenshot.htm">Screen Shot</a></p>
            <p><a href="recommended.htm">Recommended</a></p>
            <div class="caselink"><a href="case.htm"><font class="topic2">Classic Case</font></a></div>
            <div class="topic2"><a href="whatsnew.htm"><font class="topic2">What's New</font></a></div>
        </div>
    </div>
    <div class="cl"></div>
    <div id="main-bottom">
        <h1 class="h1f12">Try CC Proxy Software to Build Your Own Proxy Server Now!</h1>
    </div>
@stop
