@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <link rel="stylesheet" href="/frontend/css/lists.css">
    <link rel="stylesheet" href="/frontend/css/d.css">
@stop
@section('main_content')
    @include('frontend.header')
    <div class="top-nav-bar-wrap">
        <div id="nav_bar" class="index-module navBar">
            <div class="top-nav">
                <a href="#super" class="active">使用手册</a>
            </div>
        </div>
    </div>
    <div class="index-module">
        <div class="solution-super-contant help-contant">
            <div id="contend-bussguide">
                <section class="content">
                    <article class="markdown-section" id="main">
                        <h2 id="如何安装"><a href="#/?id=%e5%a6%82%e4%bd%95%e5%ae%89%e8%a3%85" data-id="如何安装" class="anchor"><span>如何安装</span></a></h2>
                        <h3 id="_1-linux安装"><a href="#/?id=_1-linux%e5%ae%89%e8%a3%85" data-id="_1-linux安装" class="anchor"><span>1. Linux安装</span></a></h3>
                        <p><a href="https://github.com/snail007/goproxy/blob/master/README_ZH.md#%E4%B8%8B%E8%BD%BD%E5%AE%89%E8%A3%85-goproxy" target="_blank">点击查看Linux安装教程</a></p>
                        <h3 id="_2-苹果mac系统安装"><a href="#/?id=_2-%e8%8b%b9%e6%9e%9cmac%e7%b3%bb%e7%bb%9f%e5%ae%89%e8%a3%85" data-id="_2-苹果mac系统安装" class="anchor"><span>2. 苹果Mac系统安装</span></a></h3>
                        <p><a href="https://github.com/snail007/proxy_admin_free/blob/master/README_ZH.md#%E8%A7%86%E9%A2%91%E5%AE%89%E8%A3%85%E6%95%99%E7%A8%8B" target="_blank">点击查看苹果Mac系统安装教程</a></p>
                        <h3 id="_3-windows安装"><a href="#/?id=_3-windows%e5%ae%89%e8%a3%85" data-id="_3-windows安装" class="anchor"><span>3. Windows安装</span></a></h3>
                        <p>为了方便操作,推荐Windows用户使用proxy-admin面板,<a href="https://github.com/snail007/proxy_admin_free/blob/master/README_ZH.md#%E8%A7%86%E9%A2%91%E5%AE%89%E8%A3%85%E6%95%99%E7%A8%8B" target="_blank">点击查看Windows安装教程</a></p>
                        <p>当然你也可以使用命令行goproxy<a href="https://github.com/snail007/goproxy/blob/master/README_ZH.md#%E6%89%8B%E5%8A%A8%E5%AE%89%E8%A3%85-goproxy" target="_blank">点击查看手动安装</a></p>
                        <h3 id="_4-其它平台安装"><a href="#/?id=_4-%e5%85%b6%e5%ae%83%e5%b9%b3%e5%8f%b0%e5%ae%89%e8%a3%85" data-id="_4-其它平台安装" class="anchor"><span>4. 其它平台安装</span></a></h3>
                        <p><a href="https://github.com/snail007/goproxy/blob/master/README_ZH.md#%E6%89%8B%E5%8A%A8%E5%AE%89%E8%A3%85-goproxy" target="_blank">点击查看其它安装教程</a></p>
                        <h3 id="_5-关于proxy-admin控制面板和命令行gorpoxy"><a href="#/?id=_5-%e5%85%b3%e4%ba%8eproxy-admin%e6%8e%a7%e5%88%b6%e9%9d%a2%e6%9d%bf%e5%92%8c%e5%91%bd%e4%bb%a4%e8%a1%8cgorpoxy" data-id="_5-关于proxy-admin控制面板和命令行gorpoxy" class="anchor"><span>5. 关于proxy-admin控制面板和命令行gorpoxy</span></a></h3>
                        <p>以下软件都是相互独立使用，没有依赖关系，需要购买的也是分别单独购买使用。</p>
                        <table>
                            <thead>
                            <tr>
                                <th align="left">软件名称</th>
                                <th align="center">免费版功能</th>
                                <th align="center">商业版功能</th>
                                <th align="center">购买使用</th>
                                <th align="center">特点</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td align="left"><a href="https://github.com/snail007/proxy_admin_free" target="_blank">proxyadmin 免费版</a></td>
                                <td align="center">√</td>
                                <td align="center">x</td>
                                <td align="center">x</td>
                                <td align="center">Web界面操作，免费使用，服务数量有限制，适合个人，小白和白嫖党</td>
                            </tr>
                            <tr>
                                <td align="left"><a href="https://github.com/snail007/proxy-admin-vip" target="_blank">proxyadmin VIP版</a></td>
                                <td align="center">√</td>
                                <td align="center">x</td>
                                <td align="center">√</td>
                                <td align="center">Web界面操作，功能和免费版一样，服务数量无限制，适合个体户或者小集体</td>
                            </tr>
                            <tr>
                                <td align="left"><a href="https://github.com/snail007/proxy-admin-commercial" target="_blank">proxyadmin 商业版</a></td>
                                <td align="center">√</td>
                                <td align="center">√</td>
                                <td align="center">√</td>
                                <td align="center">Web界面操作，无限制，适合集体或公司对外提供服务</td>
                            </tr>
                            <tr>
                                <td align="left"><a href="https://github.com/snail007/proxy-admin-cluster" target="_blank">proxyadmin 集群版</a></td>
                                <td align="center">√</td>
                                <td align="center">√</td>
                                <td align="center">√</td>
                                <td align="center">Web界面操作，无限制，配合<code>gorproxy 商业版</code>,可以实现以组为单位，管理海量机器上的proxy服务，适合有大量机器的集体或公司对外提供服务</td>
                            </tr>
                            <tr>
                                <td align="left"><a href="https://github.com/snail007/goproxy" target="_blank">gorproxy 免费版</a></td>
                                <td align="center">√</td>
                                <td align="center">x</td>
                                <td align="center">x</td>
                                <td align="center">命令行操作，免费使用，稳定且灵活，适合一切熟悉命令行的大佬或集体或公司白嫖，自用或者大规模部署对外服务</td>
                            </tr>
                            <tr>
                                <td align="left"><a href="https://github.com/snail007/goproxy" target="_blank">gorproxy 商业版</a></td>
                                <td align="center">√</td>
                                <td align="center">√</td>
                                <td align="center">√</td>
                                <td align="center">命令行操作，稳定且灵活，适合集体或公司大规模部署对外提供服务</td>
                            </tr>
                            </tbody>
                        </table>
                        <p>关于免费版功能和商业版功能对比请看这里,<a href="https://snail007.github.io/goproxy/page/free_vs_commercial/" target="_blank"><code>免费版</code>和<code>商业版</code>功能对比</a>. </p>
                        <h2 id="购买商业版"><a href="#/?id=%e8%b4%ad%e4%b9%b0%e5%95%86%e4%b8%9a%e7%89%88" data-id="购买商业版" class="anchor"><span>购买商业版</span></a></h2>
                        <p>本手册描述功能,商业版全部包含;认证等高级功能参数免费版不包含;<br />如果您用免费版执行某些命令等时候遇到,类似如下xxx参数不存在的提示,说明这个参数是商业版的功能,您需要下载并购买商业版授权才能使用.<br /><code>err : unknown short flag '-a'</code><br />免费版和商业版功能对比、如何购买和使用商业版详细操作<a href="https://snail007.github.io/goproxy/page/free_vs_commercial/" target="_blank">请点击这里查看</a>. </p>
                        <h2 id="首次使用必看谢谢！"><a href="#/?id=%e9%a6%96%e6%ac%a1%e4%bd%bf%e7%94%a8%e5%bf%85%e7%9c%8b%e8%b0%a2%e8%b0%a2%ef%bc%81" data-id="首次使用必看谢谢！" class="anchor"><span>首次使用必看,谢谢!!！</span></a></h2>
                        <h3 id="_1-环境"><a href="#/?id=_1-%e7%8e%af%e5%a2%83" data-id="_1-环境" class="anchor"><span>1. 环境</span></a></h3>
                        <p>该手册教程，默认系统是linux，程序是proxy；所有操作需要root权限； </p>
                        <p>如果你的是windows，请使用windows版本的proxy.exe即可。 </p>
                        <h3 id="_2-使用配置文件"><a href="#/?id=_2-%e4%bd%bf%e7%94%a8%e9%85%8d%e7%bd%ae%e6%96%87%e4%bb%b6" data-id="_2-使用配置文件" class="anchor"><span>2. 使用配置文件</span></a></h3>
                        <p>接下来的教程都是通过命令行参数介绍使用方法，也可以通过读取配置文件获取参数。 </p>
                        <p>具体格式是通过@符号指定配置文件，例如:proxy @configfile.txt </p>
                        <p>configfile.txt里面的格式是，第一行是子命令名称，第二行开始一行一个参数， </p>
                        <p>格式:<code>参数 参数值</code>，没有参数值的直接写参数，比如:--nolog </p>
                        <p>比如configfile.txt内容如下: </p>
                        <pre v-pre="" data-lang="shell"><code class="lang-shell">http
-t tcp
-p :33080
--forever  </code></pre>
                        <h3 id="_3-调试输出"><a href="#/?id=_3-%e8%b0%83%e8%af%95%e8%be%93%e5%87%ba" data-id="_3-调试输出" class="anchor"><span>3. 调试输出</span></a></h3>
                        <p>默认情况下，日志输出的信息不包含文件行数，某些情况下为了排除程序问题，快速定位问题， </p>
                        <p>可以使用--debug参数，输出代码行数和毫秒时间。 </p>
                        <h3 id="_4-使用日志文件"><a href="#/?id=_4-%e4%bd%bf%e7%94%a8%e6%97%a5%e5%bf%97%e6%96%87%e4%bb%b6" data-id="_4-使用日志文件" class="anchor"><span>4. 使用日志文件</span></a></h3>
                        <p>默认情况下，日志是直接在控制台显示出来的，如果要保存到文件，可以使用--log参数， </p>
                        <p>比如: --log proxy.log，日志就会输出到proxy.log方便排除问题。 </p>
                        <h3 id="_5-生成加密通讯需要的证书文件"><a href="#/?id=_5-%e7%94%9f%e6%88%90%e5%8a%a0%e5%af%86%e9%80%9a%e8%ae%af%e9%9c%80%e8%a6%81%e7%9a%84%e8%af%81%e4%b9%a6%e6%96%87%e4%bb%b6" data-id="_5-生成加密通讯需要的证书文件" class="anchor"><span>5. 生成加密通讯需要的证书文件</span></a></h3>
                        <p>http(s)代理、tcp代理、udp代理、socks5代理、内网穿透等功能和上级通讯的时候，为了安全我们采用TLS加密通讯，当然可以选择不加密通信通讯，本教程所有和上级通讯都采用加密，需要证书文件。 </p>
                        <p><strong><em>所有端必须使用相同的proxy.crt和proxy.key</em></strong> </p>
                        <p>1.通过下面的命令生成自签名的证书和key文件。<br /><code>proxy keygen -C proxy</code><br />会在当前程序目录下面生成证书文件proxy.crt和key文件proxy.key。 </p>
                        <p>2.通过下面的命令生，使用自签名证书proxy.crt和key文件proxy.key签发新证书:goproxy.crt和goproxy.key。<br /><code>proxy keygen -s -C proxy -c goproxy</code><br />会在当前程序目录下面生成证书文件goproxy.crt和key文件goproxy.key。 </p>
                        <p>3.默认情况下证书的里面的域名是随机的，可以使用<code>-n test.com</code>参数指定。 </p>
                        <p>4.更多用法:<code>proxy keygen --help</code>。 </p>
                        <h3 id="_6-后台运行"><a href="#/?id=_6-%e5%90%8e%e5%8f%b0%e8%bf%90%e8%a1%8c" data-id="_6-后台运行" class="anchor"><span>6. 后台运行</span></a></h3>
                        <p>默认执行proxy之后，如果要保持proxy运行，不能关闭命令行。 </p>
                        <p>如果想在后台运行proxy，命令行可以关闭，只需要在命令最后加上--daemon参数即可。 </p>
                        <p>比如: </p>
                        <p><code>proxy http -t tcp -p &quot;0.0.0.0:38080&quot; --daemon</code> </p>
                        <h3 id="_7-守护运行"><a href="#/?id=_7-%e5%ae%88%e6%8a%a4%e8%bf%90%e8%a1%8c" data-id="_7-守护运行" class="anchor"><span>7. 守护运行</span></a></h3>
                        <p>守护运行参数--forever，比如: <code>proxy http --forever</code> ， </p>
                        <p>proxy会fork子进程，然后监控子进程，如果子进程异常退出，5秒后重启子进程。 </p>
                        <p>该参数配合后台运行参数--daemon和日志参数--log，可以保障proxy一直在后台执行不会因为意外退出， </p>
                        <p>而且可以通过日志文件看到proxy的输出日志内容。 </p>
                        <p>比如: <code>proxy http -p &quot;:9090&quot; --forever --log proxy.log --daemon</code> </p>
                        <h3 id="_8-安全建议"><a href="#/?id=_8-%e5%ae%89%e5%85%a8%e5%bb%ba%e8%ae%ae" data-id="_8-安全建议" class="anchor"><span>8. 安全建议</span></a></h3>
                        <p>当VPS在nat设备后面，vps上网卡IP都是内网IP，这个时候可以通过-g参数添加vps的外网ip防止死循环。 </p>
                        <p>假设你的vps外网ip是23.23.23.23，下面命令通过-g参数设置23.23.23.23 </p>
                        <p><code>proxy http -g &quot;23.23.23.23&quot;</code> </p>
                        <h3 id="_9-负载均衡和高可用"><a href="#/?id=_9-%e8%b4%9f%e8%bd%bd%e5%9d%87%e8%a1%a1%e5%92%8c%e9%ab%98%e5%8f%af%e7%94%a8" data-id="_9-负载均衡和高可用" class="anchor"><span>9. 负载均衡和高可用</span></a></h3>
                        <p>HTTP(S)\SOCKS5\SPS\TCP代理支持上级负载均衡和高可用，多个上级重复-P参数即可。 </p>
                        <p>负载均衡策略支持5种，可以通过<code>--lb-method</code>参数指定: </p>
                        <p>roundrobin 轮流使用 </p>
                        <p>leastconn 使用最小连接数的 </p>
                        <p>leasttime 使用连接时间最小的 </p>
                        <p>hash 使用根据客户端地址计算出一个固定上级 </p>
                        <p>weight 根据每个上级的权重和连接数情况，选择出一个上级 </p>
                        <p>提示: </p>
                        <p>1.负载均衡检查时间间隔可以通过<code>--lb-retrytime</code>设置，单位毫秒 </p>
                        <p>2.负载均衡连接超时时间可以通过<code>--lb-timeout</code>设置，单位毫秒 </p>
                        <p>3.如果负载均衡策略是权重(weight)，-P格式为:2.2.2.2:3880?w=1，1就是权重，大于0的整数。 </p>
                        <p>4.如果负载均衡策略是hash，默认是根据客户端地址选择上级，可以通过开关<code>--lb-hashtarget</code>使用访问的目标地址选择上级。 </p>
                        <p>5.TCP代理没有参数<code>--lb-hashtarget</code>.</p>
                        <p>6.默认是负载均衡+高可用模式,如果使用了参数<code>--lb-onlyha</code>就只使用高可用模式,依据负载均衡策略选择一个节点,之后就一直使用这个节点,直到这个节点不再存活,那么会依据负载均衡策略再选择一个节点使用,以此循环.</p>
                        <p>7.如果检查节点全部不再存活,那么每次连接都会随机选取一个节点使用.</p>
                        <h3 id="_10-代理跳板跳转"><a href="#/?id=_10-%e4%bb%a3%e7%90%86%e8%b7%b3%e6%9d%bf%e8%b7%b3%e8%bd%ac" data-id="_10-代理跳板跳转" class="anchor"><span>10. 代理跳板跳转</span></a></h3>
                        <p>http(s)代理，SPS代理，内网穿透，tcp代理都支持通过中间第三方代理连接上级， </p>
                        <p>参数是:--jumper，所有格式如下: </p>
                        <pre v-pre="" data-lang="text"><code class="lang-text">http://username:password@host:port
http://host:port
https://username:password@host:port
https://host:port
socks5://username:password@host:port
socks5://host:port
socks5s://username:password@host:port
socks5s://host:port
ss://method:password@host:port  </code></pre>
                        <p>http，socks5代表的是普通的http和socks5代理。 </p>
                        <p>https，socks5s代表的是通过tls保护的http和socks5代理， </p>
                        <p>也就是http代理 over TLS ， socks over TLS。 </p>
                        <h3 id="_11-域名黑白名单"><a href="#/?id=_11-%e5%9f%9f%e5%90%8d%e9%bb%91%e7%99%bd%e5%90%8d%e5%8d%95" data-id="_11-域名黑白名单" class="anchor"><span>11. 域名黑白名单</span></a></h3>
                        <p>socks/http(s)/sps代理都支持域名黑白名单。 </p>
                        <p>用--stop参数指定一个域名黑名单列表文件，那么当用户连接文件里面这些域名的时候连接就会被断开。 </p>
                        <p>用--only参数指定一个域名白名单列表文件，那么当用户连接文件里面这些域名之外的域名的时候连接就会被断开。 </p>
                        <p>如果同时设置了--stop和--only，那么只有--only会起作用。 </p>
                        <p>黑白域名名单文件内容格式如下: </p>
                        <pre v-pre="" data-lang="text"><code class="lang-text">**.baidu.com
*.taobao.com
a.com
192.168.1.1
192.168.*.*
?.qq.com  </code></pre>
                        <p>说明: </p>
                        <p>1.一行一个域名，域名写法支持通配符<code>*</code>和<code>?</code>，<code>*</code>代表任意个字符，<code>?</code>代表一个任意字符， </p>
                        <p>2.<code>**.baidu.com</code> 匹配无论是多少级所有后缀是<code>.baidu.com</code>的域名。 </p>
                        <p>3.<code>*.taobao.com</code> 匹配后缀是<code>.taobao.com</code>的三级域名。 </p>
                        <p>4.还可以直接是IP地址。 </p>
                        <p>5.<code>#</code>开头的为注释。 </p>
                        <h3 id="_12-客户端ip黑白名单"><a href="#/?id=_12-%e5%ae%a2%e6%88%b7%e7%ab%afip%e9%bb%91%e7%99%bd%e5%90%8d%e5%8d%95" data-id="_12-客户端ip黑白名单" class="anchor"><span>12. 客户端IP黑白名单</span></a></h3>
                        <p>socks/http(s)/sps/tcp/udp/dns/内网穿透bridge/内网穿透tbridge，都支持客户端IP黑白名单。 </p>
                        <p>用--ip-deny参数指定一个客户端IP黑名单列表文件，那么当用户的IP在这个文件里面的时候连接就会被断开。 </p>
                        <p>用--ip-allow参数指定一个客户端IP白名单列表文件，那么当用户的IP不在这个文件里面的时候连接就会被断开。 </p>
                        <p>如果同时设置了--ip-deny和--ip-allow，那么只有--ip-allow会起作用。 </p>
                        <p>客户端IP黑白名单文件内容格式如下: </p>
                        <pre v-pre="" data-lang="text"><code class="lang-text">192.168.1.1
