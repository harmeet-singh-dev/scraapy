@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{URL::to('/en/home')}}">Home</a></li>
			  <li>Listing</li>
			</ul>
			<h1 class="white">Listing</h1>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
		<form method="POST" enctype="multipart/form-data" action="{{ url('update_listing') }}">
            @csrf
			<p class="text-right">
			<select name="category" id="" class="p-1">
			<option value="">Select Category</option>
			@foreach($scrap_categories as $scrap_categories)
			<option value="{{$scrap_categories->category_name}}">{{$scrap_categories->category_name}}</option>
			@endforeach
			</select>
			<select name="type" id="" class="p-1">
			<option value="">Select Type</option>
			@foreach($category_types as $category_types)
			<option value="{{$category_types->scrap_type}}">{{$category_types->scrap_type}}</option>
			@endforeach		
			</select></p>
			<button type="submit" class="p-1">Search</button>
			</form>
            <div class="row">
			@foreach($Upload_scrap as $Upload_scrap)
			 
			<div class="pro_box">
				<a href="cart.htm" class="inq"><i class="fas fa-shopping-cart"></i></a>
				<a href="pro-dtl.htm"><img src="{{asset('en/uploaded_images/16191163276081c12760aae.jpg')}}" alt="" class="img-fluid mb-3"></a>
				<p class="head"><a href="pro-dtl.htm">{{$Upload_scrap->scrap_category}}</a></p>
				<p class="amnt">${{$Upload_scrap->price}} <span>/ ton</span></p>
				<p class="selr">Seller : {{$Upload_scrap->first_name}}</p>
				
			</div>
			@endforeach
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