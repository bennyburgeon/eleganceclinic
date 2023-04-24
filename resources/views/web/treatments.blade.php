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
								@foreach($data as $treatment)
								<div id="tab-Desk-QQ-v-a{{$treatment->treatment_id}}" class="tab-pane active" role="tabpanel">
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

												<p>HydroFacial is a facial treatment combining six treatments in one
													that is suitable for everyone and their skin type. This treatment
													includes cleanse and peel, extract and hydrate & infuse and protect
													and can be personalised to treat your skin concerns any skin type.
													It’s rejuvenating results are immediately visible, deep cleansing
													the skin from impurities and dead skin cells.
												</p>

												<p></p>

												<p><b>Get in touch with our experts for more information or book and get
														your glow with HydroFacial today!
													</b></p>
												<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
													<div id="faqAccordion1" class="faq-accordion"
														data-children=".faq-item">

														<a href="" class="btn cus-mt-3" data-toggle="modal"
															data-target="#LaCuBene"><i
																class="icon-right-arrow"></i><span>1. Benefits</span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="LaCuBene" tabindex="-1"
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
																		<p><b>What are the benefits of Hydro facial?</b>
																		</p>
																		<ul>
																			<li>Improves overall skin texture</li>
																			<li> Improves skin hydration and radiance
																			</li>
																			<li> Detoxifies the skin and gets rid of
																				acne</li>
																			<li> Deep cleanses your skin for impurities
																			</li>
																			<li> Minimises the appearance of fine lines
																				and wrinkles</li>
																			<li> Suitable for all skin types</li>

																		</ul>
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
															data-target="#trj1"><i class="icon-right-arrow"></i><span>
																2. Treatment Journey </span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="trj1" tabindex="-1" role="dialog"
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

																		<ul>
																			<li> Consultation</li>
																			<li> Skin Analysis</li>
																			<li> Begin Your Treatment </li>
																			<li> Aftercare </li>
																			<li> Effective Results and Smooth Skin</li>
																			<li> Love the results? Why not purchase a
																				discounted treatment package to continue
																				your treatments every 4 weeks!
																			</li>

																		</ul>
																		<p></p>
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
															data-target="#LaCuDp"
															style="width: 100%;text-align:left;"><i
																class="icon-right-arrow"></i><span>3. Discounted
																Packages</span><i class="icon-right-arrow"></i></a>
														<!--  Modal Start -->
														<div class="modal fade" id="LaCuDp" tabindex="-1" role="dialog"
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
																			<a href="packages.html"
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
															data-target="#prepost2"><i
																class="icon-right-arrow"></i><span>
																4. Pre & Post Treatment Information</span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="prepost2" tabindex="-1"
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
																		class="modal-body mt-1 px-1 pt-1 pb-15 pt-md-2 px-md-4">
																		<p><b>Before Treatment</b>
																		</p>

																		<ul>
																			<li> Avoid sun exposure and sunbed for one
																				week before the treatment </li>
																			<li> Avoid chemical peels and laser
																				treatments for two weeks before the
																				treatment
																			</li>
																			<li> Use sunscreen SPF30+ daily </li>
																			<li> Avoid exfoliating your skin for 48
																				hours prior to the treatment </li>
																			<li> Drink plenty of water </li>
																			<li> Avoid smoking of the day of your
																				treatment </li>


																		</ul>
																		<p></p>
																		<p><b>After Treatment </b> </p>

																		<ul>
																			<li> Avoid intense heat for 24 hours after
																				the treatment </li>
																			<li> Avoid exercise, sauna, hot showers &
																				baths for 24 hours after the treatment
																			</li>
																			<li> Avoid make up for the first 24 hours
																				after treatment. Mineral make up may be
																				used.</li>
																			<li> Avoid the use of any products
																				containing tretinoin for 48 hours after
																				the treatment </li>
																			<li> Avoid using acne medications for two
																				days after the treatment</li>
																			<li> Avoid exfoliating and use of AHA or
																				BHA, harsh exfoliants or acidic based
																				products for 2-3 days (Glycolic, Lactic,
																				Salicylic)
																			</li>
																			<li> Do not use any Vitamin A/Retinol based
																				products for 2-3 days (Retin A, Retinoic
																				acid)</li>
																			<li> Do not rub, pick, or scratch the skin
																			</li>
																			<li> Use sunscreen SPF50+ daily and avoid
																				direct sun exposure, sunbeds, fake tan
																				for 5 days after your treatment</li>
																			<li> Keep your skin hydrated and moisturised
																				after the treatment daily using gentle
																				cleansers and products</li>



																		</ul>
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
															data-target="#trar1"><i class="icon-right-arrow"></i><span>
																5. Treatable Areas </span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="trar1" tabindex="-1" role="dialog"
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

																		<ul>
																			<li> </li>

																		</ul>
																		<p></p>
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
															data-target="#LaCuFaq"><i
																class="icon-right-arrow"></i><span>6. FAQ</span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="LaCuFaq" tabindex="-1" role="dialog"
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
																				<b>1.Is this treatment suitable for me?
																				</b><br>
																				A. Hydrofacial is suitable for everyone
																				of all ages and skin types, or if you
																				have skin concerns including acne,
																				dryness, wrinkles, blackheads, rosacea
																				and pigmentation

																				<br><br>
																				<b>2. Does it hurt?
																				</b><br>
																				A. HydroFacial is not a painful
																				treatment. You may feel light pressure
																				from the wand during the procedure

																				<br><br>
																				<b>3.How long does the treatment take?

																				</b><br>
																				A. HydroFacial treatment takes around
																				45- 120 minutes

																				<br><br>
																				<b>4. How long do the results last?

																				</b><br>
																				A. This may vary from person to person,
																				you can expect results to last for at
																				least 7 days or much longer, you can
																				have additional treatments to maintain
																				those results

																				<br><br>
																				<b>5. How many treatments do I need?

																				</b><br>
																				A. You will see visible results
																				immediately after the treatment. We
																				recommend a course of 6 HydroFacial
																				treatments every 4 weeks for optimum
																				results

																				<br><br>
																				<b>6.When can I not get the HydraFacial?

																				</b><br>
																				A. Use of acne medication within the
																				last six months, auto-immune disorders,
																				pregnant or breastfeeding, recent cold
																				sores, Botox or Fillers within the last
																				two weeks, recent chemical peel, laser
																				or waxing treatments, lymphatic
																				disorders, active skin infections such
																				as eczema, rash or wounds, scarring etc

																				<br><br>
																				<b>7.What results can I expect?

																				</b><br>
																				A. HydroFacial will leave your skin
																				glowing, healthy, improving the skin’s
																				texture and minimising the appearance of
																				fine lines and wrinkles.


																				<br><br>
																				<b>8.Are there any side effects?

																				</b><br>
																				A. Side effects are minimum and last for
																				a very short period of time. You can
																				resume your normal daily activities
																				after this treatment

																				<br><br>

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
															data-target="#LaCuAb"
															style="width: 100%;text-align:left;"><i
																class="icon-right-arrow"></i><span>7. Available
																Branches</span><i class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="LaCuAb" tabindex="-1" role="dialog"
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
																				<li><a>Laser & Skin Clinic Dundee</a>
																				</li>
																				<li><a>Laser & Skin Clinic Aberdeen</a>
																				</li>

																				<li><a>Laser & Skin Clinic Stirling</a>
																				</li>
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
															data-target="#LaCuGal"><i
																class="icon-right-arrow"></i><span>8. Gallery</span><i
																class="icon-right-arrow"></i></a>

														<!-- Modal Start -->
														<div class="modal fade" id="LaCuGal" tabindex="-1" role="dialog"
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
																								src="{{asset('web/images/treatments/hydro2.jpg')}}"
																								class="img-fluid"
																								alt=""></div>
																						<div class="col-sm-4"><img
																								src="{{asset('web/images/treatments/hydro3.jpg')}}"
																								class="img-fluid"
																								alt=""></div>
																						<div class="col-sm-4"><img
																								src="{{asset('web/images/treatments/hydro4.jpg')}}"
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

														<a href="appointment.html" class="btn mt-3"
															style="width: 100%;background: #49cca7;color: white;"><i
																class="icon-right-arrow"></i><span>Book Your Appointment Today!
																</span><i class="icon-right-arrow"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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