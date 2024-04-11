<!-- Header
		============================================= -->
		<header id="header" class="header-size-md dark transparent-header floating-header" data-sticky-shrink="false" data-responsive-class="not-dark">
			<div id="header-wrap" class="border-0">
				 <div class="container rounded">
					  <div class="header-row justify-content-lg-between">

							<!-- Logo -->
							<div id="logo" class="me-lg-0 col-lg-2 col-6">
								 <a href="{{ url('/') }}">
									  <img class="logo-default ms-0" src="{{ asset('assets/images/logo.png') }}" alt="Fabaesthetics Logo">
									  <img class="logo-dark" src="{{ asset('assets/images/logo.png') }}" alt="Fabaesthetics Logo">
								 </a>
							</div><!-- #logo end -->

							<div class="header-misc col-lg-2 justify-content-lg-end ms-0">

								 <a href="#" class="button rounded button-border border-contrast-900 text-contrast-900 h-border-transparent h-text-contrast-100 h-bg-contrast-900"><i class="fa-solid fa-phone-volume d-block d-xl-none m-0"></i><span class="d-none d-xl-block">+01 4424 579</span></a>

							</div>

							<div class="primary-menu-trigger">
								 <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
									  <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
								 </button>
							</div>

							<nav class="primary-menu">

								 <ul class="menu-container">
									  <!-- Dropdown for Services -->
									  <li class="menu-item dropdown">
											<a class="menu-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Skin</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li><a class="dropdown-item" href="{{ url('service/skin-treatment/acne-treatment') }}">Acne Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/acne-scar-treatment') }}">Acne Scar Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/pigmentation-treatment') }}">Pigmentation Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/melasma-treatment') }}">Melasma Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/open-pores-treatment') }}">Open Pores Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/skin-lightening-treatment') }}">Skin Lightening Treatment</a></li>
											</ul>
								  		</li>
										  <li class="menu-item dropdown">
											<a class="menu-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cosmetics</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/anti-ageing-treatment') }}">Anti Ageing Treatment</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/botox') }}">Botox</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/dermal-fillers') }}">Dermal Fillers</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/lip-filler') }}">Lip Filler</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/cheek-filler') }}">Cheek Filler</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/chin-filler') }}">Chin Filler</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/nose-filler') }}">Nose Filler</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/jawline-filler') }}">Jawline Filler</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/neck-filler') }}">Neck Filler</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/hand-filler') }}">Hand Filler</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/body-filler') }}">Body Filler</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/skin-booster') }}">Skin Booster</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/thread-lift-face') }}">Thread Lift Face</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/nose-thread-lift') }}">Nose Thread Lift</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/lip-threads') }}">Lip Threads</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/body-threads') }}">Body Threads</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/eye-brow-thread-lift') }}">Eye brow Thread Lift</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/hifu') }}">HIFU</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/radio-frequency') }}">Radio Frequency</a></li>
												<li><a class="dropdown-item" href="{{ url('service/cosmetics-treatment/microneedling-rf') }}">Microneedling RF</a></li>
											</ul>
								  		</li>
										  <li class="menu-item dropdown">
											<a class="menu-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hair Treatment</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li><a class="dropdown-item" href="{{ url('service/hair-treatment/hair-fall-treatment') }}">Hair fall Treatment</a></li>
												<li><a class="dropdown-item" href="{{ url('service/hair-treatment/gfc-hair-treatment') }}">GFC Hair Treatment</a></li>
												<li><a class="dropdown-item" href="{{ url('service/hair-treatment/dandruff-treatment') }}">Dandruff Treatment</a></li>
												<li><a class="dropdown-item" href="{{ url('service/hair-treatment/hair-regrowth-treatment') }}">Hair Regrowth Treatment</a></li>
												<li><a class="dropdown-item" href="{{ url('service/hair-treatment/hair-transplant') }}">Hair Transplant</a></li>
											</ul>
								  		</li>
										  <li class="menu-item dropdown">
											<a class="menu-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Laser</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li><a class="dropdown-item" href="{{ url('service/lazer-treatment/laser-hair-reduction') }}">Laser hair reduction</a></li>
												<li><a class="dropdown-item" href="{{ url('service/lazer-treatment/laser-hair-removal') }}">Laser hair removal</a></li>
											</ul>
								  		</li>
										  <li class="menu-item dropdown">
											<a class="menu-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Skin Rejuvenation</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/medi-facials') }}">Medi Facials</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/hydrafacial') }}">Hydrafacial</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/photo-facial') }}">Photo Facial</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/carbon-facial') }}">Carbon Facial</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/oxygeneo-facial') }}">Oxygeneo Facial</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/carboxy-facial') }}">Carboxy Facial</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/vampire-facial') }}">Vampire Facial</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/pink-shot-facial') }}">Pink Shot Facial</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/bb-glow-facial') }}">Bb Glow Facial</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/korean-glass-skin-facial') }}">Korean Glass Skin Facial</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/skin-polishing') }}">Skin Polishing</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/microneedling') }}">Microneedling</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/hydraneedling') }}">Hydraneedling</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/dermaroller') }}">Dermaroller</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/dermapen') }}">Dermapen</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/chemical-peel') }}">Chemical Peel</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/advanced-whitening-peel') }}">Advanced Whitening Peel</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/glow-peel') }}">Glow Peel</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/ultrasonic-treatment') }}">Ultrasonic Treatment</a></li>
												<li><a class="dropdown-item" href="{{ url('service/skin-rejuvenation-treatment/oxyjet-treatment') }}">Oxyjet Treatment</a></li>
											</ul>
								  		</li>
										  <li class="menu-item dropdown">
											<a class="menu-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Make Over</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li><a class="dropdown-item" href="{{ url('service/microblading/eyebrow-microblading') }}">Eyebrow Microblading</a></li>
												<li><a class="dropdown-item" href="{{ url('service/micropigmentation/eyebrow-micropigmentation') }}">Eyebrow Micropigmentation</a></li>
												<li><a class="dropdown-item" href="{{ url('service/micropigmentation/scalp-micropigmentation') }}">Scalp Micropigmentation</a></li>
												<li><a class="dropdown-item" href="{{ url('service/micropigmentation/lip-micropigmentation') }}">Lip Micropigmentation</a></li>
											</ul>
								  		</li>
									  <!-- End Dropdown for Services -->
									  <li class="menu-item"><a class="menu-link" href="{{ url('contact-us') }}"><div>Contact</div></a></li>
								 </ul>

							</nav><!-- #primary-menu end -->

					  </div>
				 </div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
