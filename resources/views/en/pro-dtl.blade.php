@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
			  <li>Scrap Details</li>
			</ul>
			<h1 class="white">Scrap Details</h1>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
				<div class="col-md-6">
					<div id="dtl" class="owl-carousel owl-theme">
						<div class="item m-5"><img src="{{asset('en/images/pro1.jpg')}}" alt=""></div>
						<div class="item m-5"><img src="{{asset('en/images/pro2.jpg')}}" alt=""></div>
						<div class="item m-5"><img src="{{asset('en/images/pro3.jpg')}}" alt=""></div>
					</div>
				</div>
				<div class="col-md-6">
					<h1>Aluminium General</h1>
					<p class="amnt">$1,270.00 <span>/ ton</span></p>
					<p class="selr">Seller : Alaska People</p>
					
					<p class="mt-4 fs13 gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam neque nibh, rutrum sed velit a, tincidunt interdum nisi. Nullam urna nulla, luctus id felis sed, posuere vestibulum ante. Praesent blandit nec quam a tincidunt. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec euismod diam odio, a fermentum lorem volutpat in. Pellentesque eget nisi quis elit efficitur hendrerit.</p>
					
					
					<div class="dtl_r">
						<p class="bdrb mt-3 mb-3"><img src="{{asset('en/images/spacer.gif')}}" alt=""></p>
				
				<div class="fs14 mt-2">
					<p class="float-left mt-1 mr-2">Quantity</p>
					<p class="weight500 fs18 gray float-left"><a href="#" class="gray">-</a>
					<input name="" type="text" style="width:100px;border:1px solid #ccc;text-align:center;font-size: 12px;" class="vam p-2" value="1Ton"> <a href="" class="gray">+</a></p>
					<div class="clearfix"></div>
				</div>
						
						<p class="bdrb mb-3"><img src="{{asset('en/images/spacer.gif')}}" alt=""></p>
						
						<h2>Total Price: $1050.00</h2>
				<div class="row mt-4">
					<div class="col-md-6 p-0 add_cart"><a href="cart.htm"><i class="fas fa-cart-plus"></i> Add To Cart</a></div>
				</div>
					</div>
				</div>
				<p class="clearfix"></p>
			</div>
        </div>
    </div>
    <div class="clearfix"></div>
@include('en.content.footer')