<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="stylesheet" type="text/css" href="/public/css/css.css" />
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/public/js/common.js"></script>
    @yield('headlibs')
</head>
<body>
<!--header 开始-->
<div class="header">
    <!--网站导航 开始-->
    <div class="top">
        <div class="inner">
            <div class="top_l">
                <a href="/">网站首页</a>
                <a href="/search/">找项目</a>
                <a href="/paihang/">排行榜</a>
                <a href="/newsPage/1601/">资讯</a>
            </div>
            <div class="top_r">
                <!-- <a href="/register/" class="t_login">注册</a> -->
                <!-- <a href="/login/" class="t_login">登录</a> -->
                <a href="https://m.anxjm.com" class="t_phone">
                    <i></i>手机版</a>
            </div>
        </div>
    </div>        <!--网站导航 结束-->
    <!--logo部分 开始-->
    <div class="logo_box">
        <!--logo-->
        <div class="logo">
            <a href="/" target="_blank"><img src="/public/images/logo.png" alt="安心加盟网" /></a>
        </div>
        <!--搜索-->
        <div class="logo_search">
            <div class="bd ">
                <form action="/search/" method="post">
                    {{csrf_field()}}
                    <input def="输入你想搜索的关键字" class="search_input" placeholder="输入你想搜索的关键字" name="keywords" type="text">
                    <input class="search_btn" value="搜索" type="submit">
                </form>
            </div>
            <div class="hd">
                <ul>
                    <li>热门搜索：</li>
                    <li><a href="https://www.anxjm.com/busInfo/10960.html" title="奶茶店加盟" target="_blank">奶茶店加盟</a></li>
                    <li><a href="https://www.anxjm.com/5/" title="烧烤店加盟" target="_blank">烧烤店加盟</a></li>
                </ul>
            </div>
        </div>
        <!--搜索-->

        <div class="weix">
            <div class="img"><img src="/public/images/weix.png" width="64" height="64" alt="" /></div><span>手机找项目</span></div>
    </div>
    <!--logo部分 结束-->
    <div class="nav">
        <div class="nav_list">
            <ul>
                <li class="cur"><a href="/" target="_blank">首页</a></li>
                <li><a href="/ms/" target="_blank">美食</a></li>
                <li><a href="/fz/" target="_blank">服装</a></li>
                <li><a href="/sj/" target="_blank">内衣</a></li>
                <li><a href="/jf/" target="_blank">家纺</a></li>
                <li><a href="/jj/" target="_blank">家居</a></li>
                <li><a href="/jc/" target="_blank">建材</a></li>
                <li><a href="/zb/" target="_blank">珠宝</a></li>
                <li><a href="/jy/" target="_blank">教育</a></li>
                <li><a href="/mr/" target="_blank">美容</a></li>
                <li><a href="/sp/" target="_blank">饰品</a></li>
                <li><a href="/gx/" target="_blank">干洗</a></li>
                <li><a href="/ye/" target="_blank">幼儿</a></li>
                <li><a href="/fw/" target="_blank">服务</a></li>
                <li><a href="/qc/" target="_blank">汽车</a></li>
                <li><a href="/ls/" target="_blank">零售</a></li>
                <li><a href="/hb/" target="_blank">环保</a></li>
                <li><a href="/sp/" target="_blank">饰品</a></li>
                <li><a href="/cl/" target="_blank">潮流</a></li>
                <li><a href="/xm/" target="_blank">农业</a></li>
                <i class="hot"></i>
            </ul>
        </div>
    </div>
</div>
<!--header 开始-->
<div class="main_container">
    <div class=" main ">
        @yield('main_content')
    </div>
</div>
<div class="brannd_1200x60">
    <img src="/public/images/temp/brand1200x60_14.jpg" width="1200" height="60" alt="" />
</div>
<!--底部 开始-->
<!--底部 start-->
<div class="footer">
    <div class="footer_nav">
        <a href="/news/1601209/" target="_blank">关于我们</a> |
        <a href="/news/1601210/" target="_blank">公司简介</a> |
        <a href="/news/69463.html" target="_blank">投诉/删除</a> |
        <a href="/news/1601212/" target="_blank">客户合作</a> |
        <a href="/news/1601213/" target="_blank">服务内容</a> |
        <a href="/news/1601214/" target="_blank">法律声明</a> |
        <a href="/sitemap/" target="_blank">网站地图</a> |
        <a href="/news/1601215/" target="_blank">联系我们</a>
    </div>
    <div class="copyright">
        <p>广告刊登：400-885-8878 防骗咨询电话：400-885-8878 安心加盟网 友情提示：决定投资之前，请与我们的投资客服联系!</p>
        <p>Copyright © 2010 Anxjm.Com. All Rights Reserved 上海莫卡网络科技有限公司 版权所有 </p>
        <p>法律顾问：曹憬律师</p>
        <p><img src="/public/images/beian.jpg" class="icon_beian"><a rel="nofollow" href="http://www.miibeian.gov.cn">沪ICP备16055116号-16</a></p>
    </div>
</div>

<!--底部 end-->    <script type="text/javascript">
    if((typeof(logo) == "undefined")){
        var logo = '/public/images/default.png';
    }
    if((typeof(project_name) == "undefined")){
        var project_name = '加盟金牌顾问';
    }
    if((typeof(pid) == "undefined")){
        var pid = 0;
    }
    if((typeof(count_msg) == "undefined")){
        var count_msg = '已为27348位客户完成加盟服务。';
    }
</script>

<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?0b298ac0c70bdb0556a3ec49851cb059";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
@yield('footlibs')
</body>
</html>