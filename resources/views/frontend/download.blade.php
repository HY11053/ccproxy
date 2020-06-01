@extends('frontend.frontend')
@section('title'){{config('app.webname')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <link rel="stylesheet" href="/frontend/css/lists.css">
@stop
@section('main_content')
    @include('frontend.header')
    <div class="list-main">
    <div class="index-module hosting-frame">
        <div class="solution-super-contant">
            <p class="hosting-title product">
                下载目录</p>
            <div class="solution-super">
                <div class="mc-table">
                    <table  class="product-table">
                        <thead>
                        <tr>
                            <th style="width:220px;">软件下载</th>
                            <th>免费版功能</th>
                            <th>商业版功能</th>
                            <th>购买使用</th>
                            <th>下载使用</th>
                         </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td align="left"><a href="https://github.com/snail007/proxy_admin_free" target="_blank">proxyadmin 免费版</a></td>
                            <td align="center">√</td>
                            <td align="center">x</td>
                            <td align="center">x</td>
                            <td align="center"><a href="https://github.com/snail007/proxy_admin_free" target="_blank">点击下载</a></td>
                         </tr>
                        <tr>
                            <td align="left"><a href="https://github.com/snail007/proxy-admin-vip" target="_blank">proxyadmin VIP版</a></td>
                            <td align="center">√</td>
                            <td align="center">x</td>
                            <td align="center">√</td>
                            <td align="center"><a href="https://github.com/snail007/proxy-admin-vip" target="_blank">点击下载</a></td>
                         </tr>
                        <tr>
                            <td align="left"><a href="https://github.com/snail007/proxy-admin-commercial" target="_blank">proxyadmin 商业版</a></td>
                            <td align="center">√</td>
                            <td align="center">√</td>
                            <td align="center">√</td>
                            <td align="center"><a href="https://github.com/snail007/proxy-admin-commercial" target="_blank">点击下载</a></td>
                         </tr>
                        <tr>
                            <td align="left"><a href="https://github.com/snail007/proxy-admin-cluster" target="_blank">proxyadmin 集群版</a></td>
                            <td align="center">√</td>
                            <td align="center">√</td>
                            <td align="center">√</td>
                            <td align="center"><a href="https://github.com/snail007/proxy-admin-cluster" target="_blank">点击下载</a></td>
                         </tr>
                        <tr>
                            <td align="left"><a href="https://github.com/snail007/goproxy" target="_blank">gorproxy 免费版</a></td>
                            <td align="center">√</td>
                            <td align="center">x</td>
                            <td align="center">x</td>
                            <td align="center"><a href="https://github.com/snail007/goproxy" target="_blank">点击下载</a></td>
                         </tr>
                        <tr>
                            <td align="left"><a href="https://github.com/snail007/goproxy" target="_blank">gorproxy 商业版</a></td>
                            <td align="center">√</td>
                            <td align="center">√</td>
                            <td align="center">√</td>
                            <td align="center"><a href="https://github.com/snail007/goproxy" target="_blank">点击下载</a></td>
                         </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="index-module custom-frame" name="scheme">
        <div class="solution-super-contant">
            <p class="hosting-title product">
                <a href="/vs" style="text-decoration:underline"><b>免费版</b>和<b>商业版</b>功能对比</a>
            </p>
        </div>
    </div>
    </div>
@stop
