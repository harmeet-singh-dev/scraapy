@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
			  <li>Industrial Folder</li>
			</ul>
			<p class="clearfix"></p>
			<h1 class="white float-left">My Folder</h1>
			<p class="float-right post_btn"><a href="{{URL::to('en/upload-ind-scrap')}}"><i class="fas fa-upload"></i> Upload Your Scrap</a></p>
			<p class="clearfix"></p>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
			@include('en.content.nav-industrial')
				<?php   if (Auth::user()->user_type == 2){  ?>
				<div class="col-md-9">
				@include('en.flash-message')
					<div class="fold_box p-5">
						<h1 class="mb-3">Edit Profile</h1>
						
						<div class="login_form">
						<form method="POST" action="{{ url('edit_profile_indus_data') }}">
            @csrf
			<div class="mb-3">
								<label class="float-left">First Name</label>
								<input type="text" maxlength="40" required name="first_name" id="f_name" value="{{$user_data['first_name']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Last Name</label>
								<input type="text" maxlength="40" required name="last_name" id="l_name" value="{{$user_data['last_name']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Email ID</label>
								<input class="form-control" type="email" maxlength="40" required name="email" id="l_name" value="{{$user_data['email']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Mobile Number</label>
								<input type="text" maxlength="40" required name="mobile" id="m_num" value="{{$user_data['mobile']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Region</label>
								<input type="text" maxlength="40" required name="region" id="region" value="{{$user_data['region']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">City</label>
								<input type="text" maxlength="40" required name="city" id="city" value="{{$user_data['city']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">District</label>
								<input type="text" maxlength="40" required name="district" id="district" value="{{$user_data['district']}}">
							</div>
							<x-button type="submit" class="text-center" class="login_btn">Save Changes</x-button>
							
							</form>
					   </div>
						<p class="clearfix"></p>
					</div>
				</div>
				<?php  }  ?>
				<p class="clearfix"></p>
			</div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--content area end-->

	<p class="container bdrb mb-5"><img src="{{asset('en/images/spacer.gif')}}" alt=""></p>
	
	<!--family ad-->
		<div class="container mt-5 mb-5">
			<div class="ad_box">
				<img src="{{ asset('en/images/ad.jpg')}}" alt="" class="img-fluid">
				<div class="ad_text">
					<h1>Welcome</h1>
					<h1><span>Families</span> and <span>Individuals</span></h1>
					<p class="text-center">Sell off Anything, Anywhere & Anytime <br>On Demand Scrap Service</p>
					<div class="mt-4 va1 text-center"><a href="{{URL::to('/en/login')}}">Login</a> <a href="{{URL::to('/en/register')}}">Register</a></div>
				</div>
				<p class="clearfix"></p>
			</div>
		</div>
@include('en.content.footer')