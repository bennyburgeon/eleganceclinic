@extends('web.layouts')
@section('body')
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>Packages</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section slider-->
@include('web.side_tab')
	<!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-cover align-items-end" style="background-image: url({{asset('web/images/content/banner-left3.jpg')}})"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<ul class="services-nav flex-column flex-nowrap">
						<li class="nav-item">
							<a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Select a Clinic</a>
							<div class="collapse show" id="submenu1">
								<ul class="flex-column nav">
									<li class="nav-item"><a class="nav-link" href="https://eleganceclinic.zenoti.com/webstoreNew/services/89224a98-d872-4121-a63f-a2807672ec79">Upper mall, Overgate Centre, Dundee</a></li>
									
									
									<li class="nav-item"><a class="nav-link" href="https://eleganceclinic.zenoti.com/webstoreNew/services/fbcdbb76-40ee-4c9d-8e23-147e2d43b177">Fort Kinnaird, Edinburgh</a></li>
									<li class="nav-item"><a class="nav-link" href="https://eleganceclinic.zenoti.com/webstoreNew/services/fe179a09-e7de-4acc-9111-46c153695052">Bonaccord Centre, Aberdeen</a></li>
									<li class="nav-item"><a class="nav-link" href="https://eleganceclinic.zenoti.com/webstoreNew/services/8216adef-f6ff-4340-ab2e-6cf14d0b1f4b">Glasgow Fort, Glasgow</a></li>
									<li class="nav-item"><a class="nav-link" href="https://eleganceclinic.zenoti.com/webstoreNew/services/ea89fdba-e621-4474-9c11-3ec9f7dd0652">The Thistles Centre, Stirling</a></li>
									
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