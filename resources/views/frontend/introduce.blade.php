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
        <div class="index-module" name="super">
            <div class="solution-super-contant mt30 whole">
                <p class="hosting-title product">
                    推荐产品</p>
                <div class="solution-super">
                    <div class="mtable">

                        <div class="mtable-list">
                            <div class="mtable-item mtable-top">
                                <i class="icon-super">价格优享</i>
                                1元基础版试用
                            </div>
                            <div class="mtable-item">
                                <div class="mtable-param">
                                    <ul><li><a>峰值用户数400</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul><p class="activity">活动时间：2020/5/1-2020/5/31</p>
                                </div>
                            </div>
                            <div class="mtable-item mtable-bottom">
                                <div class="mtable-price">
                                    <p class="original">原价：<a href="javascript:;">2999</a>元/月</p><p class="discount">折扣价：<a href="javascript:;">1</a>元7天试用</p>
                                </div>

                                <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=22')">立即购买</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="index-module">
            <div class="solution-super-contant whole">
                <p class="hosting-title product">
                    产品功能</p>
                <div class="solution-super" id="production-introduce">
                    <div class="solution-list recom-list mb20">
                        <div class="recom-header">
                            <i class="icon-effect"></i>防御DDoS
                        </div>
                        <div class="recom-body">
                            <ul class="product-param">
                                <li>与普通的高防机房不同，游戏盾不是通过海量的带宽硬抗攻击</li>
                                <li>通过分布式的抗D节点，将黑客的攻击进行有效的拆分和调度，使得攻击无法集中到某一个点上。</li>
                            </ul>
                        </div>
                    </div>
                    <div class="solution-list recom-list mb20">
                        <div class="recom-header">
                            <i class="icon-effect"></i>防御CC攻击
                        </div>
                        <div class="recom-body">
                            <ul class="product-param">
                                <li>游戏安全网关能够针对TCP协议层的空连接慢连接有效防护，自动拦截。</li>
                                <li>游戏安全网关能够针对TCP协议层的空连接、慢连接有效防护，自动拦截。</li>
                            </ul>
                        </div>
                    </div>
                    <div class="solution-list recom-list mb20">
                        <div class="recom-header">
                            <i class="icon-effect"></i>优质网络节点
                        </div>
                        <div class="recom-body">
                            <ul class="product-param">
                                <li>电信、联通和移动单线节点均直连运营商骨干网络，全国访问延迟均小于50ms。</li>
                                <li>中国大陆提供北京、杭州、深圳三大地区的优质8线BGP节点，通过调度能力有效解决单线防护的网络卡慢问题。</li>
                            </ul>
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
                            <i class="icon-super-1"></i>精准攻击防护
                        </div>
                    </div>
                    <div class="solution-list recom-list">
                        <div class="super-body">
                            <i class="icon-super-2"></i>隐藏用户服务资源
                        </div>
                    </div>
                    <div class="solution-list recom-list">
                        <div class="super-body">
                            <i class="icon-super-3"></i>高可靠高可用服务
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-module hosting-frame">
            <div class="solution-super-contant">
                <p class="hosting-title product">
                    商务产品</p>
                <div class="solution-super mt20">

                    <div class="solution-list edition-list shade">
                        <div class="product-header">
                            1元基础版试用</div>
                        <div class="product-body">
                            <div class="product-param">
                                <ul><li><a>峰值用户数400</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul><p class="activity">活动时间：2020/5/1-2020/5/31</p>
                            </div>
                            <div class="product-price">
                                <p class="original">原价：<a href="javascript:;">2999</a>元/月</p><p class="discount">折扣价：<a href="javascript:;">1</a>元7天试用</p>

                                <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=22')">立即购买</a>

                            </div>
                        </div>
                    </div>

                    <div class="solution-list edition-list shade">
                        <div class="product-header">
                            入门版</div>
                        <div class="product-body">
                            <div class="product-param">
                                <ul><li><a>峰值用户数200</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                            </div>
                            <div class="product-price">
                                <p class="discount">原价：<a href="javascript:;">799
                                    </a>元/月</p>

                                <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=31')">立即购买</a>

                            </div>
                        </div>
                    </div>

                    <div class="solution-list edition-list shade">
                        <div class="product-header">
                            基础版</div>
                        <div class="product-body">
                            <div class="product-param">
                                <ul><li><a>峰值用户数400</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                            </div>
                            <div class="product-price">
                                <p class="original">原价：<a href="javascript:;">2999</a>元/月</p><p class="discount">折扣价：<a href="javascript:;">1999</a>元/月</p>

                                <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=14')">立即购买</a>

                            </div>
                        </div>
                    </div>

                    <div class="solution-list edition-list shade">
                        <div class="product-header">
                            商务版</div>
                        <div class="product-body">
                            <div class="product-param">
                                <ul><li><a>峰值用户数600</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                            </div>
                            <div class="product-price">
                                <p class="discount"><a href="javascript:;">3999</a>元/月</p>

                                <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=15')">立即购买</a>

                            </div>
                        </div>
                    </div>

                    <div class="solution-list edition-list shade">
                        <div class="product-header">
                            专业版</div>
                        <div class="product-body">
                            <div class="product-param">
                                <ul><li><a>峰值用户数800</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                            </div>
                            <div class="product-price">
                                <p class="discount"><a href="javascript:;">5999</a>元/月</p>

                                <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=17')">立即购买</a>

                            </div>
                        </div>
                    </div>

                    <div class="solution-list edition-list shade">
                        <div class="product-header">
                            高级版</div>
                        <div class="product-body">
                            <div class="product-param">
                                <ul><li><a>峰值用户数1000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                            </div>
                            <div class="product-price">
                                <p class="discount"><a href="javascript:;">9999</a>元/月</p>

                                <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=18')">立即购买</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="index-module" name="scheme">
            <div class="solution-super-contant">
                <p class="hosting-title product">
                    旗舰产品</p>
                <div class="solution-super">
                    <div class="product-funct">
                        <div class="product-group">
                            <div class="mtable">

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        旗舰版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数1500</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">14999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=16')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list active">
                                    <div class="mtable-item mtable-top">
                                        旗舰II版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数2000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">19999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=30')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        尊享版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数3000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">29999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=19')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        尊享I版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数4000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">39999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=32')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        尊享II版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数5000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">49999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=29')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        尊享Ⅲ版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数6000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">59999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=172')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        尊享IV版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数10000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">99999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=109')">立即购买</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-module" name="overseas">
            <div class="solution-super-contant">
                <p class="hosting-title product">
                    海外产品</p>
                <div class="solution-super">
                    <div class="product-funct">
                        <div class="product-group">
                            <div class="mtable">

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        海外商务版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数600</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">4999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=218')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        海外高级版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数1000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">14999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=219')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        海外旗舰版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数2000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">29999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=220')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list">
                                    <div class="mtable-item mtable-top">
                                        海外尊享版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数4000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">59999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=221')">立即购买</a>

                                    </div>
                                </div>

                                <div class="mtable-list active">
                                    <div class="mtable-item mtable-top">
                                        海外尊享II版</div>
                                    <div class="mtable-item">
                                        <div class="mtable-param">
                                            <ul><li><a>峰值用户数10000</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                        </div>
                                    </div>
                                    <div class="mtable-item mtable-bottom">
                                        <div class="mtable-price">
                                            <p class="discount"><a href="javascript:;">139999</a>元/月</p>
                                        </div>

                                        <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=222')">立即购买</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-module custom-frame" name="scene">
            <div class="solution-super-contant whole">
                <p class="hosting-title product">
                    定制产品</p>
                <div class="solution-super">

                    <div class="mtable">
                        <div class="mtable-list">
                            <div class="mtable-item mtable-top">
                                定制版
                            </div>
                            <div class="mtable-item">
                                <div class="mtable-param">
                                    <ul><li><a>峰值用户数1W以上</a></li><li><a>全网加速</a></li><li><a>ddos防护无限</a></li><li><a>CC防护100%</a></li></ul>
                                </div>
                            </div>
                            <div class="mtable-item mtable-bottom">
                                <div class="mtable-price">
                                    <p class="discount"><a href="javascript:;">99999+</a>元/月</p>
                                </div>

                                <a class="btn" onclick="goUrl('/Web/WH/buy.aspx?ProductID=21')">
                                    立即购买</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
