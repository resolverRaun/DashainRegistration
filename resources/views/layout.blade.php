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
    <link href="{{asset('/css/jquery.dataTables.min.css')}}" rel="stylesheet"/>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- Scripts -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <script src="{{asset('/js/jquery-1.11.1.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script src="{{asset('/js/jquery.dataTables.js')}}"></script>
    <!--<script src="{{asset('/js/jquery-ui/jquery-ui-1.10.3.minimal.min.js')}}"></script>-->
    <script src="{{asset('/js/custom-js.js')}}"></script>
    <script src="{{asset('/js/toastr.js')}}"></script>

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

                <img src="../img/logo.png" style="max-height: 100px; max-width: 100px;"/>
            </a>

        </div>

        <div class="left-div" >
            <div class="user-settings-wrapper">
                <ul class="nav">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                        </a>

                        <div class="dropdown-menu dropdown-settings">
                            <div class="media">

                                <div class="media-body">
                                    <h4 class="media-heading">Welcome </h4>
                                </div>
                            </div>
                            <hr/>
                            <a href="{{ url('/auth/logout') }}" class="btn btn-danger btn-sm">Logout</a>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="{{ URL::route('home') }}">Home</a></li>
                        <li><a href="{{ URL::route('participant') }}">Participants</a></li>
                        <li><a href="{{ URL::route('people') }}">People</a></li>
                        <li><a href="{{ URL::route('inventory') }}">Inventory</a></li>
                        <li><a href="{{ URL::route('miscellaneous') }}">Miscellaneous</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- LOGO HEADER END-->


@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; Dashain Registration Application | By : <a href="#" >Dinesh Rauniyar</a>
            </div>

        </div>
    </div>
</footer>


</body>
</html>
