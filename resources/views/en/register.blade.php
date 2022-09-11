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
    <link rel="stylesheet" href="{{ asset('en/css/conditional.css') }}">
  
</head>

<body class="bodybg">
	<div class="row">
		<div class="login_main_box">
			<div class="row">
				<div class="col-md-6">
					<div class="log_l">
						<div class="mb-5">
							<div class="head">Individual</div>
							<ul>
								<li>If you are an individual and need to sell a product. Choose your client type</li>
								<li>then you fill up all details then press register.</li>
								<li>You will receive your registration number by
								SMS Log In will take you to:
								Individual Page for product details.</li>
							</ul>
						</div>
						<div class="mb-5">
							<div class="head">Industrial</div>
							<ul>
								<li>If you are an Industrial type and need to sell or Buy a product. Choose your client type</li>
								<li>then you fill up all details then press register.</li>
								<li>You will receive your registration number by Email including activation. and for Log In will take you to: Industrial seller Page for product details or Products Display Page for you to purchase your inquiries.</li>
							</ul>
						</div>
						<div class="mb-5">
							<div class="head">Global</div>
							<ul>
								<li>If you are a GLOBAL BUYER need to Purchase a product chooses your client type</li>
								<li>then you fill up all details then press register.</li>
								<li>You will receive your Company Registration Number by email with activation request Then Log In will take you to: Products Display Page for you to Purchases.</li>
							</ul>
						</div>
						<img src="{{ asset('en/images/logo.png') }}" alt="">
					</div>
				</div>
				<div class="col-md-6 p-0">
					<!-- start -->
					<div class="cart_L_sect log_box">
					<form method="POST" action="{{ route('register') }}">
                            @csrf
					<div class="bdrb pb-3"><h1 class="b ac">Register</h1></div>
					   <div class="login_form">
						   <div class="mt-2 mb-2 bdrb">
							  <p class="black float-left mr-3"><strong>I am a</strong></p><label class="mr-3"><input name="toggler" type="radio" value="form_1" id="prof-1"> Individual</label> <label class="mr-3"><input name="toggler" type="radio"  value="form_2" id="prof-2"> Industrial</label> <label><input name="toggler" type="radio"  value="form_3" id="prof-3"> Global</label><p class="clearfix"></p>
						   </div>
						   
						   <div id="group1">
							   <div class="mt-4 dn" id="form_1">
									<div class="mb-3">
										<label class="float-left">First Name</label>
										
										<input id="f_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="Enter your First Name">

