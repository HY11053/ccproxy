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
                <a href="#super" class="">商业授权</a>
            </div>
        </div>
    </div>
    <div class="index-module">
        <div class="solution-super-contant help-contant">
            <div class="content">
                <div class="article-body">
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
                                下载地址：<code><a class="vglnk" href="https://github.com/snail007/goproxy/releases" rel="nofollow"><span>https</span><span>://</span><span>github</span><span>.</span><span>com</span><span>/</span><span>snail007</span><span>/</span><span>goproxy</span><span>/</span><span>releases</span></a></code></p></li>

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

                    <p><code>LIC_PROXY=<a class="vglnk" href="http://192.168.1.200:8080" rel="nofollow"><span>http</span><span>://</span><span>192</span><span>.</span><span>168</span><span>.</span><span>1</span><span>.</span><span>200</span><span>:</span><span>8080</span></a> ./proxy http -p :9090</code></p>

                    <h5 id="3-如果内网有现成的http代理-那么2步骤里面不需要自己启动一个代理-lic-proxy直接使用现成的http代理即可">3.如果内网有现成的http代理，那么2步骤里面不需要自己启动一个代理，LIC_PROXY直接使用现成的http代理即可。</h5>

                </div>
            </div>
        </div>
    </div>
@stop
