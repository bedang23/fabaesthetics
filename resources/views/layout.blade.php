<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

   {{-- Dynamic SEO Content --}}


	<title>@yield('mytitle')</title>
	<meta name="description" content="@yield('mydescription')" />
	<link rel="canonical" href="{{ url()->current() }}" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="@yield('mytitle')" />
	<meta property="og:description" content="@yield('mydescription')" />
	<meta property="og:url" content="{{ url()->current() }}" />
	<meta property="og:site_name" content="Fab Aesthetics." />
   <meta property="og:image" content="{{asset('assets/images/home/clinical-care.png')}}" />
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="400" />
	<meta property="og:image:type" content="image/png" />
	<meta name="twitter:card" content="summary_large_image" />


   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="x-ua-compatible" content="IE=edge">
   <meta name="author" content="Bedang">



   <link rel="canonical" href="{{ url()->current() }}" />

   <!-- Font Imports -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">


   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/bs-select.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/doctors.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

   <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<!-- stretched (body)
============================================= -->
<body class="stretched">

   <!-- Document Wrapper
	============================================= -->
   <div id="wrapper">

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
                                    @foreach($skinServices as $service)
                                    <li><a class="dropdown-item" href="{{ url('skin-treatment/' . $service->slug) }}">{{ $service->title }}</a></li>
                                    @endforeach

												{{-- <li><a class="dropdown-item" href="{{ url('service/skin-treatment/acne-treatment') }}">Acne Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/acne-scar-treatment') }}">Acne Scar Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/pigmentation-treatment') }}">Pigmentation Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/melasma-treatment') }}">Melasma Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/open-pores-treatment') }}">Open Pores Treatment</a></li>
													<li><a class="dropdown-item" href="{{ url('service/skin-treatment/skin-lightening-treatment') }}">Skin Lightening Treatment</a></li> --}}
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




      @yield('content')

      @yield('mycontent')

      <!-- Footer
		============================================= -->
      <footer id="footer" class="bg-color dark border-width-1">
         <div class="container">

            <!-- Footer Widgets
				============================================= -->
            <div class="footer-widgets-wrap">
               <div class="row gx-4 gy-5">

                  <div class="col-lg-3 col-6">

                     <div class="widget widget_links widget-li-noicon">

                        <h4 class="text-uppercase mb-4" style="font-size:16px ">Skin Treatment</h4>

                        <ul>
                           <li><a href="{{ url('service/skin-treatment/acne-treatment') }}">Acne Treatment</a></li>
                           <li><a href="{{ url('service/skin-treatment/pigmentation-treatment') }}">Pigmentation Treatment</a></li>
                           <li><a href="{{ url('service/skin-treatment/open-pores-treatment') }}">Open Pores Treatment</a></li>
                           <li><a href="{{ url('service/skin-treatment/skin-lightening-treatment') }}">Skin Lightening Treatment</a></li>
                        </ul>

                     </div>

                  </div>

                  <div class="col-lg-3 col-6">

                     <div class="widget widget_links widget-li-noicon">

                        <h4 class="text-uppercase mb-4">Hair Treatment</h4>

                        <ul>
                           <li><a href="{{ url('service/hair-treatment/hair-fall-treatment') }}">Hair Fall Treatment</a></li>
                           <li><a href="{{ url('service/hair-treatment/gfc-hair-treatment') }}">GFC Hair Treatment</a></li>
                           <li><a href="{{ url('service/hair-treatment/dandruff-treatment') }}">Dandruff Treatment</a></li>
                           <li><a href="{{ url('service/hair-treatment/hair-regrowth-treatment') }}">Hair Regrowth Treatment</a></li>
                           <li><a href="{{ url('service/hair-treatment/hair-transplant') }}">Hair Transplant</a></li>
                        </ul>

                     </div>

                  </div>

						<div class="col-lg-3 col-6">

                     <div class="widget widget_links widget-li-noicon">

                        <h4 class="text-uppercase mb-4">Important Links</h4>

                        <ul>
                           <li><a href="{{ url('/') }}">Home</a></li>
                           <li><a href="{{ url('about') }}">About</a></li>
                           <li><a href="{{ url('contact-us') }}">Contatc Us</a></li>
                        </ul>

                     </div>

                  </div>

                  <div class="col-lg-3 col-sm-6">

                     <div class="widget">

                        <h4 class="text-uppercase mb-4">Need Help?</h4>

                        <ul class="list-unstyled">
                           <li class="mb-3">
                              <a href="tel:+918433966645" class="d-flex">
                                 <i class="me-3 bi-telephone-fill"></i>91 84339 66645
                              </a>
                           </li>
                           <li class="mb-3">
                              <a href="mailto:info@fabaesthetics.in" class="d-flex">
                                 <i class="me-3 bi-envelope-fill"></i>info@fabaesthetics.in
                              </a>
                           </li>
                           <li class="mb-3">
                              <a href="{{ url('') }}" class="d-flex">
                                 <i class="me-3 bi-geo-alt-fill"></i>Flat no.606, Kamdhenu Building no.4,
                                 Lokhandwala Market,
											Andheri West, Mumba-400053
                              </a>
                           </li>
                           <li class="mb-3 d-flex">
                              <div class="my-social-icons">
                                 <a href="{{ url('') }}" class="my-social-link">
                                    <i class="fab fa-whatsapp"></i>
                                 </a>
                                 <a href="{{ url('') }}" class="my-social-link">
                                    <i class="fab fa-instagram"></i>
                                 </a>
                                 <a href="{{ url('') }}" class="my-social-link">
                                    <i class="fab fa-facebook-f"></i>
                                 </a>
                                 <a href="{{ url('') }}" class="my-social-link">
                                    <i class="fab fa-youtube"></i>
                                 </a>
                                 <a href="{{ url('') }}" class="my-social-link">
                                    <i class="fab fa-linkedin-in"></i>
                                 </a>
                                 <a href="{{ url('') }}" class="my-social-link">
                                    <i class="fab fa-twitter"></i>
                                 </a>
                              </div>
                           </li>
                        </ul>

                     </div>

                  </div>

               </div>
            </div><!-- .footer-widgets-wrap end -->
         </div>

         <!-- Copyrights
			============================================= -->
         <div id="copyrights" class="bg-transparent border-top op-08">
            <div class="container">

               <div class="row justify-content-md-between">
                  <div class="col-md-auto">
                     Copyrights &copy; 2024 All Rights Reserved by Fabaesthetics
                  </div>
                  <div class="col-md-auto">
                     <div class="copyright-links"><a href="{{ '/privacy' }}" target="_blank">Privacy</a></div>
                  </div>
               </div>

            </div>
         </div>
      </footer><!-- {{ url('') }}footer end -->

   </div><!-- {{ url('') }}wrapper end -->

   <!-- JavaScripts
	============================================= -->
   <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
   <script src="{{ asset('assets/js/functions.bundle.js') }}"></script>
   <script src="{{ asset('assets/js/selectsplitter.js') }}"></script>
   <script src="{{ asset('assets/js/bs-select.js') }}"></script>
   <script src="{{ asset('assets/js/custom.js') }}"></script>


</body>
</html>
