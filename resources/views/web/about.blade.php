@extends('web.layouts')
@section('body')
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="{{route('index')}}">Home</a>
					<span>About Us</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<!--section slider-->
	<div class="section mt-0" style="top: 250px;">
	@include('web.side_tab')
		
	</div>
	<!--//section slider-->
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="text-center mb-2  mb-md-3 mb-lg-4">
				<div class="h-sub theme-color">Your Satisfcation is Our Promise</div>
				<h1>About Elegance Salons</h1>
				<div class="h-decor"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-left pr-md-4">
					<img src="{{asset('web/images/content/about-01.jpg')}}" class="w-100" alt="">
					
				</div>
				<div class="col-lg-6 mt-3 mt-lg-0">
					<p>Elegance has been offering renowned, first class hair, beauty, grooming and aesthetic treatments for over 10+ years. From the beginning we set out to be different, with a clear vision to create a revolutionary beauty concept, dedicated work and happy clients to all aspects. We pride ourselves in being one of the leading national beauty chains, still remaining incomparable across Scotland. </p>
					<p>Since our commitment to innovation, we now have salons based in Dundee, Glasgow, Edinburgh, Stirling & Aberdeen, the perfect locations to visit for some serious relaxation and pampering. Our industry experts are chosen on the basis of high standards, enthusiasm, integrity and years of experience in their chosen field, creating a warm and friendly salon environment. Our team pride themselves on delivering great customer service and the highest technical skills, creating bespoke looks that suit your personality and lifestyle.</p>
					
					
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section-->
	<div class="section">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-xl-6 bg-grey">
					<div class="max-670 mx-lg-auto px-15">
						<div class="title-wrap">
							<h2 class="h1">Our <span class="theme-color">Specialities</span></h2>
						</div>
						<div class="mt-lg-5"></div>
						<div class="row">
							<div class="col-sm-7">
								<ul class="marker-list-md">
									<li>Award Winning Salon</li>
									<li>Established Since 2010</li>
									<li>Over 1,62,000 customers</li>
									<li>Expert in the Industry</li>
									<li>Top Quality Products</li>
									<li>Professional Approach</li>
					





									
								</ul>
							</div>
							<div class="col-sm-5 mt-1 mt-sm-0">
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 banner-left bg-full" style="background-image: url({{asset('web/images/content/banner-right-1.jpg')}})"></div>
			</div>
		</div>
	</div>
	<!--//section-->
	</br>
	<!--section-->
	<div class="section">
		<div class="container">
			<div class="title-wrap text-center">
				<div class="h-sub theme-color">Our Policies in Business</div>
				<h2 class="h1">Our Core Values</h2>
				<div class="h-decor"></div>
			</div>
			<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
				<div class="col-md">
					<div class="icn-text">
						<div class="icn-text-simple"><i class="icon-innovation"></i></div>
						<div>
							<h5 class="icn-text-title">Innovation</h5>
							<p>Embrace change, encourage invention and continually remain at the forefront of advances in oral health for the good of our patients</p>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="icn-text">
						<div class="icn-text-simple"><i class="icon-compassion"></i></div>
						<div>
							<h5 class="icn-text-title">Compassion</h5>
							<p>Demonstrate caring and sensitivity for the diverse backgrounds of our patients and colleagues and generosity in our communities</p>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="icn-text">
						<div class="icn-text-simple"><i class="icon-integrity"></i></div>
						<div>
							<h5 class="icn-text-title">Integrity</h5>
							<p>Adhere to high ethical and professional standards, demonstrating commitment to our responsibilities with trust, honesty and respect for all</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	</br>
	<!--section-->
	<div class="section">
		<div class="container-fluid px-0">
			<div class="banner-center bg-cover" style="background-image: url({{asset('web/images/content/banner-center.jpg')}})">
				<div class="banner-center-caption text-center">
					<div class="banner-center-text1">Get the beauty You've Always Wanted!</div>
					<div class="banner-center-text2">We strive to provide the highest quality treatment at reasonable fees</div>
					<a href="https://booking.elegancesalons.co.uk/" class="btn btn-white mt-5"><i class="icon-right-arrow"></i><span>Book an Appointment</span><i class="icon-right-arrow"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!--section-->
	

	<!--//section prices-->
</div>
@endsection