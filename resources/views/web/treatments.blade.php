@extends('web.layouts')
@section('body')
<div class="page-content">
		<!--section slider-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html">Home</a>
						<span>Treatments</span>
					</div>
				</div>

			</div>
		</div>


		<!--section services-->
		<div class="desktop-view-1">


		</div>

		<div id="HairTreSec"><a name="HairTreSec">
			</a>
			<div class="section page-content-first" id="specialitySection"><a name="HairTreSec">
				</a>

				<div class="container">
					<div class="text-center mb-2  mb-md-3 mb-lg-4">

						<h1>Treatments</h1>
						<div class="h-sub theme-color">Please select a treatment for more information</div>
						<div class="h-decor"></div>

					</div>
				</div>

				<div class="container"><a name="HairTreSec">
					</a>
					<div class="row no-gutters tab-vert-wrap"><a name="HairTreSec">
						</a>
						<div class="col-md-4"><a name="HairTreSec">
							</a>
							<div class="nav nav-pills-v" role="tablist"><a name="HairTreSec">

								</a>
								@foreach($data as $treat)
								<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-a{{$treat->treatment_id}}"
									role="tab"><span>+</span>{{$treat->headline}}</a>
									@endforeach
								<!-- <a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-b"
									role="tab"><span>+</span>Laser Hair Removal</a>
								<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-c"
									role="tab"><span>+</span>Laser Tattoo Removal</a>
								<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-d"
									role="tab"><span>+</span>Laser Resurfacing Skin Treatment</a>
								<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-e"
									role="tab"><span>+</span>Laser Skin Rejuvenation</a>
								<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-f"
									role="tab"><span>+</span>Laser Thread Veins Removal</a>
								<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-g"
									role="tab"><span>+</span>Laser Pigmentation Removal</a>
								<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-h"
									role="tab"><span>+</span>Laser Acne Treatment</a>
								<a class="nav-link" data-toggle="pill" href="#tab-Desk-QQ-v-i"
									role="tab"><span>+</span>Laser Fungal Nail Treatment</a> -->

							</div>
						</div>
						<div class="col-md-8">
							<div class="tab-content tab-content-v">
   
								<!-- Hydro facial -->
								@php $i=0; @endphp
								@foreach($data as $treatment)
								<div id="tab-Desk-QQ-v-a{{$treatment->treatment_id}}" class="tab-pane @if($i==0) active @endif" role="tabpanel">
									<div class="nav nav-pills-v" role="tablist">
										<a href="#tab-Desk-QQ-v-a-mob" class="nav-link"
											data-toggle="collapse"><span>+</span>Hydro facial</a>
									</div>
									<div id="tab-Desk-QQ-v-a-mob" class="collapse tab-content-m">
										<div class="blog-post blog-post-single">
											<div class="post-image">
												<img src="{{ asset('image/treatment/' . $treatment->image . '') }}" alt="">
											</div>
											<div class="post-text">
												<p><b>{{$treatment->headline}}</b></p>

												<p>{{$treatment->description}}.
												</p>

												<p></p>

												<p><b>Get in touch with our experts for more information or book and get
														your glow with HydroFacial today!
													</b></p>
												<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
													<div id="faqAccordion1" class="faq-accordion"
														data-children=".faq-item">

														<a href="" class="btn cus-mt-3" data-toggle="modal"
															data-target="#LaCuBene{{$treatment->treatment_id}}"><i
																class="icon-right-arrow"></i><span>1. Benefits</span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="LaCuBene{{$treatment->treatment_id}}" tabindex="-1"
															role="dialog" aria-labelledby="exampleModalLabel"
															aria-hidden="true" style="">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title modal-title-black"
																			id="exampleModalLabel">Benefits</h5>
																		<button type="button" class="close"
																			data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">×</span>
																		</button>
																	</div>
																	<div
																		class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
																		<p>
																			{!!$treatment->benefit!!}
																		</p>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Modal End -->
														<a href="" class="btn cus-mt-3" data-toggle="modal"
															data-target="#trj1{{$treatment->treatment_id}}"><i class="icon-right-arrow"></i><span>
																2. Treatment Journey </span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="trj1{{$treatment->treatment_id}}" tabindex="-1" role="dialog"
															aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title modal-title-black"
																			id="exampleModalLabel">Treatment Journey
																		</h5>
																		<button type="button" class="close"
																			data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">×</span>
																		</button>
																	</div>
																	<div
																		class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
																		<p>{!!$treatment->treatment_journey!!}</p>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Modal End -->

														<a href="" class="btn cus-mt-3" data-toggle="modal"
															data-target="#LaCuDp{{$treatment->treatment_id}}"
															style="width: 100%;text-align:left;"><i
																class="icon-right-arrow"></i><span>3. Discounted
																Packages</span><i class="icon-right-arrow"></i></a>
														<!--  Modal Start -->
														<div class="modal fade" id="LaCuDp{{$treatment->treatment_id}}" tabindex="-1" role="dialog"
															aria-labelledby="exampleModalLabel" aria-hidden="true"
															style="">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title modal-title-black"
																			id="exampleModalLabel">Packages</h5>
																		<button type="button" class="close"
																			data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">×</span>
																		</button>
																	</div>
																	<div
																		class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
																		<div>
																			<a href="{{route('packages')}}"
																				class="btn-link">View Packages<i
																					class="icon-right-arrow"></i></a>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Modal End -->



														<a href="" class="btn cus-mt-3" data-toggle="modal"
															data-target="#prepost2{{$treatment->treatment_id}}"><i
																class="icon-right-arrow"></i><span>
																4. Pre & Post Treatment Information</span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="prepost2{{$treatment->treatment_id}}" tabindex="-1"
															role="dialog" aria-labelledby="exampleModalLabel"
															aria-hidden="true">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title modal-title-black"
																			id="exampleModalLabel">Pre & Post Treatment
																			Information</h5>
																		<button type="button" class="close"
																			data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">×</span>
																		</button>
																	</div>
																	<div
																		class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">{!!$treatment->pre_post_treatment!!}
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Modal End -->

														<a href="" class="btn cus-mt-3" data-toggle="modal"
															data-target="#trar1{{$treatment->treatment_id}}"><i class="icon-right-arrow"></i><span>
																5. Treatable Areas </span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="trar1{{$treatment->treatment_id}}" tabindex="-1" role="dialog"
															aria-labelledby="exampleModalLabel" aria-hidden="true"
															style="">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title modal-title-black"
																			id="exampleModalLabel">Treatable Areas </h5>
																		<button type="button" class="close"
																			data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">×</span>
																		</button>
																	</div>
																	<div
																		class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
																		<p>{!!$treatment->treatable_area!!}</p>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Modal End -->







														<a href="" class="btn cus-mt-3" data-toggle="modal"
															data-target="#LaCuFaq{{$treatment->treatment_id}}"><i
																class="icon-right-arrow"></i><span>6. FAQ</span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="LaCuFaq{{$treatment->treatment_id}}" tabindex="-1" role="dialog"
															aria-labelledby="exampleModalLabel" aria-hidden="true"
															style="">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title modal-title-black"
																			id="exampleModalLabel">FAQ</h5>
																		<button type="button" class="close"
																			data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">×</span>
																		</button>
																	</div>
																	<div
																		class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
																		<div id="waxing1faq" class="faq-item-content"
																			role="tabpanel">
																			<div>
																			{!!$treatment->faq!!}					
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Modal End -->


														<a href="" class="btn cus-mt-3" data-toggle="modal"
															data-target="#LaCuAb{{$treatment->treatment_id}}"
															style="width: 100%;text-align:left;"><i
																class="icon-right-arrow"></i><span>7. Available
																Branches</span><i class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="LaCuAb{{$treatment->treatment_id}}" tabindex="-1" role="dialog"
															aria-labelledby="exampleModalLabel" aria-hidden="true"
															style="">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title modal-title-black"
																			id="exampleModalLabel">Available Branches
																		</h5>
																		<button type="button" class="close"
																			data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">×</span>
																		</button>
																	</div>
																	<div
																		class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
																		<div class="download-block-text">

																			<ul class="marker-list-md">
																				@foreach($clinic as $clinics)
																				<li><a href="{{route('clinic-details',$clinics->clinic_id)}}">{{$clinics->name}}</a>
																				</li>
																				@endforeach
																			</ul>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Modal End -->
														<a href="" class="btn cus-mt-3" data-toggle="modal"
															data-target="#LaCuGal{{$treatment->treatment_id}}"><i
																class="icon-right-arrow"></i><span>8. Gallery</span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="LaCuGal{{$treatment->treatment_id}}" tabindex="-1" role="dialog"
															aria-labelledby="exampleModalLabel" aria-hidden="true"
															style="">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h5 class="modal-title modal-title-black"
																			id="exampleModalLabel">Gallery</h5>
																		<button type="button" class="close"
																			data-dismiss="modal" aria-label="Close">
																			<span aria-hidden="true">×</span>
																		</button>
																	</div>
																	<div
																		class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
																		<div id="waxing1gal" class="faq-item-content"
																			role="tabpanel">
																			<div id="tab1" class="collapse show">
																				<div class="pb-4 pb-lg-6">
																					<div class="row row-sm-space pt-2">
																						<div class="col-sm-4"><img
																								src="{{ asset('image/treatment/'.$treatment->galImg1) }}"
																								class="img-fluid"
																								alt=""></div>
																						<div class="col-sm-4"><img
																								src="{{ asset('image/treatment/'.$treatment->galImg2) }}"
																								class="img-fluid"
																								alt=""></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-secondary"
																			data-dismiss="modal">Close</button>
																	</div>
																</div>
															</div>
														</div>
														<!-- Modal End -->

														<a href="{{route('appointment')}}" class="btn mt-3"
															style="width: 100%;background: #49cca7;color: white;"><i
																class="icon-right-arrow"></i><span>Book Your Appointment Today!
																</span><i class="icon-right-arrow"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                                    @php $i++; @endphp
								@endforeach





								<!-- Laser Hair Removal -->
								
								<!-- Laser Tattoo Removal -->
								
								<!-- Laser Resurfacing Skin Treatment -->
								
								<!-- Laser Skin Rejuvenation -->
								
								<!-- Laser Thread Veins Removal -->
								
								<!-- Laser Pigmentation Removal -->
								
								<!-- Laser Acne Treatment -->
								

								<!-- Laser Fungal Nail Treatment -->
						

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	</div>
    @endsection