192.168.*.*
192.168.1?.*  </code></pre>
                        <p>说明: </p>
                        <p>1.一行一个域名，域名写法支持通配符<code>*</code>和<code>?</code>，<code>*</code>代表任意个字符，<code>?</code>代表一个任意字符。 </p>
                        <p>2.<code>#</code>开头的为注释。 </p>
                        <h3 id="_13-协议加载文件"><a href="#/?id=_13-%e5%8d%8f%e8%ae%ae%e5%8a%a0%e8%bd%bd%e6%96%87%e4%bb%b6" data-id="_13-协议加载文件" class="anchor"><span>13. 协议加载文件</span></a></h3>
                        <p>proxy的各种代理功能里面很多地方都有参数设置一个文件，比如：--blocked 指定一个直接走上级的域名列表文件，参数值是文件的路径， </p>
                        <p>如果参数支持协议加载文件，那么文件路径不仅可以是文件路径，还可以是： </p>
                        <p>a.“base64://”开头的base64编码的上面说明的文件内容，比如：base64://ajfpoajsdfa= </p>
                        <p>b.”str://“开头的英文逗号分割的多个，比如：str://xxx,yyy </p>
                        <p>proxy的blocked，direct，stop，only，hosts，resolve.rules，rewriter.rules，ip.allow，ip.deny 文件支持协议加载。 </p>
                        <h3 id="_14-客户端并发连接数"><a href="#/?id=_14-%e5%ae%a2%e6%88%b7%e7%ab%af%e5%b9%b6%e5%8f%91%e8%bf%9e%e6%8e%a5%e6%95%b0" data-id="_14-客户端并发连接数" class="anchor"><span>14. 客户端并发连接数</span></a></h3>
                        <p>socks5\sps\http代理,控制客户端并发连接数参数是:<code>--max-conns-rate</code>,控制每秒客户端的最大连接数,默认20, 0为不限制.</p>
                        <h2 id="_1http代理"><a href="#/?id=_1http%e4%bb%a3%e7%90%86" data-id="_1http代理" class="anchor"><span>1.HTTP代理</span></a></h2>
                        <h3 id="_11普通一级http代理"><a href="#/?id=_11%e6%99%ae%e9%80%9a%e4%b8%80%e7%ba%a7http%e4%bb%a3%e7%90%86" data-id="_11普通一级http代理" class="anchor"><span>1.1.普通一级HTTP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/http-1.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/http-1.png" alt="1.1" /> </p>
                        <p><code>proxy http -t tcp -p &quot;0.0.0.0:38080&quot;</code> </p>
                        <p>-p参数支持的写法：</p>
                        <pre v-pre="" data-lang="text"><code class="lang-text">  -p &quot;:8081&quot;  监听8081
  -p &quot;:8081,:8082&quot;  监听8081和8082
  -p &quot;:8081,:8082,:9000-9999&quot; 监听8081和8082以及9000,9001至9999，共1002个端口</code></pre>
                        <h3 id="_12普通二级http代理"><a href="#/?id=_12%e6%99%ae%e9%80%9a%e4%ba%8c%e7%ba%a7http%e4%bb%a3%e7%90%86" data-id="_12普通二级http代理" class="anchor"><span>1.2.普通二级HTTP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/http-2.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/http-2.png" alt="1.2" /> </p>
                        <p>使用本地端口8090，假设上级HTTP代理是<code>22.22.22.22:8080</code> </p>
                        <p><code>proxy http -t tcp -p &quot;0.0.0.0:8090&quot; -T tcp -P &quot;22.22.22.22:8080&quot;</code> </p>
                        <p>我们还可以指定网站域名的黑白名单文件，一行一个域名，匹配规则是最右匹配，比如:baidu.com，匹配的是<em>.</em>.baidu.com，黑名单的域名直接走上级代理，白名单的域名不走上级代理。 </p>
                        <p><code>proxy http -p &quot;0.0.0.0:8090&quot; -T tcp -P &quot;22.22.22.22:8080&quot; -b blocked.txt -d direct.txt</code> </p>
                        <h3 id="_13http二级代理加密"><a href="#/?id=_13http%e4%ba%8c%e7%ba%a7%e4%bb%a3%e7%90%86%e5%8a%a0%e5%af%86" data-id="_13http二级代理加密" class="anchor"><span>1.3.HTTP二级代理(加密)</span></a></h3>
                        <blockquote>
                            <p>注意: 后面二级代理使用的<code>proxy.crt</code>和<code>proxy.key</code>应与一级代理一致 </p>
                        </blockquote>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/http-tls-2.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/http-tls-2.png" alt="1.3" /><br />一级HTTP代理(VPS，IP:22.22.22.22)<br /><code>proxy http -t tls -p &quot;:38080&quot; -C proxy.crt -K proxy.key</code> </p>
                        <p>二级HTTP代理(本地Linux)<br /><code>proxy http -t tcp -p &quot;:8080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code><br />那么访问本地的8080端口就是访问VPS上面的代理端口38080。 </p>
                        <p>二级HTTP代理(本地windows)<br /><code>proxy.exe http -t tcp -p &quot;:8080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code><br />然后设置你的windos系统中，需要通过代理上网的程序的代理为http模式，地址为：127.0.0.1，端口为：8080，程序即可通过加密通道通过vps上网。 </p>
                        <h3 id="_14http三级代理加密"><a href="#/?id=_14http%e4%b8%89%e7%ba%a7%e4%bb%a3%e7%90%86%e5%8a%a0%e5%af%86" data-id="_14http三级代理加密" class="anchor"><span>1.4.HTTP三级代理(加密)</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/http-tls-3.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/http-tls-3.png" alt="1.3" /><br />一级HTTP代理VPS_01，IP:22.22.22.22<br /><code>proxy http -t tls -p &quot;:38080&quot; -C proxy.crt -K proxy.key</code><br />二级HTTP代理VPS_02，IP:33.33.33.33<br /><code>proxy http -t tls -p &quot;:28080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code><br />三级HTTP代理(本地)<br /><code>proxy http -t tcp -p &quot;:8080&quot; -T tls -P &quot;33.33.33.33:28080&quot; -C proxy.crt -K proxy.key</code><br />那么访问本地的8080端口就是访问一级HTTP代理上面的代理端口38080。 </p>
                        <h3 id="_15basic认证，api认证"><a href="#/?id=_15basic%e8%ae%a4%e8%af%81%ef%bc%8capi%e8%ae%a4%e8%af%81" data-id="_15basic认证，api认证" class="anchor"><span>1.5.Basic认证，API认证</span></a></h3>
                        <p>请参考<code>9.API认证</code> 和 <code>10.本地认证</code> </p>
                        <h3 id="_16http代理流量强制走上级http代理"><a href="#/?id=_16http%e4%bb%a3%e7%90%86%e6%b5%81%e9%87%8f%e5%bc%ba%e5%88%b6%e8%b5%b0%e4%b8%8a%e7%ba%a7http%e4%bb%a3%e7%90%86" data-id="_16http代理流量强制走上级http代理" class="anchor"><span>1.6.HTTP代理流量强制走上级HTTP代理</span></a></h3>
                        <p>默认情况下，proxy会智能判断一个网站域名是否无法访问，如果无法访问才走上级HTTP代理.通过--always可以使全部HTTP代理流量强制走上级HTTP代理。<br /><code>proxy http --always -t tls -p &quot;:28080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code> </p>
                        <h3 id="_17https通过ssh中转"><a href="#/?id=_17https%e9%80%9a%e8%bf%87ssh%e4%b8%ad%e8%bd%ac" data-id="_17https通过ssh中转" class="anchor"><span>1.7.HTTP(S)通过SSH中转</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/http-ssh-1.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/http-ssh-1.png" alt="1.7" /><br />说明:ssh中转的原理是利用了ssh的转发功能，就是你连接上ssh之后，可以通过ssh代理访问目标地址。<br />假设有:vps </p>
                        <ul>
                            <li>IP是2.2.2.2， ssh端口是22， ssh用户名是:user， ssh用户密码是:demo </li>
                            <li>用户user的ssh私钥名称是user.key </li>
                        </ul>
                        <h4 id="_171-ssh用户名和密码的方式"><a href="#/?id=_171-ssh%e7%94%a8%e6%88%b7%e5%90%8d%e5%92%8c%e5%af%86%e7%a0%81%e7%9a%84%e6%96%b9%e5%bc%8f" data-id="_171-ssh用户名和密码的方式" class="anchor"><span><em>1.7.1 ssh用户名和密码的方式</em></span></a></h4>
                        <p>本地HTTP(S)代理28080端口，执行:<br /><code>proxy http -T ssh -P &quot;2.2.2.2:22&quot; -u user -D demo -t tcp -p &quot;:28080&quot;</code> </p>
                        <h4 id="_172-ssh用户名和密钥的方式"><a href="#/?id=_172-ssh%e7%94%a8%e6%88%b7%e5%90%8d%e5%92%8c%e5%af%86%e9%92%a5%e7%9a%84%e6%96%b9%e5%bc%8f" data-id="_172-ssh用户名和密钥的方式" class="anchor"><span><em>1.7.2 ssh用户名和密钥的方式</em></span></a></h4>
                        <p>本地HTTP(S)代理28080端口，执行:<br /><code>proxy http -T ssh -P &quot;2.2.2.2:22&quot; -u user -S user.key -t tcp -p &quot;:28080&quot;</code> </p>
                        <h3 id="_18kcp协议传输"><a href="#/?id=_18kcp%e5%8d%8f%e8%ae%ae%e4%bc%a0%e8%be%93" data-id="_18kcp协议传输" class="anchor"><span>1.8.KCP协议传输</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/http-kcp.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/http-kcp.png" alt="1.8" /><br />KCP协议需要--kcp-key参数设置一个密码用于加密解密数据 </p>
                        <p>一级HTTP代理(VPS，IP:22.22.22.22)<br /><code>proxy http -t kcp -p &quot;:38080&quot; --kcp-key mypassword</code> </p>
                        <p>二级HTTP代理(本地Linux)<br /><code>proxy http -t tcp -p &quot;:8080&quot; -T kcp -P &quot;22.22.22.22:38080&quot; --kcp-key mypassword</code><br />那么访问本地的8080端口就是访问VPS上面的代理端口38080，数据通过kcp协议传输，注意kcp走的是udp协议协议，所以防火墙需放开38080的udp协议。 </p>
                        <h3 id="_19-https反向代理"><a href="#/?id=_19-https%e5%8f%8d%e5%90%91%e4%bb%a3%e7%90%86" data-id="_19-https反向代理" class="anchor"><span>1.9 HTTP(S)反向代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/fxdl.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/fxdl.png" alt="1.9" /><br />proxy不仅支持在其他软件里面通过设置代理的方式，为其他软件提供代理服务，而且支持直接把请求的网站域名解析到proxy监听的ip上，然后proxy监听80和443端口，那么proxy就会自动为你代理访问需要访问的HTTP(S)网站。 </p>
                        <p>使用方式:<br />在&quot;最后一级proxy代理&quot;的机器上，因为proxy要伪装成所有网站，网站默认的端口HTTP是80，HTTPS是443，让proxy监听80和443端口即可.参数-p多个地址用逗号分割。<br /><code>proxy http -t tcp -p :80,:443</code> </p>
                        <p>这个命令就在机器上启动了一个proxy代理，同时监听80和443端口，既可以当作普通的代理使用，也可以直接把需要代理的域名解析到这个机器的IP上。 </p>
                        <p>如果有上级代理那么参照上面教程设置上级即可，使用方式完全一样。<br /><code>proxy http -t tcp -p :80,:443 -T tls -P &quot;2.2.2.2:33080&quot; -C proxy.crt -K proxy.key</code> </p>
                        <p>注意:<br />proxy所在的服务器的DNS解析结果不能受到自定义的解析影响，不然就死循环了，proxy代理最好指定<code>--dns 8.8.8.8</code>参数。 </p>
                        <h3 id="_110-https透明代理"><a href="#/?id=_110-https%e9%80%8f%e6%98%8e%e4%bb%a3%e7%90%86" data-id="_110-https透明代理" class="anchor"><span>1.10 HTTP(S)透明代理</span></a></h3>
                        <p>该模式需要具有一定的网络基础，相关概念不懂的请自行搜索解决。<br />假设proxy现在在路由器上运行，启动命令如下:<br /><code>proxy http -t tcp -p :33080 -T tls -P &quot;2.2.2.2:33090&quot; -C proxy.crt -K proxy.key</code> </p>
                        <p>然后添加iptables规则，下面是参考规则: </p>
                        <pre v-pre="" data-lang="shell"><code class="lang-shell">#上级proxy服务端服务器IP地址:
proxy_server_ip=2.2.2.2

#路由器运行proxy监听的端口:
proxy_local_port=33080

#下面的就不用修改了
#create a new chain named PROXY
iptables -t nat -N PROXY

# Ignore your PROXY server's addresses
# It's very IMPORTANT， just be careful。

iptables -t nat -A PROXY -d $proxy_server_ip -j RETURN

# Ignore LANs IP address
iptables -t nat -A PROXY -d 0.0.0.0/8 -j RETURN
iptables -t nat -A PROXY -d 10.0.0.0/8 -j RETURN
iptables -t nat -A PROXY -d 127.0.0.0/8 -j RETURN
iptables -t nat -A PROXY -d 169.254.0.0/16 -j RETURN
iptables -t nat -A PROXY -d 172.16.0.0/12 -j RETURN
iptables -t nat -A PROXY -d 192.168.0.0/16 -j RETURN
iptables -t nat -A PROXY -d 224.0.0.0/4 -j RETURN
iptables -t nat -A PROXY -d 240.0.0.0/4 -j RETURN

# Anything to port 80 443 should be redirected to PROXY's local port
iptables -t nat -A PROXY -p tcp --dport 80 -j REDIRECT --to-ports $proxy_local_port
iptables -t nat -A PROXY -p tcp --dport 443 -j REDIRECT --to-ports $proxy_local_port

