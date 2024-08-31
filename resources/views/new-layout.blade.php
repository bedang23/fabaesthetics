<!DOCTYPE html>
<html lang="en-US">
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

   <title>@yield('mytitle')</title>
   <meta name="description" content="@yield('mydescription')" />
   <link rel="canonical" href="{{ url()->current() }}" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="@yield('mytitle')" />
   <meta property="og:description" content="@yield('mydescription')" />
   <meta property="og:url" content="{{ url()->current() }}" />
   <meta property="og:site_name" content="Fab Aesthetics." />
   <meta property="og:image" content="https://www.fabaesthetics.in/assets/images/home/clinical-care.png" />
   <meta property="og:image:width" content="1920" />
   <meta property="og:image:height" content="1080" />
   <meta property="og:image:type" content="image/png" />
   <meta name="twitter:card" content="summary_large_image" />

   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta http-equiv="x-ua-compatible" content="IE=edge">
   <meta name="author" content="Bedang">

   <link rel="canonical" href="{{ url()->current() }}" />






   <link rel='stylesheet' id='ht_ctc_main_css-css' href='{{ asset('new-assets/css/click-to-chat-for-whatsapp.css') }}' type='text/css' media='all' />
   <style id='wp-emoji-styles-inline-css' type='text/css'>
      img.wp-smiley,
      img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 0.07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
      }

   </style>

   <link rel='stylesheet' href='{{ asset('new-assets/css/mycss.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='rplg-css-css' href='{{ asset('new-assets/css/rplg.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='swiper-css-css' href='{{ asset('new-assets/css/swiper.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='child-style-css' href='{{ asset('new-assets/css/child.css') }}' type='text/css' media='all' />
   <link rel='stylesheet' id='fusion-dynamic-css-css' href='{{ asset('new-assets/css/fusion-dynamic.css') }}' type='text/css' media='all' />
   <script type="text/javascript" src="{{ asset('new-assets/js/jquery.min.js') }}" id="jquery-core-js"></script>
   <script type="text/javascript" src="{{ asset('new-assets/js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>
   <script type="text/javascript" src="{{ asset('new-assets/js/brb-wpac-time.js') }}" id="brb-wpac-time-js-js"></script>
   <script type="text/javascript" src="{{ asset('new-assets/js/blazy.min.js') }}" id="blazy-js-js"></script>
   <script type="text/javascript" src="{{ asset('new-assets/js/swiper.js') }}" id="swiper-js-js"></script>
   <script type="text/javascript" src="{{ asset('new-assets/js/rplg.js') }}" id="rplg-js-js"></script>
   <link rel="https://api.w.org/" href="https://www.thebombayskinclinic.com/wp-json/" />
   <link rel="alternate" title="JSON" type="application/json" href="https://www.thebombayskinclinic.com/wp-json/wp/v2/pages/8" />
   <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.thebombayskinclinic.com/xmlrpc.php?rsd" />
   <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://www.thebombayskinclinic.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.thebombayskinclinic.com%2F" />
   <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://www.thebombayskinclinic.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.thebombayskinclinic.com%2F&#038;format=xml" />
   <style type="text/css" id="css-fb-visibility">
      @media screen and (max-width: 640px) {
         .fusion-no-small-visibility {
            display: none !important;
         }

         body .sm-text-align-center {
            text-align: center !important;
         }

         body .sm-text-align-left {
            text-align: left !important;
         }

         body .sm-text-align-right {
            text-align: right !important;
         }

         body .sm-flex-align-center {
            justify-content: center !important;
         }

         body .sm-flex-align-flex-start {
            justify-content: flex-start !important;
         }

         body .sm-flex-align-flex-end {
            justify-content: flex-end !important;
         }

         body .sm-mx-auto {
            margin-left: auto !important;
            margin-right: auto !important;
         }

         body .sm-ml-auto {
            margin-left: auto !important;
         }

         body .sm-mr-auto {
            margin-right: auto !important;
         }

         body .fusion-absolute-position-small {
            position: absolute;
            top: auto;
            width: 100%;
         }

         .awb-sticky.awb-sticky-small {
            position: sticky;
            top: var(--awb-sticky-offset, 0);
         }
      }

      @media screen and (min-width: 641px) and (max-width: 1024px) {
         .fusion-no-medium-visibility {
            display: none !important;
         }

         body .md-text-align-center {
            text-align: center !important;
         }

         body .md-text-align-left {
            text-align: left !important;
         }

         body .md-text-align-right {
            text-align: right !important;
         }

         body .md-flex-align-center {
            justify-content: center !important;
         }

         body .md-flex-align-flex-start {
            justify-content: flex-start !important;
         }

         body .md-flex-align-flex-end {
            justify-content: flex-end !important;
         }

         body .md-mx-auto {
            margin-left: auto !important;
            margin-right: auto !important;
         }

         body .md-ml-auto {
            margin-left: auto !important;
         }

         body .md-mr-auto {
            margin-right: auto !important;
         }

         body .fusion-absolute-position-medium {
            position: absolute;
            top: auto;
            width: 100%;
         }

         .awb-sticky.awb-sticky-medium {
            position: sticky;
            top: var(--awb-sticky-offset, 0);
         }
      }

      @media screen and (min-width: 1025px) {
         .fusion-no-large-visibility {
            display: none !important;
         }

         body .lg-text-align-center {
            text-align: center !important;
         }

         body .lg-text-align-left {
            text-align: left !important;
         }

         body .lg-text-align-right {
            text-align: right !important;
         }

         body .lg-flex-align-center {
            justify-content: center !important;
         }

         body .lg-flex-align-flex-start {
            justify-content: flex-start !important;
         }

         body .lg-flex-align-flex-end {
            justify-content: flex-end !important;
         }

         body .lg-mx-auto {
            margin-left: auto !important;
            margin-right: auto !important;
         }

         body .lg-ml-auto {
            margin-left: auto !important;
         }

         body .lg-mr-auto {
            margin-right: auto !important;
         }

         body .fusion-absolute-position-large {
            position: absolute;
            top: auto;
            width: 100%;
         }

         .awb-sticky.awb-sticky-large {
            position: sticky;
            top: var(--awb-sticky-offset, 0);
         }
      }

   </style>
   <style type="text/css">
      .recentcomments a {
         display: inline !important;
         padding: 0 !important;
         margin: 0 !important;
      }

   </style>
   <script type="text/javascript">
      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
   </script>

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


   <style id="wpforms-css-vars-root">
      :root {
         --wpforms-field-border-radius: 3px;
         --wpforms-field-border-style: solid;
         --wpforms-field-border-size: 1px;
         --wpforms-field-background-color: #ffffff;
         --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
         --wpforms-field-border-color-spare: rgba(0, 0, 0, 0.25);
         --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
         --wpforms-field-menu-color: #ffffff;
         --wpforms-label-color: rgba(0, 0, 0, 0.85);
         --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
         --wpforms-label-error-color: #d63637;
         --wpforms-button-border-radius: 3px;
         --wpforms-button-border-style: none;
         --wpforms-button-border-size: 1px;
         --wpforms-button-background-color: #066aab;
         --wpforms-button-border-color: #066aab;
         --wpforms-button-text-color: #ffffff;
         --wpforms-page-break-color: #066aab;
         --wpforms-background-image: none;
         --wpforms-background-position: center center;
         --wpforms-background-repeat: no-repeat;
         --wpforms-background-size: cover;
         --wpforms-background-width: 100px;
         --wpforms-background-height: 100px;
         --wpforms-background-color: rgba(0, 0, 0, 0);
         --wpforms-background-url: none;
         --wpforms-container-padding: 0px;
         --wpforms-container-border-style: none;
         --wpforms-container-border-width: 1px;
         --wpforms-container-border-color: #000000;
         --wpforms-container-border-radius: 3px;
         --wpforms-field-size-input-height: 43px;
         --wpforms-field-size-input-spacing: 15px;
         --wpforms-field-size-font-size: 16px;
         --wpforms-field-size-line-height: 19px;
         --wpforms-field-size-padding-h: 14px;
         --wpforms-field-size-checkbox-size: 16px;
         --wpforms-field-size-sublabel-spacing: 5px;
         --wpforms-field-size-icon-size: 1;
         --wpforms-label-size-font-size: 16px;
         --wpforms-label-size-line-height: 19px;
         --wpforms-label-size-sublabel-font-size: 14px;
         --wpforms-label-size-sublabel-line-height: 17px;
         --wpforms-button-size-font-size: 17px;
         --wpforms-button-size-height: 41px;
         --wpforms-button-size-padding-h: 15px;
         --wpforms-button-size-margin-top: 10px;
         --wpforms-container-shadow-size-box-shadow: none;

      }

   </style>

   <style>
      form,
      .wpcf7-form {
         font-size: 16px;
      }

      .rowfontstylehead {
         text-align: center;
         color: white;
         font-size: 40px;
         margin-bottom: 10px;
      }

      .rofontstylepara {
         text-align: center;
         color: white;
         font-size: 16px;
      }

      .fontblack {
         color: black;
      }

      .fontwhite {
         color: white
      }

      #footerfixed {
         position: fixed;
         z-index: 100;
         background-color: #111111;
         bottom: 0px;
         left: 0px;
         right: 0px;
         margin-bottom: 0px;
         text-align: left;
         color: white;

      }

      <meta name="facebook-domain-verification"content="zw8ct27kxgrjqd0i9lmyp3c1fdipyy"/>#footerfixed div {
         font-family: Droid Serif;
         font-size: 18px;
         padding: 5px;
         color: white;
         text-align: center;
      }

      #footerfixed div a,
      #footerfixed div a:hover,
      #footerfixed div a:visited {
         color: white;
         font-size: 18px;
         padding: 5px;
         text-decoration: none;

      }

      #footerfixeddiv {
         padding: 10px 0;
      }

      #content-mobile {
         display: none;
      }

      @media screen and (max-width: 768px) {

         #content-mobile {
            display: block;
         }

      }

   </style>

