@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
			  <li>Pricing and Collection</li>
			</ul>
			<p class="clearfix"></p>
			<h1 class="white">Pricing and Collection</h1>
			<p class="clearfix"></p>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
			<div class="price_box mb-2">
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
					<div class="col-md-3"><span>Item</span>Aluminium General</div>
					<div class="col-md-3"><span>Unit</span>4</div>
					<div class="col-md-3"><span>Qty</span>100 ton</div>
					<div class="col-md-3"><span>U/Price</span>$1,270.00 / ton</div>
				</div>
			</div>
			<div class="price_box mb-2">
				<div class="row bdrb price_head">
					<div class="col-md-3">Item</div>
					<div class="col-md-3">Unit</div>
					<div class="col-md-3">Qty</div>
					<div class="col-md-3">Actual</div>
				</div>
				<div class="row bdrb price_cont">
					<div class="col-md-3"><span>Item</span>Aluminium General</div>
					<div class="col-md-3"><span>Unit</span>4</div>
					<div class="col-md-3"><span>Qty</span>100 ton</div>
					<div class="col-md-3"><span>U/Price</span>$1,270.00 / ton</div>
				</div>
				<div class="row price_cont">
					<div class="col-md-3"><span>Item</span>Aluminium General</div>
					<div class="col-md-3"><span>Unit</span>4</div>
					<div class="col-md-3"><span>Qty</span>100 ton</div>
					<div class="col-md-3"><span>U/Price</span>$1,270.00 / ton</div>
				</div>
			</div>
			
			<div class="price_box">
				<div class="pop_cont">
					<input type="text" name="" id="" placeholder="Collector Code" class="mb-2">
					<input type="text" name="" id="" placeholder="Approval Code" class="mb-2">
					<input type="text" name="" id="" placeholder="iban#" class="mb-2">
					<input type="text" name="" id="" placeholder="Next Expected Supply/Days" class="mb-2">
				</div>
			</div>
			<div class="text-center mt-3"><input name="input" type="button" value="SOLD" class="contact_btn" onclick="parent.location.href='seller-purchase-order-receipt.htm'"></div>
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