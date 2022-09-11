@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{ URL::to('/en')}}">Home</a></li>
			  <li>Contact Us</li>
			</ul>
			<h1 class="white">Contact Us</h1>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
			<div class="container mid_area">
				<div class="cms_area">

					<div class="row">
					<div class="col-lg-4"><div class="contact_area">
					<p class="cnt_heading">Registered Office</p>
					<div class="sec_cnt">M2, 3rd Floor, Mahavir Nagar, Janakpuri East, New Delhi 110058</div>
					</div></div>
					<div class="col-lg-4"><div class="contact_area">
					<p class="cnt_heading">Phone</p>
					<div class="sec_cnt black">
					<p><span class="fa fa-phone fs24 mr8"></span>+91-1146181011</p>
					</div>


					</div></div>
					<div class="col-lg-4"><div class="contact_area">
					<p class="cnt_heading">Email</p>
					<div class="sec_cnt">
					<p class="red"><a href="mailto:info@mrmmbsvision.com">info@mrmmbsvision.com</a></p>
					</div>
					</div></div>
					</div>

				</div>
			</div>
			
            <div class="contact_sec">
				<div class="contact_sec1">
				<p class="fs22 black weight700">HAVE A QUERY?</p>
				<p class="fs11 black">Just Fill the Below Information:</p>

				<div class="mt-3 contact_form">
				<p><input type="text" name="full_name" id="full_name" placeholder="First Name *"></p>
				<p class="mt10"><input type="text" name="full_name" placeholder="Last Name"></p>
				<p class="mt10"><input type="text" name="email_id" id="email_id" placeholder="Email ID *"></p>
				<p class="mt10"><input type="text" name="mobile_number" id="mobile_number" placeholder="Mobile No. *"></p>
				<p class="mt10"><textarea name="description" id="description" cols="45" rows="4" placeholder="Comment/Message *"></textarea></p>
				<p class="mt10"><input type="text" name="mobile_number" placeholder="Enter Code *" style="width:120px;">
				  <img src="images/code.png" alt=""><a href="#"><img src="images/ref2.png" alt=""></a></p>
				<div class="mt-2">
				<p class="pull-left"><input id="actions" name="actions" type="submit" value="Submit" class="btn7" onclick="window.open('thankyou.htm','_parent');"><input type="submit" name="button" id="button" value="Reset" class="contact_btn2 ml-3"></p>
				<p class="clearfix"></p>
				</div>
				</div>

				</div>
				<div class="contact_sec2 d-none d-lg-block">
				<p class="fs22 black weight700">Google Map</p>

				<div class="mt-5"> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14007.563860949362!2d77.0866711!3d28.6330298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32e1eed797c74924!2sJanak%20Puri%20East!5e0!3m2!1sen!2sin!4v1570097463947!5m2!1sen!2sin" width="100%" height="460" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
				</div>

				<div class="clearfix"></div>
			</div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--content area end-->

	<p class="container bdrb mb-5"><img src="{{ asset('en/images/spacer.gif') }}" alt=""></p>
	
	<!--family ad-->
		<div class="container mt-5 mb-5">
			<div class="ad_box">
				<img src="{{ asset('en/images/ad.jpg') }}" alt="" class="img-fluid">
				<div class="ad_text">
					<h1>Welcome</h1>
					<h1><span>Families</span> and <span>Individuals</span></h1>
					<p class="text-center">Sell off Anything, Anywhere & Anytime <br>On Demand Scrap Service</p>
					<div class="mt-4 va1 text-center"><a href="{{ URL::to('/en/login')}}">Login</a> <a href="{{ URL::to('/en/register') }}">Register</a></div>
				</div>
				<p class="clearfix"></p>
			</div>
		</div>
        @include('en.content.footer')