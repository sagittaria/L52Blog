<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>壹壶</title>



    <!-- Fonts -->
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <!--<link href="https://fonts.googleapis.com/css?family=Varela+Round|Montserrat:400,700" rel="stylesheet" type="text/css"/>-->

    <!-- Styles -->
    <!--<link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>

    <!--// 引入markdown编辑器代码，很多，顺便顶替（删）掉原来自己写的引入bootstrap-->
    @include('editor::head')
    @include('editor::decode')

    <style>
        body {
            font-family: "Lato", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
            padding-bottom: 20px;
        }

        .blog-title{
            margin-top: 20px;
            margin-bottom: 35px;
        }
        .blog-description{
            font-size: 20px;
            color: #999;
        }

        .blog-masthead {
          background-color: #f8f8f8;
          -webkit-box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
                  box-shadow: inset 0 -2px 5px rgba(0,0,0,.1);
        }

        /* Nav links */
        .blog-nav-item {
          position: relative;
          display: inline-block;
          padding: 10px 10px 10px 2px;
          font-weight: 500;
          color: #999;
        }
        .blog-nav-item:hover,
        .blog-nav-item:focus {
          color: gray;
          text-decoration: none;
        }

    </style>
</head>
<body id="app-layout" >
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav col-md-offset-1">
          <a class="blog-nav-item" href="/articles">首页</a>
          <a class="blog-nav-item" href="#">JAVA</a>
          <a class="blog-nav-item" href="#">网络</a>
          <a class="blog-nav-item" href="#">数据库</a>
          <a class="blog-nav-item" href="#">DS&A</a>
        </nav>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <h2 class="blog-title">It's Good.<span class="blog-description">&nbsp; It clarifies, cuts through, and captures the essence of the evolutionary spirit.</span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-1" >
              @if(Session::has('success'))
              <div class="alert alert-success alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{ Session::get('success') }}
              </div>
              @endif
              @yield('content')
            </div>
            <div class="col-md-2">
                <div class="row" ><div class="col-md-12 well">
                <h4>盐生<small class="pull-right" style="line-height:1.5">aaa@bbb.com</small></h4>
                <p>进一寸有一寸的欢喜.</p>
                </div></div>
                <div class="row" style="margin-top:15px;">
                  <form>
                    <div class="form-group">
                      <input type="text" name="searchStr" class="form-control" placeholder="Search...">
                    </div>                    
                  </form>
                </div>
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