# Apply the rules to nat client
iptables -t nat -A PREROUTING -p tcp -j PROXY
# Apply the rules to localhost
iptables -t nat -A OUTPUT -p tcp -j PROXY  </code></pre>
                        <ul>
                            <li>清空整个链 iptables -F 链名比如iptables -t nat -F PROXY </li>
                            <li>删除指定的用户自定义链 iptables -X 链名 比如 iptables -t nat -X PROXY </li>
                            <li>从所选链中删除规则 iptables -D 链名 规则详情 比如 iptables -t nat -D PROXY -d 223.223.192.0/255.255.240.0 -j RETURN </li>
                        </ul>
                        <h3 id="_111-自定义dns"><a href="#/?id=_111-%e8%87%aa%e5%ae%9a%e4%b9%89dns" data-id="_111-自定义dns" class="anchor"><span>1.11 自定义DNS</span></a></h3>
                        <p>--dns-address和--dns-ttl参数，用于自己指定proxy访问域名的时候使用的dns（--dns-address）<br />以及解析结果缓存时间（--dns-ttl）秒数，避免系统dns对proxy的干扰，另外缓存功能还能减少dns解析时间提高访问速度。<br />比如：<br /><code>proxy http -p &quot;:33080&quot; --dns-address &quot;8.8.8.8:53&quot; --dns-ttl 300</code> </p>
                        <h3 id="_112-自定义加密"><a href="#/?id=_112-%e8%87%aa%e5%ae%9a%e4%b9%89%e5%8a%a0%e5%af%86" data-id="_112-自定义加密" class="anchor"><span>1.12 自定义加密</span></a></h3>
                        <p>proxy的http(s)代理在tcp之上可以通过tls标准加密以及kcp协议加密tcp数据，除此之外还支持在tls和kcp之后进行自定义<br />加密，也就是说自定义加密和tls|kcp是可以联合使用的，内部采用AES256加密，使用的时候只需要自己定义一个密码即可，<br />加密分为两个部分，一部分是本地(-z)是否加密解密，一部分是与上级(-Z)传输是否加密解密。<br />自定义加密要求两端都是proxy才可以，下面分别用二级，三级为例: </p>
                        <p>二级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy http -t tcp -z demo_password -p :7777</code><br />本地二级执行:<br /><code>proxy http -T tcp -P 2.2.2.2:777 -Z demo_password -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级加密传输访问目标网站。 </p>
                        <p>三级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy http -t tcp -z demo_password -p :7777</code><br />二级vps(ip:3.3.3.3)上执行:<br /><code>proxy http -T tcp -P 2.2.2.2:7777 -Z demo_password -t tcp -z other_password -p :8888</code><br />本地三级执行:<br /><code>proxy http -T tcp -P 3.3.3.3:8888 -Z other_password -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级加密传输访问目标网站。 </p>
                        <h3 id="_113-压缩传输"><a href="#/?id=_113-%e5%8e%8b%e7%bc%a9%e4%bc%a0%e8%be%93" data-id="_113-压缩传输" class="anchor"><span>1.13 压缩传输</span></a></h3>
                        <p>proxy的http(s)代理在tcp之上可以通过tls标准加密以及kcp协议加密tcp数据，在自定义加密之前还可以对数据进行压缩，<br />也就是说压缩功能和自定义加密和tls|kcp是可以联合使用的，压缩分为两个部分，一部分是本地(-m)是否压缩传输，<br />一部分是与上级(-M)传输是否压缩。<br />压缩要求两端都是proxy才可以，压缩也在一定程度上保护了(加密)数据，下面分别用二级，三级为例: </p>
                        <p>二级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy http -t tcp -m -p :7777</code><br />本地二级执行:<br /><code>proxy http -T tcp -P 2.2.2.2:777 -M -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级压缩传输访问目标网站。 </p>
                        <p>三级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy http -t tcp -m -p :7777</code><br />二级vps(ip:3.3.3.3)上执行:<br /><code>proxy http -T tcp -P 2.2.2.2:7777 -M -t tcp -m -p :8888</code><br />本地三级执行:<br /><code>proxy http -T tcp -P 3.3.3.3:8888 -M -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级压缩传输访问目标网站。 </p>
                        <h3 id="_114-负载均衡"><a href="#/?id=_114-%e8%b4%9f%e8%bd%bd%e5%9d%87%e8%a1%a1" data-id="_114-负载均衡" class="anchor"><span>1.14 负载均衡</span></a></h3>
                        <p>HTTP(S)代理支持上级负载均衡，多个上级重复-P参数即可。 </p>
                        <p><code>proxy http --lb-method=hash -T tcp -P 1.1.1.1:33080 -P 2.1.1.1:33080 -P 3.1.1.1:33080</code> </p>
                        <h3 id="_1141-设置重试间隔和超时时间"><a href="#/?id=_1141-%e8%ae%be%e7%bd%ae%e9%87%8d%e8%af%95%e9%97%b4%e9%9a%94%e5%92%8c%e8%b6%85%e6%97%b6%e6%97%b6%e9%97%b4" data-id="_1141-设置重试间隔和超时时间" class="anchor"><span>1.14.1 设置重试间隔和超时时间</span></a></h3>
                        <p><code>proxy http --lb-method=leastconn --lb-retrytime 300 --lb-timeout 300 -T tcp -P 1.1.1.1:33080 -P 2.1.1.1:33080 -P 3.1.1.1:33080 -t tcp -p :33080</code> </p>
                        <h3 id="_1142-设置权重"><a href="#/?id=_1142-%e8%ae%be%e7%bd%ae%e6%9d%83%e9%87%8d" data-id="_1142-设置权重" class="anchor"><span>1.14.2 设置权重</span></a></h3>
                        <p><code>proxy http --lb-method=weight -T tcp -P 1.1.1.1:33080?w=1 -P 2.1.1.1:33080?w=2 -P 3.1.1.1:33080?w=1 -t tcp -p :33080</code> </p>
                        <h3 id="_1143-使用目标地址选择上级"><a href="#/?id=_1143-%e4%bd%bf%e7%94%a8%e7%9b%ae%e6%a0%87%e5%9c%b0%e5%9d%80%e9%80%89%e6%8b%a9%e4%b8%8a%e7%ba%a7" data-id="_1143-使用目标地址选择上级" class="anchor"><span>1.14.3 使用目标地址选择上级</span></a></h3>
                        <p><code>proxy http --lb-hashtarget --lb-method=hash -T tcp -P 1.1.1.1:33080 -P 2.1.1.1:33080 -P 3.1.1.1:33080 -t tcp -p :33080</code> </p>
                        <h3 id="_115-限速"><a href="#/?id=_115-%e9%99%90%e9%80%9f" data-id="_115-限速" class="anchor"><span>1.15 限速</span></a></h3>
                        <p>限速100K，通过<code>-l</code>参数即可指定，比如:100K 2000K 1M . 0意味着无限制。 </p>
                        <p><code>proxy http -t tcp -p 2.2.2.2:33080 -l 100K</code> </p>
                        <h3 id="_116-指定出口ip"><a href="#/?id=_116-%e6%8c%87%e5%ae%9a%e5%87%ba%e5%8f%a3ip" data-id="_116-指定出口ip" class="anchor"><span>1.16 指定出口IP</span></a></h3>
                        <p><code>--bind-listen</code>参数，就可以开启客户端用<code>入口IP</code>连接过来的，就用<code>入口IP</code>作为<code>出口IP</code>访问目标网站的功能。如果绑定了不正确的IP会导致代理不能工作，此时代理会尝试不绑定IP去访问目标，同时日志会提示。 </p>
                        <p><code>proxy http -t tcp -p 2.2.2.2:33080 --bind-listen</code> </p>
                        <h3 id="_117-证书参数使用base64数据"><a href="#/?id=_117-%e8%af%81%e4%b9%a6%e5%8f%82%e6%95%b0%e4%bd%bf%e7%94%a8base64%e6%95%b0%e6%8d%ae" data-id="_117-证书参数使用base64数据" class="anchor"><span>1.17 证书参数使用base64数据</span></a></h3>
                        <p>默认情况下-C，-K参数是crt证书和key文件的路径， </p>
                        <p>如果是base64://开头，那么就认为后面的数据是base64编码的，会解码后使用。 </p>
                        <h3 id="_118-智能模式"><a href="#/?id=_118-%e6%99%ba%e8%83%bd%e6%a8%a1%e5%bc%8f" data-id="_118-智能模式" class="anchor"><span>1.18 智能模式</span></a></h3>
                        <p>智能模式设置，可以是intelligent|direct|parent三者之一。<br />默认是:intelligent。<br />每个值的含义如下:<br /><code>--intelligent=direct</code>，不在blocked里面的目标都直连。<br /><code>--intelligent=parent</code>，不在direct里面的目标都走上级。<br /><code>--intelligent=intelligent</code>，blocked和direct里面都没有的目标，智能判断是否使用上级访问目标。 </p>
                        <h3 id="_119-查看帮助"><a href="#/?id=_119-%e6%9f%a5%e7%9c%8b%e5%b8%ae%e5%8a%a9" data-id="_119-查看帮助" class="anchor"><span>1.19 查看帮助</span></a></h3>
                        <p><code>proxy help http</code> </p>
                        <h2 id="_2tcp代理"><a href="#/?id=_2tcp%e4%bb%a3%e7%90%86" data-id="_2tcp代理" class="anchor"><span>2.TCP代理</span></a></h2>
                        <h3 id="_21-普通一级tcp代理"><a href="#/?id=_21-%e6%99%ae%e9%80%9a%e4%b8%80%e7%ba%a7tcp%e4%bb%a3%e7%90%86" data-id="_21-普通一级tcp代理" class="anchor"><span>2.1 普通一级TCP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-1.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-1.png" alt="2.1" /><br />本地执行:<br /><code>proxy tcp -p &quot;:33080&quot; -T tcp -P &quot;192.168.22.33:22&quot;</code><br />那么访问本地33080端口就是访问192.168.22.33的22端口。 </p>
                        <p><code>-p</code>参数支持的写法：</p>
                        <pre v-pre="" data-lang="text"><code class="lang-text">  -p &quot;:8081&quot;  监听8081
  -p &quot;:8081,:8082&quot;  监听8081和8082
  -p &quot;:8081,:8082,:9000-9999&quot; 监听8081和8082以及9000,9001至9999，共1002个端口</code></pre>
                        <p>如果本地监听端口数量大于1，那么将会连接与本地端口一致的对应上级端口，忽略<code>-P</code>里面的端口。</p>
                        <p>如果需要所有端口进来的连接，都连接到上级指定端口，可以加上参数<code>--lock-port</code>。</p>
                        <p>比如：</p>
                        <p><code>proxy tcp -p &quot;:33080-33085&quot; -T tcp -P &quot;192.168.22.33:0&quot;</code> </p>
                        <p>那么<code>33080</code>端口进来的连接，将会连接192.168.22.33的<code>33080</code>端口，其它端口以此类推，本地和上级端口一致，此时参数<code>-P</code>里面的端口用<code>0</code>。</p>
                        <p>如果想无论是<code>33080</code>，<code>33081</code>等端口进来的连接都连接到192.168.22.33的<code>22</code>端口，可以加上参数<code>--lock-port</code></p>
                        <p><code>proxy tcp -p &quot;:33080-33085&quot; -T tcp -P &quot;192.168.22.33:22&quot; --lock-port</code> </p>
                        <h3 id="_22-普通二级tcp代理"><a href="#/?id=_22-%e6%99%ae%e9%80%9a%e4%ba%8c%e7%ba%a7tcp%e4%bb%a3%e7%90%86" data-id="_22-普通二级tcp代理" class="anchor"><span>2.2 普通二级TCP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-2.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-2.png" alt="2.2" /><br />VPS(IP:22.22.22.33)执行:<br /><code>proxy tcp -p &quot;:33080&quot; -T tcp -P &quot;127.0.0.1:8080&quot;</code><br />本地执行:<br /><code>proxy tcp -p &quot;:23080&quot; -T tcp -P &quot;22.22.22.33:33080&quot;</code><br />那么访问本地23080端口就是访问22.22.22.33的8080端口。 </p>
                        <h3 id="_23-普通三级tcp代理"><a href="#/?id=_23-%e6%99%ae%e9%80%9a%e4%b8%89%e7%ba%a7tcp%e4%bb%a3%e7%90%86" data-id="_23-普通三级tcp代理" class="anchor"><span>2.3 普通三级TCP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-3.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-3.png" alt="2.3" /><br />一级TCP代理VPS_01，IP:22.22.22.22<br /><code>proxy tcp -p &quot;:38080&quot; -T tcp -P &quot;66.66.66.66:8080&quot;</code><br />二级TCP代理VPS_02，IP:33.33.33.33<br /><code>proxy tcp -p &quot;:28080&quot; -T tcp -P &quot;22.22.22.22:38080&quot;</code><br />三级TCP代理(本地)<br /><code>proxy tcp -p &quot;:8080&quot; -T tcp -P &quot;33.33.33.33:28080&quot;</code><br />那么访问本地8080端口就是通过加密TCP隧道访问66.66.66.66的8080端口。 </p>
                        <h3 id="_24-加密二级tcp代理"><a href="#/?id=_24-%e5%8a%a0%e5%af%86%e4%ba%8c%e7%ba%a7tcp%e4%bb%a3%e7%90%86" data-id="_24-加密二级tcp代理" class="anchor"><span>2.4 加密二级TCP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-tls-2.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-tls-2.png" alt="2.4" /><br />VPS(IP:22.22.22.33)执行:<br /><code>proxy tcp -t tls -p &quot;:33080&quot; -T tcp -P &quot;127.0.0.1:8080&quot; -C proxy.crt -K proxy.key</code><br />本地执行:<br /><code>proxy tcp -p &quot;:23080&quot; -T tls -P &quot;22.22.22.33:33080&quot; -C proxy.crt -K proxy.key</code><br />那么访问本地23080端口就是通过加密TCP隧道访问22.22.22.33的8080端口。 </p>
                        <h3 id="_25-加密三级tcp代理"><a href="#/?id=_25-%e5%8a%a0%e5%af%86%e4%b8%89%e7%ba%a7tcp%e4%bb%a3%e7%90%86" data-id="_25-加密三级tcp代理" class="anchor"><span>2.5 加密三级TCP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-tls-3.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/tcp-tls-3.png" alt="2.5" /><br />一级TCP代理VPS_01，IP:22.22.22.22<br /><code>proxy tcp -t tls -p &quot;:38080&quot; -T tcp -P &quot;66.66.66.66:8080&quot; -C proxy.crt -K proxy.key</code><br />二级TCP代理VPS_02，IP:33.33.33.33<br /><code>proxy tcp -t tls -p &quot;:28080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code><br />三级TCP代理(本地)<br /><code>proxy tcp -p &quot;:8080&quot; -T tls -P &quot;33.33.33.33:28080&quot; -C proxy.crt -K proxy.key</code><br />那么访问本地8080端口就是通过加密TCP隧道访问66.66.66.66的8080端口。 </p>
                        <h3 id="_26-通过代理连接上级"><a href="#/?id=_26-%e9%80%9a%e8%bf%87%e4%bb%a3%e7%90%86%e8%bf%9e%e6%8e%a5%e4%b8%8a%e7%ba%a7" data-id="_26-通过代理连接上级" class="anchor"><span>2.6 通过代理连接上级</span></a></h3>
                        <p>有时候proxy所在的网络不能直接访问外网，需要通过一个https或者socks5代理才能上网，那么这个时候<br />-J参数就可以帮助你让proxy的tcp端口映射的时候通过https或者socks5代理去连接上级-P，将外部端口映射到本地。<br />-J参数格式如下: </p>
                        <p>https代理写法:<br />代理需要认证，用户名:username 密码:password<br /><a href="https://username:password@host:port" target="_blank">https://username:password@host:port</a><br />代理不需要认证<br /><a href="https://host:port" target="_blank">https://host:port</a> </p>
                        <p>socks5代理写法:<br />代理需要认证，用户名:username 密码:password<br />socks5://username:password@host:port<br />代理不需要认证<br />socks5://host:port </p>
                        <p>host:代理的IP或者域名<br />port:代理的端口 </p>
                        <h3 id="_27-指定出口ip"><a href="#/?id=_27-%e6%8c%87%e5%ae%9a%e5%87%ba%e5%8f%a3ip" data-id="_27-指定出口ip" class="anchor"><span>2.7 指定出口IP</span></a></h3>
                        <p>当TCP代理当上级类型（参数：-T）是tcp当时候，支持指定<code>出口IP</code>。使用<code>--bind-listen</code>参数，就可以开启客户端用<code>入口IP</code>连接过来的，就用<code>入口IP</code>作为<code>出口IP</code>访问目标网站的功能。如果绑定了不正确的IP会导致代理不能工作，此时代理会尝试不绑定IP去访问目标，同时日志会提示。 </p>
                        <p><code>proxy tcp -p &quot;:33080&quot; -T tcp -P &quot;192.168.22.33:22&quot; -B</code> </p>
                        <h3 id="_28-限速，限制连接数"><a href="#/?id=_28-%e9%99%90%e9%80%9f%ef%bc%8c%e9%99%90%e5%88%b6%e8%bf%9e%e6%8e%a5%e6%95%b0" data-id="_28-限速，限制连接数" class="anchor"><span>2.8 限速，限制连接数</span></a></h3>
                        <p>参数<code>--max-conns</code>可以限制每个端口的最大连接数。<br />比如限制每个端口最多1000个连接数：<br /><code>proxy tcp -p &quot;:33080&quot; -T tcp -P &quot;192.168.22.33:22&quot; --max-conns 1000</code><br />参数<code>--rate-limit</code>可以限制每个tcp连接的速率。<br />比如限制每个tcp连接速率为100k/s：<br /><code>proxy tcp -p &quot;:33080&quot; -T tcp -P &quot;192.168.22.33:22&quot; --rate-limit 100k</code> </p>
                        <h3 id="_29-压缩传输"><a href="#/?id=_29-%e5%8e%8b%e7%bc%a9%e4%bc%a0%e8%be%93" data-id="_29-压缩传输" class="anchor"><span>2.9 压缩传输</span></a></h3>
                        <p><code>--c</code>控制本地和客户端之间是否压缩传输，默认false；<code>--C</code>控制本地和上级之间是否压缩传输，默认false。 </p>
                        <p>示例：</p>
                        <p>VPS(IP:22.22.22.33)执行:<br /><code>proxy tcp -t tcp --c -p &quot;:33080&quot; -T tcp -P &quot;127.0.0.1:8080&quot;</code><br />本地执行:<br /><code>proxy tcp -t tcp -p &quot;:23080&quot; -T tcp -P &quot;22.22.22.33:33080&quot; --C</code> </p>
                        <h3 id="_210-查看帮助"><a href="#/?id=_210-%e6%9f%a5%e7%9c%8b%e5%b8%ae%e5%8a%a9" data-id="_210-查看帮助" class="anchor"><span>2.10 查看帮助</span></a></h3>
                        <p><code>proxy help tcp</code> </p>
                        <h2 id="_3udp代理"><a href="#/?id=_3udp%e4%bb%a3%e7%90%86" data-id="_3udp代理" class="anchor"><span>3.UDP代理</span></a></h2>
                        <h3 id="_31普通一级udp代理"><a href="#/?id=_31%e6%99%ae%e9%80%9a%e4%b8%80%e7%ba%a7udp%e4%bb%a3%e7%90%86" data-id="_31普通一级udp代理" class="anchor"><span>3.1.普通一级UDP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/udp-1.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/udp-1.png" alt="3.1" /><br />本地执行:<br /><code>proxy udp -p &quot;:5353&quot; -T udp -P &quot;8.8.8.8:53&quot;</code><br />那么访问本地UDP:5353端口就是访问8.8.8.8的UDP:53端口。 </p>
                        <p><code>-p</code>参数支持的写法：</p>
                        <pre v-pre="" data-lang="text"><code class="lang-text">  -p &quot;:8081&quot;  监听8081
  -p &quot;:8081,:8082&quot;  监听8081和8082
  -p &quot;:8081,:8082,:9000-9999&quot; 监听8081和8082以及9000,9001至9999，共1002个端口</code></pre>
                        <p>如果本地监听端口数量大于1，那么将会连接与本地端口一致的对应上级端口，忽略<code>-P</code>里面的端口。</p>
                        <p>如果需要所有端口进来的连接，都连接到上级指定端口，可以加上参数<code>--lock-port</code>。</p>
                        <p>比如：</p>
                        <p><code>proxy udp -p &quot;:33080-33085&quot; -T udp -P &quot;192.168.22.33:0&quot;</code> </p>
                        <p>那么<code>33080</code>端口进来的连接，将会连接192.168.22.33的<code>33080</code>端口，其它端口以此类推，本地和上级端口一致，此时参数<code>-P</code>里面的端口用<code>0</code>。</p>
                        <p>如果想无论是<code>33080</code>，<code>33081</code>等端口进来的连接都连接到192.168.22.33的<code>2222</code>端口，可以加上参数<code>--lock-port</code></p>
                        <p><code>proxy udp -p &quot;:33080-33085&quot; -T udp -P &quot;192.168.22.33:2222&quot; --lock-port</code> </p>
                        <h3 id="_32普通二级udp代理"><a href="#/?id=_32%e6%99%ae%e9%80%9a%e4%ba%8c%e7%ba%a7udp%e4%bb%a3%e7%90%86" data-id="_32普通二级udp代理" class="anchor"><span>3.2.普通二级UDP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/udp-2.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/udp-2.png" alt="3.2" /><br />VPS(IP:22.22.22.33)执行:<br /><code>proxy tcp -p &quot;:33080&quot; -T udp -P &quot;8.8.8.8:53&quot;</code><br />本地执行:<br /><code>proxy udp -p &quot;:5353&quot; -T tcp -P &quot;22.22.22.33:33080&quot;</code><br />那么访问本地UDP:5353端口就是通过TCP隧道，通过VPS访问8.8.8.8的UDP:53端口。 </p>
                        <h3 id="_33普通三级udp代理"><a href="#/?id=_33%e6%99%ae%e9%80%9a%e4%b8%89%e7%ba%a7udp%e4%bb%a3%e7%90%86" data-id="_33普通三级udp代理" class="anchor"><span>3.3.普通三级UDP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/udp-3.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/udp-3.png" alt="3.3" /><br />一级TCP代理VPS_01，IP:22.22.22.22<br /><code>proxy tcp -p &quot;:38080&quot; -T udp -P &quot;8.8.8.8:53&quot;</code><br />二级TCP代理VPS_02，IP:33.33.33.33<br /><code>proxy tcp -p &quot;:28080&quot; -T tcp -P &quot;22.22.22.22:38080&quot;</code><br />三级TCP代理(本地)<br /><code>proxy udp -p &quot;:5353&quot; -T tcp -P &quot;33.33.33.33:28080&quot;</code><br />那么访问本地5353端口就是通过TCP隧道，通过VPS访问8.8.8.8的53端口。 </p>
                        <h3 id="_34加密二级udp代理"><a href="#/?id=_34%e5%8a%a0%e5%af%86%e4%ba%8c%e7%ba%a7udp%e4%bb%a3%e7%90%86" data-id="_34加密二级udp代理" class="anchor"><span>3.4.加密二级UDP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/udp-tls-2.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/udp-tls-2.png" alt="3.4" /><br />VPS(IP:22.22.22.33)执行:<br /><code>proxy tcp -t tls -p &quot;:33080&quot; -T udp -P &quot;8.8.8.8:53&quot; -C proxy.crt -K proxy.key</code><br />本地执行:<br /><code>proxy udp -p &quot;:5353&quot; -T tls -P &quot;22.22.22.33:33080&quot; -C proxy.crt -K proxy.key</code><br />那么访问本地UDP:5353端口就是通过加密TCP隧道，通过VPS访问8.8.8.8的UDP:53端口。 </p>
                        <h3 id="_35加密三级udp代理"><a href="#/?id=_35%e5%8a%a0%e5%af%86%e4%b8%89%e7%ba%a7udp%e4%bb%a3%e7%90%86" data-id="_35加密三级udp代理" class="anchor"><span>3.5.加密三级UDP代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/udp-tls-3.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/udp-tls-3.png" alt="3.5" /><br />一级TCP代理VPS_01，IP:22.22.22.22<br /><code>proxy tcp -t tls -p &quot;:38080&quot; -T udp -P &quot;8.8.8.8:53&quot; -C proxy.crt -K proxy.key</code><br />二级TCP代理VPS_02，IP:33.33.33.33<br /><code>proxy tcp -t tls -p &quot;:28080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code><br />三级TCP代理(本地)<br /><code>proxy udp -p &quot;:5353&quot; -T tls -P &quot;33.33.33.33:28080&quot; -C proxy.crt -K proxy.key</code><br />那么访问本地5353端口就是通过加密TCP隧道，通过VPS_01访问8.8.8.8的53端口。 </p>
                        <h3 id="_36-指定出口ip"><a href="#/?id=_36-%e6%8c%87%e5%ae%9a%e5%87%ba%e5%8f%a3ip" data-id="_36-指定出口ip" class="anchor"><span>3.6 指定出口IP</span></a></h3>
                        <p>当UDP代理当上级类型（参数：-T）是udp当时候，支持指定<code>出口IP</code>。使用<code>--bind-listen</code>参数，就可以开启客户端用<code>入口IP</code>连接过来的，就用<code>入口IP</code>作为<code>出口IP</code>访问目标的功能。如果绑定了不正确的IP会导致代理不能工作。 </p>
                        <p><code>proxy udp -p &quot;:33080&quot; -T udp -P &quot;192.168.22.33:2222&quot; -B</code> </p>
                        <h3 id="_37-查看帮助"><a href="#/?id=_37-%e6%9f%a5%e7%9c%8b%e5%b8%ae%e5%8a%a9" data-id="_37-查看帮助" class="anchor"><span>3.7 查看帮助</span></a></h3>
                        <p><code>proxy help udp</code> </p>
                        <h2 id="_4内网穿透"><a href="#/?id=_4%e5%86%85%e7%bd%91%e7%a9%bf%e9%80%8f" data-id="_4内网穿透" class="anchor"><span>4.内网穿透</span></a></h2>
                        <h3 id="_41、原理说明"><a href="#/?id=_41%e3%80%81%e5%8e%9f%e7%90%86%e8%af%b4%e6%98%8e" data-id="_41、原理说明" class="anchor"><span>4.1、原理说明</span></a></h3>
                        <p>内网穿透，分为两个版本，“多链接版本”和“多路复用版本”，一般像web服务这种不是长时间连接的服务建议用“多链接版本”，如果是要保持长时间连接建议使用“多路复用版本”。 </p>
                        <ol>
                            <li>多链接版本，对应的子命令是tserver，tclient，tbridge。 </li>
                            <li>多路复用版本，对应的子命令是server，client，bridge。 </li>
                            <li>多链接版本和多路复用版本的参数和使用方式完全一样。 </li>
                            <li>多路复用版本的server，client可以开启压缩传输，参数是--c。 </li>
                            <li>server，client要么都开启压缩，要么都不开启，不能只开一个。 </li>
                        </ol>
                        <p>下面的教程以“多路复用版本”为例子，说明使用方法。<br />内网穿透由三部分组成:client端，server端，bridge端；client和server主动连接bridge端进行桥接。 </p>
                        <h3 id="_42、tcp普通用法"><a href="#/?id=_42%e3%80%81tcp%e6%99%ae%e9%80%9a%e7%94%a8%e6%b3%95" data-id="_42、tcp普通用法" class="anchor"><span>4.2、TCP普通用法</span></a></h3>
                        <p>背景: </p>
                        <ul>
                            <li>公司机器A提供了web服务80端口 </li>
                            <li>有VPS一个，公网IP:22.22.22.22 </li>
                        </ul>
                        <p>需求:<br />在家里能够通过访问VPS的28080端口访问到公司机器A的80端口 </p>
                        <p>步骤: </p>
                        <ol>
                            <li><p>在vps上执行<br /><code>proxy bridge -p &quot;:33080&quot; -C proxy.crt -K proxy.key</code><br /><code>proxy server -r &quot;:28080@:80&quot; -P &quot;127.0.0.1:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>在公司机器A上面执行<br /><code>proxy client -P &quot;22.22.22.22:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>完成 </p></li>
                        </ol>
                        <h3 id="_43、微信接口本地开发"><a href="#/?id=_43%e3%80%81%e5%be%ae%e4%bf%a1%e6%8e%a5%e5%8f%a3%e6%9c%ac%e5%9c%b0%e5%bc%80%e5%8f%91" data-id="_43、微信接口本地开发" class="anchor"><span>4.3、微信接口本地开发</span></a></h3>
                        <p>背景: </p>
                        <ul>
                            <li>自己的笔记本提供了nginx服务80端口 </li>
                            <li>有VPS一个，公网IP:22.22.22.22 </li>
                        </ul>
                        <p>需求:<br />在微信的开发帐号的网页回调接口配置里面填写地址:<a href="http://22.22.22.22/calback.php" target="_blank">http://22.22.22.22/calback.php</a><br />然后就可以访问到笔记本的80端口下面的calback.php，如果需要绑定域名，可以用自己的域名<br />比如:wx-dev.xxx.com解析到22.22.22.22，然后在自己笔记本的nginx里<br />配置域名wx-dev.xxx.com到具体的目录即可。 </p>
                        <p>步骤: </p>
                        <ol>
                            <li><p>在vps上执行，确保vps的80端口没被其它程序占用。<br /><code>proxy bridge -p &quot;:33080&quot; -C proxy.crt -K proxy.key</code><br /><code>proxy server -r &quot;:80@:80&quot; -P &quot;22.22.22.22:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>在自己笔记本上面执行<br /><code>proxy client -P &quot;22.22.22.22:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>完成 </p></li>
                        </ol>
                        <h3 id="_44、udp普通用法"><a href="#/?id=_44%e3%80%81udp%e6%99%ae%e9%80%9a%e7%94%a8%e6%b3%95" data-id="_44、udp普通用法" class="anchor"><span>4.4、UDP普通用法</span></a></h3>
                        <p>背景: </p>
                        <ul>
                            <li>公司机器A提供了DNS解析服务，UDP:53端口 </li>
                            <li>有VPS一个，公网IP:22.22.22.22 </li>
                        </ul>
                        <p>需求:<br />在家里能够通过设置本地dns为22.22.22.22，使用公司机器A进行域名解析服务。 </p>
                        <p>步骤: </p>
                        <ol>
                            <li><p>在vps上执行<br /><code>proxy bridge -p &quot;:33080&quot; -C proxy.crt -K proxy.key</code><br /><code>proxy server --udp -r &quot;:53@:53&quot; -P &quot;127.0.0.1:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>在公司机器A上面执行<br /><code>proxy client -P &quot;22.22.22.22:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>完成 </p></li>
                        </ol>
                        <h3 id="_45、高级用法一"><a href="#/?id=_45%e3%80%81%e9%ab%98%e7%ba%a7%e7%94%a8%e6%b3%95%e4%b8%80" data-id="_45、高级用法一" class="anchor"><span>4.5、高级用法一</span></a></h3>
                        <p>背景: </p>
                        <ul>
                            <li>公司机器A提供了web服务80端口 </li>
                            <li>有VPS一个，公网IP:22.22.22.22 </li>
                        </ul>
                        <p>需求:<br />为了安全，不想在VPS上能够访问到公司机器A，在家里能够通过访问本机的28080端口，<br />通过加密隧道访问到公司机器A的80端口。 </p>
                        <p>步骤: </p>
                        <ol>
                            <li><p>在vps上执行<br /><code>proxy bridge -p &quot;:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>在公司机器A上面执行<br /><code>proxy client -P &quot;22.22.22.22:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>在家里电脑上执行<br /><code>proxy server -r &quot;:28080@:80&quot; -P &quot;22.22.22.22:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>完成 </p></li>
                        </ol>
                        <h3 id="_46、高级用法二"><a href="#/?id=_46%e3%80%81%e9%ab%98%e7%ba%a7%e7%94%a8%e6%b3%95%e4%ba%8c" data-id="_46、高级用法二" class="anchor"><span>4.6、高级用法二</span></a></h3>
                        <p>提示:<br />如果同时有多个client连接到同一个bridge，需要指定不同的key，可以通过--k参数设定，--k可以是任意唯一字符串，<br />只要在同一个bridge上唯一即可。<br />server连接到bridge的时候，如果同时有多个client连接到同一个bridge，需要使用--k参数选择client。<br />暴露多个端口重复-r参数即可.-r格式是:&quot;本地IP:本地端口@clientHOST:client端口&quot;。 </p>
                        <p>背景: </p>
                        <ul>
                            <li>公司机器A提供了web服务80端口，ftp服务21端口 </li>
                            <li>有VPS一个，公网IP:22.22.22.22 </li>
                        </ul>
                        <p>需求:<br />在家里能够通过访问VPS的28080端口访问到公司机器A的80端口<br />在家里能够通过访问VPS的29090端口访问到公司机器A的21端口 </p>
                        <p>步骤: </p>
                        <ol>
                            <li><p>在vps上执行<br /><code>proxy bridge -p &quot;:33080&quot; -C proxy.crt -K proxy.key</code><br /><code>proxy server -r &quot;:28080@:80&quot; -r &quot;:29090@:21&quot; --k test -P &quot;127.0.0.1:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>在公司机器A上面执行<br /><code>proxy client --k test -P &quot;22.22.22.22:33080&quot; -C proxy.crt -K proxy.key</code> </p></li>
                            <li><p>完成 </p></li>
                        </ol>
                        <h3 id="_47server的-r参数"><a href="#/?id=_47server%e7%9a%84-r%e5%8f%82%e6%95%b0" data-id="_47server的-r参数" class="anchor"><span>4.7.server的-r参数</span></a></h3>
                        <p>-r完整格式是:<code>PROTOCOL://LOCAL_IP:LOCAL_PORT@[CLIENT_KEY]CLIENT_LOCAL_HOST:CLIENT_LOCAL_PORT</code> </p>
                        <p>4.7.1.协议PROTOCOL:tcp、udp、ptcp、pudp。<br />比如: <code>-r &quot;udp://:10053@:53&quot; -r &quot;tcp://:10800@:1080&quot; -r &quot;:8080@:80&quot;</code><br />如果指定了--udp参数，PROTOCOL默认为udp，那么:<code>-r &quot;:8080@:80&quot;</code>默认为udp;<br />如果没有指定--udp参数，PROTOCOL默认为tcp，那么:<code>-r &quot;:8080@:80&quot;</code>默认为tcp; </p>
                        <p>4.7.2.CLIENT_KEY:默认是default。<br />比如: -r &quot;udp://:10053@[test1]:53&quot; -r &quot;tcp://:10800@[test2]:1080&quot; -r &quot;:8080@:80&quot;<br />如果指定了--k参数，比如--k test，那么:<code>-r &quot;:8080@:80&quot;</code>CLIENT_KEY默认为test;<br />如果没有指定--k参数，那么:<code>-r &quot;:8080@:80&quot;</code>CLIENT_KEY默认为default; </p>
                        <p>4.7.3.LOCAL_IP为空默认是:<code>0.0.0.0</code>，CLIENT_LOCAL_HOST为空默认是:<code>127.0.0.1</code>; </p>
                        <h3 id="_48server和client通过代理连接bridge"><a href="#/?id=_48server%e5%92%8cclient%e9%80%9a%e8%bf%87%e4%bb%a3%e7%90%86%e8%bf%9e%e6%8e%a5bridge" data-id="_48server和client通过代理连接bridge" class="anchor"><span>4.8.server和client通过代理连接bridge</span></a></h3>
                        <p>有时候server或者client所在的网络不能直接访问外网，需要通过一个https或者socks5代理才能上网，那么这个时候<br />-J参数就可以帮助你让server或者client通过https或者socks5代理去连接bridge。<br />-J参数格式如下: </p>
                        <p>https代理写法:<br />代理需要认证，用户名:username 密码:password<br /><a href="https://username:password@host:port" target="_blank">https://username:password@host:port</a><br />代理不需要认证<br /><a href="https://host:port" target="_blank">https://host:port</a> </p>
                        <p>socks5代理写法:<br />代理需要认证，用户名:username 密码:password<br />socks5://username:password@host:port<br />代理不需要认证<br />socks5://host:port </p>
                        <p>host:代理的IP或者域名<br />port:代理的端口 </p>
                        <h3 id="_49内网穿透http服务"><a href="#/?id=_49%e5%86%85%e7%bd%91%e7%a9%bf%e9%80%8fhttp%e6%9c%8d%e5%8a%a1" data-id="_49内网穿透http服务" class="anchor"><span>4.9.内网穿透HTTP服务</span></a></h3>
                        <p>通常HTTP请求客户端会使用server的ip和端口去设置HOST字段，但是与期望的后端实际HOST不一样，这样就造成了tcp是通的， 但后端依赖HOST字段定位虚拟主机就不能工作.现在用<code>--http-host</code>参数强制设置http头部的HOST字段值为后端实际的域名和端口即可轻松解决,另外使用了<code>--http-host</code>参数之后,会在每个HTTP请求的头部增加两个头部 <code>X-Forwarded-For</code> 和 <code>X-Real-IP</code> 值是客户端IP, 这样后端http服务就能方便的获取用户端真实IP地址。 </p>
                        <p><code>server</code>的--http-host参数格式如下: </p>
                        <p><code>--http-host www.test.com:80@2200</code>，如果server监听多个端口，只需要重复<code>--http-host</code>参数设置每个端口的HOST即可。 </p>
                        <p>实例: </p>
                        <p>比如client本地nginx，127.0.0.1:80提供了web服务，其中绑定了一个域名<code>local.com</code>。 </p>
                        <p>那么server的启动参数可以如下: </p>
                        <p><code>proxy server -P :30000 -r :2500@127.0.0.1:80 --http-host local.com@2500</code> </p>
                        <p>解释: </p>
                        <p><code>-r :2500@127.0.0.1:80</code> 和 <code>--http-host local.com:80@2500</code> 里面的2500端口是server本地监听的端口 </p>
                        <p>当使用http协议请求server的ip:2500端口的时候，http的头部HOST字段就会被设置为<code>local.com</code>。 </p>
                        <p>另外只有设置了<code>--http-host</code>参数</p>
                        <h3 id="_410-关于流量统计"><a href="#/?id=_410-%e5%85%b3%e4%ba%8e%e6%b5%81%e9%87%8f%e7%bb%9f%e8%ae%a1" data-id="_410-关于流量统计" class="anchor"><span>4.10 关于流量统计</span></a></h3>
                        <p>如果单独启动一个server对接上级是proxy-admin控制面板，需要在上级控制面板里面新建一个映射，获得个映射规则的ID， </p>
                        <p>然后启动server的时候加上参数 --server-id=映射规则的ID 才能统计到流量。 </p>
                        <h3 id="_411-关于p2p"><a href="#/?id=_411-%e5%85%b3%e4%ba%8ep2p" data-id="_411-关于p2p" class="anchor"><span>4.11 关于p2p</span></a></h3>
                        <p>内网穿透支持在server和client网络情况满足的情况下，server和client之间通过p2p直接连接，开启方法是： </p>
                        <p>在启动bridge，server，client到时候都加上<code>--p2p</code>参数即可。server的-r参数可以针对端口是否启用p2p（ptcp和pudp）。 </p>
                        <p>如果server和client之间p2p打洞失败，那么会自动切换使用bridge中转传输数据。 </p>
                        <h3 id="_412-客户端key白名单"><a href="#/?id=_412-%e5%ae%a2%e6%88%b7%e7%ab%afkey%e7%99%bd%e5%90%8d%e5%8d%95" data-id="_412-客户端key白名单" class="anchor"><span>4.12 客户端key白名单</span></a></h3>
                        <p>内网穿透bridge可以设置客户端key白名单，参数是--client-keys，格式可以是： </p>
                        <p>a.文件名,文件内容一行一个客户端key只能包含数字字母下划线，也就是客户端启动参数--k的值，只有客户端key在此白名单的客户端才能连接。# 开头的行，为注释。 </p>
                        <p>b.“base64://”开头的base64编码的上面a说明的文件内容，比如：base64://ajfpoajsdfa= </p>
                        <p>c.”str://“开头的英文逗号分割的多个key，比如：str://default,company,school </p>
                        <p>默认是空，允许所有key。 </p>
                        <h3 id="_413-网络nat类型判断"><a href="#/?id=_413-%e7%bd%91%e7%bb%9cnat%e7%b1%bb%e5%9e%8b%e5%88%a4%e6%96%ad" data-id="_413-网络nat类型判断" class="anchor"><span>4.13 网络NAT类型判断</span></a></h3>
                        <p>nat类型判断,方便查看网络是否支持p2p，可以执行：<code>proxy tools -a nattype</code> </p>
                        <h3 id="_414-查看帮助"><a href="#/?id=_414-%e6%9f%a5%e7%9c%8b%e5%b8%ae%e5%8a%a9" data-id="_414-查看帮助" class="anchor"><span>4.14 查看帮助</span></a></h3>
                        <p><code>proxy help bridge</code><br /><code>proxy help server</code><br /><code>proxy help client</code> </p>
                        <h2 id="_5socks5代理"><a href="#/?id=_5socks5%e4%bb%a3%e7%90%86" data-id="_5socks5代理" class="anchor"><span>5.SOCKS5代理</span></a></h2>
                        <p>提示: </p>
                        <p>SOCKS5代理，支持CONNECT，UDP协议，不支持BIND，支持用户名密码认证。 </p>
                        <p><strong><em>如果你的VPS是阿里云，腾讯云这种VPS，就是ifconfig看不见你的公网IP，只能看见内网IP，</em></strong> </p>
                        <p><strong><em>那么需要加上<code>-g VPS公网IP</code>参数，SOCKS5代理的UDP功能才能正常工作。</em></strong> </p>
                        <h3 id="_51-普通socks5代理"><a href="#/?id=_51-%e6%99%ae%e9%80%9asocks5%e4%bb%a3%e7%90%86" data-id="_51-普通socks5代理" class="anchor"><span>5.1 普通SOCKS5代理</span></a></h3>
                        <p><code>proxy socks -t tcp -p &quot;0.0.0.0:38080&quot;</code> </p>
                        <p>-p参数支持的写法：</p>
                        <pre v-pre="" data-lang="text"><code class="lang-text">  -p &quot;:8081&quot;  监听8081
  -p &quot;:8081,:8082&quot;  监听8081和8082
  -p &quot;:8081,:8082,:9000-9999&quot; 监听8081和8082以及9000,9001至9999，共1002个端口</code></pre>
                        <h3 id="_52普通二级socks5代理"><a href="#/?id=_52%e6%99%ae%e9%80%9a%e4%ba%8c%e7%ba%a7socks5%e4%bb%a3%e7%90%86" data-id="_52普通二级socks5代理" class="anchor"><span>5.2.普通二级SOCKS5代理</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/socks-2.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/socks-2.png" alt="5.2" /><br />使用本地端口8090，假设上级SOCKS5代理是<code>22.22.22.22:8080</code><br /><code>proxy socks -t tcp -p &quot;0.0.0.0:8090&quot; -T tcp -P &quot;22.22.22.22:8080&quot;</code><br />我们还可以指定网站域名的黑白名单文件，一行一个域名，匹配规则是最右匹配，比如:baidu.com，匹配的是<em>.</em>.baidu.com，黑名单的域名域名直接走上级代理，白名单的域名不走上级代理;如果域名即在黑名单又在白名单中，那么黑名单起作用。<br /><code>proxy socks -p &quot;0.0.0.0:8090&quot; -T tcp -P &quot;22.22.22.22:8080&quot; -b blocked.txt -d direct.txt</code> </p>
                        <h3 id="_53socks二级代理加密"><a href="#/?id=_53socks%e4%ba%8c%e7%ba%a7%e4%bb%a3%e7%90%86%e5%8a%a0%e5%af%86" data-id="_53socks二级代理加密" class="anchor"><span>5.3.SOCKS二级代理(加密)</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/socks-tls-2.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/socks-tls-2.png" alt="5.3" /><br />一级SOCKS代理(VPS，IP:22.22.22.22)<br /><code>proxy socks -t tls -p &quot;:38080&quot; -C proxy.crt -K proxy.key</code> </p>
                        <p>二级SOCKS代理(本地Linux)<br /><code>proxy socks -t tcp -p &quot;:8080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code><br />那么访问本地的8080端口就是访问VPS上面的代理端口38080。 </p>
                        <p>二级SOCKS代理(本地windows)<br /><code>proxy.exe socks -t tcp -p &quot;:8080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code><br />然后设置你的windos系统中，需要通过代理上网的程序的代理为socks5模式，地址为：127.0.0.1，端口为：8080，程序即可通过加密通道通过vps上网。 </p>
                        <h3 id="_54socks三级代理加密"><a href="#/?id=_54socks%e4%b8%89%e7%ba%a7%e4%bb%a3%e7%90%86%e5%8a%a0%e5%af%86" data-id="_54socks三级代理加密" class="anchor"><span>5.4.SOCKS三级代理(加密)</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/socks-tls-3.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/socks-tls-3.png" alt="5.4" /><br />一级SOCKS代理VPS_01，IP:22.22.22.22<br /><code>proxy socks -t tls -p &quot;:38080&quot; -C proxy.crt -K proxy.key</code><br />二级SOCKS代理VPS_02，IP:33.33.33.33<br /><code>proxy socks -t tls -p &quot;:28080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code><br />三级SOCKS代理(本地)<br /><code>proxy socks -t tcp -p &quot;:8080&quot; -T tls -P &quot;33.33.33.33:28080&quot; -C proxy.crt -K proxy.key</code><br />那么访问本地的8080端口就是访问一级SOCKS代理上面的代理端口38080。 </p>
                        <h3 id="_55socks代理流量强制走上级socks代理"><a href="#/?id=_55socks%e4%bb%a3%e7%90%86%e6%b5%81%e9%87%8f%e5%bc%ba%e5%88%b6%e8%b5%b0%e4%b8%8a%e7%ba%a7socks%e4%bb%a3%e7%90%86" data-id="_55socks代理流量强制走上级socks代理" class="anchor"><span>5.5.SOCKS代理流量强制走上级SOCKS代理</span></a></h3>
                        <p>默认情况下，proxy会智能判断一个网站域名是否无法访问，如果无法访问才走上级SOCKS代理.通过--always可以使全部SOCKS代理流量强制走上级SOCKS代理。<br /><code>proxy socks --always -t tls -p &quot;:28080&quot; -T tls -P &quot;22.22.22.22:38080&quot; -C proxy.crt -K proxy.key</code> </p>
                        <h3 id="_56socks通过ssh中转"><a href="#/?id=_56socks%e9%80%9a%e8%bf%87ssh%e4%b8%ad%e8%bd%ac" data-id="_56socks通过ssh中转" class="anchor"><span>5.6.SOCKS通过SSH中转</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/socks-ssh.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/socks-ssh.png" alt="5.6" /><br />说明:ssh中转的原理是利用了ssh的转发功能，就是你连接上ssh之后，可以通过ssh代理访问目标地址。<br />假设有:vps </p>
                        <ul>
                            <li>IP是2.2.2.2， ssh端口是22， ssh用户名是:user， ssh用户密码是:demo </li>
                            <li>用户user的ssh私钥名称是user.key </li>
                        </ul>
                        <h4 id="_561-ssh用户名和密码的方式"><a href="#/?id=_561-ssh%e7%94%a8%e6%88%b7%e5%90%8d%e5%92%8c%e5%af%86%e7%a0%81%e7%9a%84%e6%96%b9%e5%bc%8f" data-id="_561-ssh用户名和密码的方式" class="anchor"><span><em>5.6.1 ssh用户名和密码的方式</em></span></a></h4>
                        <p>本地SOCKS5代理28080端口，执行:<br /><code>proxy socks -T ssh -P &quot;2.2.2.2:22&quot; -u user -D demo -t tcp -p &quot;:28080&quot;</code> </p>
                        <h4 id="_562-ssh用户名和密钥的方式"><a href="#/?id=_562-ssh%e7%94%a8%e6%88%b7%e5%90%8d%e5%92%8c%e5%af%86%e9%92%a5%e7%9a%84%e6%96%b9%e5%bc%8f" data-id="_562-ssh用户名和密钥的方式" class="anchor"><span><em>5.6.2 ssh用户名和密钥的方式</em></span></a></h4>
                        <p>本地SOCKS5代理28080端口，执行:<br /><code>proxy socks -T ssh -P &quot;2.2.2.2:22&quot; -u user -S user.key -t tcp -p &quot;:28080&quot;</code> </p>
                        <p>那么访问本地的28080端口就是通过VPS访问目标地址。 </p>
                        <h3 id="_57认证"><a href="#/?id=_57%e8%ae%a4%e8%af%81" data-id="_57认证" class="anchor"><span>5.7.认证</span></a></h3>
                        <p>对于socks5代理协议我们可以进行用户名密码认证，认证的用户名和密码可以在命令行指定<br /><code>proxy socks -t tcp -p &quot;:33080&quot; -a &quot;user1:pass1&quot; -a &quot;user2:pass2&quot;</code><br />多个用户，重复-a参数即可。<br />也可以放在文件中，格式是一行一个&quot;用户名:密码&quot;，然后用-F指定。<br /><code>proxy socks -t tcp -p &quot;:33080&quot; -F auth-file.txt</code> </p>
                        <h3 id="_58kcp协议传输"><a href="#/?id=_58kcp%e5%8d%8f%e8%ae%ae%e4%bc%a0%e8%be%93" data-id="_58kcp协议传输" class="anchor"><span>5.8.KCP协议传输</span></a></h3>
                        <p>KCP协议需要--kcp-key参数设置一个密码用于加密解密数据 </p>
                        <p>一级HTTP代理(VPS，IP:22.22.22.22)<br /><code>proxy socks -t kcp -p &quot;:38080&quot; --kcp-key mypassword -g 22.22.22.22</code> </p>
                        <p>二级HTTP代理(本地Linux)<br /><code>proxy socks -t tcp -p &quot;:8080&quot; -T kcp -P &quot;22.22.22.22:38080&quot; --kcp-key mypassword</code><br />那么访问本地的8080端口就是访问VPS上面的代理端口38080，数据通过kcp协议传输。 </p>
                        <p>提示:</p>
                        <p>当本地使用kcp协议时,需要用-g指定vps公网IP,socks5的UDP功能才能正常使用.这时-g是返回给客户端的UDP地址中的IP地址.</p>
                        <h3 id="_59自定义dns"><a href="#/?id=_59%e8%87%aa%e5%ae%9a%e4%b9%89dns" data-id="_59自定义dns" class="anchor"><span>5.9.自定义DNS</span></a></h3>
                        <p>--dns-address和--dns-ttl参数，用于自己指定proxy访问域名的时候使用的dns（--dns-address）<br />以及解析结果缓存时间（--dns-ttl）秒数，避免系统dns对proxy的干扰，另外缓存功能还能减少dns解析时间提高访问速度。<br />比如：<br /><code>proxy socks -p &quot;:33080&quot; --dns-address &quot;8.8.8.8:53&quot; --dns-ttl 300</code> </p>
                        <h3 id="_510-自定义加密"><a href="#/?id=_510-%e8%87%aa%e5%ae%9a%e4%b9%89%e5%8a%a0%e5%af%86" data-id="_510-自定义加密" class="anchor"><span>5.10 自定义加密</span></a></h3>
                        <p>proxy的socks代理在tcp之上可以通过tls标准加密以及kcp协议加密tcp数据，除此之外还支持在tls和kcp之后进行自定义加密，也就是说自定义加密和tls|kcp是可以联合使用的，内部采用AES256加密，使用的时候只需要自己定义一个密码即可，<br />加密分为两个部分，一部分是本地(-z)是否加密解密，一部分是与上级(-Z)传输是否加密解密。 </p>
                        <p>自定义加密要求两端都是proxy才可以。 </p>
                        <p>下面分别用二级，三级为例: </p>
                        <p>二级实例<br />一级vps(ip:2.2.2.2)上执行:<br /><code>proxy socks -t tcp -z demo_password -p :7777</code><br />本地二级执行:<br /><code>proxy socks -T tcp -P 2.2.2.2:777 -Z demo_password -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级加密传输访问目标网站。 </p>
                        <p>三级实例<br />一级vps(ip:2.2.2.2)上执行:<br /><code>proxy socks -t tcp -z demo_password -p :7777</code><br />二级vps(ip:3.3.3.3)上执行:<br /><code>proxy socks -T tcp -P 2.2.2.2:7777 -Z demo_password -t tcp -z other_password -p :8888</code><br />本地三级执行:<br /><code>proxy socks -T tcp -P 3.3.3.3:8888 -Z other_password -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级加密传输访问目标网站。 </p>
                        <h3 id="_511-压缩传输"><a href="#/?id=_511-%e5%8e%8b%e7%bc%a9%e4%bc%a0%e8%be%93" data-id="_511-压缩传输" class="anchor"><span>5.11 压缩传输</span></a></h3>
                        <p>proxy的socks代理在tcp之上可以通过自定义加密和tls标准加密以及kcp协议加密tcp数据，在自定义加密之前还可以<br />对数据进行压缩，也就是说压缩功能和自定义加密和tls|kcp是可以联合使用的，压缩分为两个部分，<br />一部分是本地(-m)是否压缩传输，一部分是与上级(-M)传输是否压缩。 </p>
                        <p>压缩要求两端都是proxy才可以，压缩也在一定程度上保护了(加密)数据。 </p>
                        <p>下面分别用二级，三级为例: </p>
                        <p>二级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy socks -t tcp -m -p :7777</code><br />本地二级执行:<br /><code>proxy socks -T tcp -P 2.2.2.2:777 -M -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级压缩传输访问目标网站。 </p>
                        <p>三级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy socks -t tcp -m -p :7777</code><br />二级vps(ip:3.3.3.3)上执行:<br /><code>proxy socks -T tcp -P 2.2.2.2:7777 -M -t tcp -m -p :8888</code><br />本地三级执行:<br /><code>proxy socks -T tcp -P 3.3.3.3:8888 -M -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级压缩传输访问目标网站。 </p>
                        <h3 id="_512-负载均衡"><a href="#/?id=_512-%e8%b4%9f%e8%bd%bd%e5%9d%87%e8%a1%a1" data-id="_512-负载均衡" class="anchor"><span>5.12 负载均衡</span></a></h3>
                        <p>SOCKS代理支持上级负载均衡，多个上级重复-P参数即可。 </p>
                        <p><code>proxy socks --lb-method=hash -T tcp -P 1.1.1.1:33080 -P 2.1.1.1:33080 -P 3.1.1.1:33080 -p :33080 -t tcp</code> </p>
                        <h3 id="_5121-设置重试间隔和超时时间"><a href="#/?id=_5121-%e8%ae%be%e7%bd%ae%e9%87%8d%e8%af%95%e9%97%b4%e9%9a%94%e5%92%8c%e8%b6%85%e6%97%b6%e6%97%b6%e9%97%b4" data-id="_5121-设置重试间隔和超时时间" class="anchor"><span>5.12.1 设置重试间隔和超时时间</span></a></h3>
                        <p><code>proxy socks --lb-method=leastconn --lb-retrytime 300 --lb-timeout 300 -T tcp -P 1.1.1.1:33080 -P 2.1.1.1:33080 -P 3.1.1.1:33080 -p :33080 -t tcp</code> </p>
                        <h3 id="_5122-设置权重"><a href="#/?id=_5122-%e8%ae%be%e7%bd%ae%e6%9d%83%e9%87%8d" data-id="_5122-设置权重" class="anchor"><span>5.12.2 设置权重</span></a></h3>
                        <p><code>proxy socks --lb-method=weight -T tcp -P 1.1.1.1:33080?w=1 -P 2.1.1.1:33080?w=2 -P 3.1.1.1:33080?w=1 -p :33080 -t tcp</code> </p>
                        <h3 id="_5123-使用目标地址选择上级"><a href="#/?id=_5123-%e4%bd%bf%e7%94%a8%e7%9b%ae%e6%a0%87%e5%9c%b0%e5%9d%80%e9%80%89%e6%8b%a9%e4%b8%8a%e7%ba%a7" data-id="_5123-使用目标地址选择上级" class="anchor"><span>5.12.3 使用目标地址选择上级</span></a></h3>
                        <p><code>proxy socks --lb-hashtarget --lb-method=hash -T tcp -P 1.1.1.1:33080 -P 2.1.1.1:33080 -P 3.1.1.1:33080 -p :33080 -t tcp</code> </p>
                        <h3 id="_513-限速"><a href="#/?id=_513-%e9%99%90%e9%80%9f" data-id="_513-限速" class="anchor"><span>5.13 限速</span></a></h3>
                        <p>限速100K，通过<code>-l</code>参数即可指定，比如:100K 2000K 1M . 0意味着无限制。 </p>
                        <p><code>proxy socks -t tcp -p 2.2.2.2:33080 -l 100K</code> </p>
                        <h3 id="_514-指定出口ip"><a href="#/?id=_514-%e6%8c%87%e5%ae%9a%e5%87%ba%e5%8f%a3ip" data-id="_514-指定出口ip" class="anchor"><span>5.14 指定出口IP</span></a></h3>
                        <p><code>--bind-listen</code>参数，就可以开启客户端用<code>入口IP</code>连接过来的，就用<code>入口IP</code>作为<code>出口IP</code>访问目标网站的功能。如果<code>入口IP</code>是内网IP，<code>出口IP</code>不会使用<code>入口IP</code>。 </p>
                        <p><code>proxy socks -t tcp -p 2.2.2.2:33080 --bind-listen</code> </p>
                        <h3 id="_515-级联认证"><a href="#/?id=_515-%e7%ba%a7%e8%81%94%e8%ae%a4%e8%af%81" data-id="_515-级联认证" class="anchor"><span>5.15 级联认证</span></a></h3>
                        <p>SOCKS5支持级联认证，-A可以设置上级认证信息。 </p>
                        <p>上级: </p>
                        <p><code>proxy socks -t tcp -p 2.2.2.2:33080 -a user:pass</code> </p>
                        <p>本地: </p>
                        <p><code>proxy socks -T tcp -P 2.2.2.2:33080 -A user:pass -t tcp -p :33080</code> </p>
                        <p>请更多认证细节，请参考<code>9.API认证</code> 和 <code>10.本地认证</code> </p>
                        <h3 id="_516-证书参数使用base64数据"><a href="#/?id=_516-%e8%af%81%e4%b9%a6%e5%8f%82%e6%95%b0%e4%bd%bf%e7%94%a8base64%e6%95%b0%e6%8d%ae" data-id="_516-证书参数使用base64数据" class="anchor"><span>5.16 证书参数使用base64数据</span></a></h3>
                        <p>默认情况下-C，-K参数是crt证书和key文件的路径， </p>
                        <p>如果是base64://开头，那么就认为后面的数据是base64编码的，会解码后使用。 </p>
                        <h3 id="_517-智能模式"><a href="#/?id=_517-%e6%99%ba%e8%83%bd%e6%a8%a1%e5%bc%8f" data-id="_517-智能模式" class="anchor"><span>5.17 智能模式</span></a></h3>
                        <p>智能模式设置，可以是intelligent|direct|parent三者之一。<br />默认是:intelligent。<br />每个值的含义如下:<br /><code>--intelligent=direct</code>，不在blocked里面的目标都直连。<br /><code>--intelligent=parent</code>，不在direct里面的目标都走上级。<br /><code>--intelligent=intelligent</code>，blocked和direct里面都没有的目标，智能判断是否使用上级访问目标。 </p>
                        <h3 id="_518-固定udp功能端口"><a href="#/?id=_518-%e5%9b%ba%e5%ae%9audp%e5%8a%9f%e8%83%bd%e7%ab%af%e5%8f%a3" data-id="_518-固定udp功能端口" class="anchor"><span>5.18 固定UDP功能端口</span></a></h3>
                        <p>默认情况下socks5的UDP功能的端口号，proxy是按着<code>rfc1982草案</code>要求，使用协议握手过程中随机指定，不需要提前指定。</p>
                        <p>但是某些情况下，需要固定UDP功能端口，可以通过参数<code>--udp-port 端口号</code>用来固定UDP功能的端口号，比如：</p>
                        <p><code>proxy socks -t tcp -p &quot;0.0.0.0:38080&quot; --udp-port 38080</code> </p>
                        <h3 id="_519-查看帮助"><a href="#/?id=_519-%e6%9f%a5%e7%9c%8b%e5%b8%ae%e5%8a%a9" data-id="_519-查看帮助" class="anchor"><span>5.19 查看帮助</span></a></h3>
                        <p><code>proxy help socks</code> </p>
                        <h2 id="_6sps协议转换"><a href="#/?id=_6sps%e5%8d%8f%e8%ae%ae%e8%bd%ac%e6%8d%a2" data-id="_6sps协议转换" class="anchor"><span>6.SPS协议转换</span></a></h2>
                        <h3 id="_61-功能介绍"><a href="#/?id=_61-%e5%8a%9f%e8%83%bd%e4%bb%8b%e7%bb%8d" data-id="_61-功能介绍" class="anchor"><span>6.1 功能介绍</span></a></h3>
                        <p>代理协议转换使用的是sps子命令，sps可以把已经存在的http(s)代理或者socks5代理或ss代理转换为一个端口同时支持http(s)和socks5和ss的代理，而且http(s)代理支持正向代理和反向代理(SNI)，转换后的SOCKS5代理，当上级是SOCKS5或者SS时仍然支持UDP功能；另外对于已经存在的http(s)代理或者socks5代理，支持tls、tcp、kcp三种模式，支持链式连接，也就是可以多个sps结点层级连接构建加密通道。 </p>
                        <p><code>ss</code>功能支持的加密方法为:aes-128-cfb ， aes-128-ctr ， aes-128-gcm ， aes-192-cfb ， aes-192-ctr ， aes-192-gcm ， aes-256-cfb ， aes-256-ctr ， aes-256-gcm ， bf-cfb ， cast5-cfb ， chacha20 ， chacha20-ietf ， chacha20-ietf-poly1305 ， des-cfb ， rc4-md5 ， rc4-md5-6 ， salsa20 ， xchacha20 </p>
                        <p>本地监听端口-p参数支持的写法：</p>
                        <pre v-pre="" data-lang="text"><code class="lang-text">  -p &quot;:8081&quot;  监听8081
  -p &quot;:8081,:8082&quot;  监听8081和8082
  -p &quot;:8081,:8082,:9000-9999&quot; 监听8081和8082以及9000,9001至9999，共1002个端口</code></pre>
                        <p>提示:</p>
                        <p>当本地使用kcp协议时,需要用-g指定vps公网IP,socks5的UDP功能才能正常使用.这时-g是返回给客户端的UDP地址中的IP地址.</p>
                        <h3 id="_62-https转httpssocks5ss"><a href="#/?id=_62-https%e8%bd%achttpssocks5ss" data-id="_62-https转httpssocks5ss" class="anchor"><span>6.2 HTTP(S)转HTTP(S)+SOCKS5+SS</span></a></h3>
                        <p>假设已经存在一个普通的http(s)代理：127.0.0.1:8080，现在我们把它转为同时支持http(s)和socks5和ss的普通代理，转换后的本地端口为18080，ss加密方式:aes-192-cfb，ss密码:pass。<br />命令如下：<br /><code>proxy sps -S http -T tcp -P 127.0.0.1:8080 -t tcp -p :18080 -h aes-192-cfb -j pass</code> </p>
                        <p>假设已经存在一个tls的http(s)代理：127.0.0.1:8080，现在我们把它转为同时支持http(s)和socks5和ss的普通代理，转换后的本地端口为18080，tls需要证书文件，ss加密方式:aes-192-cfb，ss密码:pass。<br />命令如下：<br /><code>proxy sps -S http -T tls -P 127.0.0.1:8080 -t tcp -p :18080 -C proxy.crt -K proxy.key -h aes-192-cfb -j pass</code> </p>
                        <p>假设已经存在一个kcp的http(s)代理（密码是：demo123）：127.0.0.1:8080，现在我们把它转为同时支持http(s)和socks5和ss的普通代理，转换后的本地端口为18080，ss加密方式:aes-192-cfb，ss密码:pass。<br />命令如下：<br /><code>proxy sps -S http -T kcp -P 127.0.0.1:8080 -t tcp -p :18080 --kcp-key demo123 -h aes-192-cfb -j pass</code> </p>
                        <h3 id="_63-socks5转httpssocks5ss"><a href="#/?id=_63-socks5%e8%bd%achttpssocks5ss" data-id="_63-socks5转httpssocks5ss" class="anchor"><span>6.3 SOCKS5转HTTP(S)+SOCKS5+SS</span></a></h3>
                        <p>假设已经存在一个普通的socks5代理：127.0.0.1:8080，现在我们把它转为同时支持http(s)和socks5和ss的普通代理，转换后的本地端口为18080，ss加密方式:aes-192-cfb，ss密码:pass。<br />命令如下：<br /><code>proxy sps -S socks -T tcp -P 127.0.0.1:8080 -t tcp -p :18080 -h aes-192-cfb -j pass</code> </p>
                        <p>假设已经存在一个tls的socks5代理：127.0.0.1:8080，现在我们把它转为同时支持http(s)和socks5和ss的普通代理，转换后的本地端口为18080，tls需要证书文件，ss加密方式:aes-192-cfb，ss密码:pass。<br />命令如下：<br /><code>proxy sps -S socks -T tls -P 127.0.0.1:8080 -t tcp -p :18080 -C proxy.crt -K proxy.key -h aes-192-cfb -j pass</code> </p>
                        <p>假设已经存在一个kcp的socks5代理（密码是：demo123）：127.0.0.1:8080，现在我们把它转为同时支持http(s)和socks5和ss的普通代理，转换后的本地端口为18080，ss加密方式:aes-192-cfb，ss密码:pass。<br />命令如下：<br /><code>proxy sps -S socks -T kcp -P 127.0.0.1:8080 -t tcp -p :18080 --kcp-key demo123 -h aes-192-cfb -j pass</code> </p>
                        <h3 id="_64-ss转httpssocks5ss"><a href="#/?id=_64-ss%e8%bd%achttpssocks5ss" data-id="_64-ss转httpssocks5ss" class="anchor"><span>6.4 SS转HTTP(S)+SOCKS5+SS</span></a></h3>
                        <p>SPS上级和本地支持ss协议，上级可以是SPS或者标准的ss服务。<br />SPS本地默认提供HTTP(S)\SOCKS5\SPS三种代理，当上级是SOCKS5时转换后的SOCKS5和SS支持UDP功能。<br />假设已经存在一个普通的SS或者SPS代理(开启了ss，加密方式:aes-256-cfb，密码:demo)：127.0.0.1:8080，现在我们把它转为同时支持http(s)和socks5和ss的普通代理，转换后的本地端口为18080，转换后的ss加密方式:aes-192-cfb，ss密码:pass。<br />命令如下：<br /><code>proxy sps -S ss -H aes-256-cfb -J pass -T tcp -P 127.0.0.1:8080 -t tcp -p :18080 -h aes-192-cfb -j pass</code>。 </p>
                        <h3 id="_65-链式连接"><a href="#/?id=_65-%e9%93%be%e5%bc%8f%e8%bf%9e%e6%8e%a5" data-id="_65-链式连接" class="anchor"><span>6.5 链式连接</span></a></h3>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/sps-tls.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/sps-tls.png" alt="6.4" /><br />上面提过多个sps结点可以层级连接构建加密通道，假设有如下vps和家里的pc电脑。<br />vps01：2.2.2.2<br />vps02：3.3.3.3<br />现在我们想利用pc和vps01和vps02构建一个加密通道，本例子用tls加密也可以用kcp，在pc上访问本地18080端口就是访问vps01的本地8080端口。<br />首先在vps01(2.2.2.2)上我们运行一个只有本地可以访问的http(s)代理，执行：<br /><code>proxy http -t tcp -p 127.0.0.1:8080</code> </p>
                        <p>然后在vps01(2.2.2.2)上运行一个sps结点，执行：<br /><code>proxy sps -S http -T tcp -P 127.0.0.1:8080 -t tls -p :8081 -C proxy.crt -K proxy.key</code> </p>
                        <p>然后在vps02(3.3.3.3)上运行一个sps结点，执行：<br /><code>proxy sps -S http -T tls -P 2.2.2.2:8081 -t tls -p :8082 -C proxy.crt -K proxy.key</code> </p>
                        <p>然后在pc上运行一个sps结点，执行：<br /><code>proxy sps -S http -T tls -P 3.3.3.3:8082 -t tcp -p :18080 -C proxy.crt -K proxy.key</code> </p>
                        <p>完成。 </p>
                        <h3 id="_66-监听多个端口"><a href="#/?id=_66-%e7%9b%91%e5%90%ac%e5%a4%9a%e4%b8%aa%e7%ab%af%e5%8f%a3" data-id="_66-监听多个端口" class="anchor"><span>6.6 监听多个端口</span></a></h3>
                        <p>一般情况下监听一个端口就可以，不过如果作为反向代理需要同时监听80和443两个端口，那么-p参数是支持的，<br />格式是：<code>-p 0.0.0.0:80，0.0.0.0:443</code>，多个绑定用逗号分隔即可。 </p>
                        <h3 id="_67-认证功能"><a href="#/?id=_67-%e8%ae%a4%e8%af%81%e5%8a%9f%e8%83%bd" data-id="_67-认证功能" class="anchor"><span>6.7 认证功能</span></a></h3>
                        <p>sps支持http(s)\socks5代理认证，可以级联认证，有四个重要的信息:<br />1:用户发送认证信息<code>user-auth</code>。<br />2:设置的本地认证信息<code>local-auth</code>。<br />3:设置的连接上级使用的认证信息<code>parent-auth</code>。<br />4:最终发送给上级的认证信息<code>auth-info-to-parent</code>。<br />他们的情况关系如下: </p>
                        <table>
                            <thead>
                            <tr>
                                <th>user-auth</th>
                                <th>local-auth</th>
                                <th>parent-auth</th>
                                <th>auth-info-to-paren</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>有/没有</td>
                                <td>有</td>
                                <td>有</td>
                                <td>来自parent-auth</td>
                            </tr>
                            <tr>
                                <td>有/没有</td>
                                <td>没有</td>
                                <td>有</td>
                                <td>来自parent-auth</td>
                            </tr>
                            <tr>
                                <td>有/没有</td>
                                <td>有</td>
                                <td>没有</td>
                                <td>无</td>
                            </tr>
                            <tr>
                                <td>没有</td>
                                <td>没有</td>
                                <td>没有</td>
                                <td>无</td>
                            </tr>
                            <tr>
                                <td>有</td>
                                <td>没有</td>
                                <td>没有</td>
                                <td>来自user-auth</td>
                            </tr>
                            </tbody>
                        </table>
                        <p>对于sps代理我们可以进行用户名密码认证，认证的用户名和密码可以在命令行指定<br /><code>proxy sps -S http -T tcp -P 127.0.0.1:8080 -t tcp -p &quot;:33080&quot; -a &quot;user1:pass1:0:0:&quot; -a &quot;user2:pass2:0:0:&quot;</code><br />多个用户，重复-a参数即可。<br />也可以放在文件中，格式是一行一个<code>用户名:密码:连接数:速率:上级</code>，然后用-F指定。<br /><code>proxy sps -S http -T tcp -P 127.0.0.1:8080 -t tcp -p &quot;:33080&quot; -F auth-file.txt</code> </p>
                        <p>如果上级有认证，下级可以通过-A参数设置认证信息，比如:<br />上级:<code>proxy sps -S http -T tcp -P 127.0.0.1:8080 -t tcp -p &quot;:33080&quot; -a &quot;user1:pass1:0:0:&quot; -a &quot;user2:pass2:0:0:&quot;</code><br />下级:<code>proxy sps -S http -T tcp -P 127.0.0.1:8080 -A &quot;user1:pass1&quot; -t tcp -p &quot;:33080&quot;</code> </p>
                        <p>请更多认证细节，请参考<code>9.API认证</code> 和 <code>10.本地认证</code> </p>
                        <h3 id="_68-多个上级"><a href="#/?id=_68-%e5%a4%9a%e4%b8%aa%e4%b8%8a%e7%ba%a7" data-id="_68-多个上级" class="anchor"><span>6.8 多个上级</span></a></h3>
                        <p>如果存在多个上级，可以通过多个-P指定。 </p>
                        <p>比如： </p>
                        <p><code>proxy sps -P http://127.0.0.1:3100 -P socks5://127.0.0.1:3200</code> </p>
                        <p><code>-P</code>完整格式如下： </p>
                        <p><code>protocol://a:b@2.2.2.2:33080#1</code> </p>
                        <p>下面对每部分进行解释： </p>
                        <p><code>protocol://</code> 是协议类型，可能的类型以及含有如下: </p>
                        <pre v-pre="" data-lang="text"><code class="lang-text">http  等价于 -S http -T tcp
