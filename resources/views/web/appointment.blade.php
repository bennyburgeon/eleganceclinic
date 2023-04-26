@extends('web.layouts')
@section('body')
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="{{route('index')}}">Home</a>
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

                                @foreach ($data as $keys)

									<li class="nav-item"><a class="nav-link" href="{{$keys->appointment}}">{{ $keys->name }}</a></li>

                                @endforeach
									
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