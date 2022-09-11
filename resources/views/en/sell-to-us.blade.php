@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
			  <li>Sell To Us</li>
			</ul>
			<h1 class="white">Sell To Us</h1>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row text-justify">
				<div class="col-md-6 offset-md-3">
					<div class="fold_box p-5">
						<h1 class="mb-3">Sell To Us</h1>
						
						<div class="login_form">
							<div class="mb-3">
								<label class="float-left">Name</label>
								<input type="text" name="password" id="f_name">
							</div>
							<div class="mb-3">
								<label class="float-left">Car type and model</label>
								<input type="text" name="password" id="l_name">
							</div>
							<div class="mb-3">
								<label class="float-left">Upload Photo</label>
								<input type="file" name="password" id="email">
							</div>
							<div class="mb-3">
								<label class="float-left">Car condition</label>
								<input type="text" name="password" id="m_num">
							</div>
							<div class="mb-3">
								<label class="float-left">Location</label>
								<input type="text" name="password" id="region">
							</div>
							<p class="text-center"><a href="#" class="login_btn">Send Enquiry</a></p>
					   </div>
						<p class="clearfix"></p>
					</div>
				</div>
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
					<div class="mt-4 va1 text-center"><a href="#">Login</a> <a href="#">Register</a></div>
				</div>
				<p class="clearfix"></p>
			</div>
		</div>
@include('en.content.footer')