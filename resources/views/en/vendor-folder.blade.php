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
							<a href="edit-profile-ven.htm"><i class="far fa-edit"></i> Edit profile</a>
							<a href="manage-order-ven.htm"><i class="far fa-address-card"></i> Manage Order</a>
							<a href="manage-membership-ven.htm"><i class="fas fa-key"></i> Manage Membership</a>
							<a href="total-payment-ven.htm"><i class="fas fa-money-bill-alt"></i> Manage Payment</a>
						</p>
					</div>
				</div>
				<div class="col-md-9">
					<div class="fold_box p-5">
						<h1 class="mb-3">Uploaded Material</h1>
						<div class="pro_box_ind">
							<span class="sold">Sold</span>
							<a href="cart.htm" class="inq"><i class="fas fa-shopping-cart"></i></a>
							<a href="pro-dtl.htm"><img src="{{asset('en/images/pro1.jpg')}}" alt="" class="img-fluid mb-3"></a>
							<p class="head"><a href="pro-dtl.htm">Aluminium General</a></p>
							<p class="amnt">$1,270.00 <span>/ ton</span></p>
							<p class="selr">Uploaded by You</p>
						</div>
						<div class="pro_box_ind">
							<a href="cart.htm" class="inq"><i class="fas fa-shopping-cart"></i></a>
							<a href="pro-dtl.htm"><img src="{{asset('en/images/pro2.jpg')}}" alt="" class="img-fluid mb-3"></a>
							<p class="head"><a href="pro-dtl.htm">Aluminium General</a></p>
							<p class="amnt">$1,270.00 <span>/ ton</span></p>
							<p class="selr">Uploaded by Admin</p>
						</div>
						<div class="pro_box_ind">
							<span class="sold">Sold</span>
							<a href="cart.htm" class="inq"><i class="fas fa-shopping-cart"></i></a>
							<a href="pro-dtl.htm"><img src="{{asset('en/images/pro3.jpg')}}" alt="" class="img-fluid mb-3"></a>
							<p class="head"><a href="pro-dtl.htm">Aluminium General</a></p>
							<p class="amnt">$1,270.00 <span>/ ton</span></p>
							<p class="selr">Uploaded by You</p>
						</div>
						<div class="pro_box_ind">
							<a href="cart.htm" class="inq"><i class="fas fa-shopping-cart"></i></a>
							<a href="pro-dtl.htm"><img src="{{asset('en/images/pro4.jpg')}}" alt="" class="img-fluid mb-3"></a>
							<p class="head"><a href="pro-dtl.htm">Aluminium General</a></p>
							<p class="amnt">$1,270.00 <span>/ ton</span></p>
							<p class="selr">Uploaded by Admin</p>
						</div>

						<div class="pro_box_ind">
							<span class="sold">Sold</span>
							<a href="cart.htm" class="inq"><i class="fas fa-shopping-cart"></i></a>
							<a href="pro-dtl.htm"><img src="{{asset('en/images/pro1.jpg')}}" alt="" class="img-fluid mb-3"></a>
							<p class="head"><a href="pro-dtl.htm">Aluminium General</a></p>
							<p class="amnt">$1,270.00 <span>/ ton</span></p>
							<p class="selr">Uploaded by You</p>
						</div>
						<div class="pro_box_ind">
							<span class="sold">Sold</span>
							<a href="cart.htm" class="inq"><i class="fas fa-shopping-cart"></i></a>
							<a href="pro-dtl.htm"><img src="{{asset('en/images/pro2.jpg')}}" alt="" class="img-fluid mb-3"></a>
							<p class="head"><a href="pro-dtl.htm">Aluminium General</a></p>
							<p class="amnt">$1,270.00 <span>/ ton</span></p>
							<p class="selr">Uploaded by You</p>
						</div>
						<div class="pro_box_ind">
							<a href="cart.htm" class="inq"><i class="fas fa-shopping-cart"></i></a>
							<a href="pro-dtl.htm"><img src="{{asset('en/images/pro3.jpg')}}" alt="" class="img-fluid mb-3"></a>
							<p class="head"><a href="pro-dtl.htm">Aluminium General</a></p>
							<p class="amnt">$1,270.00 <span>/ ton</span></p>
							<p class="selr">Uploaded by You</p>
						</div>
						<div class="pro_box_ind">
							<a href="cart.htm" class="inq"><i class="fas fa-shopping-cart"></i></a>
							<a href="pro-dtl.htm"><img src="{{asset('en/images/pro4.jpg')}}" alt="" class="img-fluid mb-3"></a>
							<p class="head"><a href="pro-dtl.htm">Aluminium General</a></p>
							<p class="amnt">$1,270.00 <span>/ ton</span></p>
							<p class="selr">Uploaded by Admin</p>
						</div>
						<p class="clearfix"></p>
					</div>
				</div>
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
					<div class="mt-4 va1 text-center"><a href="#">Login</a> <a href="#">Register</a></div>
				</div>
				<p class="clearfix"></p>
			</div>
		</div>
        @include('en.content.footer')