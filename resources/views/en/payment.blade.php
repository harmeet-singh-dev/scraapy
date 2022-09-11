@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
			  <li>Buyer Payment</li>
			</ul>
			<p class="clearfix"></p>
			<h1 class="white">Buyer Payment</h1>
			<p class="clearfix"></p>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
			<div class="price_box mb-2 rel p-5">
				<div class="mt-2 mb-2 bdrb">
					<form>
					  	<div class="mb-3 pb-4 bdrb">
						  	<label class="mr-3 b"><input name="form-group" type="radio" class="mr-2"> X-Warehouse</label>
							<p class="mt-2 fs12">Collect goods from our warehouse</p>
						</div> 
						
					  	<div class="mb-3 pb-4 bdrb">
							<label class="mr-3 b"><input name="form-group" type="radio" class="mr-2"> DDP</label>
							<p class="mt-2 fs12">Seller will deliver goods to your warehouse with transportation cost</p>
						</div> 
						
						<div class="mb-3 pb-4 bdrb">
							<label class="mr-3 b"><input name="form-group" type="radio" class="mr-2"> FOB</label>
							<p class="mt-2 fs12">Goods will deliver to seaport</p>
						</div>
						
						<div class="mb-3 pb-4">
							<label class="mr-3 b"><input name="form-group" type="radio" class="mr-2"> CIF</label>
							<p class="mt-2 fs12">Price including shipping to global buyer seaport</p>
						</div>
						
						
					</form>
			   	</div>
				
				<p class="gray fs13 text-center mt10">Electronic Invoice issuedl by Seller<br>A Copy of this Invoice sent to Buyer Email</p>
				
				<div class="text-center mt-3"><input name="input" type="button" value="Done" class="contact_m"></div>
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