<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Avaritia</title>



    <!-- Fonts -->
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <!--<link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>

    <!--// 引入markdown编辑器代码，很多，顺便顶替（删）掉原来自己写的引入bootstrap-->
    @include('editor::head')
    @include('editor::decode')

    <style>
        body {
            font-family: 'Lato';            
            padding-bottom: 20px;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .navbar-static-top{
            margin-bottom: 0px;
        }
        .blog-title{
            margin-top: 12px;
        }
        .blog-description{
            font-size: 20px;
            color: #999;
        }
    </style>
</head>
<body id="app-layout" >
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Avaritia
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <!--<li><a href="{{ url('/') }}">Java*</a></li>                    
                    <li><a href="{{ url('/') }}">Laravel</a></li>
                    <li><a href="{{ url('/') }}">Nodejs</a></li>
                    <li><a href="{{ url('/') }}">AngularJS</a></li>
                    <li><a href="{{ url('/') }}">DataStructure</a></li>
                    <li><a href="{{ url('/') }}">Algorithms</a></li>
                    <li><a href="{{ url('/') }}">DataAnalysis</a></li>
                    <li><a href="{{ url('/') }}">MachineLearning</a></li>
                    <li><a href="{{ url('/') }}">MOOC</a></li>
                    <li><a href="{{ url('/') }}">About</a></li>-->
                </ul>

                
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <!--
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                    --> 
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="blog-title">It's Good<span class="blog-description">&nbsp;-It clarifies, cuts through, and captures the essence of the evolutionary spirit.</span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9" >@yield('content')</div>
            <div class="col-md-3" >
                <div class="row"><div class="col-md-12" style="background-color:#f8f8f8;">
                    <H4 style="background-color:#e7e7e7;height:35px;line-height:35px;padding-left:5px;"><strong>About · Me</strong></H4>
                    <table class="table" style="margin-top:-9px;">
                    <tr><th sytle="width:25%;">昵称</th><td sytle="width:25%;">盐生</td><th sytle="width:25%;">地点</th><td>杭州</td></tr>
                    <tr><th>职业</th><td>学生</td><th>篇数</th><td>0</td></tr>
                    <tr><th>专长</th><td colspan="3">无</td></tr>
                    <tr><th>邮箱</th><td colspan="3">kasoya@163.com</td></tr>
                    <tr><th>签名 </th><td colspan="3">进一寸有一寸的欢喜.</td></tr>
                    </table>
                </div></div>
                <div class="row"><div class="col-md-12" style="border:yellow 1px solid;">标签</div></div>
            </div>
        </div>
    </div>

    <!---->

    <!-- JavaScripts -->
    <!--<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>-->
    <!--<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
