<!DOCTYPE html>
<html>
<head>
    <title>MY BLOG</title>
    @section('header-css')
        <link href="//cdn.bootcss.com/font-awesome/4.6.0/css/font-awesome.css" rel="stylesheet">
        <link href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    @show
    <style type="text/css">
        body{margin: 0;padding: 0;background-color: #DEDEDE;}
        a{text-decoration:none;}
        .header{padding:10px 50px 10px 50px;border-bottom: 1px solid #eeeeee;}
        .header>.logo{display:inline-block;}
        .header>.menu{display:inline-block;margin-left:20px;}
        .content{}
        .left{background-color: white;margin: 25px 300px 25px 25px;padding: 25px;box-shadow: 1px 1px 2px 1px #848484;}
        .right{background-color: white;width: 200px;margin: 25px;padding: 25px;box-shadow: 1px 1px 2px 1px #848484;position: absolute;top: 92px;right: 0;}
        .footer{padding:10px 50px 10px 50px;background-color:gray;}
    </style>
</head>

<body>
<!-- header -->
<div class="header">
    <div class="logo">
        <a href="#"><h2>HOME</h2></a>
    </div>

    <div class="menu">
        <a href="{{ route('articles.index') }}">Articles</a>
    </div>
</div>

<div class="content container-fluid">
    <div class="left">
        @yield('content')
    </div>

    <div class="right">
        <div style="padding:20px;border:1px solid black;">
            <h3>Author</h3>
            <p>name : SadCreeper</p>
            <p>age : 22</p>
            <p>Tel : 150-XXXX-XXXX</p>
        </div>
    </div>
</div>


<!-- footer -->
<div class="footer">
    <p>contact me : liyijun430@hotamil.com</p>
</div>
</body>
</html>

@section('head-js')
    <script src="//cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/vue/2.0.0-rc.5/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/vue.resource/1.0.2/vue-resource.min.js"></script>
    <script src="{{url('dist/js/app.min.js')}}"></script>
    <script src="{{url('dist/js/demo.js')}}"></script>
@show
