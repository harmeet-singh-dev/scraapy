@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
			  <li>Vendor Folder</li>
			</ul>
			<p class="clearfix"></p>
			<h1 class="white float-left">My Folder</h1>
			<p class="float-right post_btn"><a href="#" data-fancybox="" data-type="iframe" data-src="upload-scrap1.htm" class="port_pop1"><i class="fas fa-upload"></i> Upload Your Material</a></p>
			<p class="clearfix"></p>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
				<div class="col-md-3">
					<div class="fold_box">
						<h2>My Folder</h2>
						<p class="fold_link">
							<a href="vendor-folder.htm"><i class="fas fa-upload"></i> Uplaoded material</a>
							<a href="{{URL::to('/en/edit-profile-ven')}}"><i class="far fa-edit"></i> Edit profile</a>
							<a href="manage-order-ven.htm"><i class="far fa-address-card"></i> Manage Order</a>
							<a href="manage-membership-ven.htm"><i class="fas fa-key"></i> Manage Membership</a>
							<a href="total-payment-ven.htm"><i class="fas fa-money-bill-alt"></i> Manage Payment</a>
						</p>
					</div>
				</div>
				<?php   if (Auth::user()->user_type == 4){  ?>
				<div class="col-md-9">
				@include('en.flash-message')
					<div class="fold_box p-5">
						<h1 class="mb-3">Edit Profile</h1>
						<form method="POST" enctype="multipart/form-data" action="{{ url('edit_profile_ven_data') }}">
            @csrf
						<div class="login_form">
						<div class="mb-3">
								<label class="float-left">Company Name</label>
								<input type="text" maxlength="40" name="company_name" required value="{{$user_data['company_name']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Company C,R number</label>
								<input type="text" maxlength="40" name="company_c_r_number" required value="{{$user_data['company_c_r_number']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Upload Logo</label>
								<img src="logo/{{$user_data['logo']}}" height="100" width="100">
								<input type="file" name="logo" value="{{$user_data['logo']}}" >
							</div>
							<div class="mb-3">
								<label class="float-left">Location</label>
								<input type="text" maxlength="40" name="location" required value="{{$user_data['location']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Type of business</label>
								<input type="text" maxlength="40" name="business_type" required value="{{$user_data['business_type']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Contact Person</label>
								<input type="text" maxlength="40" name="first_name" required value="{{$user_data['first_name']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Tel</label>
								<input type="text" maxlength="40" name="landline" required value="{{$user_data['landline']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Mobile</label>
								<input type="text" maxlength="40" name="mobile" required value="{{$user_data['mobile']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Email</label>
								<input type="email" maxlength="40" class="form-control" name="email" required value="{{$user_data['email']}}">
							</div>
								<div class="mb-3">
								<label class="float-left">I ban #</label>
								<input type="text" maxlength="40" name="i_ban" required value="{{$user_data['i_ban']}}">
							</div>
							<x-button type="submit" class="text-center" class="login_btn">Save Changes</x-button>
							
					   </div>
					   </form>
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
				<img src="{{asset('en/images/ad.jpg')}}" alt="" class="img-fluid">
				<div class="ad_text">
					<h1>Welcome</h1>
					<h1><span>Families</span> and <span>Individuals</span></h1>
					<p class="text-center">Sell off Anything, Anywhere & Anytime <br>On Demand Scrap Service</p>
					<div class="mt-4 va1 text-center"><a href="{{ URL::to('/en/login')}}">Login</a> <a href="{{ URL::to('/en/register')}}">Register</a></div>
				</div>
				<p class="clearfix"></p>
			</div>
		</div>
@include('en.content.footer')