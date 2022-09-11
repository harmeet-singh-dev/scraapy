<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome To Scraapy- The Scrap Marketplace</title>
    <link rel="shortcut icon" href="{{asset('en/images/favicon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7cLora:400,400i,700,700i%7cRoboto:100,300,400,500,700%7cOpen+Sans:400,500,600,700" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('en/css/conditional.css')}}">
    <link rel="stylesheet" href="{{asset('en/css/fluid_dg.css')}}">
  
</head>

<body class="bodybg">
  <header>
	<div class="container rel">     
     
     <div class="clearfix"></div>
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="{{ URL::to('/en/home') }}" title="Scrapy"><img src="{{ asset('en/images/logo.png') }}" alt="Scrapy"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<div class="srch_bar"><span style="line-height: 2.2em"><a href="cart.htm" class="white"><i class="fas fa-shopping-cart"></i></a> | <a href="{{ URL::to('/ar/home')}}" class="white">AR</a> | <a href="{{ URL::to('/en/home')}}" class="white">EN</a></span><a href="#" class="toggle usr"><span><?php if(isset(Auth::user()->first_name)){ echo $first_name = Auth::user()->first_name; }else{echo "Login";}  ?></span><i class="fas fa-user"></i></a></div>
    
    <div class="user_links" id="target">
    	<div class="row bdrb p-3">
      <?php if(empty(Auth::user()->first_name)){ ?>
        	<div class="log_head">Welcome Guest!</div>
            <div class="log_link"><a href="{{ URL::to('/en/login')}}">Login</a><a href="{{ URL::to('/en/register') }}">Register</a></div>
     <?php } ?>
        </div>
        <div class="finance_area">
           <ul>
           <?php if(isset(Auth::user()->first_name)){ if (!empty(Auth::user()->user_type == 1)){ ?>
              <li><a href="{{URL::to('/en/edit-profile')}}"><i class="fas fa-cog"></i> My Account</a></li>
              <?php }?>
              <?php if (!empty(Auth::user()->user_type == 2)){ ?>
              <li><a href="{{URL::to('/en/edit-profile-indus')}}"><i class="fas fa-cog"></i> My Account</a></li>
              <?php }?>
              <?php if (!empty(Auth::user()->user_type == 3)){ ?>
              <li><a href="{{URL::to('/en/edit-profile-global')}}"><i class="fas fa-cog"></i> My Account</a></li>
              <?php }?>
              <?php if (!empty(Auth::user()->user_type == 4)){ ?>
              <li><a href="{{URL::to('/en/edit-profile-ven')}}"><i class="fas fa-cog"></i> My Account</a></li>
              <?php } }?>
              <!--li><a href="../my-wishlist.htm"><i class="fas fa-heart"></i> My Wishlist</a></li>-->
              <li>  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"class="dropdown-item notify-item">
              <?php if(isset(Auth::user()->first_name)){  ?>
                    <i class="fas fa-sign-out-alt"></i>
                   
                    <span>Logout</span>
                    <?php }  ?> 
                </a></li>
                
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
    
           </ul>
        </div>
        <div class="clearfix"></div>
     </div>
<ul class="navbar-nav ml-auto">
	<li class="nav-item active"> <a class="nav-link" href="{{ URL::to('en/listing') }}">Sell Offer</a> </li>
	<li class="nav-item"><a class="nav-link" href="{{ URL::to('en/what-we-buy') }}">What We Buy</a></li>
	<li class="nav-item"><a class="nav-link" href="{{ URL::to('en/used-auto-parts') }}">Used Auto parts</a></li>
	<li class="nav-item"><a class="nav-link" href="{{ URL::to('en/become-our-partner') }}"> Become A Partner </a></li>
	<li class="nav-item"><a class="nav-link" href="{{ URL::to('en/contact-us') }}"> Contact Us </a></li>
 
 
</ul>
 

</nav>
</div>

	</header>