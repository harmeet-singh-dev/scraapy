@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{ URL::to('/en/home') }}">Home</a></li>
			  <li>Become Our Partner</li>
			</ul>
			<h1 class="white">Become Our Partner</h1>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row text-justify">
				<div class="col-md-6 offset-md-3">
					<div class="fold_box p-5">
						<h1 class="mb-3">Become Our Partner</h1>
						<form method="POST" enctype="multipart/form-data" action="{{ url('vendor_register') }}">
                            @csrf
						<div class="login_form">
							<div class="mb-3">
								<label class="float-left">Company Name</label>
								<input type="text" name="company_name" required>
							</div>
							<div class="mb-3">
								<label class="float-left">Company C,R number</label>
								<input type="text" name="company_c_r_number" required>
							</div>
							<div class="mb-3">
								<label class="float-left">Upload Logo</label>
								<input type="file" name="logo" required>
							</div>
							<div class="mb-3">
								<label class="float-left">Location</label>
								<input type="text" name="location" required>
							</div>
							<div class="mb-3">
								<label class="float-left">Type of business</label>
								<input type="text" name="business_type" required>
							</div>
							<div class="mb-3">
								<label class="float-left">Contact Person</label>
								<input type="text" name="first_name" required>
							</div>
							<div class="mb-3">
								<label class="float-left">Tel</label>
								<input type="text" name="landline" required>
							</div>
							<div class="mb-3">
								<label class="float-left">Mobile</label>
								<input type="text" name="mobile" required>
							</div>
							<div class="mb-3">
								<label class="float-left">Email</label>
								<input type="email" class="form-control" name="email" required>
							</div>
							<div class="mb-3">
								<label class="float-left">Password</label>
								<input type="password" name="password" required>
							</div>
							<div class="mb-3">
								<label class="float-left">I ban #</label>
								<input type="text" name="i_ban" required>
							</div>
							<x-button type="submit" class="text-center" class="login_btn">Join Scraapy</x-button>
					   </div>
					   </form>
						<p class="clearfix"></p>
					</div>
				</div>
			</div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--content area end-->

	<p class="container bdrb mb-5"><img src="{{ asset('en/images/spacer.gif')}}" alt=""></p>
	
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