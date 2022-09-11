@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
			  <li>Global Folder</li>
			</ul>
			<p class="clearfix"></p>
			<h1 class="white float-left">My Folder</h1>
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
							<a href="global.htm"><i class="fas fa-dolly"></i> Bought material</a>
							<a href="{{URL::to('/en/edit-profile-global')}}"><i class="far fa-edit"></i> Edit profile</a>
							<a href="manage-address_global.htm"><i class="far fa-address-card"></i> Manage address</a>
							<a href="transection-history_global.htm"><i class="fas fa-money-bill-alt"></i> Transection History - Buy &amp; Sell</a>
							<a href="change-password_global.htm"><i class="fas fa-key"></i> Change password</a>
						</p>
					</div>
				</div>
				<?php   if (Auth::user()->user_type == 3){  ?>
				<div class="col-md-9">
				@include('en.flash-message')
					<div class="fold_box p-5">
						<h1 class="mb-3">Edit Profile</h1>
						<form method="POST" action="{{ url('edit_profile_global_data') }}">
            @csrf	
						<div class="login_form">
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
								<input type="email" class="form-control" maxlength="40" required name="email" id="email" value="{{$user_data['email']}}">
							</div>
							<div class="mb-3">
								<label class="float-left">Mobile Number</label>
								<input type="text" maxlength="40" required name="mobile" id="m_num" value="{{$user_data['mobile']}}">
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

	<p class="container bdrb mb-5"><img src="{{ asset('en/images/spacer.gif')}}" alt=""></p>
	
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
	<!--family ad end--><!-- #BeginLibraryItem "/Library/footer.lbi" --><footer>
        <div class="ft_bg">
			<div class="mb-5">
				<div class="sec">
					<a href="sell-to-us.htm" class="white">
						<img src="{{ asset('en/images/f1_ico.png')}}" alt="">
						<p class="head">Sell To Us</p>
						<p class="white">All scrap metals can be sold Source - steel, aluminium, copper, stainless steel.</p>
					</a>
				</div>
				<div class="sec">
					<a href="sell-offers.htm" class="white">
						<img src="{{ asset('en/images/f2_ico.png')}}" alt="">
						<p class="head">Buy From Us</p>
						<p class="white">Bahed is a trusted, dependable source of ferrous and nonferrous recycled metals. </p>
					</a>
				</div>
				<div class="sec">
					<a href="contact-us.htm" class="white">
						<img src="{{ asset('en/images/f3_ico.png')}}" alt="">
						<p class="head">Find A Location</p>
						<p class="white">Never is the "Scraapy" in appropriate than when discussing our locations.</p>
					</a>
				</div>
				<p class="clearfix"></p>
			</div>
            
			<div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="d-none d-lg-block d-xl-block"> <span class="ft_heading">Quick Links</span>
                        </div>
                        <div class="d-lg-none dd_next hand"> <span class="ft_heading">Quick Links</span>
                        </div>
                        <div class="f_dd_box">
                            <div class="ft_link">
                                <a href="index.htm">Home</a>
								<a href="about-us.htm">About Us</a>
								<a href="individual.htm">Post Products</a>
								<a href="become-our-partner.htm">Become Our Partner</a>
								<a href="login.htm">Login</a>
								<a href="register.htm">Register</a>
								<a href="affiliate.htm">Affiliate</a>
								<a href="contact-us.htm">Contact Us</a>						
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="d-none d-lg-block d-xl-block"> <span class="ft_heading">We Deals In</span>
                        </div>
                        <div class="d-lg-none dd_next hand"> <span class="ft_heading">We Deals In</span>
                        </div>
                        <div class="f_dd_box">
                            <div class="ft_link">
                                <a href="listing.htm">Aluminium General</a>
								<a href="listing.htm">Copper General</a>
								<a href="listing.htm">Iron & Steel General</a>
								<a href="listing.htm">Stainless Steel General</a>
								<a href="listing.htm">Plastic General</a>
								<a href="listing.htm">Electrical & Electronic Waste</a>
								<a href="listing.htm">Car Scrap </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="d-none d-lg-block d-xl-block"> <span class="ft_heading">Contact Info</span>
                        </div>
                        <div class="d-lg-none dd_next hand"> <span class="ft_heading">Contact Info</span>
                        </div>
                        <div class="f_dd_box">
                            <div class="ft_link">
                                <a href="mailto:info@bahed.com">info@scraapy.com</a>
								<a href="tel:+91 9847965581">+91 9847965581</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
							<div class="ft-social animated wow drop_eff4 animated">
								<a href="" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
								<a href="" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								<a href="" title="Google Plus" target="_blank"><i class="fab fa-instagram"></i></a>
							</div>
							<img src="{{ asset('en/images/f-card.png')}}" alt="" class="mt-2">
							<div class="copy_r">Copyright © 2021 Scraapy. All Rights Reserved</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
@include('en.content.footer')