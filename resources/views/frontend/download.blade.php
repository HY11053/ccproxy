@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <link rel="stylesheet" href="/frontend/css/lists.css">
@stop
@section('main_content')
    @include('frontend.header')
    <div class="top-nav-bar-wrap">
        <div id="nav_bar" class="index-module navBar">
            <div class="top-nav">
                <a href="#super" class="active">推荐产品</a> <a href="#frame">商务产品</a> <a href="#scheme">
                    旗舰产品</a> <a href="#overseas">海外产品</a> <a href="#scene">定制产品</a> <a href="#recom">源机推荐</a>
                <a href="#more" style="display: none"></a>
            </div>
        </div>
    </div>
    <div class="list-main">
    <div class="index-module" name="frame">
        <div class="solution-super-contant">
            <p class="hosting-title product">
                核心优势</p>
            <div class="solution-super">
                <div class="solution-list recom-list core-list mb20">
                    <div class="recom-header">
                        <i class="icon-effect"></i>海量DDOS清洗
                    </div>
                    <div class="recom-body">
                        <ul class="product-param">
                            <li>T级防护能力，攻击溯源，支持多种协议</li>
                        </ul>
                    </div>
                </div>
                <div class="solution-list recom-list core-list mb20">
                    <div class="recom-header">
                        <i class="icon-effect"></i>自主定制清洗算法
                    </div>
                    <div class="recom-body">
                        <ul class="product-param">
                            <li>独家httpp、tcpsock自主算法，根据应用灵活定制调配。</li>
                        </ul>
                    </div>
                </div>
                <div class="solution-list recom-list core-list mb20">
                    <div class="recom-header">
                        <i class="icon-effect"></i>多线路支持
                    </div>
                    <div class="recom-body">
                        <ul class="product-param">
                            <li>BGP接入，安全稳定并行</li>
                        </ul>
                    </div>
                </div>
                <div class="solution-list recom-list core-list mb20">
                    <div class="recom-header">
                        <i class="icon-effect"></i>一键接入
                    </div>
                    <div class="recom-body">
                        <ul class="product-param">
                            <li>只需改指向目标IP，方便简单。</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="index-module custom-frame" name="scheme">
        <div class="solution-super-contant">
            <p class="hosting-title product">
                产品介绍</p>
            <div class="solution-super">
                <div class="intro-list">
                    <p>
                        高防IP产品是您的服务器在非我司机房遭受DDOS攻击时或者您的应用数据服务器不方便转移时候解决方案。</p>
                    <p>
                        您可以通过配置DDoS高防IP，将流量引流到高防IP，高防IP做清洗之后将正常流量回注到您的服务器，确保源站的稳定可靠且不屏蔽外网任何IP。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="index-module hosting-frame">
        <div class="solution-super-contant">
            <p class="hosting-title product">
                产品列表</p>
            <div class="solution-super">
                <div class="mc-table">
                    <table  class="product-table">
                        <thead>
                        <tr>
                            <th>软件下载</th>
                            <th>免费版功能</th>
                            <th>商业版功能</th>
                            <th>购买使用</th>
                            <th>特点</th>
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
                </div>
            </div>
        </div>
    </div>
    <div class="index-module" name="scene">
        <div class="solution-super-contant">
            <p class="hosting-title product">
                架构部署</p>
            <div class="solution-super">
                <div class="frame-contant">
                    <div class="frame">
                        <img src="/frontend/images/graph.png">
                        <div class="frame-cont">
                            <h4>
                                高防IP：</h4>
                            <p>
                                更改服务连接目标，高防IP将替换源服务器IP对外，提供在线互联网业务，所有业务流量都将牵引至高防IP上进行清洗，干净流量回注给源站服务器。源站服务器始终隐藏在DDoS高防后面，攻击者无法直接对源站服务器发起DDoS攻击，无法影响互联网在线业务的可用性。</p>
                            <h4>
                                接入方便：</h4>
                            <p>
                                无需部署，只需配置转发，更改目标，即可将业务正常上线</p>
                            <h4>
                                成本低</h4>
                            <p>
                                3000起，即刻享受高品质防护服务</p>
                            <h4>
                                效果好</h4>
                            <p>
                                T级防护能力，集合定制清洗策略，极高降低误封率，支持各种协议。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
