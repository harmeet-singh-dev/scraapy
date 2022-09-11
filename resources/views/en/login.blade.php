<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome To Scraapy- The Scrap Marketplace</title>
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900%7cLora:400,400i,700,700i%7cRoboto:100,300,400,500,700%7cOpen+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('en/css/conditional.css') }}">
    
</head>
<body class="bodybg">
	<div class="row">
		<div class="login_main_box">
			<div class="row">
				<div class="col-md-6">
					<div class="log_l">
						<h1 class="white">Browse through thousands of offers in top categories. <br><br>All types of scrap for your recycling or manufacturing needs.</h1>
						<img src="{{ asset('en/images/logo.png') }}" alt="">
					</div>
				</div>
				<div class="col-md-6 p-0">
					<!-- start -->
					<div class="cart_L_sect log_box">
					<div class="bdrb pb-3"><h1 class="b ac">Login</h1></div>
					<form method="POST" id="myForm" action="{{ route('login') }}">
            @csrf
					   <div class="login_form mt-4">
						   <p class="mt10">
							  <label >Email</label>
							  <input type="email" class="form-control" required name="email" id="passsword">
							  
	                      </p>
						   <div class="mt-4">
							  <label class="float-left">Password</label>
							  <p class="fs12 float-right"><a data-fancybox="" data-type="iframe" data-src="forgot-password.htm" href="" title="Forgot Password?" class="port_pop1 gray">Forgot Passoword</a></p>
							  <input type="password" class="form-control" required name="password" id="password">
							 
						   </div>
						   <div class="mt-4">
							  <label class="float-left">Registration Number</label>
							  <p class="fs12 float-right"><a data-fancybox="" data-type="iframe" data-src="forgot-password.htm" href="" title="Forgot Password?" class="port_pop1 gray">Forgot Registration</a></p>
							  <input type="text" name="pasjsword" id="reg-no">
						   </div>
						   <p class="mt-3 text-left d-block fs13"><input type="checkbox" name="vehicle1" value="Bike"> Keep Me Logged In</p>
						   <x-button id="btnSubmit" type="submit" class="text-center" class="login_btn">Login</x-button>
						   
						   <!--<p class="fs18 mt-2"><a href="" class="blue">Forgot Passowrd</a></p>-->

						   <p class="text-center mt-2"><a href="{{ URL::to('/en/register')}}" class="new_btn">Create New Account</a></p>
						   <p class="fs12 ac mt-2 gray w62 auto">By continuing, you agree to GrupoJK's Conditions of Use and Privacy Notice.</p>
						</div>
</form>
					</div>
					<!-- end -->
				</div>
			</div>
		</div>
	</div>
	
	<p id="back-top"><a href="#top"><span></span></a></p>
	
    <script src="//ajax.aspnetcdn.com/ajax/jquery/jquery-1.10.2.min.js"></script>
    <script>
        var Page = 'login';
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
    <script src="{{ asset('en/Scripts/script.int.dg.js') }}"></script>

</body>

</html>