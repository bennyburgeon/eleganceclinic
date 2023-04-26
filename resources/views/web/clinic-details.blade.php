@extends('web.layouts')
@section('body')

<div class="page-content">
	
	<!--section faq-->
	<div class="section bg-grey py-0" id="faqSection">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-xl-6 banner-left bg-cover"
					 style="background-image: url({{asset('web/images/content/banner-left2.jpg')}})"></div>
				<div class="col-xl-6">
					<div class="faq-wrap faq-wrap--pad-lg px-15 px-lg-8">
						<div class="title-wrap">
							<h2 class="h3">Elegance Clinics Dundee</h3>
						</div>
						<div class="mt-2 mt-lg-4"></div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1"
							   aria-expanded="true"><span>1.</span><span>About</span></a>
							<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
								<div>
									<p>{{ $salon->about}}. 
									</p>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2"
							   aria-expanded="false" class="collapsed"><span>2.</span><span>Contact Us</span></a>
							<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
								<div>
									<p>
										<a href="callto:999999999"> +44 (0) 1382 549282</a></br>
										<a href="mailto:999999999"> hello@eleganceclinics.co.uk</a>
									</p>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3"
							   aria-expanded="false" class="collapsed"><span>3.</span><span>Opening Hours </span></a>
							<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
								<div>
								{!! $salon->opening_hours!!}
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4"
							   aria-expanded="false" class="collapsed"><span>4.</span><span>Facilities </span></a>
							<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
								<div>
									<div class="department-tabs2">
										<div class="department-tab2">
											<div class="department-tab2-number"><i class="icon-card"></i></a></div>
											<div class="department-tab2-text" >Card Payments</div>
											
										</div>
										<div class="department-tab2">
											<div class="department-tab2-number"><i class="icon-wheelchair"></i></a></div>
											<div class="department-tab2-text">Disabled Access</div>
											
										</div>
										<div class="department-tab2">
											<div class="department-tab2-number"><i class="icon-toilet"></i></a></div>
											<div class="department-tab2-text">Toilet Available</div>
										
										</div>
										<div class="department-tab2">
											<div class="department-tab2-number"><i class="icon-parking"></i></a></div>
											<div class="department-tab2-text">Paid Parking</div>
										
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem5"
							   aria-expanded="false" class="collapsed"><span>5.</span><span>Treatments</span></a>
							<div id="faqItem5" class="collapse faq-item-content" role="tabpanel">
								<div>
								<a href="{{route('treatments')}}" class="btn mt-15 mt-sm-3"><i
								class="icon-right-arrow"></i><span>View Treatments</span><i
								class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem6"
							   aria-expanded="false" class="collapsed"><span>6.</span><span>Price | Packages</span></a>
							<div id="faqItem6" class="collapse faq-item-content" role="tabpanel">
								<div>
								<a href="{{route('packages')}}" class="btn mt-15 mt-sm-3"><i
								class="icon-right-arrow"></i><span>View Price and Package Details</span><i
								class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem7"
							   aria-expanded="false" class="collapsed"><span>7.</span><span>Skin Shop</span></a>
							<div id="faqItem7" class="collapse faq-item-content" role="tabpanel">
								<div>
								<a href="#" class="btn mt-15 mt-sm-3"><i
								class="icon-right-arrow"></i><span>Skin Shop</span><i
								class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem8"
							   aria-expanded="false" class="collapsed"><span>5.</span><span>Gift cards</span></a>
							<div id="faqItem8" class="collapse faq-item-content" role="tabpanel">
								<div>
								<a href="https://eleganceclinic.zenoti.com/webstoreNew/giftcards/fe179a09-e7de-4acc-9111-46c153695052" class="btn mt-15 mt-sm-3" ><i
								class="icon-right-arrow"></i><span>Buy Gift cards</span><i
								class="icon-right-arrow"></i></a>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem9"
							   aria-expanded="false" class="collapsed"><span>8.</span><span>Map and Address</span></a>
							<div id="faqItem9" class="collapse faq-item-content" role="tabpanel">
								<div>
								<div class="contact-map">
									<iframe src="{{$salon->map}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
									
								</div>
								</div>
							</div>
						</div>
						<div class="faq-item">
							<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem10"
							   aria-expanded="false" class="collapsed"><span>9.</span><span>Other Clinics</span></a>
							<div id="faqItem10" class="collapse faq-item-content" role="tabpanel">
								<div>
								<div class="download-block-text">
												
									<ul class="marker-list-md">
                                @foreach ($salons as $keys)
                                    <li><a href="{{ route('clinic-details', $keys->clinic_id) }}">{{ $keys->name }}</a>
                                    </li>
                                @endforeach
										
									</ul>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--section-->
	<div class="section">
		<div class="container-fluid px-0">
			<div class="banner-center bg-cover" style="background-image: url(images/content/banner-center.jpg)">
				<div class="banner-center-caption text-center">
					<div class="banner-center-text1">Feel confident in your own skin?</div>
					<div class="banner-center-text2">We strive to provide quality and expertise in industry leading skin treatments at reasonable prices. Customer satisfaction is our number one goal.</div>
					<a href="patchtest/dundee/{{route('index')}}" class="btn btn-white mt-5"><i class="icon-right-arrow"></i><span>Book an Appointment</span><i class="icon-right-arrow"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!--section-->
	
</div>
@endsection