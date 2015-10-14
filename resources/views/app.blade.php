<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Laravel</title>

    <!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet"/>
    <!-- FONT AWESOME ICONS  -->
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet"/>
    <!-- CUSTOM STYLE  -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet"/>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>

</header>
<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="../img/logo.png" style="max-height: 100px; max-width: 100px;" />
            </a>

        </div>

        <div class="left-div">
           <div class="row">
                    <font size=50>Kansas City Nepali Samaj </font>

            </div>
            <!--<i class="fa fa-user-plus login-icon"></i>-->
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->


@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; 2015 ResolverRaun | By : <a href="http://www.designbootstrap.com/"
                                                  target="_blank">DesignBootstrap</a>
            </div>

        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
