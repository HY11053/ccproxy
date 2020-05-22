@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('main_content')
    <div class="main-content ">
        <div class="path">当前位置：<a href="/">首页</a>&gt;&nbsp;<a href="/jiaoyu/">教育培训</a>&gt;<a href="/peixunban/">培训班加盟</a>&gt;&nbsp;智慧超人k12人工智能教育加盟
        </div>
       <div class="pg-content shade">
           <h2>goproxy能干什么？</h2>
           <ul>
               <li>链式代理，程序本身可以作为一级代理，如果设置了上级代理那么可以作为二级代理，乃至N级代理。</li>
               <li>通讯加密，如果程序不是一级代理，而且上级代理也是本程序，那么可以加密和上级代理之间的通讯，采用底层tls高强度加密，安全无特征。</li>
               <li>智能HTTP代理，HTTPS代理，SOCKS5代理，会自动判断访问的网站是否屏蔽，如果被屏蔽那么就会使用上级代理(前提是配置了上级代理)访问网站;如果访问的网站没有被屏蔽，为了加速访问，代理会直接访问网站，不使用上级代理。</li>
               <li>域名黑白名单，更加自由的控制网站的访问方式。</li>
               <li>跨平台性，无论你是widows，linux，还是mac，甚至是树莓派，都可以很好的运行proxy。</li>
               <li>多协议支持，支持HTTP(S)，TCP，UDP，Websocket，SOCKS5代理。</li>
               <li>TCP/UDP端口转发。</li>
               <li> 游戏盾，游戏代理，高防服务器。</li>
               <li>内网穿透，P2P传输，协议支持TCP和UDP，针对HTTP的优化穿透。</li>
               <li>SSH中转，HTTP(S)，SOCKS5代理支持SSH中转，上级Linux服务器不需要任何服务端，本地一个proxy即可开心上网。</li>
               <li>KCP协议支持，HTTP(S)，SOCKS5代理支持KCP协议传输数据，降低延迟，提升浏览体验。</li>
               <li>动态选择上级代理，通过外部API，HTTP(S)，SOCKS5，SPS代理可以实现基于用户或者IP的限速，连接数限制，动态获取上级。</li>
               <li>灵活的上级分配，HTTP(S)，SOCKS5，SPS代理可以通过配置文件实现基于用户或者IP的限速，连接数限制，指定上级。</li>
               <li>反向代理，支持直接把域名解析到proxy监听的ip，然后proxy就会帮你代理访问需要访问的HTTP(S)网站。</li>
               <li>透明HTTP(S)代理，配合iptables，在网关直接把出去的80，443方向的流量转发到proxy，就能实现无感知的智能路由器代理。</li>
               <li>协议转换，可以把已经存在的HTTP(S)或SOCKS5或SS代理转换为一个端口同时支持HTTP(S)和SOCKS5和SS代理，转换后的SOCKS5和SS代理如果上级是SOCKS5代理，那么支持UDP功能，同时支持强大的级联认证功能。</li>
               <li>自定义底层加密传输，http(s)\sps\socks代理在tcp之上可以通过tls标准加密以及kcp协议加密tcp数据，除此之外还支持在tls和kcp之后进行自定义加密，也就是说自定义加密和tls|kcp是可以联合使用的，内部采用AES256加密，使用的时候只需要自己定义一个密码即可。</li>
               <li>底层压缩高效传输，http(s)\sps\socks代理在tcp之上可以通过自定义加密和tls标准加密以及kcp协议加密tcp数据，在加密之后还可以对数据进行压缩，也就是说压缩功能和自定义加密和tls|kcp是可以联合使用的。</li>
               <li>安全的DNS代理，可以通过本地的proxy提供的DNS代理服务器与上级代理加密通讯实现安全防污染的DNS查询。</li>
               <li>负载均衡，高可用，HTTP(S)\SOCKS5\SPS代理支持上级负载均衡和高可用，多个上级重复-P参数即可。</li>
               <li>指定出口IP，HTTP(S)\SOCKS5\SPS代理支持客户端用入口IP连接过来的，就用入口IP作为出口IP访问目标网站的功能。如果入口IP是内网IP，出口IP不会使用入口IP</li>
               <li>支持限速，HTTP(S)\SOCKS5\SPS\TCP代理支持限速。</li>
               <li>支持限连接数，HTTP(S)\SOCKS5\SPS\TCP代理支持限连接数。</li>
               <li>SOCKS5代理支持级联认证。</li>
               <li>证书参数使用base64数据，默认情况下-C，-K参数是crt证书和key文件的路径，如果是base64://开头，那么就认为后面的数据是base64编码的，会解码后使用</li>
               <li>支持客户端IP黑白名单，更加安全的控制客户端对代理服务的访问，如果黑白名单同时设置，那么只有白名单生效。socks/http(s)/sps/tcp/udp/dns/内网穿透bridge/内网穿透tbridge，都支持客户端IP黑白名单。</li>
               <li>端口范围批量监听，HTTP(S)\SOCKS5\SPS\TCP代理支持指定端口范围监听，避免启动过多进程，提高性能。</li>
               <h2>为什么需要它？</h2>
               <li>当由于某某原因，我们不能访问我们在其它地方的服务，我们可以通过多个相连的proxy节点建立起一个安全的隧道访问我们的服务。</li>
               <li>微信接口本地开发，方便调试。</li>
               <li>远程访问内网机器。</li>
               <li>和小伙伴一起玩局域网游戏。</li>
               <li>以前只能在局域网玩的，现在可以在任何地方玩。</li>
               <li>替代圣剑内网通，显IP内网通，花生壳之类的工具。</li>
               <li>有大量IP资源，想变现，对外提供IP代理服务。</li>
               <li>有大量拨号VPS，想对外提供IP代理服务。</li>
               <li>公司安全要求，审计员工对互联网的访问。</li>
               <li>想要一个高性能稳定的，认证功能齐全的代理服务。</li>
               <li>想一个固定入口，实现动态IP出口。</li>
           </ul>
       </div>
        <div class="right-container">
            <div class="plr20-tb15 bg-ff box-shadow">
                <div class="lh24" style="margin-bottom: 10px;">
                    <h3 class="f22">goproxy新闻动态</h3>
                </div>
                <a target="_blank" href="/news/6453.shtml" class="img-block magnify magnify-txt h213 mt15" style="position: relative;"><img src="https://www.jjedu.com.cn/storage/uploads/2019/04/09/8bfb73479fd85dcbfe4e639fc6d284e1.jpg" alt="五月花IT职业教育加盟怎么样？">
                    <div class="img-bg">
                    </div>
                    <p> 五月花IT职业教育加盟怎么样？</p>
                </a>
                <ul class="tw-list tw-list-h80 mt5">
                    <li><a target="_blank" href="/news/6453.shtml" class="img-block magnify"><img src="https://www.jjedu.com.cn/storage/uploads/2019/04/09/8bfb73479fd85dcbfe4e639fc6d284e1.jpg" alt="五月花IT职业教育加盟怎么样？"></a>
                        <p class="f16"><a target="_blank" href="/news/6453.shtml">五月花IT职业教育加盟怎么样？</a></p>
                        <p class="f14 s-8c">2019-04-10 10:39:41</p>
                    </li>
                    <li><a target="_blank" href="/news/6452.shtml" class="img-block magnify"><img src="https://www.jjedu.com.cn/storage/uploads/2019/04/09/9b47bf6b38e54e8af49488c5194e7ec7.jpg" alt="五月花IT职业教育加盟门槛高不高？"></a>
                        <p class="f16"><a target="_blank" href="/news/6452.shtml">五月花IT职业教育加盟门槛高不高？</a></p>
                        <p class="f14 s-8c">2019-04-10 10:39:09</p>
                    </li>
                    <li><a target="_blank" href="/news/6451.shtml" class="img-block magnify"><img src="https://www.jjedu.com.cn/storage/uploads/2019/04/09/404e64e1a4a11c2368fa0ee0a824809b.jpg" alt="五月花IT职业教育加盟优势有哪些？"></a>
                        <p class="f16"><a target="_blank" href="/news/6451.shtml">五月花IT职业教育加盟优势有哪些？</a></p>
                        <p class="f14 s-8c">2019-04-10 10:38:45</p>
                    </li>
                    <li><a target="_blank" href="/news/3458.shtml" class="img-block magnify"><img src="https://www.jjedu.com.cn/storage/uploads/2019/01/17/c7d3810005bc4b8cfe76c774ce7256ee.png" alt="IT教育培训加盟的创业优势有哪些？"></a>
                        <p class="f16"><a target="_blank" href="/news/3458.shtml">IT教育培训加盟的创业优势有哪些？</a></p>
                        <p class="f14 s-8c">2019-02-03 11:22:01</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop
