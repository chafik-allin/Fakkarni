<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fakerni | Alliance Assurances</title>
        <meta name="description" content="Connaissez-vous la date d'expiration de votre assurance? Beaucoup ne la connaissent pas et c'est pour cela qu'Alliance vous offre l'opportunité de ne plus penser à votre assurances en permanence. Grâce au site Fakerni.com vous serez tenu au courant">

        <meta name="keywords" content="Fakerni, Alliance, Assurances">
        
        <meta name="author" content="ALLIN">

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
 
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.min.css')}}">
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
    {{-- <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> <!--- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <span class="fa fa-close"></span>
        </div>
        <div class="add-margin"></div>
        <ul class="nav navmenu-nav"> <!--- Menu -->
            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#inscription" class="page-scroll">Inscription</a></li>
        </ul><!--- End Menu -->
    </div> <!--- End Off Canvas Side Menu --> --}}

    <!-- Home Section -->
  
    <div id="home">

        <div class="container text-center">
           
            <!-- Navigation -->
           {{--  <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
                <span class="fa fa-bars"></span>
            </nav> --}}
            <div class="logo">
                <img src="{{asset('img/logo-alliance.png')}}" class="img-responsive" alt="logo">
            </div>
			

            <div class="content">

                <div class="header-text btn wow bounceInRight" data-wow-duration="0.5s">
                    <h1><span id="head-title"></span></h1>
                </div>
            </div>

            <a href="#inscription" class="down-btn page-scroll">
                <span class="fa fa-angle-down wow bounceInUp" data-wow-duration="1s"></span>
            </a>
        </div>
    </div>


@if(session('success'))
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="top: 30%">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<span aria-hidden="true">&times;</span>
        </button>
        <div class="text-center">
       		<img src="{{asset('img/logo-alliance.png')}}" class="img-responsive" alt="logo" style="display: inline-block; height: 64px">
        </div>
      </div>
      <div class="modal-body" style="padding: 0px; margin: 0px !important">
		<div class="alert alert-success" role="alert" style="border-radius: 0;">
		   <p class="text-center">{{session('success')}}</p>
		</div>
      </div>
    </div>
  </div>
</div>               


