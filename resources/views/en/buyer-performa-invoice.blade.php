@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
			  <li>Buyer Performa Invoice</li>
			</ul>
			<p class="clearfix"></p>
			<h1 class="white">Buyer Performa Invoice</h1>
			<p class="clearfix"></p>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
			<div class="price_box mb-2 rel p-5">
				<p class="ilogo"><img src="{{asset('en/images/ilogo.png')}}" alt=""></p>
				<div class="row icont">
					<div class="col-md-3 ib"><span>Date</span></div>
					<div class="col-md-3 ib">-</div>
					<div class="col-md-3 ib"><span>PI#</span></div>
					<div class="col-md-3 ib">-</div>
					
					<div class="col-md-3 ib"><span>Seller</span></div>
					<div class="col-md-9 ib">-</div>
					
					<div class="col-md-3 ib"><span>Buyer</span></div>
					<div class="col-md-9 ib">-</div>
					
					<div class="col-md-4 ib"><span>Place of Receipt</span></div>
					<div class="col-md-4 ib"><span>Country of Origin</span></div>
					<div class="col-md-4 ib"><span>Destination</span></div>
					<div class="col-md-4 ib">-</div>
					<div class="col-md-4 ib">-</div>
					<div class="col-md-4 ib">-</div>
					
					<div class="col-md-4 ib"><span>Vessel</span></div>
					<div class="col-md-4 ib"><span>Port of Loading</span></div>
					<div class="col-md-4 ib"><span>Terms of Delivery</span></div>
					<div class="col-md-4 ib">-</div>
					<div class="col-md-4 ib">-</div>
					<div class="col-md-4 ib">-</div>
					
					<div class="col-md-4 ib"><span>Port of Discharge</span></div>
					<div class="col-md-8 ib"><span>Payment Terms</span></div>
					<div class="col-md-4 ib">-</div>
					<div class="col-md-8 ib">-</div>
					
				</div>
				
				<div class="row icont mt-4">
					<div class="col-md-3 ib"><span>Product</span></div>
					<div class="col-md-3 ib"><span>Unit</span></div>
					<div class="col-md-3 ib"><span>Qty</span></div>
					<div class="col-md-3 ib"><span>Unit Price</span></div>
					
					<div class="col-md-3 ib">.</div>
					<div class="col-md-3 ib">.</div>
					<div class="col-md-3 ib">.</div>
					<div class="col-md-3 ib">.</div>
					<div class="col-md-3 ib">.</div>
					<div class="col-md-3 ib">.</div>
					<div class="col-md-3 ib">.</div>
					<div class="col-md-3 ib">.</div>
				</div>
				<div class="row icont mt-4">
					<div class="col-md-9 ib"><span>Charges</span></div>
					<div class="col-md-3 ib"><span>.</span></div>
					<div class="col-md-9 ib"><span>Insurance(0.65%)</span></div>
					<div class="col-md-3 ib"><span>.</span></div>
					<div class="col-md-9 ib"><span>Total</span></div>
					<div class="col-md-3 ib"><span>.</span></div>
					<div class="col-md-12 ib">SR Only(XXXXXXXXXXXXXXXXXXXXXX)</div>
				</div>
				<p class="gray fs13 text-center mt10">Thanks<br>Electronic Invoice issued by<br>Buyer</p>
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