https  等价于 -S http -T tls --parent-tls-single ， 也就是http(s)代理 over TLS
https2 等价于 -S http -T tls
socks5  等价于 -S socks -T tcp
socks5s 等价于 -S socks -T tls --parent-tls-single ， 也就是socks over TLS
socks5s2 等价于 -S socks -T tls
ss     等价于 -S ss -T tcp
httpws    等价于  -S http -T ws
httpwss   等价于  -S http -T wss
socks5ws  等价于  -S socks -T ws
socks5wss 等价于  -S socks -T wss  </code></pre>
                        <p><code>a:b</code>是代理认证的用户名密码，如果是ss，<code>a</code>是加密方法，<code>b</code>是密码，没有用户名密码可以留空比如：<code>http://2.2.2.2:33080</code>，如果用户名和密码保护特殊符号可以使用urlencode进行编码。 </p>
                        <p><code>2.2.2.2:33080</code>是上级地址，格式是：<code>IP（或域名）:端口</code>，如果底层是ws/wss协议还可以带上路径，比如：<code>2.2.2.2:33080/ws</code>;<br />还能通过附加查询参数<code>m</code>和<code>k</code>设置<code>ws\wss</code>的<code>加密方法</code>和<code>密码</code>，比如：<code>2.2.2.2:33080/ws?m=aes-192-cfb&amp;k=password</code> </p>
                        <p><code>#1</code>多个上级的负载均衡是权重策略时候，设置的权重，很少用到。 </p>
                        <h3 id="_69-自定义加密"><a href="#/?id=_69-%e8%87%aa%e5%ae%9a%e4%b9%89%e5%8a%a0%e5%af%86" data-id="_69-自定义加密" class="anchor"><span>6.9 自定义加密</span></a></h3>
                        <p>proxy的sps代理在tcp之上可以通过tls标准加密以及kcp协议加密tcp数据，除此之外还支持在tls和kcp之后进行<br />自定义加密，也就是说自定义加密和tls|kcp是可以联合使用的，内部采用AES256加密，使用的时候只需要自己定义<br />一个密码即可，加密分为两个部分，一部分是本地(-z)是否加密解密，一部分是与上级(-Z)传输是否加密解密。 </p>
                        <p>自定义加密要求两端都是proxy才可以。 </p>
                        <p>下面分别用二级，三级为例: </p>
                        <p>假设已经存在一个http(s)代理:<code>6.6.6.6:6666</code> </p>
                        <p>二级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy sps -S http -T tcp -P 6.6.6.6:6666 -t tcp -z demo_password -p :7777</code><br />本地二级执行:<br /><code>proxy sps -T tcp -P 2.2.2.2:777 -Z demo_password -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级加密传输访问目标网站。 </p>
                        <p>三级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy sps -S http -T tcp -P 6.6.6.6:6666 -t tcp -z demo_password -p :7777</code><br />二级vps(ip:3.3.3.3)上执行:<br /><code>proxy sps -T tcp -P 2.2.2.2:7777 -Z demo_password -t tcp -z other_password -p :8888</code><br />本地三级执行:<br /><code>proxy sps -T tcp -P 3.3.3.3:8888 -Z other_password -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级加密传输访问目标网站。 </p>
                        <h3 id="_610-压缩传输"><a href="#/?id=_610-%e5%8e%8b%e7%bc%a9%e4%bc%a0%e8%be%93" data-id="_610-压缩传输" class="anchor"><span>6.10 压缩传输</span></a></h3>
                        <p>proxy的sps代理在tcp之上可以通过自定义加密和tls标准加密以及kcp协议加密tcp数据，在自定义加密之前还可以<br />对数据进行压缩，也就是说压缩功能和自定义加密和tls|kcp是可以联合使用的，压缩分为两个部分，<br />一部分是本地(-m)是否压缩传输，一部分是与上级(-M)传输是否压缩。 </p>
                        <p>压缩要求两端都是proxy才可以，压缩也在一定程度上保护了(加密)数据。 </p>
                        <p>下面分别用二级，三级为例: </p>
                        <p>二级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy sps -t tcp -m -p :7777</code><br />本地二级执行:<br /><code>proxy sps -T tcp -P 2.2.2.2:777 -M -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级压缩传输访问目标网站。 </p>
                        <p>三级实例 </p>
                        <p>一级vps(ip:2.2.2.2)上执行:<br /><code>proxy sps -t tcp -m -p :7777</code><br />二级vps(ip:3.3.3.3)上执行:<br /><code>proxy sps -T tcp -P 2.2.2.2:7777 -M -t tcp -m -p :8888</code><br />本地三级执行:<br /><code>proxy sps -T tcp -P 3.3.3.3:8888 -M -t tcp -p :8080</code><br />这样通过本地代理8080访问网站的时候就是通过与上级压缩传输访问目标网站。 </p>
                        <h3 id="_611-禁用协议"><a href="#/?id=_611-%e7%a6%81%e7%94%a8%e5%8d%8f%e8%ae%ae" data-id="_611-禁用协议" class="anchor"><span>6.11 禁用协议</span></a></h3>
                        <p>SPS默认情况下一个端口支持http(s)和socks5两种代理协议，我们可以通过参数禁用某个协议<br />比如:<br />1.禁用HTTP(S)代理功能只保留SOCKS5代理功能，参数:<code>--disable-http</code>。<br /><code>proxy sps -T tcp -P 3.3.3.3:8888 -M -t tcp -p :8080 --disable-http</code> </p>
                        <p>1.禁用SOCKS5代理功能只保留HTTP(S)代理功能，参数:<code>--disable-socks</code>。<br /><code>proxy sps -T tcp -P 3.3.3.3:8888 -M -t tcp -p :8080 --disable-socks</code> </p>
                        <h3 id="_612-限速"><a href="#/?id=_612-%e9%99%90%e9%80%9f" data-id="_612-限速" class="anchor"><span>6.12 限速</span></a></h3>
                        <p>假设存在SOCKS5上级: </p>
                        <p><code>proxy socks -p 2.2.2.2:33080 -z password -t tcp</code> </p>
                        <p>sps下级，限速100K </p>
                        <p><code>proxy sps -S socks -P 2.2.2.2:33080 -T tcp -Z password -l 100K -t tcp -p :33080</code> </p>
                        <p>通过<code>-l</code>参数即可指定，比如:100K 2000K 1M . 0意味着无限制。 </p>
                        <h3 id="_613-指定出口ip"><a href="#/?id=_613-%e6%8c%87%e5%ae%9a%e5%87%ba%e5%8f%a3ip" data-id="_613-指定出口ip" class="anchor"><span>6.13 指定出口IP</span></a></h3>
                        <p><code>--bind-listen</code>参数，就可以开启客户端用<code>入口IP</code>连接过来的，就用<code>入口IP</code>作为<code>出口IP</code>访问目标网站的功能。如果<code>入口IP</code>是内网IP，<code>出口IP</code>不会使用<code>入口IP</code>。 </p>
                        <p><code>proxy sps -S socks -P 2.2.2.2:33080 -T tcp -Z password -l 100K -t tcp --bind-listen -p :33080</code> </p>
                        <h3 id="_614-证书参数使用base64数据"><a href="#/?id=_614-%e8%af%81%e4%b9%a6%e5%8f%82%e6%95%b0%e4%bd%bf%e7%94%a8base64%e6%95%b0%e6%8d%ae" data-id="_614-证书参数使用base64数据" class="anchor"><span>6.14 证书参数使用base64数据</span></a></h3>
                        <p>默认情况下-C，-K参数是crt证书和key文件的路径， </p>
                        <p>如果是base64://开头，那么就认为后面的数据是base64编码的，会解码后使用。 </p>
                        <h3 id="_615-独立服务"><a href="#/?id=_615-%e7%8b%ac%e7%ab%8b%e6%9c%8d%e5%8a%a1" data-id="_615-独立服务" class="anchor"><span>6.15 独立服务</span></a></h3>
                        <p>sps功能不强制指定一个上级，当上级为空，sps本身即可完成完整的代理功能.如果指定了上级那么就和之前一样使用上级连接目标。<br />下面这个命令，就是一键开启http(s)\ss\socks服务。<br /><code>proxy sps -p :33080</code> </p>
                        <h3 id="_616-目标重定向"><a href="#/?id=_616-%e7%9b%ae%e6%a0%87%e9%87%8d%e5%ae%9a%e5%90%91" data-id="_616-目标重定向" class="anchor"><span>6.16 目标重定向</span></a></h3>
                        <p>sps功能提供的http(s)\socks5\ss代理功能，客户端通过sps代理去连接指定的“目标”，这个“目标”一般是网站也可能是任意的tcp地址，<br />网站”目标“一般是foo.com:80,foo.com:443，sps支持使用--rewrite参数指定一个“目标”重定向规则文件，对目标进行重定向，客户端是无感知的，<br />比如你对“目标”：demo.com:80重定向到192.168.0.12:80，那么客户端访问网站demo.com，其实访问的是192.168.0.12提供的网站服务。<br />“目标”重定向规则文件示例： </p>
                        <pre v-pre="" data-lang="text"><code class="lang-text"># example
