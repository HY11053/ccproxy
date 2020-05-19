<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$articleinfos->title}}</title>
    <meta name="description" content="{{$articleinfos->description}}">
    <meta name="keywords" content="{{$articleinfos->keywords}}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/adminlte/bootstrap/css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <h1>{{$articleinfos->title}}</h1>
        <hr/>
        <article>
            {!! $articleinfos->body !!}
        </article>
    </div>
</div>
</body>
</html>