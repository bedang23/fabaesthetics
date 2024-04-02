@extends('layout')

@section('content')

		<!-- Hero
		============================================= -->
		<section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header border-bottom border-light dark" style="background: url('assets/images/hero-right.png') no-repeat top right; background-size: auto 100%;">
			<div class="slider-inner">

				<div class="container z-1">
					<div class="row align-items-center h-100 mt-2 mt-lg-6">
						<div class="col-md-6">
							<div class="overflow-hidden">
								<h2 class="display-3 fw-normal mb-0" data-animate="fadeInUpSmall faster">Your Home</h2>
							</div>
							<div class="overflow-hidden mb-4">
								<h2 class="display-3 fw-normal mb-0" data-animate="fadeInUpSmall faster" data-delay="100">Our Careness.</h2>
							</div>
							<div class="overflow-hidden mb-5">
								<p class="lead mb-0" data-animate="fadeInUpSmall faster" data-delay="200">Cum quod nam molestias eiusmod accumsan repellendus velit, nisl, mollit! Congue corrupti accusamus lorem.</p>
							</div>
							<div class="overflow-hidden mb-4">
								<a href="#" data-animate="fadeInUpSmall faster" data-delay="300" data-scrollto="#section-appointment" data-easing="easeInOutExpo" data-speed="1250" data-offset="140" class="btn rounded-0 btn-border color size-lg"><i class="bi-calendar3"></i><span>Make an Appointment</span></a>
							</div>
						</div>
					</div>
				</div>

				<div class="position-absolute d-flex z-1" style="top: auto; bottom: 20px; right: 20px;">
					<a href="#" class="social-icon mx-1 si-small border-light h-bg-facebook" data-animate="bounceInRight">
						<i class="fa-brands fa-facebook-f"></i>
						<i class="fa-brands fa-facebook-f"></i>
					</a>

					<a href="#" class="social-icon mx-1 si-small border-light h-bg-instagram" data-animate="bounceInRight" data-delay="100">
						<i class="bi-instagram"></i>
						<i class="bi-instagram"></i>
					</a>

					<a href="#" class="social-icon mx-1 si-small border-light h-bg-x-twitter" data-animate="bounceInRight" data-delay="200">
						<i class="fa-brands fa-x-twitter"></i>
						<i class="fa-brands fa-x-twitter"></i>
					</a>
				</div>

			</div>
			<div class="bg-overlay d-block d-lg-none bg-dark bg-opacity-50 z-auto"></div>
		</section><!-- #content end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">

				<!-- Section About
				============================================= -->
				<div id="section-about" class="section page-section dark bg-transparent">
					<div class="container">

						<div class="row justify-content-center">
							<div class="col-lg-6 mb-5 mb-lg-0">
								<div class="overflow-hidden mb-4">
									<h3 class="display-4 color mb-0" data-animate="fadeInUpSmall fast"><i class="spa-flowers pe-2 text-white-50"></i> About Us</h3>
								</div>
								<blockquote class="border-light border-width-2 font-primary"><img src="assets/images/about/2.jpg" alt="Image" class="alignleft my-0" width="100">Quo nulla condimentum sequi dictumst cupiditate culpa, quisquam placerat lorem velit repudiandae eget eaque consectetuer quidem class dolore quibusdam hic.</blockquote>

								<div class="clear"></div>

								<div class="row mt-4">
									<div class="col-auto">
										<ul class="list-unstyled iconlist ms-0">
											<li><h5 class="mb-3 h5">Monday - Saturday</h5></li>
											<li><h5 class="mb-3 h5">6:30 - 20:00</h5></li>
											<li><h5 class="mb-3 h5 text-white-50">Sunday Closed</h5></li>
										</ul>
									</div>
									<div class="col">
										<p class="text-white-50">Objectively facilitate synergistic initiatives vis-a-vis adaptive ideas. Enthusiastically e-enable transparent e-markets after clicks-and-mortar ideas.</p>
									</div>
								</div>

								<div class="row counter-wrap align-items-center mt-4">
									<div class="col-4 col-lg-4">
										<div class="counter color"><span data-from="1" data-to="10" data-speed="1000"></span>+</div>
										<h5 class="mb-0 font-body text-white-50">Years</h5>
									</div>

									<div class="col-4 col-lg-4">
										<div class="counter color"><span data-from="3" data-to="32" data-speed="1500"></span></div>
										<h5 class="mb-0 font-body text-white-50">Branches</h5>
									</div>

									<div class="col-4 col-lg-4">
										<div class="counter color"><span data-from="11" data-to="154" data-refresh-interval="50" data-speed="1500"></span>+</div>
										<h5 class="mb-0 font-body text-white-50">Employees</h5>
									</div>
								</div>
							</div>
							<div class="col-md-5 box-img p-2 d-none d-lg-block">
								<div class="h-100 rounded" style="background: url('assets/images/about/about.jpg') no-repeat center center / cover;"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<!-- Section Services
				============================================= -->
				<div id="section-services" class="section page-section dark bg-transparent m-0 pb-0">
					<div class="container">
						<div class="row justify-content-center text-center">
							<div class="col-12">
								<div class="overflow-hidden">
									<div class="text-white-50 mb-2 text-uppercase ls-3" data-animate="fadeInUpSmall" data-delay="10">What We Do</div>
									<h3 class="display-4 color mb-0" data-animate="fadeInUpSmall fast"><i class="spa-ointment2 color"></i> Our Services</h3>
								</div>
							</div>
						</div>
					</div>

					<div class="row dark align-content-stretch grid-border mt-5">
						<div class="col-lg-4 col-md-6 col-padding">
							<div class="feature-box flex-column fbox-plain">
								<div class="fbox-icon mb-4 overflow-hidden">
									<i data-animate="fadeInUpSmall fast" class="spa-towel"></i>
								</div>
								<div class="fbox-content">
									<div class="overflow-hidden mb-3">
										<h2 class="fs-3 text-white mb-0" data-animate="fadeInUpSmall fast" data-delay="100">Shower Available</h2>
									</div>
									<div class="overflow-hidden">
										<p class="mb-0" data-animate="fadeInUpSmall fast" data-delay="200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas omnis nam molestias minus ipsa, placeat!</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-padding">
							<div class="feature-box flex-column fbox-plain">
								<div class="fbox-icon mb-4 overflow-hidden">
									<i data-animate="fadeInUpSmall fast" class="spa-sandals"></i>
								</div>
								<div class="fbox-content">
									<div class="overflow-hidden mb-3">
										<h2 class="fs-3 text-white mb-0" data-animate="fadeInUpSmall fast" data-delay="100">Foot Treatments</h2>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="mb-0" data-animate="fadeInUpSmall fast" data-delay="200">Facere aliquam itaque quia recusandae, corporis fugit fugiat eaque, accusamus officiis reprehenderit.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-padding">
							<div class="feature-box flex-column fbox-plain">
								<div class="fbox-icon mb-4 overflow-hidden">
									<i data-animate="fadeInUpSmall fast" class="spa-cup-flower"></i>
								</div>
								<div class="fbox-content">
									<div class="overflow-hidden mb-3">
										<h2 class="fs-3 text-white mb-0" data-animate="fadeInUpSmall fast" data-delay="100">Internal Beautification</h2>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="mb-0" data-animate="fadeInUpSmall fast" data-delay="200">Velit id facilis odit aliquid laudantium. Tempore, sequi. Harum nesciunt, magni aperiam est?</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-padding">
							<div class="feature-box flex-column fbox-plain">
								<div class="fbox-icon mb-4 overflow-hidden">
									<i data-animate="fadeInUpSmall fast" class="spa-meditation"></i>
								</div>
								<div class="fbox-content">
									<div class="overflow-hidden mb-3">
										<h2 class="fs-3 text-white mb-0" data-animate="fadeInUpSmall fast" data-delay="100">Yoga &amp; Meditation</h2>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="mb-0" data-animate="fadeInUpSmall fast" data-delay="200">Voluptatum distinctio laboriosam, excepturi delectus nam fugit obcaecati reiciendis neque iste!</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-padding">
							<div class="feature-box flex-column fbox-plain">
								<div class="fbox-icon mb-4 overflow-hidden">
									<i data-animate="fadeInUpSmall fast" class="spa-comb"></i>
								</div>
								<div class="fbox-content">
									<div class="overflow-hidden mb-3">
										<h2 class="fs-3 text-white mb-0" data-animate="fadeInUpSmall fast" data-delay="100">Hair Dressing</h2>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="mb-0" data-animate="fadeInUpSmall fast" data-delay="200">Quis, tenetur. Nam explicabo modi pariatur, blanditiis distinctio sapiente fugiat accusantium.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-padding">
							<div class="feature-box flex-column fbox-plain">
								<div class="fbox-icon mb-4 overflow-hidden">
									<i data-animate="fadeInUpSmall fast" class="spa-flowers-feet"></i>
								</div>
								<div class="fbox-content">
									<div class="overflow-hidden mb-3">
										<h2 class="fs-3 text-white mb-0" data-animate="fadeInUpSmall fast" data-delay="100">Herbal Pedicure</h2>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="mb-0" data-animate="fadeInUpSmall fast" data-delay="200">Veniam atque corporis commodi. Quidem odit, necessitatibus quo tenetur! Harum similique illo eligendi!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<!-- Section Price
				============================================= -->
				<div id="section-price" class="section page-section dark mt-0 pb-0 overflow-visible" style="background: linear-gradient(rgba(0,0,0,.3), transparent), url('assets/images/1.jpg') no-repeat center center / cover;">
					<div class="container">
						<div class="row justify-content-end mx-auto mw-md " style="transform: translateY(70px);">
							<div class="col-lg-5 col-md-7">
								<p class="border border-light p-2 d-inline text-smaller ">Members get -40% off Instant Discount</p>
								<h3 class="display-4 mt-2 text-white"><i class="spa-cost pe-2"></i>Pricing</h3>
								<div class="card bg-color border-light shadow-lg">
									<div class="card-body p-4">
										<div class="overflow-hidden">
											<div class="row align-items-center"  data-animate="fadeInUpSmall faster">
												<div class="col-3">
													<img src="assets/images/price/swedish.jpg" alt="Image" class="rounded">
												</div>
												<div class="col-9">
													<h4 class="mb-2">Swedish Massage</h4>
													<div class="d-flex align-middle text-smaller">
														<div><span class="op-04">60 Mins:</span><span class="font-primary ms-2">$39</span></div>
														<small><i class="bi-circle-fill text-smaller op-02 mx-3"></i></small>
														<div><span class="op-04">120 Mins:</span><span class="font-primary ms-2">$59</span></div>
													</div>
												</div>
											</div>
										</div>
										<div class="line my-4"></div>
										<div class="overflow-hidden">
											<div class="row align-items-center" data-animate="fadeInUpSmall faster" data-delay="50">
												<div class="col-3">
													<img src="assets/images/price/scrub.jpg" alt="Image" class="rounded">
												</div>
												<div class="col-9">
													<h4 class="mb-2">Body Scrub</h4>
													<div class="d-flex align-middle text-smaller">
														<div><span class="op-04">60 Mins:</span><span class="font-primary ms-2">$39</span></div>
														<small><i class="bi-circle-fill text-smaller op-02 mx-3"></i></small>
														<div><span class="op-04">120 Mins:</span><span class="font-primary ms-2">$59</span></div>
													</div>
												</div>
											</div>
										</div>
										<div class="line my-4"></div>
										<div class="overflow-hidden">
											<div class="row align-items-center" data-animate="fadeInUpSmall faster" data-delay="100">
												<div class="col-3">
													<img src="assets/images/price/couple-spa.jpg" alt="Image" class="rounded">
												</div>
												<div class="col-9">
													<h4 class="mb-2">Couple Massage</h4>
													<div class="d-flex align-middle text-smaller">
														<div><span class="op-04">60 Mins:</span><span class="font-primary ms-2">$39</span></div>
														<small><i class="bi-circle-fill text-smaller op-02 mx-3"></i></small>
														<div><span class="op-04">120 Mins:</span><span class="font-primary ms-2">$59</span></div>
													</div>
												</div>
											</div>
										</div>
										<div class="line my-4"></div>
										<div class="overflow-hidden">
											<div class="row align-items-center" data-animate="fadeInUpSmall faster" data-delay="150">
												<div class="col-3">
													<img src="assets/images/price/hot-stone.jpg" alt="Image" class="rounded">
												</div>
												<div class="col-9">
													<h4 class="mb-2">Hot Stone Therapy</h4>
													<div class="d-flex align-middle text-smaller">
														<div><span class="op-04">60 Mins:</span><span class="font-primary ms-2">$39</span></div>
														<small><i class="bi-circle-fill text-smaller op-02 mx-3"></i></small>
														<div><span class="op-04">120 Mins:</span><span class="font-primary ms-2">$59</span></div>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="btn rounded-0 btn-border color w-100 size-sm mt-4"><span class="flex-grow-1 font-body">View All</span><i class="bi-arrow-right border-start border-light border-end-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<!-- Section Appointment
				============================================= -->
				<div id="section-appointment" class="section page-section bg-transparent mt-6">
					<div class="container mw-md">
						<div class="row align-items-stretch">
							<div class="col-md-6 min-vh-50 d-flex flex-column">
								<div class="h-50 rounded mt-2 px-5" style="background: url('assets/images/price/cosmetic-1.jpg') no-repeat center center / cover;">
									<div class="vertical-middle over">
										<div class="overflow-hidden">
											<div  data-animate="fadeInUpSmall fast" class="text-black-50">Cosmetics</div>
										</div>
										<div class="overflow-hidden">
			 								<h3 data-animate="fadeInUpSmall fast" data-delay="100" class="h3 mb-0 mt-1">Face Cream</h3>
			 							</div>
			 							<div class="overflow-hidden">
			 								<a href="#" data-animate="fadeInUpSmall fast" data-delay="200" class="button button-dark bg-color mt-3">Shop Now</a>
			 							</div>
		 							</div>
								</div>
								<div class="h-50 rounded text-lg-end px-4 mt-4" style="background: url('assets/images/price/cosmetic-2.jpg') no-repeat right center / cover;">
									<div class="vertical-middle">
										<div class="overflow-hidden">
											<div  data-animate="fadeInUpSmall fast" class="text-black-50">Spa Products</div>
										</div>
										<div class="overflow-hidden">
			 								<h3 data-animate="fadeInUpSmall fast" data-delay="100" class="h3 mb-0 mt-1">Relieve Stress</h3>
			 							</div>
			 							<div class="overflow-hidden">
			 								<a href="#" data-animate="fadeInUpSmall fast" data-delay="200" class="button button-dark bg-color mt-3">Shop Now</a>
			 							</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 mt-5 mt-md-0">
								<div class="dark">
									<div class="d-flex align-items-center mb-4">
										<i class="spa-leaves h3 icon-stacked text-center border border-light color rounded-circle icon-2x me-3 mb-0"></i>
										<div>
											<div class="overflow-hidden">
												<div class="text-white-50" data-animate="fadeInUpSmall" data-delay="10">Get Instant 40% Discount</div>
											</div>
											<div class="overflow-hidden">
												<h3 class="h3 mb-0 mt-1" data-animate="fadeInUpSmall" data-delay="100">Make an Appointment</h3>
											</div>
										</div>
									</div>
									<div class="form-widget">

										<div class="form-result"></div>

										<form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

											<div class="form-process">
												<div class="css3-spinner">
													<div class="css3-spinner-scaler"></div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12 form-group">
													<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="form-control form-control-lg bg-transparent color border-light required" placeholder="Your Name">
												</div>

												<div class="col-md-12 form-group">
													<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="form-control form-control-lg required bg-transparent color border-light" placeholder="Email Address ">
												</div>

												<div class="col-md-12 form-group">
													<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="form-control form-control-lg bg-transparent color border-light" placeholder="Contact Number">
												</div>

												<div class="col-md-12 form-group">
													<select id="template-contactform-service" name="template-contactform-service" class="form-select form-select-lg bg-transparent color border-light">
														<option disabled selected value="">Select Your Service</option>
														<option value="Swedish Massage">Swedish Massage</option>
														<option value="Body Scrub">Body Scrub</option>
														<option value="Couple Massage">Couple Massage</option>
														<option value="Hot Stone Therapy">Hot Stone Therapy</option>
													</select>
												</div>

												<div class="col-md-12 form-group">
													<input type="text" id="template-contactform-date" name="template-contactform-date" value="" class="form-control form-control-lg bg-transparent color border-light required" placeholder="Select Date &amp; Time.." data-time="true" data-dateFormat="d/m/yy - H:i">
												</div>

												<div class="col-12 form-group d-none">
													<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control form-control-lg bg-transparent color border-light">
												</div>

												<div class="col-12">
													<button type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit" class="btn rounded-0 btn-border color w-100"><i class="bi-calendar3"></i><span class="flex-grow-1">Book Now</span></button>
												</div>
											</div>

											<input type="hidden" name="prefix" value="template-contactform-">

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="clear"></div>

				<!-- Section Testimonials
				============================================= -->
				<div id="section-testimonials" class="section page-section bg-transparent mt-0">
					<div class="container">
						<div class="row justify-content-center text-center" data-animate="fadeIn">
							<div class="col-12">
								<div class="overflow-hidden">
									<div class="text-white-50 mb-2 text-uppercase ls-3" data-animate="fadeInUpSmall" data-delay="100">What Our Client Say</div>
									<h3 class="display-4 color mb-0" data-animate="fadeInUpSmall fast" data-delay="200"><i class="spa-facial pe-2 color"></i> Client Testimonials</h3>
								</div>
								<a href="https://google.com" data-animate="fadeInUpSmall" data-delay="300" class="btn rounded-0 btn-border color mt-4"><i class="spa-star"></i><span class="px-4">2,312+ Google Reviews</span></a>
							</div>
						</div>
					</div>
					<div id="oc-testi" class="owl-carousel carousel-widget dark mt-5 border-bottom border-top border-light" data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-xs="1" data-pagi="false" data-loop="true" data-margin="0"  style="background: url('assets/images/rating.svg') no-repeat center center / 300px;">

						<div class="oc-item">
							<div class="p-5 text-center">
								<img class="rounded-circle square mx-auto mb-4 border border-width-3 border-light" src="assets/images/users/1.jpg" alt="Customer Testimonails" style="--cnvs-square-size: 5rem;">

								<div>
									<p class="text-medium fw-light testimonial-quotes">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
									<h4 class="h5 mb-0 fw-medium">Jim Séchen</h4>
									<small class="op-06">XYZ Inc.</small>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="p-5 text-center">
								<img class="rounded-circle square mx-auto mb-4 border border-width-3 border-light" src="assets/images/users/2.jpg" alt="Customer Testimonails" style="--cnvs-square-size: 5rem;">

								<div>
									<p class="text-medium fw-light testimonial-quotes">Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
									<h4 class="h5 mb-0 fw-medium">Alan Fresco</h4>
									<small class="op-06">Company Inc.</small>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="p-5 text-center">
								<img class="rounded-circle square mx-auto mb-4 border border-width-3 border-light" src="assets/images/users/7.jpg" alt="Customer Testimonails" style="--cnvs-square-size: 5rem;">

								<div>
									<p class="text-medium fw-light testimonial-quotes">Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
									<h4 class="h5 mb-0 fw-medium">Fig Nelson</h4>
									<small class="op-06">Google Inc.</small>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="p-5 text-center">
								<img class="rounded-circle square mx-auto mb-4 border border-width-3 border-light" src="assets/images/users/3.jpg" alt="Customer Testimonails" style="--cnvs-square-size: 5rem;">

								<div>
									<p class="text-medium fw-light testimonial-quotes">Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
									<h4 class="h5 mb-0 fw-medium">Pelican Steve</h4>
									<small class="op-06">Apple Inc.</small>
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="p-5 text-center">
								<img class="rounded-circle square mx-auto mb-4 border border-width-3 border-light" src="assets/images/users/4.jpg" alt="Customer Testimonails" style="--cnvs-square-size: 5rem;">

								<div>
									<p class="text-medium fw-light testimonial-quotes">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
									<h4 class="h5 mb-0 fw-medium">Russell Sprout</h4>
									<small class="op-06">Adobe Inc.</small>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="clear"></div>

				<!-- Section Shop
				============================================= -->
				<div id="section-shop" class="section page-section dark bg-transparent m-0">
					<div class="container">
						<div class="row justify-content-between gutter-50">
							<div class="col-md-6">
								<div class="h-100 min-vh-50 rounded" style="background: url('assets/images/shop/1.jpg') no-repeat center center / cover;"></div>
							</div>
							<div class="col-md-6">
								<div class="overflow-hidden mb-4">
									<i class="spa-ointment icon-4x color"></i>
									<h3 class="display-4 color mb-0" data-animate="fadeInUpSmall fast">Our Products</h3>
								</div>
								<h5 class="text-white h6 mb-4"><i class="spa-sale1"></i> 40% Discount for Members</h5>

								<p class="text-white-50" data-animate="fadeInUpSmall fast">Ipsa felis in mollis turpis phasellus, repellat! Ducimus porttitor class quod? Iste neque lorem tenetur quisque possimus excepturi error ligula.</p>

								<p class="text-white-50" data-animate="fadeInUpSmall fast" data-delay="200">In morbi risus litora numquam, similique libero ligula nostrum nulla repudiandae proin luctus class varius volutpat! Fringilla fringilla sagittis nunc.</p>

								<div class="overflow-hidden mb-4">
									<a href="https://amazon.com" data-animate="fadeInUpSmall faster" data-delay="300" class="btn rounded-0 btn-border color"><i class="spa-flowers-feet"></i><span class="px-4">Shop Now</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Section Icons
				============================================= -->
				<!-- <div class="container mt-6 dark">
					<div class="row justify-content-center text-center mb-4">
						<div class="col-12">
							<h3 class="display-4 color">Icons</h3>
						</div>
					</div>

					<div class="row">

						<i class="spa-flowers col-md-3 mb-3 h3"><span class="ms-2">spa-flowers</span></i>
						<i class="spa-needles col-md-3 mb-3 h3"><span class="ms-2">spa-needles</span></i>
						<i class="spa-lotion col-md-3 mb-3 h3"><span class="ms-2">spa-lotion</span></i>
						<i class="spa-stool col-md-3 mb-3 h3"><span class="ms-2">spa-stool</span></i>
						<i class="spa-bamboo col-md-3 mb-3 h3"><span class="ms-2">spa-bamboo</span></i>
						<i class="spa-bath col-md-3 mb-3 h3"><span class="ms-2">spa-bath</span></i>
						<i class="spa-body col-md-3 mb-3 h3"><span class="ms-2">spa-body</span></i>
						<i class="spa-massage-oil col-md-3 mb-3 h3"><span class="ms-2">spa-massage-oil</span></i>
						<i class="spa-brochure col-md-3 mb-3 h3"><span class="ms-2">spa-brochure</span></i>
						<i class="spa-broom col-md-3 mb-3 h3"><span class="ms-2">spa-broom</span></i>
						<i class="spa-candle col-md-3 mb-3 h3"><span class="ms-2">spa-candle</span></i>
						<i class="spa-candle1 col-md-3 mb-3 h3"><span class="ms-2">spa-candle1</span></i>
						<i class="spa-cost col-md-3 mb-3 h3"><span class="ms-2">spa-cost</span></i>
						<i class="spa-age col-md-3 mb-3 h3"><span class="ms-2">spa-age</span></i>
						<i class="spa-cocktail col-md-3 mb-3 h3"><span class="ms-2">spa-cocktail</span></i>
						<i class="spa-oranges col-md-3 mb-3 h3"><span class="ms-2">spa-oranges</span></i>
						<i class="spa-cup-flower col-md-3 mb-3 h3"><span class="ms-2">spa-cup-flower</span></i>
						<i class="spa-chair col-md-3 mb-3 h3"><span class="ms-2">spa-chair</span></i>
						<i class="spa-drop col-md-3 mb-3 h3"><span class="ms-2">spa-drop</span></i>
						<i class="spa-dropper col-md-3 mb-3 h3"><span class="ms-2">spa-dropper</span></i>
						<i class="spa-oil-drop-hand col-md-3 mb-3 h3"><span class="ms-2">spa-oil-drop-hand</span></i>
						<i class="spa-oil-drops-bathtub col-md-3 mb-3 h3"><span class="ms-2">spa-oil-drops-bathtub</span></i>
						<i class="spa-facial col-md-3 mb-3 h3"><span class="ms-2">spa-facial</span></i>
						<i class="spa-facial2 col-md-3 mb-3 h3"><span class="ms-2">spa-facial2</span></i>
						<i class="spa-fan col-md-3 mb-3 h3"><span class="ms-2">spa-fan</span></i>
						<i class="spa-feet col-md-3 mb-3 h3"><span class="ms-2">spa-feet</span></i>
						<i class="spa-feet2 col-md-3 mb-3 h3"><span class="ms-2">spa-feet2</span></i>
						<i class="spa-bikini col-md-3 mb-3 h3"><span class="ms-2">spa-bikini</span></i>
						<i class="spa-plant col-md-3 mb-3 h3"><span class="ms-2">spa-plant</span></i>
						<i class="spa-fireplace col-md-3 mb-3 h3"><span class="ms-2">spa-fireplace</span></i>
						<i class="spa-fish col-md-3 mb-3 h3"><span class="ms-2">spa-fish</span></i>
						<i class="spa-flowers-bowl col-md-3 mb-3 h3"><span class="ms-2">spa-flowers-bowl</span></i>
						<i class="spa-flowers-feet col-md-3 mb-3 h3"><span class="ms-2">spa-flowers-feet</span></i>
						<i class="spa-fragrance-bottle col-md-3 mb-3 h3"><span class="ms-2">spa-fragrance-bottle</span></i>
						<i class="spa-juice col-md-3 mb-3 h3"><span class="ms-2">spa-juice</span></i>
						<i class="spa-hair-cut col-md-3 mb-3 h3"><span class="ms-2">spa-hair-cut</span></i>
						<i class="spa-comb col-md-3 mb-3 h3"><span class="ms-2">spa-comb</span></i>
						<i class="spa-hair-spa col-md-3 mb-3 h3"><span class="ms-2">spa-hair-spa</span></i>
						<i class="spa-hand2 col-md-3 mb-3 h3"><span class="ms-2">spa-hand2</span></i>
						<i class="spa-hand3 col-md-3 mb-3 h3"><span class="ms-2">spa-hand3</span></i>
						<i class="spa-hand4 col-md-3 mb-3 h3"><span class="ms-2">spa-hand4</span></i>
						<i class="spa-leaves col-md-3 mb-3 h3"><span class="ms-2">spa-leaves</span></i>
						<i class="spa-towel-wrapped col-md-3 mb-3 h3"><span class="ms-2">spa-towel-wrapped</span></i>
						<i class="spa-stick col-md-3 mb-3 h3"><span class="ms-2">spa-stick</span></i>
						<i class="spa-sticks col-md-3 mb-3 h3"><span class="ms-2">spa-sticks</span></i>
						<i class="spa-lemon-glass col-md-3 mb-3 h3"><span class="ms-2">spa-lemon-glass</span></i>
						<i class="spa-soap-bottle col-md-3 mb-3 h3"><span class="ms-2">spa-soap-bottle</span></i>
						<i class="spa-logo-spa col-md-3 mb-3 h3"><span class="ms-2">spa-logo-spa</span></i>
						<i class="spa-logo-spa-relax col-md-3 mb-3 h3"><span class="ms-2">spa-logo-spa-relax</span></i>
						<i class="spa-male-and-female col-md-3 mb-3 h3"><span class="ms-2">spa-male-and-female</span></i>
						<i class="spa-deck-chair col-md-3 mb-3 h3"><span class="ms-2">spa-deck-chair</span></i>
						<i class="spa-sauna col-md-3 mb-3 h3"><span class="ms-2">spa-sauna</span></i>
						<i class="spa-relaxation col-md-3 mb-3 h3"><span class="ms-2">spa-relaxation</span></i>
						<i class="spa-massage col-md-3 mb-3 h3"><span class="ms-2">spa-massage</span></i>
						<i class="spa-massages-ring col-md-3 mb-3 h3"><span class="ms-2">spa-massages-ring</span></i>
						<i class="spa-massages-tool col-md-3 mb-3 h3"><span class="ms-2">spa-massages-tool</span></i>
						<i class="spa-mineral-stones col-md-3 mb-3 h3"><span class="ms-2">spa-mineral-stones</span></i>
						<i class="spa-mortar col-md-3 mb-3 h3"><span class="ms-2">spa-mortar</span></i>
						<i class="spa-nail-polish col-md-3 mb-3 h3"><span class="ms-2">spa-nail-polish</span></i>
						<i class="spa-natural-spa col-md-3 mb-3 h3"><span class="ms-2">spa-natural-spa</span></i>
						<i class="spa-shell col-md-3 mb-3 h3"><span class="ms-2">spa-shell</span></i>
						<i class="spa-overcoat col-md-3 mb-3 h3"><span class="ms-2">spa-overcoat</span></i>
						<i class="spa-perfum col-md-3 mb-3 h3"><span class="ms-2">spa-perfum</span></i>
						<i class="spa-sauna2 col-md-3 mb-3 h3"><span class="ms-2">spa-sauna2</span></i>
						<i class="spa-meditation col-md-3 mb-3 h3"><span class="ms-2">spa-meditation</span></i>
						<i class="spa-plant3 col-md-3 mb-3 h3"><span class="ms-2">spa-plant3</span></i>
						<i class="spa-positive col-md-3 mb-3 h3"><span class="ms-2">spa-positive</span></i>
						<i class="spa-sale1 col-md-3 mb-3 h3"><span class="ms-2">spa-sale1</span></i>
						<i class="spa-sandals col-md-3 mb-3 h3"><span class="ms-2">spa-sandals</span></i>
						<i class="spa-candle col-md-3 mb-3 h3"><span class="ms-2">spa-candle</span></i>
						<i class="spa-candle2 col-md-3 mb-3 h3"><span class="ms-2">spa-candle2</span></i>
						<i class="spa-perfume3 col-md-3 mb-3 h3"><span class="ms-2">spa-perfume3</span></i>
						<i class="spa-shower col-md-3 mb-3 h3"><span class="ms-2">spa-shower</span></i>
						<i class="spa-spa col-md-3 mb-3 h3"><span class="ms-2">spa-spa</span></i>
						<i class="spa-fitness col-md-3 mb-3 h3"><span class="ms-2">spa-fitness</span></i>
						<i class="spa-relax col-md-3 mb-3 h3"><span class="ms-2">spa-relax</span></i>
						<i class="spa-bed col-md-3 mb-3 h3"><span class="ms-2">spa-bed</span></i>
						<i class="spa-bed2 col-md-3 mb-3 h3"><span class="ms-2">spa-bed2</span></i>
						<i class="spa-building col-md-3 mb-3 h3"><span class="ms-2">spa-building</span></i>
						<i class="spa-candles col-md-3 mb-3 h3"><span class="ms-2">spa-candles</span></i>
						<i class="spa-discount col-md-3 mb-3 h3"><span class="ms-2">spa-discount</span></i>
						<i class="spa-facial3 col-md-3 mb-3 h3"><span class="ms-2">spa-facial3</span></i>
						<i class="spa-ointment col-md-3 mb-3 h3"><span class="ms-2">spa-ointment</span></i>
						<i class="spa-ointment2 col-md-3 mb-3 h3"><span class="ms-2">spa-ointment2</span></i>
						<i class="spa-pan col-md-3 mb-3 h3"><span class="ms-2">spa-pan</span></i>
						<i class="spa-relax5 col-md-3 mb-3 h3"><span class="ms-2">spa-relax5</span></i>
						<i class="spa-bowl col-md-3 mb-3 h3"><span class="ms-2">spa-bowl</span></i>
						<i class="spa-star col-md-3 mb-3 h3"><span class="ms-2">spa-star</span></i>
						<i class="spa-swimming-pool col-md-3 mb-3 h3"><span class="ms-2">spa-swimming-pool</span></i>
						<i class="spa-tea-bag col-md-3 mb-3 h3"><span class="ms-2">spa-tea-bag</span></i>
						<i class="spa-tea-cup col-md-3 mb-3 h3"><span class="ms-2">spa-tea-cup</span></i>
						<i class="spa-tea col-md-3 mb-3 h3"><span class="ms-2">spa-tea</span></i>
						<i class="spa-thermostat col-md-3 mb-3 h3"><span class="ms-2">spa-thermostat</span></i>
						<i class="spa-thread col-md-3 mb-3 h3"><span class="ms-2">spa-thread</span></i>
						<i class="spa-towel col-md-3 mb-3 h3"><span class="ms-2">spa-towel</span></i>
						<i class="spa-leaf2 col-md-3 mb-3 h3"><span class="ms-2">spa-leaf2</span></i>
						<i class="spa-walkway col-md-3 mb-3 h3"><span class="ms-2">spa-walkway</span></i>
						<i class="spa-pitcher col-md-3 mb-3 h3"><span class="ms-2">spa-pitcher</span></i>
						<i class="spa-wind col-md-3 mb-3 h3"><span class="ms-2">spa-wind</span></i>
						<i class="spa-woman col-md-3 mb-3 h3"><span class="ms-2">spa-woman</span></i>
					</div>
				</div> -->

			</div>
		</section><!-- #content end -->

@endsection('content')