www.a.com:80     10.0.0.2:8080
**.b.com:80      10.0.0.2:80
192.168.0.11:80  10.0.0.2:8080  </code></pre>
                        <h3 id="_617-固定udp功能端口"><a href="#/?id=_617-%e5%9b%ba%e5%ae%9audp%e5%8a%9f%e8%83%bd%e7%ab%af%e5%8f%a3" data-id="_617-固定udp功能端口" class="anchor"><span>6.17 固定UDP功能端口</span></a></h3>
                        <p>默认情况下sps的socks5的UDP功能的端口号是按着<code>rfc1982草案</code>要求，使用协议握手过程中随机指定，不需要提前指定。</p>
                        <p>但是某些情况下，需要固定UDP功能端口，可以通过参数<code>--udp-port 端口号</code>用来固定UDP功能的端口号，比如：</p>
                        <p><code>proxy sps -t tcp -p &quot;0.0.0.0:38080&quot; --udp-port 38081</code> </p>
                        <p>需要注意的是，sps的ss功能也有UDP功能，而且ss的UDP端口和tcp端口是一样的，所以要避免socks5的UDP端口和ss的UDP端口冲突，</p>
                        <p>要指定和tcp端口不一样的端口。</p>
                        <h3 id="_618-iptables-透明代理"><a href="#/?id=_618-iptables-%e9%80%8f%e6%98%8e%e4%bb%a3%e7%90%86" data-id="_618-iptables-透明代理" class="anchor"><span>6.18 iptables 透明代理</span></a></h3>
                        <p>sps模式支持Linux系统的iptables转发支持，也就是通常所说的iptables透明代理，如果在网关设备上进行iptables透明代理，那么对通过网关联网的设备就能实现无感知的代理。</p>
                        <p>启动命令实例：</p>
                        <p><code>proxy sps --redir -p :8888 -P httpws://1.1.1.1:33080</code> </p>
                        <p>这里假设存在一个http的上级代理1.1.1.1:33080，使用ws传输数据。</p>
                        <p>然后添加iptables规则，下面是参考规则: </p>
                        <pre v-pre="" data-lang="shell"><code class="lang-shell">#上级proxy服务端服务器IP地址:
