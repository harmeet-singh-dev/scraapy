@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
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
						<h1 class="mb-3">Manage Address</h1>
            	<!-- start -->
                    <div>
                    
                    
                        <div class="del_address_content">
                            <div class="del_address_top">
                                <h2>Address</h2>
                                <p class="fs13">Select the Delivery &amp; Billing Address for your order.</p>
                            </div>
                    
                            <div class="row">
                            
                                <div class="col-md-6">
                                    <div class="del_address del_address_act">
                                        <p class="del_add_hd">
                                            <input type="radio" name="radio" checked="">Neel Office<span class="slash">/</span>  09988776655
                                            <span class="edit_addess"><a href="#"><i class="fas fa-pencil-alt"></i></a><a href="#"><i class="far fa-trash-alt"></i></a></span>
                                        </p>
                    
                                        <div class="del_add">A-307, Diamond world, Mini Bazar, Varachha Road, Surat, Gujarat, India. 395006</div>
                    
                                        <div class="del_add_btm">
                                        	<span class="hm_btn"><button><i class="fas fa-check-circle"></i> <span>Selected Address</span></button></span>
                                            <span class="del_btn"><button onclick="window.open('payment.htm','_parent');">Deliver Here</button></span>
                                            <p class="clearfix"></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="del_address">
                                        <p class="del_add_hd">
                                            <input type="radio" name="radio" class="test">Neel Home<span class="slash">/</span>  09988776655
                                            <span class="edit_addess"><a href="#"><i class="fas fa-pencil-alt"></i></a><a href="#"><i class="far fa-trash-alt"></i></a></span>
                                        </p>
                    
                                        <div class="del_add">A-307, Diamond world, Mini Bazar, Varachha Road, Surat, Gujarat, India. 395006</div>
                    
                                        <div class="del_add_btm">
                                            <span class="del_btn"><button onclick="window.open('payment.htm','_parent');">Deliver Here</button></span>
                                            <p class="clearfix"></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="del_address">
                                        <p class="del_add_hd">
                                            <input type="radio" name="radio">Neel Home<span class="slash">/</span>  09988776655
                                            <span class="edit_addess"><a href="#"><i class="fas fa-pencil-alt"></i></a><a href="#"><i class="far fa-trash-alt"></i></a></span>
                                        </p>
                    
                                        <div class="del_add">A-307, Diamond world, Mini Bazar, Varachha Road, Surat, Gujarat, India. 395006</div>
                    
                                        <div class="del_add_btm">
                                            <span class="del_btn"><button onclick="window.open('payment.htm','_parent');">Deliver Here</button></span>
                                            <p class="clearfix"></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="del_address">
                                        <p class="del_add_hd">
                                            <input type="radio" name="radio">Neel Home<span class="slash">/</span>  09988776655
                                            <span class="edit_addess"><a href="#"><i class="fas fa-pencil-alt"></i></a><a href="#"><i class="far fa-trash-alt"></i></a></span>
                                        </p>
                    
                                        <div class="del_add">A-307, Diamond world, Mini Bazar, Varachha Road, Surat, Gujarat, India. 395006</div>
                    
                                        <div class="del_add_btm">
                                            <span class="del_btn"><button onclick="window.open('payment.htm','_parent');">Deliver Here</button></span>
                                            <p class="clearfix"></p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
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