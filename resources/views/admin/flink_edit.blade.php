@extends('admin.layouts.admin_app')
@section('title')编辑友情链接@stop
@section('head')
@stop
@section('content')

    <div class="row">
        <div class="col-md-10 box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">添加友情链接</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                {!! Form::model($thislink,array('action' =>array('Admin\FlinkController@PostEditFlink', $thislink->id),'method' => 'put')) !!}
                <div class="box-body">
                    <div class="form-group">
                        {{Form::label('weburl','网站域名')}}
                        {{Form::text('weburl', null,array('class'=>'form-control','id'=>'url','placeholder'=>'网站域名'))}}
                    </div>
                    <div class="form-group">
                        {{Form::label('webname','网站名称')}}
                        {{Form::text('webname', null,array('class'=>'form-control','id'=>'webname','placeholder'=>'网站名称'))}}
                    </div>
                    <div class="form-group">
                        {{Form::label('address','联系方式')}}
                        {{Form::text('address', null,array('class'=>'form-control','id'=>'address','placeholder'=>'联系方式'))}}
                    </div>
                    <div class="form-group">
                        {{Form::label('note','操作备注')}}
                        {{Form::text('note', null,array('class'=>'form-control','id'=>'note','placeholder'=>'操作备注'))}}
                    </div>

                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
            @if(count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
    </div>

    </div>
    <!-- /.row -->
    <!-- /.content -->
@stop


