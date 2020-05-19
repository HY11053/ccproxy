@extends('frontend.frontend')
@section('title')加盟店排行榜_连锁加盟店排行榜_加盟项目排行榜_创业项目加盟排行榜-安心加盟网@stop
@section('keywords')加盟店排行榜,连锁加盟店排行榜,加盟项目排行榜,创业项目加盟排行榜@stop
@section('description')加盟店排行榜,连锁加盟店排行榜,加盟项目排行榜,创业项目加盟排行榜@stop
@section('headlibs')
    <meta name="Copyright" content="{{config('app.indexname')}}-{{config('app.url')}}"/>
    <meta name="author" content="{{config('app.indexname')}}" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('https://www.','https://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
@stop
@section('main_content')
    <div class=" main ">
        <!--top 结束-->
        <!--热门品牌推荐 开始-->
        <div class="box_4">
            <div class="left">
                <div class="common_tit">
                    <h2>热门品牌推荐</h2>
                </div>
                <div class="bd">
                    <ul>
                        <li><a href="/busInfo/10925.html"><div class="img"><img src="/uploads/picture/3c/f4/3cf415ee61e8fd4d.jpg" alt=""></div><span>水果宝贝饮品</span></a></li>
                        <li><a href="/busInfo/5547.html"><div class="img"><img src="/uploads/picture/6b/11/6b11611b2fedd109.jpg" alt=""></div><span>哈尼宝贝母婴生活馆</span></a></li>
                        <li><a href="/busInfo/9235.html"><div class="img"><img src="/uploads/picture/d6/ea/d6ea0828cae679d4.jpg" alt=""></div><span>小杨生煎</span></a></li>
                        <li><a href="/busInfo/9810.html"><div class="img"><img src="/uploads/picture/fe/82/fe8226f03d87369d.jpg" alt=""></div><span>丰德启慧教育</span></a></li>
                        <li><a href="/busInfo/15610.html"><div class="img"><img src="/uploads/picture/a9/85/a985c4f6d16783ed.jpg" alt=""></div><span>三只小熊冰淇淋</span></a></li>
                        <li><a href="/busInfo/5539.html"><div class="img"><img src="/uploads/picture/aa/39/aa3985751185122a.jpg" alt=""></div><span>小顺溜童车</span></a></li>
                        <li><a href="/busInfo/1265.html"><div class="img"><img src="/uploads/picture/b1/99/b199c355bfbb3597.png" alt=""></div><span>海底捞火锅</span></a></li>
                        <li><a href="/busInfo/14144.html"><div class="img"><img src="/uploads/picture/ee/93/ee93db25287e181c.jpg" alt=""></div><span>美克士汉堡</span></a></li>
                        <li><a href="/busInfo/5305.html"><div class="img"><img src="/uploads/picture/d5/51/d551668309dc2827.jpg" alt=""></div><span>喜洋洋连锁便利店</span></a></li>
                        <li><a href="/busInfo/10659.html"><div class="img"><img src="/uploads/picture/29/03/29033e0943816f01.gif" alt=""></div><span>瑞奇叔叔面包蛋糕</span></a></li>
                        <li><a href="/busInfo/5584.html"><div class="img"><img src="/uploads/picture/0f/82/0f82847468dfcc77.jpg" alt=""></div><span>乐享购</span></a></li>
                        <li><a href="/busInfo/5546.html"><div class="img"><img src="/uploads/picture/c7/3c/c73c516a43fde5b1.jpg" alt=""></div><span>正新鸡排</span></a></li>
                        <li><a href="/busInfo/2008.html"><div class="img"><img src="/uploads/picture/19/a9/19a9c2f81a3dabc2.jpg" alt=""></div><span>母婴坊</span></a></li>
                        <li><a href="/busInfo/11957.html"><div class="img"><img src="/uploads/picture/ec/04/ec040de8a968b556.jpg" alt=""></div><span>戈拿旺巴西烤肉</span></a></li>
                        <li><a href="/busInfo/611.html"><div class="img"><img src="/uploads/picture/18/8f/188f161f741fd5c1.gif" alt=""></div><span>靓购</span></a></li>
                        <li><a href="/busInfo/712.html"><div class="img"><img src="/uploads/picture/96/a3/96a3c02a1b059e38.jpg" alt=""></div><span>安捷快递</span></a></li>
                        <li><a href="/busInfo/15674.html"><div class="img"><img src="/uploads/picture/f0/fe/f0fea25256631863.jpg" alt=""></div><span>小米辣冒菜</span></a></li>
                        <li><a href="/busInfo/14793.html"><div class="img"><img src="/uploads/picture/a3/db/a3db1d74aa30903c.jpg" alt=""></div><span>MOVO意式冰淇淋</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="common_tit">
                    <h2 class="news_tit">最新加盟排行榜</h2>
                </div>
                <div class="boutique_list">
                    <ul>
                        <li class="top">
                            <i class="num">1</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32067.html" target="_blank" title="炭烤魔盒">炭烤魔盒</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/04/dc/logo_04dc592ba356.jpg" alt="炭烤魔盒">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32067.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="top">
                            <i class="num">2</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32066.html" target="_blank" title="万盛烤全羊">万盛烤全羊</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/d4/59/logo_d4593a5cabaa.jpg" alt="万盛烤全羊">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32066.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="top hover">
                            <i class="num">3</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32065.html" target="_blank" title="鑫奇烧烤">鑫奇烧烤</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/6f/48/logo_6f4874b666fb.jpg" alt="鑫奇烧烤">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32065.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <i class="num">4</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32064.html" target="_blank" title="烤之国">烤之国</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/6c/42/logo_6c42fec6c7dd.jpg" alt="烤之国">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32064.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <i class="num">5</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32063.html" target="_blank" title="欧蜜莎内衣">欧蜜莎内衣</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/f6/41/logo_f6410ff54b26.png" alt="欧蜜莎内衣">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32063.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <i class="num">6</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32062.html" target="_blank" title="婴乐士亲子游泳">婴乐士亲子游泳</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/5a/13/logo_5a1341e470f3.jpg" alt="婴乐士亲子游泳">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32062.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <i class="num">7</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32061.html" target="_blank" title="羊东家烤全羊">羊东家烤全羊</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/ca/75/logo_ca7574ecd4c7.jpg" alt="羊东家烤全羊">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32061.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <i class="num">8</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32060.html" target="_blank" title="若然菲儿">若然菲儿</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/0c/42/logo_0c423c185732.jpg" alt="若然菲儿">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32060.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <i class="num">9</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32059.html" target="_blank" title="沫奇水中拓展中心">沫奇水中拓展中心</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/54/fe/logo_54fe7aa17a53.png" alt="沫奇水中拓展中心">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32059.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <i class="num">10</i>
                            <span class="name">
								<a href="https://www.anxjm.com/busInfo/32058.html" target="_blank" title="魅力新丽人">魅力新丽人</a>
							</span>
                            <div class="cts">
                                <div class="img">
                                    <img src="/uploads/picture/1a/5e/logo_1a5ead2a1502.jpg" alt="魅力新丽人">
                                </div>
                                <div class="center">
                                    <p class="info">投资额：
                                        <em>5-10万元</em>
                                    </p>
                                    <p class="info">门店数：</p>
                                    <p class="btn">
                                        <a href="https://www.anxjm.com/busInfo/32058.html">立即咨询</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--热门品牌推荐 结束-->

        <!--项目推荐 开始-->
        <div class="news_cont">
            <div class="bd">
                <ul>
                    <li>
                        <a>[好的加盟项目]</a>
                        <a href="https://www.anxjm.com/busInfo/10960.html">茶匠奶茶加盟</a>
                        <a href="https://www.anxjm.com/busInfo/5437.html">龙潮烤鱼加盟</a>
                        <a href="https://www.anxjm.com/busInfo/8555.html">燕之屋加盟</a>
                        <a href="https://www.anxjm.com/news/150374.html">华客多加盟</a>
                        <a href="https://www.anxjm.com/busInfo/11989.html">曾记海参加盟</a>
                        <a href="https://www.anxjm.com/busInfo/15585.html">韩鱼客加盟</a>
                        <a href="https://www.anxjm.com/busInfo/5333.html">汉釜宫加盟</a>
                        <a>[最新加盟项目]</a>
                        <a href="https://www.anxjm.com/news/41670.html">奶茶店加盟安心项目</a>
                        <a href="https://www.anxjm.com/busInfo/5554.html">小李宁童装</a>
                        <a href="https://www.anxjm.com/busInfo/1555.html">乡村基加盟</a>
                        <a href="https://www.anxjm.com/busInfo/5318.html">肯德基加盟</a>
                        <a href="https://www.anxjm.com/busInfo/298.html">婷美内衣加盟</a>
                        <a href="https://www.anxjm.com/busInfo/1333.html">百味鸡加盟</a>
                        <a href="https://www.anxjm.com/busInfo/5305.html">喜洋洋便利店加盟</a>
                        <a>[推荐加盟项目]</a>
                        <a href="https://www.anxjm.com/busInfo/390.html">唐狮加盟</a>
                        <a href="https://www.anxjm.com/busInfo/1136.html">赛百味加盟</a>
                        <a href="https://www.anxjm.com/news/1606238">阿依莲加盟</a>
                        <a href="https://www.anxjm.com/busInfo/1367.html">都市丽人内衣加盟</a>
                        <a href="https://www.anxjm.com/busInfo/1827.html">蒙娜丽莎皮具加盟</a>
                        <a href="https://www.anxjm.com/busInfo/1139.html">哈根达斯加盟</a>
                        <a href="https://www.anxjm.com/busInfo/1136.html">subway加盟费</a>
                        <a>[项目加盟条件]</a>
                        <a href="https://www.anxjm.com/busInfo/20749.html">帝煌烤卤加盟</a>
                        <a href="https://www.anxjm.com/busInfo/20748.html">心园米罗教育加盟</a>
                        <a href="https://www.anxjm.com/busInfo/20747.html">童程童美教育加盟</a>
                        <a href="https://www.anxjm.com/busInfo/20742.html">乐思塾课外辅导加盟</a>
                        <a href="https://www.anxjm.com/busInfo/20741.html">周四馒头加盟</a>
                        <a href="https://www.anxjm.com/busInfo/20739.html">陆金所加盟</a>
                        <a href="https://www.anxjm.com/busInfo/20734.html">脑立方全脑教育</a>
                    </li>
                </ul>
            </div>
        </div>		<!--项目推荐 结束-->

        <div class="rank_sort">
            @foreach($paihangbangbrands as $typename=>$paihangbangbrand)
                <div class="rank_item">
                    <div class="hd">
                        <em>{{$typename}}</em>排行榜
                    </div>
                    <div class="bd">
                        <div class="tit">
                            <span class="txt1">排名</span><span class="txt2">项目名称</span><span class="txt3">投资额度</span><span class="txt4">相关链接</span>
                        </div>
                        <div class="list">
                            <ul>
                                @foreach($paihangbangbrand as $index=>$paihangbang)
                                    <li class=" @if($index < 3) top @endif  @if($loop->first)hover @endif ">
                                        <div class="title">
                                            <i class="num">{{$index+1}}</i>
                                            <span class="name">
										<a href="/busInfo/{{$paihangbang->id}}.html" target="_blank" title="{{$paihangbang->brandname}}">{{$paihangbang->brandname}}</a>
									</span>
                                            <span class="price">{{$investment_types[$paihangbang->tzid]}}</span>
                                            <span class="link">
										<a href="/busInfo/{{$paihangbang->id}}.html" target="_blank">查看&gt;&gt;</a>
									</span>
                                        </div>
                                        <div class="cont">
                                            <i class="num">TOP
                                                <em>{{$index+1}}</em>
                                            </i>
                                            <img src="{{$paihangbang->litpic}}" alt="{{$paihangbang->brandname}}">
                                            <div class="tit">
                                                <p class="c_tit">
                                                    <a href="/busInfo/{{$paihangbang->id}}.html" target="_blank" title="{{$paihangbang->brandname}}">{{$paihangbang->brandname}}</a>
                                                </p>
                                                <p>意向加盟：{{$paihangbang->brandattch}}</p>
                                                <p class="btn">
                                                    <a class="zixun" href="/busInfo/{{$paihangbang->id}}.html">立即咨询</a>
                                                    <a href="/busInfo/{{$paihangbang->id}}.html" target="_blank" class="more">查看&gt;&gt;</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop