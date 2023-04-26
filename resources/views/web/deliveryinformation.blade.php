@extends('web.layouts')
@section('body')
<div class="page-content">
	<!--section-->
	<div class="section mt-0">
		<div class="breadcrumbs-wrap">
			<div class="container">
				<div class="breadcrumbs">
					<a href="{{route('index')}}">Home</a>
					<span>Delivery Information</span>
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
	<!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-fullheight" style="background-image: url({{asset('web/images/content/banner-left4.jpg')}})"></div>
					<div class="col-xl-6">
						<div class="faq-wrap px-15 px-lg-8">
							
							
							<div id="tab-content" class="tab-content mt-sm-2">
								<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="true" class="collapsed"><span>1.</span><span>Delivery Information</span></a>
											<div id="faqItem4" class="collapse show faq-item-content" role="tabpanel">
												<div>
													<p>
														<p>Standard UK Delivery <br />Delivery up to 5 business days on orders placed Monday - Friday. Your order will be delivered Monday - Saturday (excluding Sundays and bank holidays)</p>
													</p>
												</div>
											</div>
										</div>
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>2.</span><span>Cookies Policy</span></a>
											<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p style="text-align: justify;"><strong>What are cookies?</strong><br />Cookies are small text files that are placed on your machine to help the site provide a better user experience. In general, cookies are used to retain user preferences, store information for things like shopping baskets, and provide anonymised tracking data to third party applications like Google Analytics. As a rule, cookies will make your browsing experience better.</p>
													<p style="text-align: justify;"><strong>Why are cookies essential to Lime Salon&rsquo;s website?</strong><br /> This website, along with many others, uses cookies. Cookies let users navigate around sites and (where appropriate) let us tailor the content to fit the needs of our site&rsquo;s visitors. Without cookies enabled we can&rsquo;t guarantee that the website and your experience of it are as we intended it to be.</p>
													<p style="text-align: justify;">None of the cookies we use collect your personal information and they can&rsquo;t be used to identify you.</p>
													<p style="text-align: justify;"><strong>Types of cookies</strong><br /> The length of time a cookie stays on your device depends on its type. In general we set cookies to 30 days on this website. We use two types of cookies on our websites.</p>
													<p style="text-align: justify;">Session cookies&nbsp;are temporary cookies which only exist during the time you use the website (or more strictly, until you close the browser after using the website). Session cookies help our websites remember what you chose on the previous page, avoiding the need to re-enter information.</p>
													<p style="text-align: justify;">Persistent cookies&nbsp;stay on your device after you&rsquo;ve visited our website. Persistent cookies help us identify you as a unique visitor but don&rsquo;t contain information that could be used to identify you to another person.</p>
													<p style="text-align: justify;"><strong>At elegance Salon we use cookies in the following ways:</strong></p>
													<p style="text-align: justify;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In our online application forms. Without cookies enabled you won&rsquo;t be able to email us for more information on our services</p>
													<p style="text-align: justify;">We also use web analytics services from other companies to track how visitors reach our site and the path they take through it. These companies use cookies to help us improve our service to you.</p>
													<p style="text-align: justify;"><strong>The analytics services we use are:</strong></p>
													<p style="text-align: justify;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Google Analytics, which uses cookies to help us analyse how our visitors use the site. Find out more about how these cookies are used on the&nbsp;Google privacy site</p>
													<p style="text-align: justify;">You can find below more information about each individual&nbsp;cookie&nbsp;and how to recognize them:</p>
													<p style="text-align: justify;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Persistent<br /> Contains cookies that are used to store anonymous identifiers. They enable the optimisation platform to remember a visitor and to serve them with the appropriate content while ensuring a fast load of the web page.</p>
													<p style="text-align: justify;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Session<br /> This cookie is used by the platform as a test to see whether or not browser settings allow cookies to be set on the end-user machine.</p>
													<p style="text-align: justify;">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Custom<br /> Sometimes we need to create a custom cookie to deliver particular functionality on the website. At the moment we have no custom cookies running on our website.</p>
													<p style="text-align: justify;"><strong>How to control and delete cookies</strong><br /> If you want to restrict or block the cookies we set, you can do this through your browser settings. The &lsquo;help&rsquo; function within your browser should tell you how.</p>
													<p style="text-align: justify;">Alternatively, you could visit&nbsp;www.aboutcookies.org, which contains comprehensive information on cookies on a wide variety of browsers. You&rsquo;ll also find details on how to delete cookies from your computer. To learn about controlling cookies on the browser of your mobile device please refer to your handset manual.</p>
													<p style="text-align: justify;"><strong>Cookies in emails</strong><br /> As well as the cookies we use on our websites, we use cookies and similar technologies in some emails. These help us to understand whether you&rsquo;ve opened an email and how you&rsquo;ve interacted with it. If you have enabled images, cookies may be set on your computer or device. Cookies will also be set if you click on any link within the email. The types of cookies we use are:</p>
													<p style="text-align: justify;">Web beacons: tiny, invisible images placed in emails to tell us whether you&rsquo;ve opened them (and if so how often), how you interacted with them (for example the time you spent reading the email), which email software and web browser you used, which device you used and your IP address. We also use web beacons to help us display emails in the best format for your device.</p>
													<p style="text-align: justify;">Link tracking:&nbsp;our emails contain a number of hyperlinks, each of which has a unique tag. When you click on one of these links the mailing company logs the click so that we can understand who has clicked through from an email to our website. We use this information to tailor future messages to you.</p>
													<p style="text-align: justify;">Cookies:&nbsp;our process for delivering emails may cause cookies to be set when you download images or when you click on a link.</p>
													<p style="text-align: justify;"><strong>Making choices about cookies</strong><br /> If you don&rsquo;t want to accept cookies from our emails, simply close the email before downloading any images or clicking on any links. You can also set your browser to restrict or reject cookies. These settings will apply to all cookies on websites and emails.</p>
													<p style="text-align: justify;">In some instances, depending on your email or browser settings, cookies in an email may be automatically accepted (for example, when you&rsquo;ve added an email address to your address book or safe senders list). Please check your email browser or device instructions for more information on this.</p>
												</div>
											</div>
										</div>
										
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>3.</span><span>Privacy Policy</span></a>
											<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p style="text-align: justify;">Elegance Brow and Beauty Limited&nbsp;is the data processor controller for the purposes of the Data Protection Act 1988<br /> Our Privacy policy gives details of what information we collect from you, what we do with it and who it might be shared with.<br /> The Salon only collect information necessary for us to carry out services offered at our salon. We collect basic personal data such as name, contact number and email address and we do not collect any personal data that is not required to perform these services.</p>
													<p style="text-align: justify;"><br /><strong>Why do we collect this information</strong></p>
													<p style="text-align: justify;">We require this information to understand your needs and requests for our services. Your information may be stored in our salon software for internal record keeping. From time to time we may also use your information to provide you with details of any special offers of other information that we think may be of interest to you providing you have given us permission to do so.</p>
													<p><br /><strong>Who might we share this information with</strong></p>
													<p>We do not share your information with any 3rd party.</p>
													<p><br /><strong>Controlling your personal information</strong></p>
													<p style="text-align: justify;">When you are completing any forms on our website you will be asked whether you wish your information to be used for marketing, information only or both. Information only will include a reminder being sent for any appointments that you have made. You may choose which option you would like by ticking the relevant box. In the event that we sell or buy any business or assets, we may disclose your personal data to the prospective seller buyer and if The Salon sells substantially all its assets customer personal data will be one of the assets transferred.</p>
													<p><br /><strong>Access to your personal data</strong></p>
													<p style="text-align: justify;">You may request details of any information we may hold about you under the Data Protection Act 1988. If at anytime you wish us to remove your personal information you may write to us at Elegance Brow and Beauty Limited, 21 Mayfield Grove, Dundee, DD4 7GZ. or by emailing us at&nbsp;hello@elegancesalons.co.uk . We will remove your information at no charge within 30 days of your request .</p>
													<p>&nbsp;</p>
													<p><br /><strong>What are your rights</strong></p>
													<p style="text-align: justify;">If at anytime you believe the data we hold about you is incorrect you can request to see this information and have it corrected or deleted. If you wish to raise a complaint about how we have handled your personal data please contact us at&nbsp;hello@elegancesalons.co.uk and the matter will be investigated. If you are not satisfied with our response or you believe we are processing your data in a manner that is not in accordance with the law you may complain to the Information Commissioners Office at ico.org.uk.</p>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="false"><span>4.</span><span>Terms & Conditions</span></a>
											<div id="faqItem1" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p style="text-align: justify;"><strong>Punctuality and Courtesy</strong><br />Arriving late may interfere with your treatment, all appointments will end at their scheduled time so that the next client will not be delayed, and a full charge will be applied. All times stated include preparation of room and client: i.e. 5 minutes at the beginning and end of treatment.</p>
													<p style="text-align: justify;">Please arrive 10 minutes prior to treatment if it is your first appointment at the salon. We require this time for you to complete a personal consultation card, this document is 100% confidential and is used for treatment purposes only.</p>
													<p style="text-align: justify;"><strong>Cancellations</strong><br />Please note 24 Hours notice is required for all cancellations</p>
													<p style="text-align: justify;"><strong>Purchase of Retail Products</strong><br />Beauty products must be paid for in full at time of purchase or ordering.</p>
													<p style="text-align: justify;"><strong>Gift Vouchers &amp; Block Treatment Package Cards</strong><br />Gift Vouchers and block treatment package cards are non refundable and are valid for 06 months from the purchase date and will not be accepted after the expiry date. Vouchers and package cards may be used for services only. Vouchers and package cards cannot be redeemed for cash, sold or transferred. Your gift voucher and package card number must be quoted at the time of booking and the voucher or card handed to the therapist at the start of your treatment. We do not refund for change of mind or change of circumstances.</p>
													<p><strong>Prepaid Treatments</strong></p>
													<p>If you pre-pay for treatments you will save an amount according to the pre-payment schedule. There is no refund on pre-pays and they are not transferable to other individuals or treatment areas.<br />- Pre-pays have a 12 month expiry date (extended to 2 years if affected by the coronavirus pandemic).<br />- 48 hours&rsquo; notice is required for any pre-paid appointment cancellations. If you cancel a pre-paid appointment within 48 hours, or do not attend the appointment, the treatment will be forfeited.<br />You agree to these terms by purchasing pre-paid treatments.</p>
													<p style="text-align: justify;"><strong>Price Alteration</strong><br />We reserve the right to alter prices without prior notice.</p>
													<p style="text-align: justify;"><strong>Smoking</strong><br />Please note that it is illegal to smoke anywhere in the Salon.</p>
													<p style="text-align: justify;"><strong>Data Security</strong><br />Personal details taken from clients during consultation procedures will be kept safe and in the strictest confidence. We would, on occasion like to send you details of open evenings and special promotions. If you would rather not receive these please let us know.</p>
													<p style="text-align: justify;"><strong>Medical Conditions</strong><br />Please inform your therapist of any medical condition including pregnancy prior to booking as some treatments may not be appropriate for you.</p>
													<p style="text-align: justify;"><strong>Children</strong><br />Please understand that we can cannot accommodate children under 16 unless supervised by an adult during your treatment.</p>
													<p style="text-align: justify;"><strong>Payment</strong><br />Most credit and debit Cards are accepted or cash. All prices include value added tax at a current rate.</p>
													<p style="text-align: justify;"><strong>Patch Testing</strong><br />Patch testing required for clients who have never had eyebrow, eyelash tinting, lash lift.</p>
													<p style="text-align: justify;"><strong>Personal Items</strong><br />Please ensure you retrieve all your personal items before leaving the premises as we cannot be held responsible for lost items.<br /><br />&nbsp;<br />&nbsp;<br />&nbsp;</p>
													
												</div>
											</div>
										</div>
										
										
										
									</div>
								</div>
								
							</div>
							<a href="contact.html" class="btn mt-3"><i class="icon-right-arrow"></i><span>Ask Question</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq-->
</div>
@endsection