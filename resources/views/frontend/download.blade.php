@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('main_content')
    <div class="main-content">
        <div class="path">当前位置：<a href="/">首页</a>&gt;&nbsp;<a href="/jiaoyu/">教育培训</a>&gt;<a href="/peixunban/">培训班加盟</a>&gt;&nbsp;智慧超人k12人工智能教育加盟
        </div>
        <div class="content">
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
                <tbody><tr>
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
                    <td align="center">Web界面操作，服务数量无限制，适合个体户或者小集体</td>
                </tr>
                <tr>
                    <td align="left"><a href="https://github.com/snail007/proxy-admin-commercial" target="_blank">proxyadmin 商业版</a></td>
                    <td align="center">√</td>
                    <td align="center">√</td>
                    <td align="center">√</td>
                    <td align="center">Web界面操作，无限制，适合集体或公司对外提供服务</td>
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
                </tbody></table>
            <div class="article-body">

                <h4 id="目前-goproxy-和-sdk-提供免费版和商业版-功能对比如下">目前，GOPROXY 和 SDK 提供免费版和商业版，功能对比如下。</h4>

                <table>
                    <thead>
                    <tr>
                        <th align="left">　　　　　　　　</th>
                        <th align="center">　　　免费版　　　</th>
                        <th align="center">　　　商业版　　　</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td align="left"><code>TCP转发</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>UDP转发</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>HTTP(S)代理</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>Socks5代理</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>Socks5代理UDP支持</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>SPS综合代理</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>SPS上级认证</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>内网穿透</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>DNS代理，防污染，独立DNS服务</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>HTTP(S)代理认证，认证API，负载均衡</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>SOCKS5代理认证，认证API，负载均衡</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>SPS代理认证，认证API，负载均衡</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>STOP&amp;ONLY黑白名单</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>客户端IP黑白名单</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>检查更新，失败退出</code></td>
                        <td align="center">×</td>
                        <td align="center">×</td>
                    </tr>

                    <tr>
                        <td align="left"><code>单机进程数量限制</code></td>
                        <td align="center">×</td>
                        <td align="center">×</td>
                    </tr>

                    <tr>
                        <td align="left"><code>手册完整功能</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>需要联网认证</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>限速功能</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>http/socks5/tcp代理指定出口IP</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>目标连接重定向</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>docker</code></td>
                        <td align="center">√</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>免费更新至更多功能的商业版</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>http(s)\socks\sps，上级ws/wss支持路径和独立加密</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>用户限速，IP限速</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>用户限连接数，IP限连接数</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>API动态选择上级代理</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>

                    <tr>
                        <td align="left"><code>socks5/http(s)/sps/tcp/udp代理监听支持端口范围</code></td>
                        <td align="center">×</td>
                        <td align="center">√</td>
                    </tr>
                    </tbody>
                </table>

                <h4 id="商业版授权方式分为两种">商业版授权方式分为两种</h4>

                <ol>
                    <li><p>程序和机器绑定，单个机器方式授权，针对<code>机器码</code>收费。</p></li>

                    <li><p>程序和不和机器绑定，授权码方式授权，针对<code>授权码</code>收费。</p></li>
                </ol>

                <h4 id="商业版使用">商业版使用</h4>

                <ol>
                    <li><p>去平台授权平台 <a href="https://gpm.host900.com/?lang=zh-CN">https://gpm.host900.com/?lang=zh-CN</a> 注册一个用户。</p></li>

                    <li><p>如果使用<code>机器码</code>授权方式，首次执行：<code>proxy http</code> 并<strong>等待程序自己退出，不要手动结束程序</strong>，然后会在当前目录下面生成id.txt文件，里面是当前机器的机器码，如果是sdk，调用MacCode方法即可获得当前机器的机器码；然后购买机器码卡密，去授权平台后台点击菜单<code>添加机器码</code>输入<code>卡密</code>完成激活机器码，然后点击菜单<code>我的机器码</code>，点击列表操作列的<code>修改</code>,把id.txt内的机器码填入到机器码输入框里面，然后保存即可完成授权。</p></li>

                    <li><p>如果是<code>授权码</code>方式授权，首先购买授权码，然后会在授权平台里面看见自己的授权码。加上授权码参数<code>--authcode 授权码</code>启动程序即可，也可以设置环境变量<code>LIC_AUTHCODE</code>内容为授权码，如果没有使用参数<code>--authcode</code>，程序尝试从环境变量<code>LIC_AUTHCODE</code>获取授权码。如果是sdk，start方法有授权码参数，使用购买的授权码即可。</p></li>

                    <li><p>商业版下载，打开下面下载地址后，下载文件列表中文件名后缀是：_commercial.tar.gz的为商业版。请根据自己系统情况下载。
                            下载地址：<code>https://github.com/snail007/goproxy/releases</code></p></li>

                    <li><p>完全手册：<a href="https://github.com/snail007/goproxy/blob/master/README_ZH.md">https://github.com/snail007/goproxy/blob/master/README_ZH.md</a><br>
                            新版手册：<a href="https://snail007.github.io/goproxy/categories/goproxy%E6%89%8B%E5%86%8C/">https://snail007.github.io/goproxy/categories/goproxy%E6%89%8B%E5%86%8C/</a></p></li>
                </ol>

                <h4 id="提醒">提醒</h4>

                <p>商业版只会在启动的时候联网检查一次授权，后期不会再联网检查，只会在<code>授权码</code>、<code>机器码</code>到期的时候再检查一次，如果48小时内无法成功检查授权程序会退出。
                    如果系统发现用户恶意使用或传播自己的<code>授权码</code>、<code>机器码</code>，官方有权终止其使用，并不负任何责任。</p>

                <h4 id="购买商业版">购买商业版</h4>

                <ol>
                    <li><p>购买商业版，请加GOPROXY商业版官方QQ群：746489979</p></li>

                    <li><p>除了联系管理员购买卡密，还可以在线购买机器码。首先登录授权平台，点击菜单：机器码管理-&gt;在线购买，可以完成少量机器码的购买。如果需要一次购买很多，可以根据网页提示联系管理员。</p></li>
                </ol>

                <h4 id="商业版免费试用">商业版免费试用</h4>

                <ol>
                    <li><p>购买商业版之前你可以免费试用7天，以用来确定GOPROXY商业版功能是否满足你的需求。</p></li>

                    <li><p>试用步骤：登录<a href="https://gpm.host900.com/?lang=zh-CN">授权平台</a> -&gt; 机器码管理 -&gt; 在线购买 -&gt; 点击”开始试用”。</p></li>
                </ol>

                <h4 id="商业版用户附加权益">商业版用户附加权益</h4>

                <p>1、官方免费提供专业的技术指导。</p>

                <p>2、商业版用户可以提一些商业功能意见，官方会针对意见的合理性等情况进行评估，如果意见被采纳，在未来新版本中会加入。</p>

                <p>3、商业版用户可以免费更新至功能更多的商业版新版。</p>

                <h4 id="不能访问授权的解决办法">不能访问授权的解决办法</h4>

                <p>商业版必须可以在线访问授权才能使用，如果您在使用proxy过程中出现服务器可以访问互联网，但是proxy提示访问授权信息失败。可以按着以下方法解决。</p>

                <h5 id="1-如果您的proxy机器可以访问互联网-由于机器dns可能不能正确解析更新域名-可以指定dns启动proxy">1.如果您的proxy机器可以访问互联网，由于机器DNS可能不能正确解析更新域名，可以指定DNS启动proxy。</h5>

                <p>Linux启动命令示例：</p>

                <pre><code class="language-shell hljs ini"><span class="hljs-setting">LIC_DNS=<span class="hljs-value"><span class="hljs-number">8.8</span>.<span class="hljs-number">4.4</span>:<span class="hljs-number">53</span> ./proxy http -p :<span class="hljs-number">9090</span></span></span>
