@extends('web.layouts')
@section('body')
<div class="page-content">
	<!--section-->
	
	<!--//section-->
	<!--section-->
	<div class="section page-content-first">
		
		<div class="container mt-3 mt-lg-5">
			<div class="row">
				
				<div class="col-md-8 col-lg-9">
					
					<div class="prd-grid">
						
					@foreach ($data as $keys)
						<div class="prd">
							
							<div class="prd-info">
								<h3><a href="clinic-details.html"><b>{{$keys->name}}</b></a></h3>
								
								
								<a href="{{ route('clinic-details', $keys->clinic_id) }}" class="btn"><i class="icon-right-arrow"></i>View Clinic<i class="icon-right-arrow"></i></a>
							</div>
						</div>
						@endforeach
						
						
					</div>
					<div class="clearfix"></div>
					
				</div>
				<div class="col-md-4 col-lg-3 column-filters">
					<div class="column-filters-inside">
						<div class="side-block">
							<h3 class="side-block-title">Branches</h3>
							<ul class="category-list">
                                @foreach ($data as $keys)
                                    <li><a href="{{ route('clinic-details', $keys->clinic_id) }}">{{ $keys->name }}</a>
                                    </li>
                                @endforeach
								<li><a href="clinic-details-2.html">Stirling</a></li>
								<li><a href="clinic-details-3.html">Aberdeen</a></li>
								<li><a href="clinic-details-4.html">Glasgow</a></li>
								<li><a href="clinic-details-5.html">Edinburgh</a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
