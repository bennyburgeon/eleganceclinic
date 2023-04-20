@extends('web.layouts')
@section('body')
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>Contact</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-cover align-items-end" style="background-image: url({{asset('web/images/content/banner-left8.jpg')}})"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<ul class="services-nav flex-column flex-nowrap">
						<li class="nav-item">
							<a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">SELECT AN OPTION</a>
							<div class="collapse show" id="submenu1">
								<ul class="flex-column nav">
									<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#modalBookingForm1" href="#">Reschedule Booking</a></li>
									
									<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#modalBookingForm4" href="#">Cancel Booking</a></li>
									
									<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#modalBookingForm2" href="#">New Booking</a></li>
									
									<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#modalBookingForm3" href="#">Enquiries</a></li>
									
									<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#modalBookingForm5" href="#">Feedbacks</a></li>
									
									
									<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#modalBookingForm7" href="#">Gift Card</a></li>
									
									<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#modalBookingForm6" href="#">Opportunity</a></li>
									
									<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#modalBookingForm8" href="#">Job Vacancy</a></li>
									
								</ul>
							</div>
						</li>
						
						</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq-->
	
</div>
@endsection