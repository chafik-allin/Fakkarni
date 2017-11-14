<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fakerni | Alliance Assurance</title>
        <meta name="description" content="Your Description Here">
        <meta name="keywords" content="free boostrap, bootstrap template, freebies, free theme, free website, free portfolio theme, portfolio, personal, cv">
        <meta name="author" content="Jenn, ThemeForces.com">

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.2.0/css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/jasny-bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">

        <!-- Slider
        ================================================== -->
        <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" media="screen">

        <!-- Stylesheet
        ================================================== -->
        <link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">


        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- jquery gui -->
        <link rel="stylesheet" type="text/css" href="{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"> 
        <script type="text/javascript" src="{{asset('js/modernizr.custom.js')}}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->



  </head>
  <body>

    <!-- Off Canvas Navigation
    ================================================== -->
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> <!--- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <span class="fa fa-close"></span>
        </div>
        <div class="add-margin"></div>
        <ul class="nav navmenu-nav"> <!--- Menu -->
            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#inscription" class="page-scroll">Inscription</a></li>
        </ul><!--- End Menu -->
    </div> <!--- End Off Canvas Side Menu -->

    <!-- Home Section -->
  
    <div id="home">

        <div class="container text-center">
           
            <!-- Navigation -->
            <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
                <span class="fa fa-bars"></span>
            </nav>
            <div class="logo">
                <img src="img/logo.png" class="img-responsive" alt="logo">
            </div>
            <div class="content">
                <div class="header-text btn wow bounceInRight" data-wow-duration="0.5s">
                    <h1><span id="head-title"></span></h1>
                </div>
            </div>

            <a href="#inscription" class="down-btn page-scroll">
                <span class="fa fa-angle-down  wow bounceInUp" data-wow-duration="1s"></span>
            </a>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="inscription" >
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2 class="wow fadeIn" data-wow-duration="2s" >Inscription</h2>
                    <hr>
                </div>
                @if(count($errors->all())>0)  
                   <div class="alert alert-danger alert-dismissible fade in alert-absolute" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button> 
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>- {{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success')) 
                    <div class="alert alert-success alert-dismissible fade in alert-absolute" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button> 
                    {{session('success')}}
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form  method="POST" action="{{route('post')}}" id="post-inscription">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-12"><span id="phone_err" class="text-center"></span></div>
                        </div>
                        <div class="form-group" data-wow-duration="2s" >
                            <div class="col-md-4 wow fadeInLeft" style="margin-top:10px">
                                <label><i class="fa fa-user fa-lg"></i> Nom *</label>
                                <input type="text" class="form-control" placeholder="Votre nom" name="first_name" pattern="([a-zA-Z\s])+" required value="{{old('first_name')}}" >
                            </div>
                            <div class="col-md-4 wow fadeInLeft" style="margin-top:10px">
                                <label><i class="fa fa-user fa-lg"></i> Prénom *</label>
                                <input type="text" class="form-control" placeholder="Votre prénom" name="last_name" pattern="([a-zA-Z\s])+" required value="{{old('last_name')}}" >
                            </div>
                            <div class="col-md-4 wow fadeInDown" style="margin-top:10px">
                                <label><i class="fa fa-mobile fa-lg"></i> Téléphone *</label> 
                                <input type="text" class="form-control" placeholder="Numéro de téléphone" name="phone" pattern="\d{10}"  required value="{{old('phone')}}" />
                            </div>

                            <div class="col-md-4 wow fadeInDown" style="margin-top:10px">
                                <label><i class="fa fa-envelope fa-lg"></i> Email </label> 
                                <input type="email" class="form-control" placeholder="Votre email" name="email"  value="{{old('email')}}" />
                            </div>

                            <div class="col-md-4 wow fadeInDown" style="margin-top:10px">
                                <label><i class="fa fa-map-marker fa-lg"></i> Wilaya * </label> 
                                <input type="text" class="form-control" placeholder="Votre wilaya" name="wilaya" required value="{{old('wilaya')}}" />
                            </div>

                            <div class="col-md-4 wow fadeInRight" style="margin-top:10px">
                                <label><i class="fa fa-calendar fa-lg"></i> Date d'expiration</label>
                                <input type="text" id="datepicker" class="form-control" placeholder="Date d'expiration" name="date_exp" required value="{{old('date_exp')}}"  />
                            </div>
                        </div>
                        
                        <div class="form-group " style="clear:both;" >
                            <div class="text-center wow zoomIn" style="padding:30px 0 !important;">
                                <p>Veuillez choisir votre assurance</p>
                            </div>
                        </div>

                        <div class="form-group " data-wow-duration="2s">
                            <div class="col-md-12">
                                <span  id="res_assurance"></span>
                                <div class="owl-carousel owl-theme wow fadeInUp">
                                    <div class="item" id="18000" style="width:85% !important">
                                        <img  src="{{asset('img/assurrances/18000.png')}}" class=" img-responsive img-circle"  alt=""/>
                                    </div>
                                    <div class="item" id="6000" style="width:85% !important">
                                       <img  src="{{asset('img/assurrances/6000.png')}}" class=" img-responsive img-circle" alt="" />
                                    </div>
                                    <div class="item" id="12000" style="width:85% !important">
                                        <img  src="{{asset('img/assurrances/12000.png')}}" class=" img-responsive img-circle" alt=""   />
                                    </div>
                                    <div class="item" id="18000" style="width:85% !important">
                                        <img  src="{{asset('img/assurrances/18000.png')}}" class=" img-responsive img-circle"  alt=""  />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="type" value="">
                        <div class="form-group" style="clear: both;">
                            <button class="btn send-btn btn-block wow fadeInDown"><i class="fa fa-send"></i> Envoyer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2017 © Fakerni | Alliance Assurance</a></p>
            </div>
            <div class="pull-right"> 
                <a href="#home" class="page-scroll"> <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jasny-bootstrap.min.js')}}"></script>

    <script src="js/owl.carousel.js"></script>
    <script src="js/typed.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
   
  </body>
</html>