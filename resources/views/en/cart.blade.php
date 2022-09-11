@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{ URL::to('/en/home') }}">Home</a></li>
			  <li>Shopping Cart</li>
			</ul>
			<h1 class="white">Shopping Cart</h1>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row">
        		<div class="col-md-9">
            	<!-- start -->
            	<div class="cart_L_sect mb-3">
                    <div class="w-100">
                        <div class="mylsttb">
                            <div class="crt_1">01.</div>
                            <div class="crt_2">
                                <p class="black"><a href="pro-dtl.htm" class="black"><img src="{{ asset('en/images/pro1.jpg')}}" alt="">Aluminium General</a></p>
                                <p class="fs12 mt-2"><b>Seller :</b> VENUS Safety</p>
                                <p class="black mt-2"><del class="gray fs12"> $ 259.00</del> <b class="black fs12">$ 250.00</b></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="crt_3">
                                <p class="weight500 fs18 gray"><a href="#" class="gray">-</a>
                                <input name="" type="text" style="width:100px;border:1px solid #ccc;text-align:center;font-size: 12px;" class="vam p-1" value="1Ton"> <a href="" class="gray">+</a></p>
                                <p class="mt-2 dib"><a href="" class="upd">Update</a></p>
                            </div> 
                            <div class="crt_4">
                                <p class="black fs16">$ 250.00</p>
                            </div>
                            <div class="crt_5">
                                <a href="" class="del"><i class="fas fa-trash-alt"></i></a>
                            </div>
                            <p class="clearfix"></p>
                        </div>
                    </div>
                </div>
                <!-- end -->
                <!-- start -->
            	<div class="cart_L_sect mb-3">
                    <div class="w-100">
                        <div class="mylsttb">
                            <div class="crt_1">02.</div>
                            <div class="crt_2">
                                <p class="black"><a href="pro-dtl.htm" class="black"><img src="{{ asset('en/images/pro2.jpg')}}" alt="">Aluminium General</a></p>
                                <p class="fs12 mt-2"><b>Seller :</b> VENUS Safety</p>
                                <p class="black mt-2"><del class="gray fs12"> $ 259.00</del> <b class="black fs12">$ 250.00</b></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="crt_3">
                                <p class="weight500 fs18 gray"><a href="#" class="gray">-</a>
                                <input name="" type="text" style="width:100px;border:1px solid #ccc;text-align:center;font-size: 12px;" class="vam p-1" value="1Ton"> <a href="" class="gray">+</a></p>
                                <p class="mt-2 dib"><a href="" class="upd">Update</a></p>
                            </div> 
                            <div class="crt_4">
                                <p class="black fs16">$ 250.00</p>
                            </div>
                            <div class="crt_5">
                                <a href="" class="del"><i class="fas fa-trash-alt"></i></a>
                            </div>
                            <p class="clearfix"></p>
                        </div>
                    </div>
                </div>
                <!-- end -->
                <!-- start -->
            	<div class="cart_L_sect mb-3">
                    <div class="w-100">
                        <div class="mylsttb">
                            <div class="crt_1">03.</div>
                            <div class="crt_2">
                                <p class="black"><a href="pro-dtl.htm" class="black"><img src="{{ asset('en/images/pro3.jpg')}}" alt="">Aluminium General</a></p>
                                <p class="fs12 mt-2"><b>Seller :</b> VENUS Safety</p>
                                <p class="black mt-2"><del class="gray fs12"> $ 259.00</del> <b class="black fs12">$ 250.00</b></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="crt_3">
                                <p class="weight500 fs18 gray"><a href="#" class="gray">-</a>
                                <input name="" type="text" style="width:100px;border:1px solid #ccc;text-align:center;font-size: 12px;" class="vam p-1" value="1Ton"> <a href="" class="gray">+</a></p>
                                <p class="mt-2 dib"><a href="" class="upd">Update</a></p>
                            </div> 
                            <div class="crt_4">
                                <p class="black fs16">$ 250.00</p>
                            </div>
                            <div class="crt_5">
                                <a href="" class="del"><i class="fas fa-trash-alt"></i></a>
                            </div>
                            <p class="clearfix"></p>
                        </div>
                    </div>
                </div>
                <!-- end -->
                
             </div>
				<div class="col-md-3">
					<div class="cart_p_dtl">
						<h2>Summary</h2>
						<p class="pt-3 pb-3 bdrb"><span>Total Order Value (2 items) </span> <b>$ 500</b></p>
						<div class="clearfix"></div>
						<p class="pt-3 pb-3 bdrb"><span>Shipping Charges </span> <b>$ 20</b></p>
						<div class="clearfix"></div>
						<p class="pt-3 pb-3 bdrb"><span>Tax (10 %) </span> <b>$ 10</b></p>
						<div class="clearfix bb mb-2"></div>
						<p class="pt-3 pb-3 bdrb"><span>Net Amount </span> <b>$ 530</b></p>
						<div class="fs14 mt-4"><select style="width: 100%; padding:10px;"><option>Select Inspection</option><option>Inspection by Scrapy</option><option>inspection by 3rd party</option></select></div>
					</div>
						<div class="clearfix"></div>
						<p class="cart_btns">
						<input name="" type="button" class="login_btn w100 trans_eff" value="Proceed to Checkout" onclick="window.open('checkout.htm','_parent')">
						<a href="listing.htm" class="continue_btn mt-3">&lt; Continue Shopping</a>                    
						</p>
						<div class="clearfix"></div>
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
				<img src="{{ asset('en/images/ad.jpg')}}" alt="" class="img-fluid">
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