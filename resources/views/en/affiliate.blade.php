@include('en.content.header')
<div class="inner_head">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a href="{{ URL::to('/en/home')}}">Home</a></li>
			  <li>Affiliate</li>
			</ul>
			<h1 class="white">Affiliate</h1>
		</div>
	</div>
    <!--content area-->
    <div class="mt-5 mb-5">
        <div class="container">
            <div class="row text-justify">
				<div class="col-md-4 offset-md-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam neque nibh, rutrum sed velit a, tincidunt interdum nisi. Nullam urna nulla, luctus id felis sed, posuere vestibulum ante. Praesent blandit nec quam a tincidunt. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec euismod diam odio, a fermentum lorem volutpat in. Pellentesque eget nisi quis elit efficitur hendrerit.</div>
				<div class="col-md-5 offset-md-1">In quis elementum massa. Sed placerat quis ipsum sit amet viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ullamcorper arcu nec risus mattis consequat. Nunc commodo mollis nisl dictum eleifend. Pellentesque aliquet, dui vitae dictum semper, orci sapien tempus massa, vitae sagittis sapien ligula iaculis tellus. Vivamus vitae est accumsan, venenatis lorem convallis, rutrum augue. Curabitur volutpat metus vitae augue aliquet, eu efficitur risus congue. Maecenas tincidunt tortor eu est luctus, quis convallis lorem ornare. Quisque at sapien nunc. Praesent non facilisis turpis, nec faucibus nisl. Praesent vel libero vulputate ex tincidunt lacinia. Nam vel posuere tortor, ut ornare velit.<br><br>

Cras pharetra urna et tristique ornare. In et interdum elit, nec consequat massa. Pellentesque sit amet pellentesque nunc. Duis a lobortis tortor, ut tincidunt leo. Quisque congue auctor est et tristique. Nullam sit amet dolor non purus eleifend pellentesque. Curabitur rhoncus in dui porttitor pretium. Donec dapibus sed turpis vitae laoreet. Sed sit amet mauris mi. Vestibulum nisi lacus, egestas non tristique ac, tempus tempus nisi. Fusce vitae gravida diam. Nunc nec urna ipsum. Proin id risus at leo sagittis laoreet.</div>
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