proxy_server_ip=1.1.1.1

#路由器运行proxy监听的端口:
proxy_local_port=33080

#下面的就不用修改了
#create a new chain named PROXY
iptables -t nat -N PROXY

# Ignore your PROXY server's addresses
# It's very IMPORTANT， just be careful。

iptables -t nat -A PROXY -d $proxy_server_ip -j RETURN

# Ignore LANs IP address
iptables -t nat -A PROXY -d 0.0.0.0/8 -j RETURN
iptables -t nat -A PROXY -d 10.0.0.0/8 -j RETURN
iptables -t nat -A PROXY -d 127.0.0.0/8 -j RETURN
iptables -t nat -A PROXY -d 169.254.0.0/16 -j RETURN
iptables -t nat -A PROXY -d 172.16.0.0/12 -j RETURN
iptables -t nat -A PROXY -d 192.168.0.0/16 -j RETURN
iptables -t nat -A PROXY -d 224.0.0.0/4 -j RETURN
iptables -t nat -A PROXY -d 240.0.0.0/4 -j RETURN

# Anything to port 80 443 should be redirected to PROXY's local port
iptables -t nat -A PROXY -p tcp  -j REDIRECT --to-ports $proxy_local_port
# Apply the rules to nat client
iptables -t nat -A PREROUTING -p tcp -j PROXY
# Apply the rules to localhost
iptables -t nat -A OUTPUT -p tcp -j PROXY  </code></pre>
                        <ul>
                            <li>清空整个链 iptables -F 链名比如iptables -t nat -F PROXY </li>
                            <li>删除指定的用户自定义链 iptables -X 链名 比如 iptables -t nat -X PROXY </li>
                            <li>从所选链中删除规则 iptables -D 链名 规则详情 比如 iptables -t nat -D PROXY -d 223.223.192.0/255.255.240.0 -j RETURN </li>
                        </ul>
                        <h3 id="_619-查看帮助"><a href="#/?id=_619-%e6%9f%a5%e7%9c%8b%e5%b8%ae%e5%8a%a9" data-id="_619-查看帮助" class="anchor"><span>6.19 查看帮助</span></a></h3>
                        <p><code>proxy help sps</code> </p>
                        <h2 id="_7kcp配置"><a href="#/?id=_7kcp%e9%85%8d%e7%bd%ae" data-id="_7kcp配置" class="anchor"><span>7.KCP配置</span></a></h2>
                        <h3 id="_71-配置介绍"><a href="#/?id=_71-%e9%85%8d%e7%bd%ae%e4%bb%8b%e7%bb%8d" data-id="_71-配置介绍" class="anchor"><span>7.1 配置介绍</span></a></h3>
                        <p>proxy的很多功能都支持kcp协议，凡是使用了kcp协议的功能都支持这里介绍的配置参数。<br />所以这里统一对KCP配置参数进行介绍。 </p>
                        <h3 id="_72-详细配置"><a href="#/?id=_72-%e8%af%a6%e7%bb%86%e9%85%8d%e7%bd%ae" data-id="_72-详细配置" class="anchor"><span>7.2 详细配置</span></a></h3>
                        <p>所有的KCP配置参数共有17个，你可以都不用设置，他们都有默认值，如果为了或者最好的效果，<br />就需要自己根据自己根据网络情况对参数进行配置。由于kcp配置很复杂需要一定的网络基础知识，<br />如果想获得kcp参数更详细的配置和解说，请自行搜索。每个参数的命令行名称以及默认值和简单的功能说明如下： </p>
                        <pre v-pre="" data-lang=""><code class="lang-">--kcp-key=&quot;secrect&quot;        pre-shared secret between client and server
