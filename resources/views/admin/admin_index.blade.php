@extends('admin.layouts.admin_app')
@section('title')后台管理中心首页@stop
@section('head')
    <link rel="stylesheet" href="/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
@stop
@section('content')
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-clipboard"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">文章总数</span>
                    <span class="info-box-number">{{$articlenum}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">前台会员数</span>
                    <span class="info-box-number">{{\App\AdminModel\Admin::count('id')}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-bonfire"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">电话总数</span>
                    <span class="info-box-number">{{\App\AdminModel\Phonemanage::count('id')}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-pulse"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">品牌文档总数</span>
                    <span class="info-box-number">{{$brandnum}}</span>

                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">整体数据概览</h3>
                    <span style="margin-left: 5px; display: inline-block;">
                        <i class="ion ion-bonfire text-red"></i>
                        今日文章发布数：{{\App\AdminModel\Archive::where('created_at','>',Carbon\Carbon::today())->where('created_at','<',\Carbon\Carbon::tomorrow())->count('id')}}
                    </span>
                    <span style="margin-left: 5px; display: inline-block;">
                        <i class="ion ion-bonfire text-red"></i>
                        今日品牌发布数：{{\App\AdminModel\Brandarticle::where('created_at','>',Carbon\Carbon::today())->where('created_at','<',\Carbon\Carbon::tomorrow())->count('id')}}
                    </span>
                    <span style=" margin-left: 5px;isplay: inline-block;">
                        <i class="ion ion-ios-pulse text-red"></i>
                        今日电话提交数：{{\App\AdminModel\Phonemanage::where('created_at','>',\Carbon\Carbon::today())->where('created_at','<',\Carbon\Carbon::tomorrow())->count('id')}}
                    </span>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-wrench"></i></button>
                            <ul class="dropdown-menu" role="menu">
                            </ul>
                        </div>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>截止当前: {{date('Y-m-d H:i:S',time())}}电话提交数据</strong>
                            </p>

                            <div class="chart">
                                <!-- Sales Chart Canvas -->
                                <canvas id="salesChart" style="height: 180px;"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="smscrolls">
                            <p class="text-center">
                                <strong>编辑文章完成比</strong>
                            </p>

                            @if(auth('admin')->user()->type>0)
                                @foreach($articleUsers as $articleUser)
                                    <div class="progress-group">
                                        <span class="progress-text">{{$articleUser}}</span>
                                        <span class="progress-number"><b>{{(\App\AdminModel\Archive::where('created_at','>',\Carbon\Carbon::today())->where('created_at','<',\Carbon\Carbon::now())->where('write',$articleUser)->count('id') )+ (\App\AdminModel\Brandarticle::where('created_at','>',\Carbon\Carbon::today())->where('created_at','<',\Carbon\Carbon::now())->where('write',$articleUser)->count('id'))}}</b>/45</span>

                                        <div class="progress sm">
                                            <div class="progress-bar progress-bar-{{$colorStyle[rand(0,4)]}}" style="width: {{sprintf("%.4f",((\App\AdminModel\Archive::where('created_at','>',\Carbon\Carbon::today())->where('created_at','<',\Carbon\Carbon::now())->where('write',$articleUser)->count('id'))+(\App\AdminModel\Brandarticle::where('created_at','>',\Carbon\Carbon::today())->where('created_at','<',\Carbon\Carbon::now())->where('write',$articleUser)->count('id')))/45,0,-1)*100}}%"></div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                No right!!!
                            @endif
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>  9.43%  </span>
                                <h5 class="description-header">9907</h5>
                                <span class="description-text">待添加模块</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i>  7.95% </span>
                                <h5 class="description-header">12300</h5>
                                <span class="description-text">待添加模块</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block border-right">
                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>  6.92% </span>
                                <h5 class="description-header">6334</h5>
                                <span class="description-text">待添加模块</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-xs-6">
                            <div class="description-block">
                                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i>  0% </span>
                                <h5 class="description-header">2738</h5>
                                <span class="description-text">待添加模块</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!-- TO DO List -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="ion ion-clipboard"></i>

                        <h3 class="box-title">最新文章更新列表</h3>

                        <div class="box-tools pull-right">
                            <ul class="pagination pagination-sm inline">

                            </ul>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="todo-list">
                            @foreach($newArticles as $index=>$newArticle)
                                <li>
                                    <!-- drag handle -->
                                    <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <!-- checkbox -->
                                    <input type="checkbox" value="">
                                    <!-- todo text -->
                                    <span class="text">{{$newArticle->title}}</span>
                                    <!-- Emphasis label -->
                                    <small class="label {{$labelStyle[$index]}} pull-right" style="font-weight: normal;"><i class="fa fa-clock-o"></i> {{Carbon\Carbon::parse($newArticle->created_at)->diffForHumans()}}—{{$newArticle->write}}</small>
                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- /.row -->
@stop

@section('libs')
    <!-- Sparkline -->
    <!-- AdminLTE for demo purposes -->
    <script src="/adminlte/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="/adminlte/plugins/chartjs/Chart.min.js"></script>
    <script src="/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- AdminLTE for demo purposes -->
    <script>
        $(".smscrolls").slimScroll({
            height:'180px',
            width:'100%',
            alwaysVisible: true,
            wheelStep: 5,
        });
        $(document).ready(function(){
            'use strict';
            // Get context with jQuery - using jQuery's .get() method.
            var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var salesChart = new Chart(salesChartCanvas);

            var salesChartData = {
                labels: [
                    "星期{{\Carbon\Carbon::parse(date('Y-m-d H:i:s',strtotime(\Carbon\Carbon::now())-3600*24*7))->dayOfWeek?:'日'}}",
                    "星期{{\Carbon\Carbon::parse(date('Y-m-d H:i:s',strtotime(\Carbon\Carbon::now())-3600*24*6))->dayOfWeek?:'日'}}",
                    "星期{{\Carbon\Carbon::parse(date('Y-m-d H:i:s',strtotime(\Carbon\Carbon::now())-3600*24*5))->dayOfWeek?:'日'}}",
                    "星期{{\Carbon\Carbon::parse(date('Y-m-d H:i:s',strtotime(\Carbon\Carbon::now())-3600*24*4))->dayOfWeek?:'日'}}",
                    "星期{{\Carbon\Carbon::parse(date('Y-m-d H:i:s',strtotime(\Carbon\Carbon::now())-3600*24*3))->dayOfWeek?:'日'}}",
                    "星期{{\Carbon\Carbon::parse(date('Y-m-d H:i:s',strtotime(\Carbon\Carbon::now())-3600*24*2))->dayOfWeek?:'日'}}",
                    "星期{{\Carbon\Carbon::yesterday()->dayOfWeek}}", "星期{{\Carbon\Carbon::now()->dayOfWeek?:'日'}}"
                ],
                datasets: [

                    {
                        label: "电话提交数据",
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "rgba(60,141,188,1)",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(60,141,188,1)",
                        data: [
                            {{\App\AdminModel\Phonemanage::where('created_at','>',\Carbon\Carbon::today()->subDays(7))->where('created_at','<',\Carbon\Carbon::today()->subDays(6))->count('id')}},
                            {{\App\AdminModel\Phonemanage::where('created_at','>',\Carbon\Carbon::today()->subDays(6))->where('created_at','<',\Carbon\Carbon::today()->subDays(5))->count('id')}},
                            {{\App\AdminModel\Phonemanage::where('created_at','>',\Carbon\Carbon::today()->subDays(5))->where('created_at','<',\Carbon\Carbon::today()->subDays(4))->count('id')}},
                            {{\App\AdminModel\Phonemanage::where('created_at','>',\Carbon\Carbon::today()->subDays(4))->where('created_at','<',\Carbon\Carbon::today()->subDays(3))->count('id')}},
                            {{\App\AdminModel\Phonemanage::where('created_at','>',\Carbon\Carbon::today()->subDays(3))->where('created_at','<',\Carbon\Carbon::today()->subDays(2))->count('id')}},
                            {{\App\AdminModel\Phonemanage::where('created_at','>',\Carbon\Carbon::today()->subDays(2))->where('created_at','<',\Carbon\Carbon::today()->subDays(1))->count('id')}},
                            {{\App\AdminModel\Phonemanage::where('created_at','>',\Carbon\Carbon::yesterday())->where('created_at','<',\Carbon\Carbon::today())->count('id')}},
                            {{\App\AdminModel\Phonemanage::where('created_at','>',\Carbon\Carbon::today())->count('id')}}
                        ]
                    }
                ]
            };

            var salesChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: "rgba(0,0,0,.05)",
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true
  };

  //Create the line chart
  salesChart.Line(salesChartData, salesChartOptions);

  //---------------------------
  //- END MONTHLY SALES CHART -
  //---------------------------

  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
  var pieChart = new Chart(pieChartCanvas);
  var PieData = [
    {
      value: 700,
      color: "#f56954",
      highlight: "#f56954",
      label: "Chrome"
    },
    {
      value: 500,
      color: "#00a65a",
      highlight: "#00a65a",
      label: "IE"
    },
    {
      value: 400,
      color: "#f39c12",
      highlight: "#f39c12",
      label: "FireFox"
    },
    {
      value: 600,
      color: "#00c0ef",
      highlight: "#00c0ef",
      label: "Safari"
    },
    {
      value: 300,
      color: "#3c8dbc",
      highlight: "#3c8dbc",
      label: "Opera"
    },
    {
      value: 100,
      color: "#d2d6de",
      highlight: "#d2d6de",
      label: "Navigator"
    }
  ];
  var pieOptions = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke: true,
    //String - The colour of each segment stroke
    segmentStrokeColor: "#fff",
    //Number - The width of each segment stroke
    segmentStrokeWidth: 1,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps: 100,
    //String - Animation easing effect
    animationEasing: "easeOutBounce",
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate: true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale: false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: false,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
    //String - A tooltip template
    tooltipTemplate: "<%=value %> <%=label%> users"
  };
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart.Doughnut(PieData, pieOptions);
  //-----------------
  //- END PIE CHART -
  //-----------------

  /* jVector Maps
   * ------------
   * Create a world map with markers
   */
  $('#world-map-markers').vectorMap({
    map: 'world_mill_en',
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    backgroundColor: 'transparent',
    regionStyle: {
      initial: {
        fill: 'rgba(210, 214, 222, 1)',
        "fill-opacity": 1,
        stroke: 'none',
        "stroke-width": 0,
        "stroke-opacity": 1
      },
      hover: {
        "fill-opacity": 0.7,
        cursor: 'pointer'
      },
      selected: {
        fill: 'yellow'
      },
      selectedHover: {}
    },
    markerStyle: {
      initial: {
        fill: '#00a65a',
        stroke: '#111'
      }
    },
    markers: [
      {latLng: [41.90, 12.45], name: 'Vatican City'},
      {latLng: [43.73, 7.41], name: 'Monaco'},
      {latLng: [-0.52, 166.93], name: 'Nauru'},
      {latLng: [-8.51, 179.21], name: 'Tuvalu'},
      {latLng: [43.93, 12.46], name: 'San Marino'},
      {latLng: [47.14, 9.52], name: 'Liechtenstein'},
      {latLng: [7.11, 171.06], name: 'Marshall Islands'},
      {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
      {latLng: [3.2, 73.22], name: 'Maldives'},
      {latLng: [35.88, 14.5], name: 'Malta'},
      {latLng: [12.05, -61.75], name: 'Grenada'},
      {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
      {latLng: [13.16, -59.55], name: 'Barbados'},
      {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
      {latLng: [-4.61, 55.45], name: 'Seychelles'},
      {latLng: [7.35, 134.46], name: 'Palau'},
      {latLng: [42.5, 1.51], name: 'Andorra'},
      {latLng: [14.01, -60.98], name: 'Saint Lucia'},
      {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
      {latLng: [1.3, 103.8], name: 'Singapore'},
      {latLng: [1.46, 173.03], name: 'Kiribati'},
      {latLng: [-21.13, -175.2], name: 'Tonga'},
      {latLng: [15.3, -61.38], name: 'Dominica'},
      {latLng: [-20.2, 57.5], name: 'Mauritius'},
      {latLng: [26.02, 50.55], name: 'Bahrain'},
      {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
    ]
  });

  /* SPARKLINE CHARTS
   * ----------------
   * Create a inline charts with spark line
   */

  //-----------------
  //- SPARKLINE BAR -
  //-----------------
  $('.sparkbar').each(function () {
    var $this = $(this);
    $this.sparkline('html', {
      type: 'bar',
      height: $this.data('height') ? $this.data('height') : '30',
      barColor: $this.data('color')
    });
  });

  //-----------------
  //- SPARKLINE PIE -
  //-----------------
  $('.sparkpie').each(function () {
    var $this = $(this);
    $this.sparkline('html', {
      type: 'pie',
      height: $this.data('height') ? $this.data('height') : '90',
      sliceColors: $this.data('color')
    });
  });

  //------------------
  //- SPARKLINE LINE -
  //------------------
  $('.sparkline').each(function () {
    var $this = $(this);
    $this.sparkline('html', {
      type: 'line',
      height: $this.data('height') ? $this.data('height') : '90',
      width: '100%',
      lineColor: $this.data('linecolor'),
      fillColor: $this.data('fillcolor'),
      spotColor: $this.data('spotcolor')
    });
  });
});

    </script>

   @stop