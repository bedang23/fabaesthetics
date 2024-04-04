@extends('layout')

@section('content')

<!-- Hero
		============================================= -->
		<section id="slider" class="slider-element include-header" style="background: linear-gradient(90deg, rgba(34, 193, 195, 0.06), rgba(253, 187, 45, 0.1));">
			<div class="container mt-lg-6">
				<div class="row justify-content-between align-items-center py-lg-6 py-5">
					<div class="col-lg-5 mb-4 mb-lg-0">
						<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="50">
						<h2 class="display-3 fw-bold color all-ts">Fabaesthetics <span class="underliner nocolor viewport-detect" data-delay="1000">Celebrity's'</u></span> Favourite Clinic <img class="position-relative" style="top: -5px;" src="assets/images/icons/smile.svg" alt="..." width="50"></h2>
						<p>Your journey to great skin begins with a free consultation to identify your concerns, assess yours skin and tailor a skincare regime to your exact needs..</p>
						<a href="#" class="button py-3 px-4 bg-color-2 color h-bg-color h-text-light rounded mx-0">Request an Appoinment<i class="bi-arrow-right ms-2 me-0"></i></a>
					</div>
					<div class="col-lg-6">
						<!-- Gallery -->
						<div class="row align-items-center g-4">
							<div class="col-6">
								<img src="assets/images/celebs/richa-rathore.jpg" alt="Richa Rathore" class="object-cover rounded-6">
							</div>
							<div class="col-6">
								<img src="assets/images/celebs/sonam-arora.jpg" alt="Sonam Arora" class="object-cover rounded-6 mb-4">
								<img src="assets/images/celebs/dixita-patel.jpg" alt="Dixita Patel" class="object-cover rounded-6">
							</div>
						</div>
						<!-- Gallery -->
						<div class="card hero-card border-0 z-3 scroll-detect" style="--cnvs-transitions: .3s linear; transform: translate(-40%, calc(-.6% * var(--cnvs-scroll-percent)));">
							{{-- <div class="card-body p-4">
								<h5 class="mb-3 fw-normal small">Get <strong>20%</strong> Instant cahback on your <br> First Appoinmen Booking.</h5>
								<a href="#" class="button button-mini h-bg-dark m-0 rounded-1">Check Offers</a>
							</div>
						</div> --}}
						<img src="assets/images/icons/capsule.svg" alt=".." class="position-absolute z-1 top-0 mt-3 op-01" width="70" style="left: -90px;">
					</div>
				</div>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

				<div class="section my-0 bg-transparent">
					<div class="container">
						<div class="row justify-content-center mb-5">
							<div class="col-md-9 text-center">
								<h2 class="display-4 mb-3">Our Specialized Departments</h2>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe Libero cum <br> quaerat maxime! Ducimus quibusdam</p>
							</div>
							<div class="col-12">
								<ul class="nav nav-pills mb-5 justify-content-center" id="categories-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="skin-treatment-tab" data-bs-toggle="pill" data-bs-target="#skin-treatment" type="button" role="tab" aria-controls="skin-treatment" aria-selected="true">Skin Treatments</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="hair-treatments-tab" data-bs-toggle="pill" data-bs-target="#hair-treatments" type="button" role="tab" aria-controls="hair-treatments" aria-selected="false">Hair Treatments</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="laser-treatments-tab" data-bs-toggle="pill" data-bs-target="#laser-treatments" type="button" role="tab" aria-controls="laser-treatments" aria-selected="false">Laser Treatments</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="makeover-treatments-tab" data-bs-toggle="pill" data-bs-target="#makeover-treatments" type="button" role="tab" aria-controls="makeover-treatments" aria-selected="false">Make over Treatments</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="cosmetic-treatments-tab" data-bs-toggle="pill" data-bs-target="#cosmetic-treatments" type="button" role="tab" aria-controls="cosmetic-treatments" aria-selected="false">Cosmetic Treatments</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="skin-rejuvenation-tab" data-bs-toggle="pill" data-bs-target="#skin-rejuvenation" type="button" role="tab" aria-controls="skin-rejuvenation" aria-selected="false">Skin Rejuvenation Treatment</button>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-content px-lg-6" id="pills-tabContent">
							<div class="tab-pane fade show active" id="skin-treatment" role="tabpanel" aria-labelledby="skin-treatment-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Skin Treatments</h3>
										<p class="mb-0">Skin treatments are treatments which suggested by our expert doctor on the basis of detailed analysis of your skin. Our doctor will discuss in detailed with you about your real skin	problem and will recommend you the best and	most effective solutions for your beautiful skin problem. Thise treatment will specially target your	skin problem like acne, acne scars, pigmentation,	melasma, open pores, Tan removals, etc..</p>
										<div class="line my-4"></div>
										<div class="d-inline-flex">
											<i class="bi-check-circle-fill me-2 fs-4 color-yellow"></i><p><span class="fw-semibold color fs-5">Daks S: </span>I can already see a massive improvement in my skin and acne scars.</p>
										</div>
									</div>
									<div class="col-md-6">
										<img src="assets/images/treatments/skin-treatments.jpg" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="hair-treatments" role="tabpanel" aria-labelledby="hair-treatments-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Hair Treatments</h3>
										<p>Losing hair is undoubtedly heartwrenching. Many doctors may have claimed to bring back your hair through various unheard means but all in vain. Here at Fab Aesthetics, we do not claim, we create hair-full heads. From Medication, PRP, Mesotherapy to Hair Transplant, we do it all for various needs of patients. We have all possible and effective treatments for your hair problems like hair fall, dandruff, hair regrowth, etc.</p>
										<div class="line my-4"></div>
										<div class="d-inline-flex">
											<i class="bi-check-circle-fill me-2 fs-4 color-yellow"></i><p><span class="fw-semibold color fs-5">Shaurya Rajpoot: </span>Treatment is quite effective & I've seen visible results in a short period.</p>
										</div>
									</div>
									<div class="col-md-6">
										<img src="assets/images/treatments/hair-treatments.jpg" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="laser-treatments" role="tabpanel" aria-labelledby="laser-treatments-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Laser Treatments</h3>
										<p>Laser hair removal is also known as 'permanent laser hair reduction’. It is a method of permanently eliminating unwanted hair growth from the face and body. The procedure can be done for women as well as men. If you’re not happy with shaving, tweezing, or waxing to remove unwanted hair, laser hair removal may be an option worth	considering.</p>
										<div class="line my-4"></div>
										<div class="d-inline-flex">
											<i class="bi-check-circle-fill me-2 fs-4 color-yellow"></i><p><span class="fw-semibold color fs-5">Mahwish warsi: </span>Fantastic Staff, comfortable atmosphere & quality service. Made me feel comfortable &	treated me like family.</p>
										</div>
									</div>
									<div class="col-md-6">
										<img src="assets/images/treatments/lazer-treatments.jpg" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="makeover-treatments" role="tabpanel" aria-labelledby="makeover-treatments-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Make over Treatments</h3>
										<p><b>There are two types of makeover treatments:</b> 	Microblading and Micropigmentation</p>
										<p>Microblading involves implanting pigment into the skin's superficial layers to resemble eyebrow hair. It is ideal for people who have experienced some hair loss and wish to restore the appearance of very natural-looking eyebrows.</p>
										<p>Micropigmentation, also known as permanent makeup or cosmetic tattooing, is used to improve or replace lost coloring on skin. It's most often used on the face to enhance eyebrows, eyelashes, eyelids (as eyeliner), and lips.</p>
									</div>
									<div class="col-md-6">
										<img src="assets/images/treatments/makeover-treatments.jpg" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="cosmetic-treatments" role="tabpanel" aria-labelledby="cosmetic-treatments-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Cosmetic Treatments</h3>
										<p>A cosmetic treatment which aims to restore a	youthful appearance to the human face, which can be achieved through either surgical and/or non-surgical options. Procedures can vary in invasiveness and depth of treatment.</p>
										<p>Surgical procedure can restore facial symmetry through targeted procedures and facial restructuring and skin alterations. Non-surgical procedures can target specific depths of facial structures and treat localized facial concerns such as wrinkles, skin laxity, hyperpigmentation and scars.</p>
									</div>
									<div class="col-md-6">
										<img src="assets/images/treatments/cosmetic-treatments.jpg" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="skin-rejuvenation" role="tabpanel" aria-labelledby="skin-rejuvenation-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Skin Rejuvenation Treatment</h3>
										<p>Are you looking to take years off your face? Skin	rejuvenation treatments can help you. Due to hectic work routines and unhealthy lifestyle habits, most of us deprive our skin from the care it needs. Skin rejuvenation treatments can help your skin restore its natural glow, reverse signs of aging, and prevent any type of damage.</p>
										<div class="line my-4"></div>
										<div class="d-inline-flex">
											<i class="bi-check-circle-fill me-2 fs-4 color-yellow"></i><p><span class="fw-semibold color fs-5">Ritu Dsouza: </span>"I went for a peel. My malasma got soooo light so I went again and took again that peel. She is reasonable also price wise.</p>
										</div>
									</div>
									<div class="col-md-6">
										<img src="assets/images/treatments/skin-rejuvenation.jpg" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section mt-0">
					<div class="container">
						<div class="row justify-content-center mb-4">
							<div class="col-md-9 text-center">
								<h2 class="display-4 mb-3">We take your Health Seriously</h2>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe Libero cum <br> quaerat maxime! Ducimus quibusdam</p>
							</div>
						</div>
						<div class="row row-cols-xl-5 row-cols-lg-4 row-cols-sm-2 row-cols-1 services-categories g-4 align-items-stretch">
							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Dermatologist</h4>
										<small class="text-smaller">Eczema, Hair Loss, Acne, Skin cancer..</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Neurologist</h4>
										<small class="text-smaller">Neuromuscular disorders, ADD, brain tumors..</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Radiologist</h4>
										<small class="text-smaller">Cancers or tumors. Blockages in your arteries or veins</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Pathologist</h4>
										<small class="text-smaller">bleeding disorders, clotting problems, and anemia</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Pulmonologist</h4>
										<small class="text-smaller">asthma and chronic obstructive pulmonary disease (COPD)</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Dermatologist</h4>
										<small class="text-smaller">Acne, blocked skin follicles that lead to oil, bacteria and dead skin buildup in your pores.</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Psychiatrist</h4>
										<small class="text-smaller">Depression, bipolar disorder, and other mood disorders.
											Eating disorders.</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Psychiatrist</h4>
										<small class="text-smaller">Atherosclerosis, High blood pressure, High cholesterol, Heart Failure..</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Orthopedic</h4>
										<small class="text-smaller">fractures, Knee joint ligament injuries, Knee joint damage due to different causes of arthritis</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Gastroenterology</h4>
										<small class="text-smaller">Constipation, Crohn's disease, Diarrhoea, Vomiting in children, Gastritis..</small>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="section mt-0 bg-transparent doctor-lists">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-9 text-center">
								<h2 class="display-4 mb-5">Meet with our Experts</h2>
							</div>
						</div>
						<div class="position-relative scroll-detect" style="--cnvs-transitions: .3s linear; transform: translate(calc(-.1% * calc(var(--cnvs-scroll-percent) * .3)), 0);">
							<div class="row row-cols-lg-6 row-cols-sm-2 row-cols-1 g-4" style="transform: translateX(1%);">
								<div class="col">
									<img src="assets/images/experts/1.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">D.W. Coffman</h4>
									<small class="fw-light">Psychologists</small>
								</div>
								<div class="col">
									<img src="assets/images/experts/2.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">D.W. Coffman</h4>
									<small class="fw-light">Psychologists</small>
								</div>

								<div class="col">
									<img src="assets/images/experts/3.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">R.G. Everhart</h4>
									<small class="fw-light">Anesthesiology</small>
								</div>

								<div class="col">
									<img src="assets/images/experts/4.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">D.B. Truluck</h4>
									<small class="fw-light">Cardiology</small>
								</div>

								<div class="col">
									<img src="assets/images/experts/5.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">W.L. Popwell</h4>
									<small class="fw-light">Chiropractic</small>
								</div>

								<div class="col">
									<img src="assets/images/experts/6.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">P.M. Adres</h4>
									<small class="fw-light">Chiropractic</small>
								</div>
							</div>
						</div>
						<div class="position-relative scroll-detect" style="--cnvs-transitions: .3s linear; transform: translate(calc(.1% * calc(var(--cnvs-scroll-percent) * .3)), 0);">
							<div class="row flex-row-reverse row-cols-lg-6 row-cols-sm-2 row-cols-1 g-4 mt-0" style="transform: translateX(-1%);">

								<div class="col">
									<img src="assets/images/experts/7.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">L.D. Plack</h4>
									<small class="fw-light">Cardiology</small>
								</div>

								<div class="col">
									<img src="assets/images/experts/8.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">M.L. Paine</h4>
									<small class="fw-light">Dermatology</small>
								</div>

								<div class="col">
									<img src="assets/images/experts/9.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">M.E. Pullen</h4>
									<small class="fw-light">Surgery</small>
								</div>

								<div class="col">
									<img src="assets/images/experts/10.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">W.L. Shotts</h4>
									<small class="fw-light">Neurology</small>
								</div>

								<div class="col">
									<img src="assets/images/experts/11.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">M.S. Sugar</h4>
									<small class="fw-light">Ophthalmology</small>
								</div>

								<div class="col">
									<img src="assets/images/experts/12.jpg" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">M.S. Sugar</h4>
									<small class="fw-light">Ophthalmology</small>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section bg-color dark my-0">
					<div class="container py-lg-5">
						<div class="row g-4 justify-content-around">
							<div class="col-md-3 col-6">
								<h3 class="display-3 text-white mb-1">75+</h3>
								<small class="color-2 text-uppercase ls-2 text-smaller">Available Countries</small>
							</div>

							<div class="col-md-3 col-6">
								<h3 class="display-3 text-white mb-1">634+</h3>
								<small class="color-2 text-uppercase ls-2 text-smaller">Available Experts</small>
							</div>

							<div class="col-md-3 col-6">
								<h3 class="display-3 text-white mb-1">23+</h3>
								<small class="color-2 text-uppercase ls-2 text-smaller">Winning Awards</small>
							</div>

							<div class="col-md-3 col-6">
								<h3 class="display-3 text-white mb-1">95%</h3>
								<small class="color-2 text-uppercase ls-2 text-smaller">5 Star Reviews</small>
							</div>
						</div>
						<img src="assets/images/section.jpg" alt=".." class="my-5">
						<div class="row align-items-end justify-content-between">
							<div class="col-md-5">
								<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
								<h3 class="display-6 mb-md-0">People pay the doctor for his trouble, for his kindness they still remain in his debt.</h3>
							</div>
							<div class="col-md-5">
								<p class="mb-0">Enthusiastically exploit cutting-edge value with highly efficient e-business. Assertively promote integrated testing procedures vis-a-vis magnetic "outside the box" thinking.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="section bg-transparent mt-0">
					<div class="container">
						<div class="row gy-4 justify-content-around align-items-center">
							<div class="col-md-5">
								<div class="widget-img position-relative">
									<img src="assets/images/widget-img.png" alt="..">
								</div>
							</div>
							<div class="col-md-5">
								<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
								<h2 class="display-4 mb-3">Subscribe to Our Newsletter</h2>
								<p class="">Holisticly supply plug-and-play sources with client-based testing procedures. Assertively leverage existing user friendly infrastructures through ethical strategic theme areas.</p>
								<div class="widget subscribe-widget" data-loader="button">

									<div class="widget-subscribe-form-result"></div>
									<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0 d-flex bg-color-2 rounded-pill p-2 bg-opacity-50">
										<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control bg-transparent border-0 required email ps-3" placeholder="Your Email Address">
										<button class="button button-large rounded-pill m-0" type="submit">Subscribe</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section dark bg-color my-0">
					<div class="container">
						<div class="row align-items-center justify-content-between">
							<div class="col-md-4 mt-4">
								<img src="assets/images/icons/wave.svg" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
								<h3 class="display-6">Get in touch with Us.</h3>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, a hic? Velit aliquam dolorum maxime corporis blanditiis sed dignissimos animi?</p>

								<div class="divider divider-xs fw-light font-body text-uppercase mb-5 op-05 ms-0" style="--cnvs-divider-border-color: rgba(var(--cnvs-contrast-rgb), 0.2)"><div class="divider-text">Or</div></div>

								<h3 class="fs-6 fw-light text-uppercase op-07 mb-2">Give us a Quick Call</h3>
								<h2 class="display-4">+0 (11) 222 333</h2>
							</div>

							<div class="col-md-6">
								<div class="form-widget">

									<div class="form-result"></div>

									<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">
										<div class="form-process">
											<div class="css3-spinner">
												<div class="css3-spinner-scaler"></div>
											</div>
										</div>

										<div class="col-12 form-group">
											<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="form-control border-form-control border-light border-opacity-50 py-3 required" placeholder="Full Name..">
										</div>

										<div class="col-12 form-group">
											<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="email form-control border-form-control border-light border-opacity-50 py-3 required " placeholder="Email Address..">
										</div>

										<div class="col-12 form-group">
											<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="form-control border-form-control border-light border-opacity-50 py-3" placeholder="Phone Number..">
										</div>

										<div class="col-12 form-group">
											<textarea class="required form-control border-form-control border-light border-opacity-50 py-3" id="template-contactform-message" name="template-contactform-message" rows="2" cols="30" placeholder="Type Your Message Here.."></textarea>
										</div>

										<div class="col-12 form-group d-none">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control border-form-control border-light border-opacity-50 py-4">
										</div>

										<div class="col-12 form-group">
											<button class="button button-large button-light h-text-dark h-bg-color-2 rounded ms-0 mt-3" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
										</div>

										<input type="hidden" name="prefix" value="template-contactform-">
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

@endsection('content')