--kcp-method=&quot;aes&quot;         encrypt/decrypt method， can be: aes， aes-128， aes-192， salsa20， blowfish，
twofish， cast5， 3des， tea， xtea， xor， sm4， none
--kcp-mode=&quot;fast&quot;       profiles: fast3， fast2， fast， normal， manual
--kcp-mtu=1350             set maximum transmission unit for UDP packets
--kcp-sndwnd=1024          set send window size(num of packets)
--kcp-rcvwnd=1024          set receive window size(num of packets)
--kcp-ds=10                set reed-solomon erasure coding - datashard
--kcp-ps=3                 set reed-solomon erasure coding - parityshard
--kcp-dscp=0               set DSCP(6bit)
--kcp-nocomp               disable compression
--kcp-acknodelay           be carefull! flush ack immediately when a packet is received
--kcp-nodelay=0            be carefull!
--kcp-interval=50          be carefull!
--kcp-resend=0             be carefull!
--kcp-nc=0                 be carefull! no congestion
--kcp-sockbuf=4194304      be carefull!
--kcp-keepalive=10         be carefull!  </code></pre>
                        <p>提示：<br />参数：--kcp-mode中的四种fast3， fast2， fast， normal模式，<br />相当于设置了下面四个参数：<br />normal：<code>--nodelay=0 --interval=40 --resend=2 --nc=1</code><br />fast ：<code>--nodelay=0 --interval=30 --resend=2 --nc=1</code><br />fast2：<code>--nodelay=1 --interval=20 --resend=2 --nc=1</code><br />fast3：<code>--nodelay=1 --interval=10 --resend=2 --nc=1</code> </p>
                        <h2 id="_8安全dns"><a href="#/?id=_8%e5%ae%89%e5%85%a8dns" data-id="_8安全dns" class="anchor"><span>8.安全DNS</span></a></h2>
                        <h3 id="_81-介绍"><a href="#/?id=_81-%e4%bb%8b%e7%bb%8d" data-id="_81-介绍" class="anchor"><span>8.1 介绍</span></a></h3>
                        <p>众所周知DNS是UDP端口53提供的服务，但是随着网络的发展一些知名DNS服务器也支持TCP方式dns查询，比如谷歌的8.8.8.8，proxy的DNS防污染服务器原理就是在本地启动一个proxy的DNS代理服务器，它用TCP的方式通过上级代理进行dns查询。如果它和上级代理通讯采用加密的方式，那么就可以进行安全无污染的DNS解析，还支持独立服务，并发解析，支持增强的hosts文件功能支持灵活的并发解析转发。 </p>
                        <p>dns解析顺序：<br />1.使用参数--hosts解析。<br />2.要解析的域名在1中没有找到，就使用参数--forward规则解析。<br />3.要解析的域名在1和2中都没有找到，就使用默认--default解析，--default默认行为参数值有三种：proxy，direct，system。<br />三种参数值解释如下：<br />proxy：通过上级去连接-q参数指定的dns服务器去解析域名。<br />direct：通过本地网络去连接-q参数指定的dns服务器去解析域名。<br />system：通过系统dns去解析域名。 </p>
                        <p>提示：<br />--hosts 参数指定的host文件格式和系统hosts文件一致，而且域名支持通配符，可以参考hosts文件。<br />--forward 参数指定的解析转发规则文件，格式可以参考resolve.rules文件，域名支持通配符，支持为每个域名指定多个dns服务器并发解析，谁最快解析成功就用谁的解析结果。<br />-q 参数可以指定多个远程dns服务器，执行并发解析谁最快解析成功就用谁的解析结果，默认是：1.1.1.1，8.8.8.8，9.9.9.9，多个用逗号分割，<br />比如还可以带端口：1.1.1.1，8.8.8.8#53，9.9.9.9 </p>
                        <p>如果独立服务，不需要上级：<br />可以执行：<br /><code>proxy dns --default system -p :5353</code><br />or<br /><code>proxy dns --default direct -p :5353</code> </p>
                        <h3 id="_82-使用示例"><a href="#/?id=_82-%e4%bd%bf%e7%94%a8%e7%a4%ba%e4%be%8b" data-id="_82-使用示例" class="anchor"><span>8.2 使用示例</span></a></h3>
                        <h4 id="_821-普通https上级代理"><a href="#/?id=_821-%e6%99%ae%e9%80%9ahttps%e4%b8%8a%e7%ba%a7%e4%bb%a3%e7%90%86" data-id="_821-普通https上级代理" class="anchor"><span>8.2.1 普通HTTP(S)上级代理</span></a></h4>
                        <p>假设有一个上级代理：2.2.2.2:33080<br />本地执行：<br /><code>proxy dns -S http -T tcp -P 2.2.2.2:33080 -p :53</code><br />那么本地的UDP端口53就提供了DNS解析功能。 </p>
                        <h4 id="_822-普通socks5上级代理"><a href="#/?id=_822-%e6%99%ae%e9%80%9asocks5%e4%b8%8a%e7%ba%a7%e4%bb%a3%e7%90%86" data-id="_822-普通socks5上级代理" class="anchor"><span>8.2.2 普通SOCKS5上级代理</span></a></h4>
                        <p>假设有一个上级代理：2.2.2.2:33080<br />本地执行：<br /><code>proxy dns -S socks -T tcp -P 2.2.2.2:33080 -p :53</code><br />那么本地的UDP端口53就提供了DNS解析功能。 </p>
                        <h4 id="_823-tls加密的https上级代理"><a href="#/?id=_823-tls%e5%8a%a0%e5%af%86%e7%9a%84https%e4%b8%8a%e7%ba%a7%e4%bb%a3%e7%90%86" data-id="_823-tls加密的https上级代理" class="anchor"><span>8.2.3 TLS加密的HTTP(S)上级代理</span></a></h4>
                        <p>假设有一个上级代理：2.2.2.2:33080<br />上级代理执行的命令是：<br /><code>proxy http -t tls -C proxy.crt -K proxy.key -p :33080</code><br />本地执行：<br /><code>proxy dns -S http -T tls -P 2.2.2.2:33080 -C proxy.crt -K proxy.key -p :53</code><br />那么本地的UDP端口53就提供了安全防污染DNS解析功能。 </p>
                        <h4 id="_824-tls加密的socks5上级代理"><a href="#/?id=_824-tls%e5%8a%a0%e5%af%86%e7%9a%84socks5%e4%b8%8a%e7%ba%a7%e4%bb%a3%e7%90%86" data-id="_824-tls加密的socks5上级代理" class="anchor"><span>8.2.4 TLS加密的SOCKS5上级代理</span></a></h4>
                        <p>假设有一个上级代理：2.2.2.2:33080<br />上级代理执行的命令是：<br /><code>proxy socks -t tls -C proxy.crt -K proxy.key -p :33080</code><br />本地执行：<br /><code>proxy dns -S socks -T tls -P 2.2.2.2:33080 -C proxy.crt -K proxy.key -p :53</code><br />那么本地的UDP端口53就提供了安全防污染DNS解析功能。 </p>
                        <h4 id="_825-kcp加密的https上级代理"><a href="#/?id=_825-kcp%e5%8a%a0%e5%af%86%e7%9a%84https%e4%b8%8a%e7%ba%a7%e4%bb%a3%e7%90%86" data-id="_825-kcp加密的https上级代理" class="anchor"><span>8.2.5 KCP加密的HTTP(S)上级代理</span></a></h4>
                        <p>假设有一个上级代理：2.2.2.2:33080<br />上级代理执行的命令是：<br /><code>proxy http -t kcp -p :33080</code><br />本地执行：<br /><code>proxy dns -S http -T kcp -P 2.2.2.2:33080 -p :53</code><br />那么本地的UDP端口53就提供了安全防污染DNS解析功能。 </p>
                        <h4 id="_826-kcp加密的socks5上级代理"><a href="#/?id=_826-kcp%e5%8a%a0%e5%af%86%e7%9a%84socks5%e4%b8%8a%e7%ba%a7%e4%bb%a3%e7%90%86" data-id="_826-kcp加密的socks5上级代理" class="anchor"><span>8.2.6 KCP加密的SOCKS5上级代理</span></a></h4>
                        <p>假设有一个上级代理：2.2.2.2:33080<br />上级代理执行的命令是：<br /><code>proxy socks -t kcp -p :33080</code><br />本地执行：<br /><code>proxy dns -S socks -T kcp -P 2.2.2.2:33080 -p :53</code><br />那么本地的UDP端口53就提供了安全防污染DNS解析功能。 </p>
                        <h4 id="_827-自定义加密的https上级代理"><a href="#/?id=_827-%e8%87%aa%e5%ae%9a%e4%b9%89%e5%8a%a0%e5%af%86%e7%9a%84https%e4%b8%8a%e7%ba%a7%e4%bb%a3%e7%90%86" data-id="_827-自定义加密的https上级代理" class="anchor"><span>8.2.7 自定义加密的HTTP(S)上级代理</span></a></h4>
                        <p>假设有一个上级代理：2.2.2.2:33080<br />上级代理执行的命令是：<br /><code>proxy http -t tcp -p :33080 -z password</code><br />本地执行：<br /><code>proxy dns -S http -T tcp -Z password -P 2.2.2.2:33080 -p :53</code><br />那么本地的UDP端口53就提供了安全防污染DNS解析功能。 </p>
                        <h4 id="_828-自定义加密的socks5上级代理"><a href="#/?id=_828-%e8%87%aa%e5%ae%9a%e4%b9%89%e5%8a%a0%e5%af%86%e7%9a%84socks5%e4%b8%8a%e7%ba%a7%e4%bb%a3%e7%90%86" data-id="_828-自定义加密的socks5上级代理" class="anchor"><span>8.2.8 自定义加密的SOCKS5上级代理</span></a></h4>
                        <p>假设有一个上级代理：2.2.2.2:33080<br />上级代理执行的命令是：<br /><code>proxy socks -t kcp -p :33080 -z password</code><br />本地执行：<br /><code>proxy dns -S socks -T tcp -Z password -P 2.2.2.2:33080 -p :53</code><br />那么本地的UDP端口53就提供了安全防污染DNS解析功能。 </p>
                        <h2 id="_9api认证，限速，控制连接数，限流量"><a href="#/?id=_9api%e8%ae%a4%e8%af%81%ef%bc%8c%e9%99%90%e9%80%9f%ef%bc%8c%e6%8e%a7%e5%88%b6%e8%bf%9e%e6%8e%a5%e6%95%b0%ef%bc%8c%e9%99%90%e6%b5%81%e9%87%8f" data-id="_9api认证，限速，控制连接数，限流量" class="anchor"><span>9.API认证，限速，控制连接数，限流量</span></a></h2>
                        <p>proxy的http(s)/socks5/sps代理功能，支持通过API控制用户对代理对访问。 </p>
                        <h3 id="通过api可以干什么？"><a href="#/?id=%e9%80%9a%e8%bf%87api%e5%8f%af%e4%bb%a5%e5%b9%b2%e4%bb%80%e4%b9%88%ef%bc%9f" data-id="通过api可以干什么？" class="anchor"><span>通过API可以干什么？</span></a></h3>
                        <ul>
                            <li>用户维度，控制单个连接速率，控制最大连接数。 </li>
                            <li>IP维度，控制单个连接速率，控制最大连接数。 </li>
                            <li>动态上级，可以根据用户或者客户端IP，动态的从API获取其上级，支持http(s)/socks5/ss上级。 </li>
                            <li>认证每一个连接，无论是否要求客户端认证。 </li>
                            <li>缓存认证结果，时间可以设置，减轻API压力。 </li>
                        </ul>
                        <h4 id="具体使用"><a href="#/?id=%e5%85%b7%e4%bd%93%e4%bd%bf%e7%94%a8" data-id="具体使用" class="anchor"><span>具体使用</span></a></h4>
                        <p>proxy的http(s)/socks5/sps代理API功能，通过<code>--auth-url</code>和<code>--auth-nouser</code>和<code>--auth-cache</code>三个参数控制。<br />参数<code>--auth-url</code>是HTTP API接口地址，客户端连接的时候，proxy会GET方式请求这url，带上下面参数，如果返回HTTP状态码204，代表认证成功，其它情况认为认证失败。 </p>
                        <p>一个完整的请求API的示例：<br /><code>http://test.com/auth.php?user=a&amp;pass=b&amp;client_addr=127.0.0.1:49892&amp;local_addr=127.0.0.1:8100&amp;target=http%3A%2F%2Fwww.baidu.com&amp;service=http&amp;sps=0</code> </p>
                        <h4 id="参数说明"><a href="#/?id=%e5%8f%82%e6%95%b0%e8%af%b4%e6%98%8e" data-id="参数说明" class="anchor"><span>参数说明</span></a></h4>
                        <p><code>user和pass</code> 当代理开启了认证功能，这里就是客户端提供的用户名和密码。<br /><code>client_addr</code> 客户端访问代理时的用的地址，格式IP:端口。<br /><code>local_addr</code> 客户端访问的代理地址，格式IP:端口。<br /><code>service</code> 代理类型，分为：http、socks。<br /><code>sps</code> 代理是否是sps提供的，1:是，0:否。<br /><code>target</code> 客户端要访问的目标，如果是http(s)代理，target是访问的具体url；如果是socks5代理，target是空。 </p>
                        <h4 id="示例"><a href="#/?id=%e7%a4%ba%e4%be%8b" data-id="示例" class="anchor"><span>示例</span></a></h4>
                        <p>假设--auth-url <a href="http://127.0.0.1:333/auth.php" target="_blank">http://127.0.0.1:333/auth.php</a> 指向了一个php接口地址.<br />auth.php内容如下： </p>
                        <pre v-pre="" data-lang="php"><code class="lang-php">&lt;?php
