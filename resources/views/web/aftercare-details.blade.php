@extends('web.layouts')
@section('body')
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="index.html">Home</a>
					<span>Aftercare</span>
				</div>
			</div>
		</div>
	</div>
	<!--//section-->
	<!--section slider-->
	<div class="section mt-0" style="top: 250px;">
	@include('web.side_tab')
		
	</div>
	<!--//section slider-->
	<!--section-->
	<div class="section page-content-first">
		<div class="container">
			<div class="title-wrap text-center">
				
				<h1>{{$data->treatment}} Aftercare</h1>
				<div class="h-decor"></div>
			</div>
			
		</div>
		<div class="container-fluid px-0 mt-3 mt-md-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="container-shift-left">
						<div class="download-block">
							<div class="download-block-icon">
								<i class="icon-copy"></i>
							</div>
							<div class="download-block-text">
								<h4>Instructions</h4>
								<ul class="marker-list-md">
								{!!$data->aftercare_note!!}
									
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-lg-6 pl-lg-4 mt-5 mt-lg-0">
					<img src="{{ asset('image/treatment/'.$data->aftercareimage) }}" alt="" class="w-100">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection