@extends('admin.layouts.admin_app')
@section('title')百度链接推送数据反馈@stop
@section('head')
    <style>.red{color: red;}</style>
@stop
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">百度链接推送数据反馈 总计{{$articles->total()}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>推送url</th>
                            <th>当前额度</th>
                            <th>是否成功</th>
                            <th>推送类型</th>
                            <th>错误详情</th>
                            <th>推送时间</th>
                        </tr>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->url}}</td>
                                <td>{{$article->remain}}</td>
                                <td>@if($article->success) <span class="text-green">推送成功</span>@else <span class="text-danger">推送失败</span> @endif</td>
                                <td>{{$article->type}}</td>
                                <td>{{$article->message}}</td>
                                <td>@if(\Carbon\Carbon::now() > \Carbon\Carbon::parse($article->created_at)->addDays(7)){{$article->created_at}} @else{{\Carbon\Carbon::parse($article->created_at)->diffForHumans()}}@endif</td>
                            </tr>
                        @endforeach

                    </table>
                    {!! $articles->links() !!}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.content -->
@stop

