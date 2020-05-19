@extends('admin.layouts.admin_app')
@section('title')违禁品牌词管理@stop
@section('head')
    <script src="/adminlte/plugins/chartjs/highcharts.js"></script>
    <script src="/adminlte/plugins/chartjs/exporting.js"></script>
    <script src="/adminlte/plugins/chartjs/wordcloud.js"></script>
    <script src="/adminlte/plugins/chartjs/oldie.js"></script>
@stop
@section('content')
    <div id="container"></div>
    <script>
        var text = '{{$keywords}}';
        var data = text.split(/[, ]+/g)
            .reduce(function (arr, word) {
                var obj = arr.find(function (obj) {
                    return obj.name === word;
                });
                if (obj) {
                    obj.weight += 1;
                } else {
                    obj = {
                        name: word,
                        weight: 1
                    };
                    arr.push(obj);
                }
                return arr;
            }, []);
        Highcharts.chart('container', {
            series: [{
                type: 'wordcloud',
                data: data
            }],
            title: {
                text: '违禁品牌词管理'
            }
        });
    </script>
@stop