#设置所有的用户名密码,前面是用户名,后面是对应密码
$alluser=[
    &quot;user1&quot;=&gt;&quot;pass1&quot;,
    &quot;user2&quot;=&gt;&quot;pass2&quot;,
    &quot;user3&quot;=&gt;&quot;pass3&quot;,
    &quot;user4&quot;=&gt;&quot;pass4&quot;,
];
$proxy_ip=$_GET['local_addr'];
$user_ip=$_GET['client_addr'];
$service=$_GET['service'];
$is_sps=$_GET['sps']=='1';
$user=$_GET['user'];
$pass=$_GET['pass'];
$target=$_GET['target'];
//业务逻辑判断
//....
$ok=false;
foreach ($alluser as $dbuser =&gt; $dbpass) {
    if ($user==$dbuser&amp;&amp;$pass==$dbpass){
        $ok=true;
        break;
    }
}
//设置认证结果
if($ok){
    header(&quot;userconns:1000&quot;);
    header(&quot;ipconns:2000&quot;);
    header(&quot;userrate:3000&quot;);
    header(&quot;iprate:8000&quot;);
    header(&quot;UPSTREAM:http://127.0.0.1:3500?parent-type=tcp&quot;);
    header(&quot;HTTP/1.1 204 No Content&quot;);
}</code></pre>
                        <h4 id="解释"><a href="#/?id=%e8%a7%a3%e9%87%8a" data-id="解释" class="anchor"><span>解释</span></a></h4>
                        <p>userconns：用户的最大连接数，不限制为0或者不设置这个头部。<br />ipconns：用户IP的最大连接数，不限制为0或者不设置这个头部。<br />userrate：用户的单个TCP连接速率限制，单位：字节/秒，不限制为0或者不设置这个头部。<br />iprate：用户IP的单个TCP连接速率限制，单位：字节/秒，不限制为0或者不设置这个头部。<br />upstream：使用的上级，没有为空，或者不设置这个头部。 </p>
                        <h4 id="提示"><a href="#/?id=%e6%8f%90%e7%a4%ba" data-id="提示" class="anchor"><span>提示</span></a></h4>
                        <p>1.默认情况下，设置了<code>--auth-url</code>是强制要求客户端提供用户名和密码的；如果不需要强制要求客户端提供用户名密码，并认证，可以加上<code>--auth-nouser</code>，每次访问仍然会访问认证地址<code>--auth-url</code>进行认证，当客户端没有发生认证信息当时候，php接口里面接收的$user认证用户名和$pass认证密码都为空。<br />2.连接数限制优先级：用户认证文件连接数限制-》文件ip.limit连接数限制-》API用户连接数限制-》API的IP连接数限制-》命令行全局连接数限制。<br />3.速率限制优先级：用户认证文件速率限制-》文件ip.limit速率限制-》API用户速率限制-》API的IP速率限制-》命令行全局速率限制。<br />3.上级获取优先级：用户认证文件的upstream-》文件ip.limit的upstream-》API的upstream-》命令行指定的上级。<br />4.<code>--auth-cache</code>认证缓存，对认证结果缓存一定时间，提升性能，降低认证接口压力，--auth-cache 单位秒，默认0, 设置0是关闭缓存。 </p>
                        <h4 id="upstream详细说明"><a href="#/?id=upstream%e8%af%a6%e7%bb%86%e8%af%b4%e6%98%8e" data-id="upstream详细说明" class="anchor"><span>upstream详细说明</span></a></h4>
                        <p>1.当参数<code>sps</code>是0的时候。<br />service是http时，upstream只支持http(s)代理，不支持认证，如需要认证可以用sps代替，格式：<br /><code>http://127.0.0.1:3100?argk=argv</code><br />service是socks时，upstream只支持socks5代理，格式：<br /><code>socks5://127.0.0.1:3100?argk=argv</code> </p>
                        <p>解释：<code>http://</code>，<code>socks5://</code> 是固定的，<code>127.0.0.1:3100</code>是上级的地址 </p>
                        <p>2.当<code>sps</code>是1的时候。<br />upstream支持socks5、http(s)代理，支持认证，格式：<code>protocol://a:b@2.2.2.2:33080?argk=argv</code>，具体介绍请参考SPS章节的，<strong>多个上级</strong>，<code>-P</code>参数的说明。<br />3.参数，<code>?</code>后面<code>argk=argv</code>是参数：参数名称=参数值，多个参数用<code>&amp;</code>连接。<br />支持的所有参数如下,和命令行同名参数意义一致。 </p>
                        <ol>
                            <li>parent-type : 上级底层传输类型，支持 tcp,tls,ws,wss。 </li>
                            <li>parent-ws-method : 上级底层ws传输类型的加密方法，支持的值和命令行支持的值范围一样。 </li>
                            <li>parent-ws-password : 上级底层ws传输类型的加密密码，数字字母组成的密码。 </li>
                            <li>parent-tls-single : 上级底层tls传输类型是否是单向tls，可以是：true | false。 </li>
                            <li>timeout : 建立tcp连接的超时时间，数字，单位毫秒。 </li>
                            <li>ca : 上级底层tls传输类型的ca证书文件经过base64编码后的字符串。 </li>
                            <li>cert : 上级底层tls传输类型的证书文件经过base64编码后的字符串。 </li>
                            <li>key : 上级底层tls传输类型的证书密钥文件经过base64编码后的字符串。 </li>
                        </ol>
                        <h3 id="流量上报流量统计流量限制"><a href="#/?id=%e6%b5%81%e9%87%8f%e4%b8%8a%e6%8a%a5%e6%b5%81%e9%87%8f%e7%bb%9f%e8%ae%a1%e6%b5%81%e9%87%8f%e9%99%90%e5%88%b6" data-id="流量上报流量统计流量限制" class="anchor"><span>流量上报/流量统计/流量限制</span></a></h3>
                        <p>proxy的http(s)/socks5/sps/tcp/udp代理功能支持流量上报,可以通过参数<code>--traffic-url</code>设置一个http接口地址。<br />proxy会把连接使用的流量上报到这个地址,具体情况是,proxy发送一个HTTP到GET请求到<code>--traffic-url</code>设置的HTTP URL地址.<br />上报模式有两种，可以通过<code>--traffic-mode</code>参数指定，可以是<code>normal</code>普通模式上报，也可以是<code>fast</code>快速模式上报。 </p>
                        <ol>
                            <li><code>normal</code>普通模式上报<br />当连接释放时,proxy会把此次连接使用的流量上报到这个<code>--traffic-url</code>地址. </li>
                            <li><code>fast</code>快速模式上报<br />对已经建立的每个连接，proxy会<code>定时</code>把这个连接产生的流量上报到这个这个<code>--traffic-url</code>地址.<br /><code>定时</code>默认是5秒，可以通过参数<code>--traffic-interval</code>修改<code>定时</code>为合适的秒数。<br />流量上报功能结合上面的API认证功能可以实现实时控制用户的流量使用,流量统计,流量限制;流量上报到接口,接口把流量数据写入数据库,然后认证API查询数据库判断用户或者IP流量使用情况,用来确定用户是否可以认证成功. </li>
                        </ol>
                        <p>下面是一个完整的URL请求实例: </p>
                        <p><code>http://127.0.0.1:33088/user/traffic?bytes=337&amp;client_addr=127.0.0.1%3A51035&amp;id=http&amp;server_addr=127.0.0.1%3A33088&amp;target_addr=myip.ipip.net%3A80&amp;username=a</code> </p>
                        <p>请求参数说明: id: 服务id标志.<br />server_addr: 客户端请求的代理地址,格式: <code>IP:端口</code>.<br />client_addr: 客户端地址,格式: <code>IP:端口</code>.<br />target_addr: 目标地址,格式: <code>IP:端口</code>,tcp/udp代理时,这个是空.<br />username: 代理认证用户名,tcp/udp代理时,这个是空.<br />bytes: 此次使用的流量字节数. </p>
                        <h4 id="提示-1"><a href="#/?id=%e6%8f%90%e7%a4%ba-1" data-id="提示-1" class="anchor"><span>提示</span></a></h4>
                        <p>访问的<code>--traffic-url</code>地址接口必须返回HTTP状态码<code>204</code>，流量上报才认为上报成功，返回其它状态码将认为上报流量失败，会输出相关日志。 </p>
                        <h4 id="流量上报原理"><a href="#/?id=%e6%b5%81%e9%87%8f%e4%b8%8a%e6%8a%a5%e5%8e%9f%e7%90%86" data-id="流量上报原理" class="anchor"><span>流量上报原理</span></a></h4>
                        <p><img src="https://gitee.com/snail/proxy/raw/master/doc/images/traffic.png" data-origin="https://gitee.com/snail/proxy/raw/master/doc/images/traffic.png" alt="traffic" /></p>
                        <h3 id="主动断开用户连接"><a href="#/?id=%e4%b8%bb%e5%8a%a8%e6%96%ad%e5%bc%80%e7%94%a8%e6%88%b7%e8%bf%9e%e6%8e%a5" data-id="主动断开用户连接" class="anchor"><span>主动断开用户连接</span></a></h3>
                        <p>proxy的http(s)/socks5/sps代理功能支持<code>控制接口</code>,可以通过参数<code>--control-url</code>指定的http接口地址, 那么proxy就会<code>定期</code>的把当前连接到proxy的全部用户名或客户端IP发送到此URL，具体情况是,proxy发送一个HTTP的POST请求到<code>--control-url</code>设置的HTTP URL地址.<code>定期</code>默认是30秒，可以通过<code>--control-sleep</code>参数修改此值。<br />当用户过期，或者用户流量已经用完，通过认证API只能控制用户不能新建连接，但是已经和proxy建立当连接没法立刻断开， 那么通过控制接口可以解决这个问题，控制接口会在最慢<code>定期</code>时间内通过控制接口返回的内容，结束已经无效的用户建立的连接。</p>
                        <h4 id="控制接口请求说明"><a href="#/?id=%e6%8e%a7%e5%88%b6%e6%8e%a5%e5%8f%a3%e8%af%b7%e6%b1%82%e8%af%b4%e6%98%8e" data-id="控制接口请求说明" class="anchor"><span>控制接口请求说明</span></a></h4>
                        <p>proxy会向控制接口URL发送一个HTTP POST请求，表单数据中有两个字段：user和ip。</p>
                        <p>user：当前连接到proxy的用户名，多个使用英文逗号分割，比如：user1,user2</p>
                        <p>ip：当前连接到proxy的客户端ip地址，多个使用英文逗号分割，比如：1.1.1.1,2.2.2.2</p>
                        <h4 id="控制接口返回数据说明"><a href="#/?id=%e6%8e%a7%e5%88%b6%e6%8e%a5%e5%8f%a3%e8%bf%94%e5%9b%9e%e6%95%b0%e6%8d%ae%e8%af%b4%e6%98%8e" data-id="控制接口返回数据说明" class="anchor"><span>控制接口返回数据说明</span></a></h4>
                        <p>控制接口返回的数据是无效的用户和IP，格式是一个json对象数据，有两个字段user和ip。</p>
                        <p>比如：{&quot;user&quot;:&quot;a,b&quot;,&quot;ip&quot;:&quot;&quot;}</p>
                        <p>user：当前连接到proxy的用户名，多个使用英文逗号分割，没有留空，比如：user1,user2</p>
                        <p>ip：当前连接到proxy的客户端ip地址，多个使用英文逗号分割，没有留空，比如：1.1.1.1,2.2.2.2</p>
                        <p>返回的用户和ip已经建立的连接会被proxy断开。</p>
                        <h4 id="示例-1"><a href="#/?id=%e7%a4%ba%e4%be%8b-1" data-id="示例-1" class="anchor"><span>示例</span></a></h4>
                        <p>假设--control-url <code>http://127.0.0.1:33088/user/control.php</code> 指向了一个php接口地址.<br />control.php内容如下： </p>
                        <pre v-pre="" data-lang="php"><code class="lang-php">&lt;?php
#接收proxy post过来的数据
$userArr=explode(&quot;,&quot;,$_POST['user']);
$ipArr=$_GET['ip'];

//无效用户列表
$badUsers=[];

foreach ($userArr as $user) {
    //逻辑判断用户$user是否无效,如果无效就放入$badUsers
    $badUsers[]=$user;
}
$data=[&quot;user&quot;=&gt;implode(&quot;,&quot;$badUsers),&quot;ip&quot;=&gt;&quot;&quot;];

echo json_encode($data);</code></pre>
                        <h2 id="_10本地认证，限速，控制连接数"><a href="#/?id=_10%e6%9c%ac%e5%9c%b0%e8%ae%a4%e8%af%81%ef%bc%8c%e9%99%90%e9%80%9f%ef%bc%8c%e6%8e%a7%e5%88%b6%e8%bf%9e%e6%8e%a5%e6%95%b0" data-id="_10本地认证，限速，控制连接数" class="anchor"><span>10.本地认证，限速，控制连接数</span></a></h2>
                        <p>proxy的http(s)/socks5/sps代理功能，支持通过配置文件控制用户对代理对访问，支持开启http(s)代理``Proxy Basic 代理认证`,socks5代理认证。 </p>
                        <h3 id="开始使用"><a href="#/?id=%e5%bc%80%e5%a7%8b%e4%bd%bf%e7%94%a8" data-id="开始使用" class="anchor"><span>开始使用</span></a></h3>
                        <p>proxy的http(s)/socks5/sps代理功能可以通过<br /><code>--auth-file</code>，<code>--max-conns</code>，<code>--ip-limit</code>，<code>--rate-limit</code>，<code>-a</code>这五个参数控制。 </p>
                        <h4 id="参数详细解释"><a href="#/?id=%e5%8f%82%e6%95%b0%e8%af%a6%e7%bb%86%e8%a7%a3%e9%87%8a" data-id="参数详细解释" class="anchor"><span>参数详细解释</span></a></h4>
                        <h5 id="-auth-file"><a href="#/?id=-auth-file" data-id="-auth-file" class="anchor"><span><code>--auth-file</code></span></a></h5>
                        <p>认证的用户名和密码文件，该参数指定一个文件，一行一条规则,格式是:&quot;用户名:密码:连接数:速率:上级&quot;。<br /><code>连接数</code>是用户最大连接数，<code>速率</code>是用户每个tcp连接最大速度，单位是：字节/秒，<code>上级</code>是用户使用的上级。<br />不仅可以通过<code>--auth-file</code>设置认证用户，也可以直接用<code>-a</code>参数设置，多个用户就重复多个<code>-a</code>参数即可。<br />比如：<code>proxy http -a a:b:0:0: -a c:d:0:0:</code> </p>
                        <p>实例解释：<br />比如：<code>user:pass:100:10240:http://192.168.1.1:3100</code><br /><code>user</code>是认证用户名<br /><code>pass</code>是认证用户密码（不能包含冒号:）<br /><code>100</code>是这个用户的最大连接数，不限制写0<br /><code>10240</code>是这个用户单个tcp连接的速率限制，单位是：字节/秒，不限制写0<br /><code>http://192.168.1.1:3100</code>是这个用户使用的上级，没有就留空 </p>
                        <h5 id="-max-conns"><a href="#/?id=-max-conns" data-id="-max-conns" class="anchor"><span><code>--max-conns</code></span></a></h5>
                        <p>限制代理服务的全局最大连接数，一个数字，0为不限制，默认0。 </p>
                        <h5 id="-ip-limit"><a href="#/?id=-ip-limit" data-id="-ip-limit" class="anchor"><span><code>--ip-limit</code></span></a></h5>
                        <p>控制客户端IP的连接数和连接速率，该参数指定一个文件，一行一条规则，#开头的是注视。<br />示例文件ip.limit，规则格式如下：<br /><code>127.0.0.1:100:10240:http://192.168.1.1:3100</code><br />规则解释：<br /><code>127.0.0.1</code>是要限制的IP<br /><code>100</code>是这个IP的最大连接数，不限制写0<br /><code>10240</code>是IP单个tcp连接的速率限制，单位是：字节/s，不限制写0<br /><code>http://192.168.1.1:3100</code>是这个IP使用的上级，没有就留空 </p>
                        <h5 id="-rate-limit"><a href="#/?id=-rate-limit" data-id="-rate-limit" class="anchor"><span><code>--rate-limit</code></span></a></h5>
                        <p>限制服务的每一个tcp连接的速度，比如:100K 2000K 1M . 0意味着无限制，默认0。</p>
                        <h2 id="_11集群管理"><a href="#/?id=_11%e9%9b%86%e7%be%a4%e7%ae%a1%e7%90%86" data-id="_11集群管理" class="anchor"><span>11.集群管理</span></a></h2>
                        <p>proxy支持集群管理功能，此时proxy安装在每个机器节点上作为agent，配合控制面板<a href="https://github.com/snail007/proxy-admin-cluster" target="_blank"><code>proxyadmin集群版</code></a>，就能够实现统一管理海量机器上的proxy服务。 </p>
                        <p>proxy如果要作为agent运行，假设控制面板的集群端口地址是：<code>1.1.1.1:55333</code>. </p>
                        <p>命令示例如下： </p>
                        <p><code>proxy agent -k xxx -c 1.1.1.1:55333</code> </p>
                        <p>命令解释： </p>
                        <p>agent ： 是功能参数，表示运行agent模式。 </p>
                        <p>-k ：和<code>proxyadmin集群版</code>通讯加密解密的密钥，这个密钥是在<code>proxyadmin集群版</code>的配置文件里面设置的。 </p>
                        <p>-c ：<code>proxyadmin集群版</code>的集群端口地址，格式：IP:端口。 </p>
                    </article>
                </section>
            </div>
        </div>
    </div>
@stop
