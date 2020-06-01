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
                <a href="#super" class="active">推荐产品</a> 
            </div>
        </div>
    </div>
    <div class="list-main">
        <div class="index-module" name="super">
            <div class="solution-super-contant mt30 whole">
                <p class="hosting-title product">
                    推荐产品</p>
                <div class="solution-super">
                    <div class="mtable">

                        <div class="mtable-list">
                            <div class="mtable-item mtable-top">
                                <i class="icon-super">价格优享</i>
                                0元goproxy商业版试用
                            </div>
                            <div class="mtable-item">
                                <div class="mtable-param">
                                    <ul><li><a>API控制</a></li>
                                    <li><a>API认证</a></li>
                                    <li><a>全网加速</a></li>
                                     <li><a>限速</a></li>
                                      <li><a>限流量</a></li>
                                      <li><a>限连接数</a></li>
                                       <li><a>黑白名单</a></li>
                                    <li><a>动态IP</a></li><li><a>加密防护</a></li><li><a>完整商业版功能</a></li></ul><p class="activity">活动时间：长期有效</p>
                                </div>
                            </div>
                            <div class="mtable-item mtable-bottom">
                                <div class="mtable-price">
                                    <p class="original">原价：<a href="javascript:;">120</a>/年/机器</p><p class="discount">折扣价：<a href="javascript:;">0</a>元7天试用</p>
                                </div>

                                <a class="btn" onclick="goUrl('https://gpm.host900.com')">立即试用</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="index-module custom-frame">
            <div class="solution-super-contant">
                <p class="hosting-title product">
                    产品优势</p>
                <div class="solution-super">
                    <div class="solution-list recom-list">
                        <div class="super-body">
                            <i class="icon-super-1"></i>全能代理
                        </div>
                    </div>
                    <div class="solution-list recom-list">
                        <div class="super-body">
                            <i class="icon-super-2"></i>API控制
                        </div>
                    </div>
                    <div class="solution-list recom-list">
                        <div class="super-body">
                            <i class="icon-super-3"></i>高性能高可用服务
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-module" name="overseas">
            <div class="solution-super-contant">
                <p class="hosting-title product">
                    产品目录</p>
                <div class="solution-super">
                    <div class="product-funct">
                        <div class="product-group">
                            <div class="mtable">

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        gorproxy 免费版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>
                                                命令行操作，免费使用，稳定且灵活，适合一切熟悉命令行的大佬或集体或公司白嫖，自用或者大规模部署对外服务
                                            </a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">免费</p>
                                        </div>

                                        <a class="btn" href="/download">立即使用</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        gorproxy 商业版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                           <ul><li><a>
命令行操作，包含商业版功能，性能稳定，使用灵活，适合集体或公司大规模部署对外提供服务
                                            </a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">120</a>/年/机器</p>
                                        </div>

                                        <a class="btn" href="/purchase">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        proxyadmin 免费版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>
Web界面操作，免费使用，包含免费版功能，服务数量有限制，适合个人，小白和白嫖党
                                            </a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">免费</p>
                                        </div>

                                        <a class="btn" href="/download">立即使用</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        proxyadmin VIP版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>
Web界面操作，功能和免费版一样，服务数量无限制，适合个体户或者小集体
                                            </a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">120</a>/年/机器</p>
                                        </div>

                                        <a class="btn" href="/purchase">立即购买</a>

                                    </div>
                                </div>
                                
                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        proxyadmin 商业版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>
Web界面操作，包含商业版全部功能，无限制，适合集体或公司对外提供服务
                                            </a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">240</a>/年/机器</p>
                                        </div>

                                        <a class="btn" href="/purchase">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list active">
                                    <div class="mtable-item mtable-top">
                                        proxyadmin 集群版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>
Web界面操作，无限制，配合 <b>gorproxy 商业版</b>,可以实现以组为单位，管理海量机器上的proxy服务，适合有大量机器的集体或公司对外提供服务                                                                 </a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">360</a>/年/机器</p>
                                        </div>

                                        <a class="btn" href="/purchase">立即购买</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