</code></pre>

                <p>Windows启动命令示例</p>

                <pre><code class="language-shell hljs nginx"><span class="hljs-title">set</span> LIC_DNS=<span class="hljs-number">8.8.4.4:53</span>
./proxy.exe http -p :<span class="hljs-number">9090</span>
</code></pre>

                <h5 id="2-如果proxy是在内网环境不能直接访问互联网-你可以在能够访问互联网的机器上启动一个http代理-然后给proxy使用">2.如果proxy是在内网环境不能直接访问互联网，你可以在能够访问互联网的机器上启动一个http代理，然后给proxy使用。</h5>

                <p>比如： proxy在192.168.1.10,不能直接访问互联网。</p>

                <p>在192.168.1.200机器可以访问互联网,那么可以在192.168.1.200机器启动：</p>

                <p><code>./proxy http -p :8080 -q 8.8.4.4:53</code></p>

                <p>在192.168.1.10上面启动命令：</p>

                <p><code>LIC_PROXY=http://192.168.1.200:8080 ./proxy http -p :9090</code></p>

                <h5 id="3-如果内网有现成的http代理-那么2步骤里面不需要自己启动一个代理-lic-proxy直接使用现成的http代理即可">3.如果内网有现成的http代理，那么2步骤里面不需要自己启动一个代理，LIC_PROXY直接使用现成的http代理即可。</h5>
            </div>
        </div>
    </div>
@stop