@endif


    <!-- Contact Section -->
    <div id="inscription" >
        <div class="container">
            <div class="row">
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
            </div>
            <div class="row">
                <div class="col-md-12">
            	 	<div id="exTab2" class="container">	
						<ul class="nav nav-tabs">
							<li class="active">
					        	<a  href="#1" data-toggle="tab" id="lang-fr">Français</a>
							</li>
							<li>
								<a href="#2" data-toggle="tab" id="lang-ar">عربي</a>
							</li>
						</ul>
						<div class="tab-content ">
						  	<div class="tab-pane active" id="1">
					          	<form  method="POST" action="{{route('post')}}" id="post-inscription">
			                        {{csrf_field()}}
			                        <div class="form-group">
			                            <div class="col-md-12"><span id="phone_err" class="text-center"></span></div>
			                        </div>
			                        <div class="form-group" data-wow-duration="2s" >
			                        <p style="color: #777"><i>* Champ obligatoire</i></p>
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
			                                <select name="wilaya" id="wilaya" class="form-control">
			                                    @if(old('wilaya'))
			                                    <option value="{{old('wilaya')}}">{{old('wilaya')}}</option>
			                                    @endif
			                                    @foreach($wilayas as $w)
			                                        @continue(old('wilaya') && old('wilaya') == $w)
			                                        <option value="{{$w}}">{{$w}}</option>
			                                    @endforeach
			                                    
			                                </select>

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
			                                    <div class="item" value="-1" style="width:85% !important">
			                                        <img  src="{{asset('img/assurrances/none.png')}}" class=" img-responsive img-circle"  alt=""/>
			                                    </div>
			                                    <div class="item" value="6000" style="width:85% !important">
			                                       <img  src="{{asset('img/assurrances/6000.png')}}" class=" img-responsive img-circle" alt="" />
			                                    </div>
			                                    <div class="item" value="12000" style="width:85% !important">
			                                        <img  src="{{asset('img/assurrances/12000.png')}}" class=" img-responsive img-circle" alt=""   />
			                                    </div>
			                                    <div class="item" value="18000" style="width:85% !important">
			                                        <img src="{{asset('img/assurrances/18000.png')}}" class=" img-responsive img-circle"  alt=""  />
			                                    </div>    
			                                </div>
			                            </div>
			                        </div>
			                        <div class="form-group text-center">
			                        	<p style="color: #777; font-size: 12px"><i>Vos informations personnelles indiquées dans ce présent formulaire seront gardées strictement confidentielles et traitées exclusivement par Alliance Assurances</i></p>
		                        		<input type="checkbox" id="conditions-fr" > <label for="conditions-fr" style="color: #666">Je valide les informations </label>
			                        </div>
			                        <input type="hidden" name="type" value="">
			                        <input type="hidden" name="lang" value="fr">
			                       {{--  <div class="form-group btn-shake" style="clear: both;">
			                            <button class="btn send-btn btn-block wow fadeInDow" id="send" type="button" disabled="disabled"><i class="fa fa-send"></i> Envoyer</button>
			                        </div> --}}
			                         <div class="form-group btn-shake" style="clear: both;">
			                            <button class="btn send-btn btn-block  " id="send-fr" disabled="disabled"><i class="fa fa-send"></i> Envoyer</button>
			                        </div>

			                    </form>
							</div>

							<div class="tab-pane" id="2">
					          	<form  method="POST" action="{{route('post')}}" id="post-inscription" >
			                        {{csrf_field()}}
			                        <div class="form-group">
			                            <div class="col-md-12"><span id="phone_err" class="text-center"></span></div>
			                        </div>
			                        <div class="form-group"  >
			                        <p style="color: #777; direction: rtl"><i>* خانة اجبارية</i></p>
			                         <div class="col-md-4 " style="margin-top:10px; direction: rtl">
			                                <label><i class="fa fa-mobile fa-lg"></i> رقم الهاتف *</label>
			                                <input type="text" class="form-control" placeholder="رقم الهاتف" name="phone" pattern="\d{10}"  required value="{{old('phone')}}" />
			                            </div>
			                            <div class="col-md-4 " style="margin-top:10px; direction: rtl">
			                                <label><i class="fa fa-user fa-lg"></i> الاسم *</label>
			                                <input type="text" class="form-control" placeholder="الاسم" name="last_name" required value="{{old('last_name')}}" >
			                            </div>
			                            <div class="col-md-4 " style="margin-top:10px; direction: rtl">
			                                <label><i class="fa fa-user fa-lg"></i> اللقب *</label>
			                                <input type="text" class="form-control" placeholder="اللقب" name="first_name"  required value="{{old('first_name')}}" >
			                            </div>
			                           

			                            <div class="col-md-4 " style="margin-top:10px; direction: rtl">
			                                <label ><i class="fa fa-envelope fa-lg"></i> البريد الالكتروني </label> 
			                                <input type="email" class="form-control" placeholder="البريد الالكتروني" name="email"  value="{{old('email')}}" />
			                            </div>

			                            <div class="col-md-4 " style="margin-top:10px; direction: rtl">
			                                <label><i class="fa fa-map-marker fa-lg"></i> الولاية * </label> 
			                                <select name="wilaya" id="wilaya" class="form-control">
			                                    @if(old('wilaya'))
			                                    <option value="{{old('wilaya')}}">{{old('wilaya')}}</option>
			                                    @endif
			                                    @foreach($wilayas as $w)
			                                        @continue(old('wilaya') && old('wilaya') == $w)
			                                        <option value="{{$w}}">{{$w}}</option>
			                                    @endforeach
			                                    
			                                </select>

			                            </div>

			                            <div class="col-md-4 " style="margin-top:10px; direction: rtl">
			                                <label><i class="fa fa-calendar fa-lg"></i> تاريخ انتهاء الصلاحية</label>
			                                <input type="text" id="datepickerar" class="form-control" placeholder="تاريخ انتهاء الصلاحية" name="date_exp" required value="{{old('date_exp')}}"  />
			                            </div>
			                        </div>
			                        
			                        <div class="form-group " style="clear:both;" >
			                            <div class="text-center " style="padding:30px 0 !important;">
			                                <p>الرجاء اختيار التأمين الخاص بكم</p>
			                            </div>
			                        </div>

			                        <div class="form-group " data-wow-duration="2s">
			                            <div class="col-md-12">
			                                <span  id="res_assurance"></span>
			                                <div class="owl-carousel owl-theme ">

			                                    
			                                    <div class="item" value="-1" style="width:85% !important">
			                                        <img  src="{{asset('img/assurrances/arab.png')}}" class=" img-responsive img-circle"  alt=""/>
			                                    </div>
			                                    <div class="item" value="6000" style="width:85% !important">
			                                       <img  src="{{asset('img/assurrances/6000.png')}}" class=" img-responsive img-circle" alt="" />
			                                    </div>
			                                    <div class="item" value="12000" style="width:85% !important">
			                                        <img  src="{{asset('img/assurrances/12000.png')}}" class=" img-responsive img-circle" alt=""   />
			                                    </div>
			                                    <div class="item" value="18000" style="width:85% !important">
			                                        <img  src="{{asset('img/assurrances/18000.png')}}" class=" img-responsive img-circle"  alt=""  />
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                         <div class="form-group text-center" dir="rtl">
			                        	<p style="color: #777; font-size: 12px"><i>سيتم الاحتفاظ بكل المعلومات الشخصية الواردة في هذا النموذج بصفة سرية وسيتم معالجتها حصريا من قبل اليانس للتامينات</i></p>
		                        		<input type="checkbox" id="conditions-ar" > <label for="conditions-ar" style="color: #666">أوافق </label>
			                        </div>

			                        <input type="hidden" name="type" value="">
			                        <input type="hidden" name="lang" value="ar">
			                        <div class="form-group btn-shake" style="clear: both;">
			                            <button class="btn send-btn btn-block  " id="send-ar" disabled="disabled"><i class="fa fa-send"></i> ارسال</button>
			                        </div>

			                    </form>
							</div>
						</div>
  					</div>
                </div>
            </div>
        </div>
    </div>











    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2017 © Fakerni | Alliance Assurances</p>
            </div>
            <div class="pull-right">
                <a href="#home" class="page-scroll"> <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jasny-bootstrap.min.js')}}"></script>

    <script src="js/owl.carousel.js"></script>
    <script src="js/typed.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
   	@if(session('success'))

   	<script>
   		$(document).ready(function()
   		{
   			$('#myModal').modal('show');
   		});
   	</script>
	@endif
  </body>
</html>