</head>

<body data-rsssl=1 class="home page-template-default page page-id-8 fusion-image-hovers fusion-pagination-sizing fusion-button_type-flat fusion-button_span-no fusion-button_gradient-linear avada-image-rollover-circle-yes avada-image-rollover-yes avada-image-rollover-direction-left fusion-body ltr fusion-sticky-header no-tablet-sticky-header no-mobile-slidingbar no-desktop-totop no-mobile-totop avada-has-rev-slider-styles fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-left layout-wide-mode avada-has-boxed-modal-shadow-none layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-center mobile-menu-design-modern fusion-show-pagination-text fusion-header-layout-v6 avada-responsive avada-footer-fx-none avada-menu-highlight-style-bar fusion-search-form-clean fusion-main-menu-search-overlay fusion-avatar-circle avada-dropdown-styles avada-blog-layout-large avada-blog-archive-layout-large avada-header-shadow-no avada-menu-icon-position-left avada-has-megamenu-shadow avada-has-mainmenu-dropdown-divider avada-has-header-100-width avada-has-100-footer avada-has-breadcrumb-mobile-hidden avada-has-titlebar-hide avada-has-pagination-padding avada-flyout-menu-direction-fade avada-ec-views-v1" data-awb-post-id="8">
   <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

   <div id="boxed-wrapper">

      <div id="wrapper" class="fusion-wrapper">
         <div id="home" style="position:relative;top:-1px;"></div>


         <header class="fusion-header-wrapper">
            <div class="fusion-header-v6 fusion-logo-alignment fusion-logo-left fusion-sticky-menu-1 fusion-sticky-logo-1 fusion-mobile-logo-  fusion-header-has-flyout-menu">
               <div class="fusion-header-sticky-height"></div>
               <div class="fusion-header">
                  <div class="fusion-row">
                     <div class="fusion-header-v6-content fusion-header-has-flyout-menu-content">
                        <div class="fusion-logo" data-margin-top="15px" data-margin-bottom="15px" data-margin-left="0px" data-margin-right="0px">
                           <a class="fusion-logo-link" href="{{ ('/') }}">

                              <!-- standard logo -->
                              <img src="{{ asset('assets/images/logo.png') }}" width="150" height="80" style="max-height:80px;height:auto;" alt="Fabaesthetics Logo" data-retina_logo_url="{{ asset('assets/images/logo.png') }}" class="fusion-standard-logo" />


                              <!-- sticky header logo -->
                              <img src="{{ asset('assets/images/logo.png') }}" width="77" height="40" style="max-height:40px;height:auto;" alt="Fabaesthetics Logo" data-retina_logo_url="{{ asset('assets/images/logo.png') }}" class="fusion-sticky-logo" />
                           </a>
                        </div>
                        <div class="fusion-flyout-menu-icons">



                           <a class="fusion-flyout-menu-toggle" aria-hidden="true" aria-label="Toggle Menu" href="#">
                              <div class="fusion-toggle-icon-line"></div>
                              <div class="fusion-toggle-icon-line"></div>
                              <div class="fusion-toggle-icon-line"></div>
                           </a>
                        </div>
                     </div>

                     <div class="fusion-main-menu fusion-flyout-menu" role="navigation" aria-label="Main Menu">
                        <ul id="menu-main-menu" class="fusion-menu">

                           @foreach($skinServices as $skinService)
                              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a class="fusion-bar-highlight" href="{{ url('skin-treatment/' . $skinService->slug) }}"><span class="menu-text">{{ $skinService->title }}</span></a></li>
                           @endforeach

                           @foreach($cosmeticServices as $cosmeticService)
                              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a class="fusion-bar-highlight" href="{{ url('skin-treatment/' . $cosmeticService->slug) }}"><span class="menu-text">{{ $cosmeticService->title }}</span></a></li>
                           @endforeach

                           @foreach($hairServices as $hairService)
                              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a class="fusion-bar-highlight" href="{{ url('skin-treatment/' . $hairService->slug) }}"><span class="menu-text">{{ $hairService->title }}</span></a></li>
                           @endforeach

                           @foreach($laserServices as $laserService)
                              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a class="fusion-bar-highlight" href="{{ url('skin-treatment/' . $laserService->slug) }}"><span class="menu-text">{{ $laserService->title }}</span></a></li>
                           @endforeach

                           @foreach($rejuvenationServices as $rejuvenationService)
                              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a class="fusion-bar-highlight" href="{{ url('skin-treatment/' . $rejuvenationService->slug) }}"><span class="menu-text">{{ $rejuvenationService->title }}</span></a></li>
                           @endforeach

                           @foreach($makeoverServices as $makeoverService)
                              <li class="menu-item menu-item-type-custom menu-item-object-custom"><a class="fusion-bar-highlight" href="{{ url('skin-treatment/' . $makeoverService->slug) }}"><span class="menu-text">{{ $makeoverService->title }}</span></a></li>
                           @endforeach

                        </ul>
                     </div>


                     <div class="fusion-flyout-menu-bg"></div>
                  </div>
               </div>
            </div>
            <div class="fusion-clearfix"></div>
         </header>

         <div id="sliders-container" class="fusion-slider-visibility">
         </div>



         @yield('content')

         @yield('mycontent')


         <div class="fusion-fullwidth fullwidth-box fusion-builder-row-13 nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:0px;--awb-padding-right:0px;--awb-padding-bottom:0px;--awb-padding-left:0px;--awb-margin-top:0px;--awb-margin-bottom:0px;--awb-flex-wrap:wrap;">
            <div class="fusion-builder-row fusion-row">
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-20 fusion_builder_column_1_1 1_1 fusion-one-full fusion-column-first fusion-column-last" style="--awb-padding-top:0px;--awb-padding-right:0px;--awb-padding-bottom:0px;--awb-padding-left:0px;--awb-bg-color:#5b5b5b;--awb-bg-color-hover:#5b5b5b;--awb-bg-size:cover;--awb-margin-bottom:50px;">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy">
                     <div class="fusion-text fusion-text-13">
                        <h3 style="text-align: center;"><span style="color: #ffffff;">Featured in</span></h3>
                     </div>
                     <div class="fusion-clearfix"></div>
                  </div>
               </div>
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-21 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-first" style="--awb-padding-top:0px;--awb-padding-right:25px;--awb-padding-bottom:0px;--awb-padding-left:25px;--awb-bg-size:cover;--awb-margin-bottom:0px;width:20%;width:calc(20% - ( ( 4% + 4% + 4% + 4% ) * 0.2 ) );margin-right: 4%;">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy">
                     <div class="fusion-image-element in-legacy-container" style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);"><span class=" fusion-imageframe imageframe-none imageframe-1 hover-type-none"><img fetchpriority="high" decoding="async" width="480" height="200" title="Logo Vogue" src="https://www.thebombayskinclinic.com/wp-content/uploads/2018/10/logo-vogue.jpg" alt class="img-responsive wp-image-550" srcset="https://www.thebombayskinclinic.com/wp-content/uploads/2018/10/logo-vogue-200x83.jpg 200w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/10/logo-vogue-400x167.jpg 400w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/10/logo-vogue.jpg 480w" sizes="(max-width: 800px) 100vw, 400px" /></span></div>
                     <div class="fusion-clearfix"></div>
                  </div>
               </div>
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-22 fusion_builder_column_1_5 1_5 fusion-one-fifth" style="--awb-padding-top:0px;--awb-padding-right:25px;--awb-padding-bottom:0px;--awb-padding-left:25px;--awb-bg-size:cover;--awb-margin-bottom:0px;width:20%;width:calc(20% - ( ( 4% + 4% + 4% + 4% ) * 0.2 ) );margin-right: 4%;">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy">
                     <div class="fusion-image-element in-legacy-container" style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);"><span class=" fusion-imageframe imageframe-none imageframe-2 hover-type-none"><img decoding="async" width="480" height="200" title="Logo Cosmopolitan" src="https://www.thebombayskinclinic.com/wp-content/uploads/2018/10/logo-cosmopolitan.jpg" alt class="img-responsive wp-image-547" srcset="https://www.thebombayskinclinic.com/wp-content/uploads/2018/10/logo-cosmopolitan-200x83.jpg 200w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/10/logo-cosmopolitan-400x167.jpg 400w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/10/logo-cosmopolitan.jpg 480w" sizes="(max-width: 800px) 100vw, 400px" /></span></div>
                     <div class="fusion-clearfix"></div>
                  </div>
               </div>
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-23 fusion_builder_column_1_5 1_5 fusion-one-fifth" style="--awb-padding-top:0px;--awb-padding-right:25px;--awb-padding-bottom:0px;--awb-padding-left:25px;--awb-bg-size:cover;--awb-margin-bottom:0px;width:20%;width:calc(20% - ( ( 4% + 4% + 4% + 4% ) * 0.2 ) );margin-right: 4%;">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy">
                     <div class="fusion-image-element in-legacy-container" style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);"><span class=" fusion-imageframe imageframe-none imageframe-3 hover-type-none"><img decoding="async" width="480" height="200" alt="Logo Mumbai Mirror" title="Logo Mumbai Mirror" src="https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-mumbai-mirror.jpg" class="img-responsive wp-image-85" srcset="https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-mumbai-mirror-200x83.jpg 200w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-mumbai-mirror-400x167.jpg 400w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-mumbai-mirror.jpg 480w" sizes="(max-width: 800px) 100vw, 400px" /></span></div>
                     <div class="fusion-clearfix"></div>
                  </div>
               </div>
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-24 fusion_builder_column_1_5 1_5 fusion-one-fifth" style="--awb-padding-right:25px;--awb-padding-left:25px;--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% + 4% + 4% ) * 0.2 ) );margin-right: 4%;">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy">
                     <div class="fusion-image-element in-legacy-container" style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);"><span class=" fusion-imageframe imageframe-none imageframe-4 hover-type-none"><img decoding="async" width="480" height="200" alt="Logo Ht" title="Logo Ht" src="https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-ht.jpg" class="img-responsive wp-image-86" srcset="https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-ht-200x83.jpg 200w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-ht-400x167.jpg 400w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-ht.jpg 480w" sizes="(max-width: 800px) 100vw, 400px" /></span></div>
                     <div class="fusion-clearfix"></div>
                  </div>
               </div>
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-25 fusion_builder_column_1_5 1_5 fusion-one-fifth fusion-column-last" style="--awb-padding-right:25px;--awb-padding-left:25px;--awb-bg-size:cover;width:20%;width:calc(20% - ( ( 4% + 4% + 4% + 4% ) * 0.2 ) );">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy">
                     <div class="fusion-image-element in-legacy-container" style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);"><span class=" fusion-imageframe imageframe-none imageframe-5 hover-type-none"><img decoding="async" width="480" height="200" alt="Logo DNA" title="Logo DNA" src="https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-dna.jpg" class="img-responsive wp-image-83" srcset="https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-dna-200x83.jpg 200w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-dna-400x167.jpg 400w, https://www.thebombayskinclinic.com/wp-content/uploads/2018/01/logo-dna.jpg 480w" sizes="(max-width: 800px) 100vw, 400px" /></span></div>
                     <div class="fusion-clearfix"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="fusion-fullwidth fullwidth-box fusion-builder-row-14 nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:0px;--awb-padding-right:0px;--awb-padding-bottom:0px;--awb-padding-left:0px;--awb-margin-top:25px;--awb-margin-bottom:0px;--awb-flex-wrap:wrap;">
            <div class="fusion-builder-row fusion-row">
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-26 fusion_builder_column_1_1 1_1 fusion-one-full fusion-column-first fusion-column-last" style="--awb-padding-top:0px;--awb-padding-right:0px;--awb-padding-bottom:0px;--awb-padding-left:0px;--awb-bg-color:#5b5b5b;--awb-bg-color-hover:#5b5b5b;--awb-bg-size:cover;--awb-margin-bottom:25px;">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy">
                     <div class="fusion-text fusion-text-14">
                        <h3 style="text-align: center;"><span style="color: #ffffff;">Book appointment today!</span></h3>
                     </div>
                     <div class="fusion-clearfix"></div>
                  </div>
               </div>
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-27 fusion_builder_column_1_3 1_3 fusion-one-third fusion-column-first" style="--awb-padding-top:0px;--awb-padding-right:25px;--awb-padding-bottom:0px;--awb-padding-left:25px;--awb-bg-size:cover;--awb-margin-bottom:15px;width:33.333333333333%;width:calc(33.333333333333% - ( ( 4% + 4% ) * 0.33333333333333 ) );margin-right: 4%;">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"><span style="font-size:32px;">Google Reviews</span>
                     <p style="text-align: left; font-size: 16px; margin-top:10px"><strong style="color: orange; font-size:18px">4.6</strong> <span class="rw-gl">
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star-half-alt" style="color:orange"></i></span> based on 312 reviews<br>
                        <img decoding="async" src="{{ asset('assets/images/review-gl.jpg') }}" style="width:50%;margin-bottom:15px;"><br>

                        <span class="name"><b>Twinkle Matta</b></span><br>
                        <span style="float:left; margin-right:5px;">
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i> </span>
                        Best Dermatologist in town! Coudnt go to any other doctor. My skin went from bad to fab in just in no time.<br><br>

                        <span class="name"><b>Teri Fijak</b></span><br>
                        <span style="float:left; margin-right:5px;">
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                        </span>
                        So I am from USA visting my friend in India and was looking for Botox while visitng. Came across Fab Aesthetics and saw great reviews so i had to give it a go. So happy I did, very happy with the results. <br><br>

                        <span class="name"><b>Nida Shaikh</b></span><br>
                        <span style="float:left; margin-right:5px;">
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i>
                           <i class="fas fa-star" style="color:orange"></i> </span>
                        Pigmentation treatment I have done in Fab Aesthetics clinic. Thank you Dr Samreen Khan for yourproper guidance.My face is much better now. Highly recommended.

                        <br><br>
                        <a href="https://g.page/tbscsouth" target="_blank" rel="nofollow">View more</a> on Google.
                     </p>
                     <div class="fusion-clearfix"></div>
                  </div>
               </div>
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-28 fusion_builder_column_1_3 1_3 fusion-one-third" style="--awb-padding-top:0px;--awb-padding-right:25px;--awb-padding-bottom:0px;--awb-padding-left:25px;--awb-bg-size:cover;--awb-margin-bottom:0px;width:33.333333333333%;width:calc(33.333333333333% - ( ( 4% + 4% ) * 0.33333333333333 ) );margin-right: 4%;">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy" id="contactForm">
                     <div id="message">
                        @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-success') }} mt-3">{{ Session::get('message') }}</p>
                        @endif
                    </div>
                     <form method="post" action="/contact-us">
                        @csrf
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group app-label">
                                    {{-- <label class="text-muted">Name</label> --}}
                                    <input required name="name" id="name2" type="text" class="form-control resume" placeholder="Enter Name..">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group app-label">
                                    {{-- <label class="text-muted">Email address</label> --}}
                                    <input required name="email" id="email1" type="email" class="form-control resume" placeholder="Enter Email..">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group app-label">
                                    {{-- <label class="text-muted">Phone Number</label> --}}
                                    <input required name="phone" type="number" class="form-control resume" placeholder="Enter Phone Number">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group app-label">
                                    {{-- <label class="text-muted">Message</label> --}}
                                    <textarea required name="message" id="comments" rows="2" class="form-control resume" placeholder="Message.."></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <input type="submit" id="submit" name="send" class="wpcf7-form-control wpcf7-submit has-spinner" style="background-color: #1f9e96;  border-block: #1f9e96; color:white" value="Send Message">
                              <div id="simple-msg"></div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="fusion-layout-column fusion_builder_column fusion-builder-column-29 fusion_builder_column_1_3 1_3 fusion-one-third fusion-column-last" style="--awb-padding-top:0px;--awb-padding-right:25px;--awb-padding-bottom:0px;--awb-padding-left:25px;--awb-bg-size:cover;--awb-margin-bottom:0px;width:33.333333333333%;width:calc(33.333333333333% - ( ( 4% + 4% ) * 0.33333333333333 ) );">
                  <div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy">
                     <div class="fusion-text fusion-text-16">
                        <p style="font-size: 26px; text-align: center;"><strong>Call to know more</strong><br />
                           <a href="tel:+918433966645">8433966645</a></p>
                     </div>
                     <div class="fusion-text fusion-text-17">
                        <p style="text-align: center;">OR</p>
                        <p style="text-align: center;"><strong>email </strong><a href="mailto:info@fabaesthetics.in">info@fabaesthetics.in</a></p>
                     </div>
                     <div class="fusion-clearfix"></div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>

