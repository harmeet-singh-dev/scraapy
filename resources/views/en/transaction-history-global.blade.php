@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="index.htm">Home</a></li>
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
							<a href="edit-profile_global.htm"><i class="far fa-edit"></i> Edit profile</a>
							<a href="manage-address_global.htm"><i class="far fa-address-card"></i> Manage address</a>
							<a href="transection-history_global.htm"><i class="fas fa-money-bill-alt"></i> Transection History - Buy &amp; Sell</a>
							<a href="change-password_global.htm"><i class="fas fa-key"></i> Change password</a>
						</p>
					</div>
				</div>
				<div class="col-md-9">
					<div class="fold_box p-5">
						<h1 class="mb-3">Transection History - Buy &amp; Sell</h1>
            	<!-- start -->
						<div class="price_box rel mt-4" style="width: 100%;">
						<span class="bought">Bought</span>
						<div class="row bdrb price_head">
							<div class="col-md-3">Item</div>
							<div class="col-md-3">Unit</div>
							<div class="col-md-3">Qty</div>
							<div class="col-md-3">U/Price</div>
						</div>
						<div class="row bdrb price_cont">
							<div class="col-md-3"><span>Item</span>Aluminium General</div>
							<div class="col-md-3"><span>Unit</span>4</div>
							<div class="col-md-3"><span>Qty</span>100 ton</div>
							<div class="col-md-3"><span>U/Price</span>$1,270.00 / ton</div>
						</div>
						<div class="row price_cont">
							<div class="col-md-9 text-right b">Total Amount :</div>
							<div class="col-md-3 b">$1,270.00</div>
						</div>
					</div>
                <!-- end -->
					</div>
				</div>
				<p class="clearfix"></p>
			</div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--content area end-->

	<p class="container bdrb mb-5"><img src="images/spacer.gif" alt=""></p>
	
	<!--family ad-->
		<div class="container mt-5 mb-5">
			<div class="ad_box">
				<img src="images/ad.jpg" alt="" class="img-fluid">
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