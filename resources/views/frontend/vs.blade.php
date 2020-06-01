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
                <a href="#super" class="">progxygo免费版Vs商业版功能对比</a>
            </div>
        </div>
    </div>
    <div class="index-module">
        <div class="solution-super-contant help-contant">
            <div class="content">
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
                </div>
            </div>
        </div>
    </div>
@stop