<script nitro-exclude>
   document.cookie = 'nitroCachedPage=' + (!window.NITROPACK_STATE ? '0' : '1') + '; path=/; SameSite=Lax';

</script>
</div> <!-- fusion-row -->
</main> <!-- #main -->


         <div class="fusion-footer">


            <footer id="footer" class="fusion-footer-copyright-area fusion-footer-copyright-center">
               <div class="fusion-row">
                  <div class="fusion-copyright-content">

                     <div class="fusion-copyright-notice">
                        <div>
                           © 2024 FAB Aesthtics Clinic <br><br><br> </div>
                     </div>
                     <div class="fusion-social-links-footer">
                     </div>

                  </div> <!-- fusion-fusion-copyright-content -->
               </div> <!-- fusion-row -->
            </footer> <!-- #footer -->
         </div> <!-- fusion-footer -->


      </div> <!-- wrapper -->
   </div> <!-- #boxed-wrapper -->
   <a class="fusion-one-page-text-link fusion-page-load-link" tabindex="-1" href="#" aria-hidden="true">Page load link</a>

   <div class="avada-footer-scripts">
      <!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v4.6 -->
      <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-3  " id="ht-ctc-chat" style="display: none;  position: fixed; bottom: 15px; right: 15px;">
         <div class="ht_ctc_style ht_ctc_chat_style">
            <div title='WhatsApp us' style="display:flex;justify-content:center;align-items:center; " class="ctc_s_3 ctc_nb" data-nb_top="-5px" data-nb_right="-5px">
               <p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta " style="padding: 0px 16px; line-height: 1.6; ; background-color: #25d366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; ">WhatsApp us</p>
               <svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px" viewBox="0 0 1219.547 1225.016">
                  <path style="fill: #E0E0E0;" fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z" />
                  <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                     <stop offset="0" stop-color="#20b038" />
                     <stop offset="1" stop-color="#60d66a" />
                  </linearGradient>
                  <path style="fill: url(#htwaicona-chat);" fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z" />
                  <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)" />
                  <path fill-rule="evenodd" clip-rule="evenodd" style="fill: #FFFFFF;" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" />
                  <path style="fill: #FFFFFF;" fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z" />
               </svg>
            </div>
         </div>
      </div>
      <span class="ht_ctc_chat_data" data-no_number="" data-settings="{&quot;number&quot;:&quot;918433966645&quot;,&quot;pre_filled&quot;:&quot;Hi, \r\nI am interested to know more about the FAB Aesthtics Clinic&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;url_target_d&quot;:&quot;_blank&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;,&quot;g_init&quot;:&quot;default&quot;,&quot;g_an_event_name&quot;:&quot;click to chat&quot;,&quot;pixel_event_name&quot;:&quot;Click to Chat by HoliThemes&quot;}"></span>
      <style id='global-styles-inline-css' type='text/css'>
         :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--awb-color-1: rgba(255, 255, 255, 1);
            --wp--preset--color--awb-color-2: rgba(246, 246, 246, 1);
            --wp--preset--color--awb-color-3: rgba(235, 234, 234, 1);
            --wp--preset--color--awb-color-4: rgba(229, 229, 229, 1);
            --wp--preset--color--awb-color-5: rgba(224, 222, 222, 1);
            --wp--preset--color--awb-color-6: rgba(160, 206, 78, 1);
            --wp--preset--color--awb-color-7: rgba(116, 116, 116, 1);
            --wp--preset--color--awb-color-8: rgba(51, 51, 51, 1);
            --wp--preset--color--awb-color-custom-10: rgba(235, 234, 234, 0.8);
            --wp--preset--color--awb-color-custom-11: rgba(249, 249, 249, 1);
            --wp--preset--color--awb-color-custom-12: rgba(210, 210, 210, 1);
            --wp--preset--color--awb-color-custom-13: rgba(150, 195, 70, 1);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 12px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 24px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--xlarge: 32px;
            --wp--preset--font-size--huge: 48px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
         }

         :where(.is-layout-flex) {
            gap: 0.5em;
         }

         :where(.is-layout-grid) {
            gap: 0.5em;
         }

         body .is-layout-flex {
            display: flex;
         }

         .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
         }

         .is-layout-flex> :is(*, div) {
            margin: 0;
         }

         body .is-layout-grid {
            display: grid;
         }

         .is-layout-grid> :is(*, div) {
            margin: 0;
         }

         :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
         }

         :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
         }

         :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
         }

         :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
         }

         .has-black-color {
            color: var(--wp--preset--color--black) !important;
         }

         .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
         }

         .has-white-color {
            color: var(--wp--preset--color--white) !important;
         }

         .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
         }

         .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
         }

         .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
         }

         .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
         }

         .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
         }

         .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
         }

         .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
         }

         .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
         }

         .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
         }

         .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
         }

         .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
         }

         .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
         }

         .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
         }

         .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
         }

         .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
         }

         .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
         }

         .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
         }

         .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
         }

         .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
         }

         .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
         }

         .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
         }

         .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
         }

         .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
         }

         .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
         }

         .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
         }

         .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
         }

         .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
         }

         .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
         }

         .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
         }

         .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
         }

         .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
         }

         .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
         }

         .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
         }

         .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
         }

         .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
         }

         .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
         }

         .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
         }

         .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
         }

         .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
         }

         .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
         }

         .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
         }

         .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
         }

         .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
         }

         .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
         }

         .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
         }

         .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
         }

         .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
         }

         .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
         }

         .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
         }

         :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
         }

         :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
         }

         :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
         }

         :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
         }

         :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
         }

      </style>
      <link rel='stylesheet' id='wp-block-library-css' href='https://www.thebombayskinclinic.com/wp-includes/css/dist/block-library/style.min.css?ver=abf1639e42bd692c6c98071add9ab41d' type='text/css' media='all' />
      <style id='wp-block-library-theme-inline-css' type='text/css'>
         .wp-block-audio :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
         }

         .is-dark-theme .wp-block-audio :where(figcaption) {
            color: #ffffffa6
         }

         .wp-block-audio {
            margin: 0 0 1em
         }

         .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
         }

         .wp-block-embed :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
         }

         .is-dark-theme .wp-block-embed :where(figcaption) {
            color: #ffffffa6
         }

         .wp-block-embed {
            margin: 0 0 1em
         }

         .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
         }

         .is-dark-theme .blocks-gallery-caption {
            color: #ffffffa6
         }

         :root :where(.wp-block-image figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
         }

         .is-dark-theme :root :where(.wp-block-image figcaption) {
            color: #ffffffa6
         }

         .wp-block-image {
            margin: 0 0 1em
         }

         .wp-block-pullquote {
            border-bottom: 4px solid;
            border-top: 4px solid;
            color: currentColor;
            margin-bottom: 1.75em
         }

         .wp-block-pullquote cite,
         .wp-block-pullquote footer,
         .wp-block-pullquote__citation {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            text-transform: uppercase
         }

         .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
         }

         .wp-block-quote cite,
         .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            position: relative
         }

         .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
         }

         .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
         }

         .wp-block-quote.is-large,
         .wp-block-quote.is-style-large,
         .wp-block-quote.is-style-plain {
            border: none
         }

         .wp-block-search .wp-block-search__label {
            font-weight: 700
         }

         .wp-block-search__button {
            border: 1px solid #ccc;
            padding: .375em .625em
         }

         :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
         }

         .wp-block-separator.has-css-opacity {
            opacity: .4
         }

         .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
         }

         .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
         }

         .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
         }

         .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
         }

         .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
         }

         .wp-block-table {
            margin: 0 0 1em
         }

         .wp-block-table td,
         .wp-block-table th {
            word-break: normal
         }

         .wp-block-table :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
         }

         .is-dark-theme .wp-block-table :where(figcaption) {
            color: #ffffffa6
         }

         .wp-block-video :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
         }

         .is-dark-theme .wp-block-video :where(figcaption) {
            color: #ffffffa6
         }

         .wp-block-video {
            margin: 0 0 1em
         }

         :root :where(.wp-block-template-part.has-background) {
            margin-bottom: 0;
            margin-top: 0;
            padding: 1.25em 2.375em
         }

      </style>
      <style id='classic-theme-styles-inline-css' type='text/css'>
         /*! This file is auto-generated */
         .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
         }

         .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
         }

      </style>
      <script type="text/javascript" id="ht_ctc_app_js-js-extra">
         /* <![CDATA[ */
         var ht_ctc_chat_var = {
            "number": "918433966645"
            , "pre_filled": "Hi, \r\nI am interested to know more about the FAB Aesthtics Clinic"
            , "dis_m": "show"
            , "dis_d": "show"
            , "css": "display: none; cursor: pointer; z-index: 99999999;"
            , "pos_d": "position: fixed; bottom: 15px; right: 15px;"
            , "pos_m": "position: fixed; bottom: 15px; right: 15px;"
            , "schedule": "no"
            , "se": "150"
            , "ani": "no-animations"
            , "url_target_d": "_blank"
            , "ga": "yes"
            , "fb": "yes"
            , "g_init": "default"
            , "g_an_event_name": "click to chat"
            , "pixel_event_name": "Click to Chat by HoliThemes"
         };
         var ht_ctc_variables = {
            "g_an_event_name": "click to chat"
            , "pixel_event_type": "trackCustom"
            , "pixel_event_name": "Click to Chat by HoliThemes"
            , "g_an_params": ["g_an_param_1", "g_an_param_2", "g_an_param_3"]
            , "g_an_param_1": {
               "key": "number"
               , "value": "{number}"
            }
            , "g_an_param_2": {
               "key": "title"
               , "value": "{title}"
            }
            , "g_an_param_3": {
               "key": "url"
               , "value": "{url}"
            }
            , "pixel_params": ["pixel_param_1", "pixel_param_2", "pixel_param_3", "pixel_param_4"]
            , "pixel_param_1": {
               "key": "Category"
               , "value": "Click to Chat for WhatsApp"
            }
            , "pixel_param_2": {
               "key": "ID"
               , "value": "{number}"
            }
            , "pixel_param_3": {
               "key": "Title"
               , "value": "{title}"
            }
            , "pixel_param_4": {
               "key": "URL"
               , "value": "{url}"
            }
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="{{ asset('new-assets/js/ht_ctc_app.js') }}" id="ht_ctc_app_js-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/wp-hooks.js') }}" id="wp-hooks-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/wp-i18n.js') }}" id="wp-i18n-js"></script>
      <script type="text/javascript" id="wp-i18n-js-after">
         /* <![CDATA[ */
         wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
         });
         /* ]]> */

      </script>
      <script type="text/javascript" src="{{ asset('new-assets/js/swv.js') }}" id="swv-js"></script>
      <script type="text/javascript" id="contact-form-7-js-extra">
         /* <![CDATA[ */
         var wpcf7 = {
            "api": {
               "root": "https:\/\/www.thebombayskinclinic.com\/wp-json\/"
               , "namespace": "contact-form-7\/v1"
            }
            , "cached": "1"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="{{ asset('new-assets/js/contact-form-7.js') }}" id="contact-form-7-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/fusion-column.js') }}"  id="fusion-column-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/awb-tabs-widget.js') }}" id="awb-tabs-widget-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/awb-vertical-menu-widget.js') }}" id="awb-vertical-menu-widget-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/cssua.js') }}" id="cssua-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/modernizr-js.js') }}" id="modernizr-js"></script>
      <script type="text/javascript" id="fusion-js-extra">
         /* <![CDATA[ */
         var fusionJSVars = {
            "visibility_small": "640"
            , "visibility_medium": "1024"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="{{ asset('new-assets/js/fusion.js') }}" id="fusion-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/swiper-min.js') }}" id="swiper-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/bootstrap-transition.js') }}" id="bootstrap-transition-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/bootstrap-collapse.js') }}" id="bootstrap-collapse-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/jquery-request-animation-frame.js') }}"  id="jquery-request-animation-frame-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/jquery-easing.js') }}" id="jquery-easing-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/jquery-fitvids.js') }}"id="jquery-fitvids-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/jquery-flexslider.js') }}" id="jquery-flexslider-js"></script>
      <script type="text/javascript" id="jquery-lightbox-js-extra">
         /* <![CDATA[ */
         var fusionLightboxVideoVars = {
            "lightbox_video_width": "1280"
            , "lightbox_video_height": "720"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="{{ asset('new-assets/js/jquery.ilightbox.js') }}" id="jquery-lightbox-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/jquery.mousewheel.js') }}" id="jquery-mousewheel-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/jquery.placeholder.js') }}" id="jquery-placeholder-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/jquery.fade.js') }}" id="jquery-fade-js"></script>
      <script type="text/javascript" src="{{ asset('new-assets/js/imagesLoaded.js') }}" id="images-loaded-js"></script>
      <script type="text/javascript" id="fusion-equal-heights-js-extra">
         /* <![CDATA[ */
         var fusionEqualHeightVars = {
            "content_break_point": "800"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-equal-heights.js?ver=1" id="fusion-equal-heights-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-parallax.js?ver=1" id="fusion-parallax-js"></script>
      <script type="text/javascript" id="fusion-video-general-js-extra">
         /* <![CDATA[ */
         var fusionVideoGeneralVars = {
            "status_vimeo": "0"
            , "status_yt": "1"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-video-general.js?ver=1" id="fusion-video-general-js"></script>
      <script type="text/javascript" id="fusion-video-bg-js-extra">
         /* <![CDATA[ */
         var fusionVideoBgVars = {
            "status_vimeo": "0"
            , "status_yt": "1"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-video-bg.js?ver=1" id="fusion-video-bg-js"></script>
      <script type="text/javascript" id="fusion-lightbox-js-extra">
         /* <![CDATA[ */
         var fusionLightboxVars = {
            "status_lightbox": "1"
            , "lightbox_gallery": "1"
            , "lightbox_skin": "metro-white"
            , "lightbox_title": "1"
            , "lightbox_arrows": "1"
            , "lightbox_slideshow_speed": "5000"
            , "lightbox_autoplay": ""
            , "lightbox_opacity": "0.9"
            , "lightbox_desc": "1"
            , "lightbox_social": "1"
            , "lightbox_social_links": {
               "facebook": {
                  "source": "https:\/\/www.facebook.com\/sharer.php?u={URL}"
                  , "text": "Share on Facebook"
               }
               , "twitter": {
                  "source": "https:\/\/twitter.com\/share?url={URL}"
                  , "text": "Share on X"
               }
               , "reddit": {
                  "source": "https:\/\/reddit.com\/submit?url={URL}"
                  , "text": "Share on Reddit"
               }
               , "linkedin": {
                  "source": "https:\/\/www.linkedin.com\/shareArticle?mini=true&url={URL}"
                  , "text": "Share on LinkedIn"
               }
               , "tumblr": {
                  "source": "https:\/\/www.tumblr.com\/share\/link?url={URL}"
                  , "text": "Share on Tumblr"
               }
               , "pinterest": {
                  "source": "https:\/\/pinterest.com\/pin\/create\/button\/?url={URL}"
                  , "text": "Share on Pinterest"
               }
               , "vk": {
                  "source": "https:\/\/vk.com\/share.php?url={URL}"
                  , "text": "Share on Vk"
               }
               , "mail": {
                  "source": "mailto:?body={URL}"
                  , "text": "Share by Email"
               }
            }
            , "lightbox_deeplinking": "1"
            , "lightbox_path": "vertical"
            , "lightbox_post_images": "1"
            , "lightbox_animation_speed": "normal"
            , "l10n": {
               "close": "Press Esc to close"
               , "enterFullscreen": "Enter Fullscreen (Shift+Enter)"
               , "exitFullscreen": "Exit Fullscreen (Shift+Enter)"
               , "slideShow": "Slideshow"
               , "next": "Next"
               , "previous": "Previous"
            }
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-lightbox.js?ver=1" id="fusion-lightbox-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.sticky-kit.js?ver=1.1.2" id="jquery-sticky-kit-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-youtube.js?ver=2.2.1" id="fusion-youtube-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-general-footer.js?ver=7.11.9" id="avada-general-footer-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-quantity.js?ver=7.11.9" id="avada-quantity-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-crossfade-images.js?ver=7.11.9" id="avada-crossfade-images-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-select.js?ver=7.11.9" id="avada-select-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-contact-form-7.js?ver=7.11.9" id="avada-contact-form-7-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-alert.js?ver=abf1639e42bd692c6c98071add9ab41d" id="fusion-alert-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/plugins/fusion-builder/assets/js/min/general/awb-off-canvas.js?ver=3.11.9" id="awb-off-canvas-js"></script>
      <script type="text/javascript" id="fusion-flexslider-js-extra">
         /* <![CDATA[ */
         var fusionFlexSliderVars = {
            "status_vimeo": ""
            , "slideshow_autoplay": "1"
            , "slideshow_speed": "7000"
            , "pagination_video_slide": ""
            , "status_yt": "1"
            , "flex_smoothHeight": "false"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-flexslider.js?ver=abf1639e42bd692c6c98071add9ab41d" id="fusion-flexslider-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-column-legacy.js?ver=abf1639e42bd692c6c98071add9ab41d" id="fusion-column-legacy-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/plugins/fusion-builder/assets/js/min/general/awb-background-slider.js?ver=abf1639e42bd692c6c98071add9ab41d" id="awb-background-slider-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/plugins/fusion-builder/assets/js/min/library/lite-yt-embed.js?ver=abf1639e42bd692c6c98071add9ab41d" id="lite-youtube-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-toggles.js?ver=abf1639e42bd692c6c98071add9ab41d" id="fusion-toggles-js"></script>
      <script type="text/javascript" id="awb-carousel-js-extra">
         /* <![CDATA[ */
         var awbCarouselVars = {
            "related_posts_speed": "2500"
            , "carousel_speed": "2500"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/awb-carousel.js?ver=abf1639e42bd692c6c98071add9ab41d" id="awb-carousel-js"></script>
      <script type="text/javascript" id="fusion-container-js-extra">
         /* <![CDATA[ */
         var fusionContainerVars = {
            "content_break_point": "800"
            , "container_hundred_percent_height_mobile": "0"
            , "is_sticky_header_transparent": "0"
            , "hundred_percent_scroll_sensitivity": "450"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-container.js?ver=3.11.9" id="fusion-container-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/library/jquery.elasticslider.js?ver=7.11.9" id="jquery-elastic-slider-js"></script>
      <script type="text/javascript" id="avada-elastic-slider-js-extra">
         /* <![CDATA[ */
         var avadaElasticSliderVars = {
            "tfes_autoplay": "1"
            , "tfes_animation": "sides"
            , "tfes_interval": "3000"
            , "tfes_speed": "800"
            , "tfes_width": "150"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-elastic-slider.js?ver=7.11.9" id="avada-elastic-slider-js"></script>
      <script type="text/javascript" id="avada-drop-down-js-extra">
         /* <![CDATA[ */
         var avadaSelectVars = {
            "avada_drop_down": "1"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-drop-down.js?ver=7.11.9" id="avada-drop-down-js"></script>
      <script type="text/javascript" id="avada-header-js-extra">
         /* <![CDATA[ */
         var avadaHeaderVars = {
            "header_position": "top"
            , "header_sticky": "1"
            , "header_sticky_type2_layout": "menu_and_logo"
            , "header_sticky_shadow": "1"
            , "side_header_break_point": "800"
            , "header_sticky_mobile": "1"
            , "header_sticky_tablet": ""
            , "mobile_menu_design": "modern"
            , "sticky_header_shrinkage": ""
            , "nav_height": "40"
            , "nav_highlight_border": "3"
            , "nav_highlight_style": "bar"
            , "logo_margin_top": "15px"
            , "logo_margin_bottom": "15px"
            , "layout_mode": "wide"
            , "header_padding_top": "0px"
            , "header_padding_bottom": "0px"
            , "scroll_offset": "full"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-header.js?ver=7.11.9" id="avada-header-js"></script>
      <script type="text/javascript" id="avada-menu-js-extra">
         /* <![CDATA[ */
         var avadaMenuVars = {
            "site_layout": "wide"
            , "header_position": "top"
            , "logo_alignment": "left"
            , "header_sticky": "1"
            , "header_sticky_mobile": "1"
            , "header_sticky_tablet": ""
            , "side_header_break_point": "800"
            , "megamenu_base_width": "custom_width"
            , "mobile_menu_design": "modern"
            , "dropdown_goto": "Go to..."
            , "mobile_nav_cart": "Shopping Cart"
            , "mobile_submenu_open": "Open submenu of %s"
            , "mobile_submenu_close": "Close submenu of %s"
            , "submenu_slideout": "1"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-menu.js?ver=7.11.9" id="avada-menu-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/library/bootstrap.scrollspy.js?ver=7.11.9" id="bootstrap-scrollspy-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/assets/min/js/general/avada-scrollspy.js?ver=7.11.9" id="avada-scrollspy-js"></script>
      <script type="text/javascript" id="fusion-responsive-typography-js-extra">
         /* <![CDATA[ */
         var fusionTypographyVars = {
            "site_width": "100%"
            , "typography_sensitivity": "1"
            , "typography_factor": "1.5"
            , "elements": "h1, h2, h3, h4, h5, h6"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-responsive-typography.js?ver=3.11.9" id="fusion-responsive-typography-js"></script>
      <script type="text/javascript" id="fusion-scroll-to-anchor-js-extra">
         /* <![CDATA[ */
         var fusionScrollToAnchorVars = {
            "content_break_point": "800"
            , "container_hundred_percent_height_mobile": "0"
            , "hundred_percent_scroll_sensitivity": "450"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-scroll-to-anchor.js?ver=3.11.9" id="fusion-scroll-to-anchor-js"></script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-general-global.js?ver=3.11.9" id="fusion-general-global-js"></script>
      <script type="text/javascript" id="fusion-video-js-extra">
         /* <![CDATA[ */
         var fusionVideoVars = {
            "status_vimeo": "0"
         };
         /* ]]> */

      </script>
      <script type="text/javascript" src="https://www.thebombayskinclinic.com/wp-content/plugins/fusion-builder/assets/js/min/general/fusion-video.js?ver=3.11.9" id="fusion-video-js"></script>


      <div id="footerfixed">

         <!---<a href="tel:+918433966645" onClick="ga('send','event','Appointment','Click','Footer Fixed','10');"><div id="footerfixeddiv" style="font-family:'Open Sans'">Book an Appointment Call +918433966645</div></a>--->
         <a href="tel:+918433966645">
            <div id="footerfixeddiv" style="font-family:'Open Sans'">Book an Appointment Call +918433966645</div>
         </a>

      </div>
   </div>

</body>
<script>
   'undefined' === typeof _trfq || (window._trfq = []);
   'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({
      'tccl.baseHost': 'secureserver.net'
   }, {
      'ap': 'cpsh-oh'
   }, {
      'server': 'sg2plzcpnl492046'
   }, {
      'dcenter': 'sg2'
   }, {
      'cp_id': '10004262'
   }, {
      'cp_cl': '8'
   }) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.

</script>
<script src='https://img1.wsimg.com/traffic-assets/js/tccl.min.js'></script>
</html>
