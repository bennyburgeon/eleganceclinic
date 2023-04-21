@extends('web.layouts')
@section('body')
<div class="page-content">
			<!--section-->
			<div class="section mt-0">
				<div class="breadcrumbs-wrap">
					<div class="container">
						<div class="breadcrumbs">
							<a href="index.html">Home</a>
							<span>After care</span>
						</div>
					</div>
				</div>
			</div>
			<!--section slider-->
	<div class="section mt-0" style="top: 250px;">
@include('web.side_tab')
		
	</div>
	<!--//section slider-->
			<!--//section-->
			<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-cover align-items-end" style="background-image: url({{asset('web/images/content/banner-left5.jpg')}})"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<ul class="services-nav flex-column flex-nowrap">
						<li class="nav-item">
							<a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Select a Treatment</a>
							<div class="collapse show" id="submenu1">
								<ul class="flex-column nav">
									<li class="nav-item"><a class="nav-link" href="hydrofacial-aftercare.html">Hydro Facial Aftercare</a></li>
									<li class="nav-item"><a class="nav-link" href="laserhairremoval-aftercare.html">Laser Hair Removal Aftercare</a></li>
									<li class="nav-item"><a class="nav-link" href="lasertattooremoval-aftercare.html">Laser Tattoo Removal Aftercare</a></li>
									<li class="nav-item"><a class="nav-link" href="lasertreatments-aftercare.html">Laser Treatments Aftercare</a></li>
									
									<li class="nav-item"><a class="nav-link" href="fungalnaillaser-aftercare.html">Fungal Nail Laser Treatment Aftercare</a></li>
									
									
									
									
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