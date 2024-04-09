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

      <x-header />

      @yield('content')

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

                        <h4 class="text-uppercase mb-4">Skin Treatment</h4>

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


</body>
</html>