@error('first_name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror									
									</div>
									<div class="mb-3">
										<label class="float-left">Last Name</label>
										
										<input id="l_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Enter your Last Name">

@error('last_name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Email ID</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">

@error('email')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Mobile Number</label>
									
										<input id="m_num" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Enter your Mobile">

@error('mobile')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Region</label>
				
										<input id="region" type="text" class="form-control @error('region') is-invalid @enderror" name="region" value="{{ old('region') }}" required autocomplete="region" placeholder="Enter your Region">

@error('region')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">City</label>
										
										<input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="Enter your City">

@error('city')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">District</label>
										
										<input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" required autocomplete="district" placeholder="Enter your District">

@error('district')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">User Name</label>
										
										<input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" placeholder="Enter your User Name">

@error('user_name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Password</label>
										
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="Enter your Password">

@error('password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Confirm Password</label>
									
										<input id="con_password" type="password" class="form-control @error('con_password') is-invalid @enderror" name="con_password" value="{{ old('password') }}" required autocomplete="password" placeholder="Enter your Confirm Password">

@error('password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
								<x-button type="submit" class="text-center" class="login_btn">Register</x-button>
							   </div>
</form>

<!----Second form----->




<form method="POST" action="{{ url('industrial_register') }}">
							   <div class="mt-4 dn" id="form_2">
							  					   		<div class="mb-3">
										<label class="float-left">Company Name</label>
										
										@csrf						<input id="c_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" placeholder="Enter your Company Name">

@error('company_name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
								    <div class="mb-3">
										<label class="float-left">First Name</label>
										
										<input id="cf_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="Enter your First Name">

@error('first_name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Last Name</label>
										<input id="cf_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Enter your Last Name">

@error('last_name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Email ID</label>
										<input id="cf_name" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your Email">

@error('email')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Mobile Number</label>
										<input id="cf_name" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Enter your Mobile">

@error('mobile')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Region</label>
										<input id="cf_name" type="text" class="form-control @error('region') is-invalid @enderror" name="region" value="{{ old('region') }}" required autocomplete="region" placeholder="Enter your Region">

@error('region')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">City</label>
										<input id="cf_name" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="Enter your City">

@error('city')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">District</label>
										<input id="cf_name" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" required autocomplete="district" placeholder="Enter your District">

@error('district')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">User Name</label>
										<input id="cf_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" placeholder="Enter your User Name">

@error('user_name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Password</label>
										<input id="cf_name" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="Enter your Password">

@error('password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Confirm Password</label>
										<input id="cf_name" type="password" class="form-control @error('con_password') is-invalid @enderror" name="con_password" value="{{ old('con_password') }}" required autocomplete="con_password" placeholder="Enter your Confirm Password">

@error('con_password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<x-button type="submit" class="text-center" class="login_btn">Register</x-button>
							   </div>

</form>


<!------form 3--------------->
<form method="POST" action="{{ url('global_register') }}">
							   <div class="mt-4 dn" id="form_3">
								    <div class="mb-3">
									@csrf					<label class="float-left">Consignee &amp; Buyer</label>
										<input id="cf_name" type="text" class="form-control @error('buyer') is-invalid @enderror" name="buyer" value="{{ old('buyer') }}" required autocomplete="buyer" placeholder="Enter your Buyer">

@error('buyer')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
								    <div class="mb-3">
										<label class="float-left">First Name</label>
										<input id="cf_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="Enter your First Name">

@error('first_name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Last Name</label>
										<input id="cf_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Enter your Last Name">

@error('last_name')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Address</label>
										<input id="cf_name" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Enter your Address">

@error('address')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
								    <div class="mb-3">
										<label class="float-left">Landline</label>
										<input id="cf_name" type="text" class="form-control @error('landline') is-invalid @enderror" name="landline" value="{{ old('landline') }}" required autocomplete="landline" placeholder="Enter your Landline">

@error('landline')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
								    <div class="mb-3">
										<label class="float-left">Email ID</label>
										<input id="cf_name" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your Email">

@error('email')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Mobile Number</label>
										<input id="cf_name" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Enter your Mobile">

@error('mobile')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Company Website</label>
										<input id="cf_name" type="text" class="form-control @error('company_website') is-invalid @enderror" name="company_website" value="{{ old('company_website') }}" required autocomplete="company_website" placeholder="Enter your Company Website">

@error('company_website')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Port Of Discharge</label>
										<input id="cf_name" type="text" class="form-control @error('port_of_discharge') is-invalid @enderror" name="port_of_discharge" value="{{ old('port_of_discharge') }}" required autocomplete="port_of_discharge" placeholder="Enter your Port Of Discharge">

@error('port_of_discharge')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Country Of Final Destination</label>
										<input id="cf_name" type="text" class="form-control @error('country_of_final_destination') is-invalid @enderror" name="country_of_final_destination" value="{{ old('country_of_final_destination') }}" required autocomplete="country_of_final_destination" placeholder="Enter your Country Of Final Destination">

@error('country_of_final_destination')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
								   <div class="mb-3">
										<label class="float-left">Terms of Delivery</label>
										<input id="cf_name" type="text" class="form-control @error('terms_of_delivery') is-invalid @enderror" name="terms_of_delivery" value="{{ old('terms_of_delivery') }}" required autocomplete="terms_of_delivery" placeholder="Enter your Terms Of Delivery">

@error('terms_of_delivery')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
								   <div class="mb-3">
										<label class="float-left">Payment Terms</label>
									   <select required id="pt">
									   <option value="Select Payment Terms">Select Payment Terms</option>
									   <option value="Select Payment Terms">Select Payment Terms</option>
									   <option value="Select Payment Terms">Select Payment Terms</option></select>
									</div>

								   <div class="mb-3">
										<label class="float-left">Currency</label>
										<select required>
										<option value="Select Currency">Select Currency</option>
										<option value="Select Currency">Select Currency</option>
										<option value="Select Currency">Select Currency</option>
										</select>
									</div>
									<div class="mb-3">
										<label class="float-left">Password</label>
										<input id="cf_name" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="Enter your Password">

@error('password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<div class="mb-3">
										<label class="float-left">Confirm Password</label>
										<input id="cf_name" type="password" class="form-control @error('con_password') is-invalid @enderror" name="con_password" value="{{ old('con_password') }}" required autocomplete="con_password" placeholder="Enter your Confirm Password">

@error('con_password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror
									</div>
									<x-button type="submit" class="text-center" class="login_btn">Register</x-button>
							   </div>
</form> 
							  
						   </div>
						   <p class="fs12 ac mt-2 gray w62 auto">By continuing, you agree to Bahed's Conditions of Use and Privacy Notice.</p>
						</div>
					</div>

					
					<!-- end -->
				</div>
			</div>
		</div>
	</div>
	
	<p id="back-top"><a href="#top"><span></span></a></p>
    <script src="//ajax.aspnetcdn.com/ajax/jquery/jquery-1.10.2.min.js"></script>
    <script>
        var Page = 'register';
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
    <script src="{{ asset('en/Scripts/script.int.dg.js') }}"></script>
</body>

</html>