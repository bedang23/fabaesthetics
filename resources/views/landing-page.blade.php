<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Fab Aesthetics Clinic – Mumbai’s Best Skin & Hair Care Destination</title>
   <meta name="description" content="Experience premium skincare and hair treatments at Fab Aesthetics Clinic, Mumbai’s trusted destination for personalized, advanced solutions. Achieve flawless skin and luscious hair—book your consultation now!" />
   <link rel="canonical" href="{{ url()->current() }}" />

   <meta property="og:type" content="website" />
   <meta property="og:title" content="Fab Aesthetics Clinic – Mumbai’s Best Skin & Hair Care Destination" />
   <meta property="og:description" content="Experience premium skincare and hair treatments at Fab Aesthetics Clinic, Mumbai’s trusted destination for personalized, advanced solutions. Achieve flawless skin and luscious hair—book your consultation now!" />
   <meta property="og:url" content="{{ url()->current() }}" />
   <meta property="og:site_name" content="Fab Aesthetics." />
   <meta property="og:image" content="https://www.fabaesthetics.in/assets/images/home/clinical-care.png" />
   <meta property="og:image:width" content="1920" />
   <meta property="og:image:height" content="1080" />
   <meta property="og:image:type" content="image/png" />
   <meta name="twitter:card" content="summary_large_image" />


   <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <style>
      html,
      body {
         overflow-x: hidden;
         width: 100%;
      }


      body {
         font-family: 'DM Sans', sans-serif;
         line-height: 1.6;
      }

      .cta-button {
         font-weight: bold;
         border: 2px solid black;
         color: black;
         background-color: white;
         padding: 10px 20px;
         border-radius: 5px;
         transition: all 0.3s ease;
      }

      .cta-button:hover {
         background-color: black;
         color: white;
      }

      .hero-section {
         background-color: #f8f9fa;
         text-align: center;
         margin-top: 80px;
      }

      .form-container {
         max-width: 400px;
         margin: 0 auto;
         padding: 20px;
         border: 1px solid #ddd;
         border-radius: 10px;
         background-color: #fff;
      }

      .form-container .form-group {
         margin-bottom: 15px;
      }

      .about-section {
         padding: 80px 0px;
         background: #f8fbfd;
      }

      .about-section .text {
         max-width: 400px;
      }

      .about-section img {
         width: 100%;
         height: auto;
         border-radius: 10px;
      }

      .about-section .right-column {
         padding-left: 60px;
      }


      .services-section {
         margin-top: 50px;
         margin-bottom: 50px;
      }

      .services-section .container {
         text-align: center;
      }

      .services-section h2 {
         margin-bottom: 40px;
      }

      .services-section .card {
         border: none;
         border-radius: 10px;
         overflow: hidden;
         text-align: center;
         color: #5e5b5b;
         background: #f2f2f2;
      }

      .services-section .card img {
         width: 100%;
         height: 200px;
         object-fit: cover;
      }

      .services-section .card-title {
         font-weight: bold;
         margin: 10px 0;
      }


      .testimonials-section {
         margin-top: 50px;
         margin-bottom: 50px;
      }

      .testimonials-section .container {
         text-align: center;
      }

      .testimonials-section h2 {
         margin-bottom: 40px;
      }



      .video-section {
         position: relative;
         overflow: hidden;
         height: 100vh;
         display: flex;
         justify-content: center;
         align-items: center;
         cursor: none;
         /* Hides the cursor */
      }

      .video-section iframe {
         pointer-events: none;
         /* Prevents interaction */
      }

      .cta-section {
         background-color: #f1f1f1;
         padding: 40px 0;
      }

      .testimonials-section .card {
         border: 1px solid #ddd;
         border-radius: 10px;
         padding: 20px;
         margin-bottom: 20px;
      }


      .before-after-section {
         padding: 80px 0px;
         background: #eff9ff;
      }

      .before-after-section .container {
         text-align: center;
      }

      .before-after-section h2 {
         margin-bottom: 40px;
      }

      .before-after-section img {
         width: 100%;
         border-radius: 8px;
      }

      .before-after-section .batitle {
         font-weight: bold;
         font-size: 1.25rem;
      }


      .landing-page-header {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         background: white;
         padding: 8px 8px;
         z-index: 1000;
         /* Ensures it's above other elements */
         box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
         /* Optional: Adds a shadow for better visibility */
      }

      .landing-page-logo {
         max-width: 160px;
      }

      .enquire-btn {
         background: black;
         color: white;
      }

      .enquire-btn:hover {
         background: #4b4848;
         color: white;
      }

      .landing-page-title {
         align-content: center;
         text-align: center;
      }

      .landing-page-hero-image {
         width: 100%;
      }

      @media (max-width: 767px) {
         .hidden-column {
            display: none;
         }

         .about-section {
            padding-bottom: 40px;
         }

         .about-section .right-column {
            padding-left: 20px;
            padding-top: 25px;
         }

         .services-section {
            margin-bottom: 20px;
         }

         .video-section {
            height: 250px;
         }

         .before-after-section {
            padding-bottom: 20px;
         }
      }

      /* Slider CSS */
      .card-slider-wrapper {
         display: flex;
         align-items: center;
         position: relative;
      }

      .slider-container {
         width: 100%;
         overflow: hidden;
      }

      .cards-wrapper {
         display: flex;
         transition: transform 0.5s ease-in-out;
      }

      .card {
         min-width: calc(96% / 3);
         padding: 20px;
         background: #f1f1f1;
         margin-right: 7px;
         margin-left: 7px;
         border-radius: 8px;
         text-align: center;
      }

      @media (max-width: 768px) {
         .card {
            min-width: 100%;
            margin-left: 0px;
            margin-right: 15px;
         }
         
         .landing-page-title h1{
             margin-top:20px;
             margin-bottom: 20px;
         }
      }

      .prev-btn,
      .next-btn {
         background: rgba(0, 0, 0, 0.5);
         color: white;
         border: none;
         padding: 10px;
         cursor: pointer;
      }

      .dark-link{
         color: black;
      }

      .dark-link:hover{
         color: #5e5b5b;
         text-decoration: none;
      }

      .social-icons a{
         color: #000;
         padding: 5px;
         font-size: 20px;
      }

      .social-icons a:hover{
         color: #474646;
      }

         /* Floating WhatsApp Button */
         .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 48px;
            background-color: #25d366;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-decoration: none;
            font-size: 30px;
            transition: transform 0.3s ease-in-out;
            z-index: 999;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        .whatsapp-float img {
            width: 35px;
            height: 35px;
        }
        /* Floating Call Button */
         .call-float {
             position: fixed;
             bottom: 80px; /* Sits above WhatsApp button */
             right: 20px;
             width: 50px;
             height: 48px;
             background-color: #25d366; /* Bootstrap green */
             color: white;
             border-radius: 50%;
             display: flex;
             align-items: center;
             justify-content: center;
             box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
             text-decoration: none;
             font-size: 30px;
             transition: transform 0.3s ease-in-out;
             z-index: 999;
         }

         .call-float:hover {
             transform: scale(1.1);
         }

         .call-float img {
             width: 28px;
             height: 28px;
         }


   </style>
   
   
   <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-660912399">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-660912399');
    </script>
   <link rel="stylesheet" href="{{ asset('new-assets/css/fab-brand.css') }}?v=2">
</head>
<body>

       <!-- WhatsApp Floating Button -->
   <a href="https://wa.me/918433966645" target="_blank" class="whatsapp-float">
      <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
   </a>
   <!-- Call Float Button -->
   <a href="tel:918433966645" class="call-float" title="Call Now">
      <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Call">
   </a>


   <section class="landing-page-header">
      <div class="row">
         <div class="col-md-3 col-6" style="text-align:center;">
            <a href="{{ '/' }}"><img class="landing-page-logo" src="{{ asset('assets/images/logo.png') }}" alt="Fabaesthetics Logo"></a>
         </div>
         <div class="col-md-6 hidden-column">

         </div>
         <div class="col-md-3 col-6" style="text-align: center; align-content:center">
            <a href="" class="btn enquire-btn">Enquire Now</a>
         </div>
      </div>
   </section>

   <header class="hero-section">
      <div class="row">
         <div class="col-md-4">
            <img class="landing-page-hero-image" src="{{ asset('new-assets/images/advertisement.png') }}" alt="landing-page-hero-image">
         </div>
         <div class="col-md-4 landing-page-title">
            <h1>Achieve Healthy, Glowing Skin with Expert Care!</h1>
            <p class="lead">Transform Your Skin Today with Advanced Dermatology Solutions.</p>
         </div>
         <div class="col-md-4" style="align-content: center;">
            <div class="form-container">
               <form method="post" action="{{ route('landingpageform.submit') }}">
                  @csrf
                  @include('partials.antispam')
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
                        <input type="submit" id="submit" name="send" class="wpcf7-form-control wpcf7-submit has-spinner" style="background-color: #000;  border-block: #1f9e96; color:white; padding: 4px 8px; border-radius: 6px;" value="Send Message">
                        <div id="simple-msg"></div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </header>

   <section class="services-section py-5">
      <div class="container">
         <h2>Comprehensive Skin Care Treatments for All Your Needs</h2>
         <div class="row">
            <div class="col-12">
               <div class="card-slider-wrapper">
                  <button class="prev-btn"><i class="fa-solid fa-arrow-left"></i></button>
                  <div class="slider-container">
                     <div class="cards-wrapper">

                        <div class="card">
                           <img src="https://fabaesthetics.in/images/1714934494.jpg" alt="Acne Treatment">
                           <div class="card-body">
                              <h5 class="card-title"><a href="{{ ('services/skin-treatment/acne-treatment') }}" style="color: black;">Acne Treatment</a></h5>
                              <p class="card-text">For clearer, and healthier skin .Our Acne Treatment effectively target breakouts and prevent future flare-ups.</p>
                           </div>
                        </div>

                        <div class="card">
                           <img src="https://www.fabaesthetics.in/images/1714938008.jpg" alt="Pigmentation Treatment">
                           <div class="card-body">
                              <h5 class="card-title"><a href="{{ ('services/skin-treatment/pigmentation-treatment') }}" style="color: black;">Pigmentation Treatment</a></h5>
                              <p class="card-text">Reduce pigmentation and achieve an even skin tone with our advanced Pigmentation Treatment, designed to restore your natural glow.</p>
                           </div>
                        </div>

                        <div class="card">
                           <img src="https://www.fabaesthetics.in/images/1714935047.jpg" alt="Acne Scar Treatment">
                           <div class="card-body">
                              <h5 class="card-title"><a href="{{ ('services/skin-treatment/acne-scar-treatment') }}" style="color: black;">Acne Scar Treatment</a></h5>
                              <p class="card-text">Smooth out acne scars and improve skin texture with our Acne Scar Treatment, promoting a flawless complexion.</p>
                           </div>
                        </div>

                        <div class="card">
                           <img src="https://www.fabaesthetics.in/images/1714938429.jpg" alt="Skin Lightening Treatment">
                           <div class="card-body">
                              <h5 class="card-title"><a href="{{ ('services/skin-treatment/skin-lightening-treatment') }}" style="color: black;">Skin Lightening Treatment</a></h5>
                              <p class="card-text">Brighten your skin tone and enhance radiance with our Skin Lightening Treatment, formulated to reveal a luminous complexion.</p>
                           </div>
                        </div>

                        <div class="card">
                           <img src="https://www.fabaesthetics.in/images/1714938801.jpg" alt="Dark Circle Treatment">
                           <div class="card-body">
                              <h5 class="card-title"><a href="{{ ('services/skin-treatment/dark-circle-treatment') }}" style="color: black;">Dark Circle Treatment</a></h5>
                              <p class="card-text">Say goodbye to tired eyes with our Dark Circle Treatment, reducing under-eye darkness for a refreshed look. </p>
                           </div>
                        </div>

                        <div class="card">
                           <img src="https://www.fabaesthetics.in/images/1714941470.jpg" alt="Anti-Aging Treatment">
                           <div class="card-body">
                              <h5 class="card-title"><a href="{{ ('services/skin-treatment/anti-ageing-treatment') }}" style="color: black;">Anti-Ageing Treatment </a></h5>
                              <p class="card-text">Turn back time with our Anti-Ageing Treatment, boosting collagen and reducing fine lines for youthful, firm skin.</p>
                           </div>
                        </div>

                        <div class="card">
                           <img src="https://www.fabaesthetics.in/images/1714941776.jpg" alt="Anti Wrinkle Treatment">
                           <div class="card-body">
                              <h5 class="card-title"><a href="{{ ('services/skin-treatment/botox-treatment') }}" style="color: black;">Anti Wrinkle Treatment </a></h5>
                              <p class="card-text">Smooth wrinkles and refresh your appearance with our Anti Wrinkle Treatment, designed for a naturally youthful look.</p>
                           </div>
                        </div>



                        {{-- Data Copied for ChatGPT --}}
                        <div class="card">
                           <img src="https://www.fabaesthetics.in/images/1719924074.jpg" alt="Dermal Fillers">
                           <div class="card-body">
                               <h5 class="card-title"><a href="{{ ('services/skin-treatment/dermal-filler') }}" style="color: black;">Dermal Fillers</a></h5>
                               <p class="card-text">Restore lost volume and enhance facial contours with our premium Dermal Fillers for a youthful, sculpted appearance.</p>
                           </div>
                        </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1719995910.jpg" alt="Lip Filler">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/lip-filler') }}" style="color: black;">Lip Filler</a></h5>
                                       <p class="card-text">Plump and define your lips with our Lip Filler treatment, ensuring natural-looking volume and hydration.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1719996102.jpg" alt="Cheek Filler">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/cheek-filler') }}" style="color: black;">Cheek Filler</a></h5>
                                       <p class="card-text">Enhance your cheekbones and restore lost volume with our Cheek Filler for a youthful, lifted look.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720005755.webp" alt="Chin Filler">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/chin-filler') }}" style="color: black;">Chin Filler</a></h5>
                                       <p class="card-text">Achieve a well-defined jawline and balanced profile with our Chin Filler treatment.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720005168.jpg" alt="Nose Filler">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/nose-filler') }}" style="color: black;">Nose Filler</a></h5>
                                       <p class="card-text">Reshape and refine your nose without surgery using our advanced Nose Filler treatment.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720006060.png" alt="Neck Filler">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/neck-filler') }}" style="color: black;">Neck Filler</a></h5>
                                       <p class="card-text">Rejuvenate and firm the delicate neck area with our Neck Filler, restoring smoothness and elasticity.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720006352.jpg" alt="Hand Filler">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/hand-filler') }}" style="color: black;">Hand Filler</a></h5>
                                       <p class="card-text">Reverse signs of ageing on your hands with our Hand Filler, replenishing lost volume for a youthful appearance.</p>
                                    </div>
                              </div>


                              <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720006678.jpg" alt="Body Filler">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/body-filler') }}" style="color: black;">Body Filler</a></h5>
                                    <p class="card-text">Enhance and sculpt body contours with our Body Filler, designed for natural, long-lasting results.</p>
                                 </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720006921.jpg" alt="Skin Booster">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/skin-booster') }}" style="color: black;">Skin Booster</a></h5>
                                       <p class="card-text">Deeply hydrate and nourish your skin with our Skin Booster, leaving it plump, radiant, and youthful.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720007392.png" alt="Thread Lift Face">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/thread-lift-face') }}" style="color: black;">Thread Lift Face</a></h5>
                                       <p class="card-text">Lift and tighten sagging skin with our Thread Lift Face treatment, achieving a firmer, youthful look.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720007933.jpg" alt="Nose Thread Lift">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/nose-thread-lift') }}" style="color: black;">Nose Thread Lift</a></h5>
                                       <p class="card-text">Reshape and refine your nose with our non-surgical Nose Thread Lift for a more contoured look.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720008222.jpg" alt="Lip Threads">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/lip-threads') }}" style="color: black;">Lip Threads</a></h5>
                                       <p class="card-text">Define and enhance your lips naturally with our Lip Threads for a subtle, long-lasting effect.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720008646.jpg" alt="Body Threads">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/body-threads') }}" style="color: black;">Body Threads</a></h5>
                                       <p class="card-text">Firm and tighten skin across the body with our Body Threads, ensuring a sculpted appearance.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720009765.png" alt="Eyebrow Thread Lift">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/eye-brow-thread-lift') }}" style="color: black;">Eyebrow Thread Lift</a></h5>
                                       <p class="card-text">Lift and shape your brows for a youthful, refreshed appearance with our Eyebrow Thread Lift.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720010418.webp" alt="Radio Frequency">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/radio-frequency') }}" style="color: black;">Radio Frequency</a></h5>
                                       <p class="card-text">Tighten and rejuvenate your skin with our advanced Radio Frequency treatment for firmer, youthful skin.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720010742.jpg" alt="Microneedling RF">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/microneedling-rf') }}" style="color: black;">Microneedling RF</a></h5>
                                       <p class="card-text">Stimulate collagen production and improve skin texture with our Microneedling RF treatment for a smoother complexion.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720011289.jpg" alt="Hair Fall Treatment">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/hair-fall-treatment') }}" style="color: black;">Hair Fall Treatment</a></h5>
                                       <p class="card-text">Combat hair loss and promote healthy regrowth with our advanced Hair Fall Treatment.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720012121.jpg" alt="GFC Hair Treatment">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/gfc-hair-treatment') }}" style="color: black;">GFC Hair Treatment</a></h5>
                                       <p class="card-text">Nourish your scalp and stimulate new hair growth with our GFC Hair Treatment for thicker, stronger hair.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720012956.jpg" alt="Dandruff Treatment">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/dandruff-treatment') }}" style="color: black;">Dandruff Treatment</a></h5>
                                       <p class="card-text">Eliminate dandruff and restore scalp health with our expert Dandruff Treatment.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720015009.webp" alt="Hair Transplant">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/hair-transplant') }}" style="color: black;">Hair Transplant</a></h5>
                                       <p class="card-text">Regain fuller, natural hair with our state-of-the-art Hair Transplant procedure.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720015883.jpg" alt="Laser Hair Reduction">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/laser-hair-reduction') }}" style="color: black;">Laser Hair Reduction</a></h5>
                                       <p class="card-text">Say goodbye to unwanted hair with our Laser Hair Reduction for smooth, hair-free skin.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720016480.jpg" alt="Medi Facials">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/medi-facials') }}" style="color: black;">Medi Facials</a></h5>
                                       <p class="card-text">Revitalize and nourish your skin with our customized Medi Facials for a healthy glow.</p>
                                    </div>
                              </div>

                              <div class="card">
                                    <img src="https://www.fabaesthetics.in/images/1720016767.jpg" alt="Hydrafacial">
                                    <div class="card-body">
                                       <h5 class="card-title"><a href="{{ ('services/skin-treatment/hydrafacial') }}" style="color: black;">Hydrafacial</a></h5>
                                       <p class="card-text">Deep cleanse, hydrate, and rejuvenate your skin with our luxurious Hydrafacial.</p>
                                    </div>
                              </div>

                              <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720017516.jpg" alt="Eyebrow Microblading">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/eyebrow-microblading') }}" style="color: black;">Eyebrow Microblading</a></h5>
                                    <p class="card-text">Achieve naturally defined brows with our precise Eyebrow Microblading treatment.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720017857.jpg" alt="Eyebrow Micropigmentation">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/eyebrow-micropigmentation') }}" style="color: black;">Eyebrow Micropigmentation</a></h5>
                                    <p class="card-text">Enhance your brows with our long-lasting Eyebrow Micropigmentation for fuller, perfect arches.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720018375.jpg" alt="Scalp Micropigmentation">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/scalp-micropigmentation') }}" style="color: black;">Scalp Micropigmentation</a></h5>
                                    <p class="card-text">Create the illusion of fuller hair with our Scalp Micropigmentation treatment.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720018927.jpg" alt="Lip Micropigmentation">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/lip-micropigmentation') }}" style="color: black;">Lip Micropigmentation</a></h5>
                                    <p class="card-text">Enhance your lips with our Lip Micropigmentation, giving them a naturally tinted, defined look.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720019468.jpg" alt="Photo Facial">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/photo-facial') }}" style="color: black;">Photo Facial</a></h5>
                                    <p class="card-text">Rejuvenate your skin with our Photo Facial, reducing pigmentation and boosting radiance.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720020348.avif" alt="Carbon Facial">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/carbon-facial') }}" style="color: black;">Carbon Facial</a></h5>
                                    <p class="card-text">Deep cleanse and detoxify your skin with our Carbon Facial for a refreshed, glowing look.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720020780.jpg" alt="Oxygeneo Facial">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/oxygeneo-facial') }}" style="color: black;">Oxygeneo Facial</a></h5>
                                    <p class="card-text">Oxygenate and hydrate your skin with our Oxygeneo Facial, leaving it fresh and youthful.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720021318.jpg" alt="Carboxy Facial">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/carboxy-facial') }}" style="color: black;">Carboxy Facial</a></h5>
                                    <p class="card-text">Enhance skin elasticity and glow with our Carboxy Facial for deep rejuvenation.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720021592.jpg" alt="Vampire Facial">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/vampire-facial') }}" style="color: black;">Vampire Facial</a></h5>
                                    <p class="card-text">Boost collagen and restore skin vitality with our rejuvenating Vampire Facial.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720022372.jpg" alt="Pink Shot Facial">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/pink-shot-facial') }}" style="color: black;">Pink Shot Facial</a></h5>
                                    <p class="card-text">Achieve a naturally rosy glow with our Pink Shot Facial for fresh, radiant skin.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720024644.webp" alt="Korean Glass Skin Facial">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/korean-glass-skin-facial') }}" style="color: black;">Korean Glass Skin Facial</a></h5>
                                    <p class="card-text">Get flawless, luminous skin with our Korean Glass Skin Facial for a dewy finish.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720024968.webp" alt="BB Glow Facial">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/bb-glow-facial') }}" style="color: black;">BB Glow Facial</a></h5>
                                    <p class="card-text">Even out your skin tone with our BB Glow Facial, giving a semi-permanent foundation effect.</p>
                                 </div>
                           </div>

                           <div class="card">
                                 <img src="https://www.fabaesthetics.in/images/1720025235.jpg" alt="Skin Polishing">
                                 <div class="card-body">
                                    <h5 class="card-title"><a href="{{ ('services/skin-treatment/skin-polishing') }}" style="color: black;">Skin Polishing</a></h5>
                                    <p class="card-text">Exfoliate and brighten your skin with our Skin Polishing treatment for a smoother texture.</p>
                                 </div>
                           </div>

                           <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720026017.webp" alt="Hydraneedling">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/skin-treatment/hydraneedling') }}" style="color: black;">Hydraneedling</a></h5>
                                 <p class="card-text">Deeply hydrate and rejuvenate your skin with our Hydraneedling treatment for a radiant glow.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720026240.jpg" alt="Dermaroller">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/skin-treatment/dermaroller') }}" style="color: black;">Dermaroller</a></h5>
                                 <p class="card-text">Stimulate collagen production with our Dermaroller treatment for smoother, firmer skin.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720026604.jpg" alt="Dermapen 4">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/skin-treatment/dermapen') }}" style="color: black;">Dermapen 4</a></h5>
                                 <p class="card-text">Improve skin texture and reduce scars with our advanced Dermapen 4 microneedling treatment.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720027162.webp" alt="Chemical Peel">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/skin-treatment/chemical-peel') }}" style="color: black;">Chemical Peel</a></h5>
                                 <p class="card-text">Resurface your skin with our Chemical Peel, revealing a brighter, even complexion.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720028055.jpg" alt="Advanced Whitening Peel">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/skin-treatment/advanced-whitening-peel') }}" style="color: black;">Advanced Whitening Peel</a></h5>
                                 <p class="card-text">Achieve a luminous, even skin tone with our Advanced Whitening Peel.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720028566.jpg" alt="Glow Peel">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/skin-treatment/glow-peel') }}" style="color: black;">Glow Peel</a></h5>
                                 <p class="card-text">Brighten and refresh your skin with our Glow Peel for a youthful radiance.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720028931.jpg" alt="Ultrasonic Treatment">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/skin-treatment/ultrasonic-treatment') }}" style="color: black;">Ultrasonic Treatment</a></h5>
                                 <p class="card-text">Boost skincare absorption and rejuvenate your skin with our Ultrasonic Treatment.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720029510.jpg" alt="Oxyjet Treatment">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/skin-treatment/oxyjet-treatment') }}" style="color: black;">Oxyjet Treatment</a></h5>
                                 <p class="card-text">Oxygenate and deeply nourish your skin with our Oxyjet Treatment for instant freshness.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720005576.jpg" alt="Jawline Filler">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/cosmetic-treatment/jawline-filler') }}" style="color: black;">Jawline Filler</a></h5>
                                 <p class="card-text">Define and sculpt your jawline with our Jawline Filler for a sharper, contoured look.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720010108.jpg" alt="HIFU">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/cosmetic-treatment/hifu') }}" style="color: black;">HIFU</a></h5>
                                 <p class="card-text">Tighten and lift your skin non-surgically with our HIFU treatment for youthful firmness.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720013880.jpg" alt="Hair Regrowth Treatment">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/hair-treatment/hair-regrowth-treatment') }}" style="color: black;">Hair Regrowth Treatment</a></h5>
                                 <p class="card-text">Stimulate natural hair growth with our Hair Regrowth Treatment for thicker, healthier hair.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720016073.jpg" alt="Laser Hair Removal">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/laser-treatment/laser-hair-removal') }}" style="color: black;">Laser Hair Removal</a></h5>
                                 <p class="card-text">Experience long-lasting smoothness with our Laser Hair Removal for soft, hair-free skin.</p>
                              </div>
                        </div>

                        <div class="card">
                              <img src="https://www.fabaesthetics.in/images/1720025837.jpg" alt="Microneedling">
                              <div class="card-body">
                                 <h5 class="card-title"><a href="{{ ('services/skin-rejuvenation-treatment/microneedling') }}" style="color: black;">Microneedling</a></h5>
                                 <p class="card-text">Improve skin texture, reduce scars, and boost collagen with our Microneedling treatment.</p>
                              </div>
                        </div>




                     </div>
                  </div>
                  <button class="next-btn"><i class="fa-solid fa-arrow-right"></i></button>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="cta-section text-center py-5">
      <div class="container">
         <h2 class="font-weight-bold">Book Your Consultation Now!</h2>
      </div>
   </section>

   <section class="testimonials-section ">
      <div class="container">
         <h2>Our Client Testimonials</h2>
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <p class="fw-bold">Twinkle Matta</p>
                     <p class="text-warning mb-2">★★★★★</p>
                     <p>"Best Dermatologist in town! Couldn't go to any other doctor. My skin went from bad to fab in just no time."</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <p class="fw-bold">Teri Fijak</p>
                     <p class="text-warning mb-2">★★★★★</p>
                     <p>"So I'm from the USA, visiting friends in India. Was looking to get Anti Wrinkle Treatment while visiting. Came across Fab Aesthetic and read the great reviews she had. So I gave it a go and made an appointment. So happy I did, very happy with the results."</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <p class="fw-bold">Nida Shaikh</p>
                     <p class="text-warning mb-2">★★★★★</p>
                     <p>"Pigmentation treatment I have done in Fab Aesthetics clinic. Thank you Dr. Samreen Khan for your proper guidance. My face is much better now. Highly recommended."</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="video-section">
      <iframe src="https://www.youtube.com/embed/LuX8SFtAV70?autoplay=1&loop=1&playlist=LuX8SFtAV70&controls=0&mute=1&rel=0&modestbranding=1&showinfo=0&iv_load_policy=3&disablekb=1" allow="autoplay; fullscreen" frameborder="0" width="100%" height="100%">
      </iframe>
   </section>

   <section class="before-after-section">
      <div class="container">
         <h2>Before-and-After Gallery</h2>
         <div class="row">
            <div class="col-md-4 mb-4">
               <img src="{{ asset('assets/images/before-after/nose-filler.jpg') }}" alt="Nose Filler">
               <p class="batitle text-center mt-2">Nose Filler</p>
            </div>
            <div class="col-md-4 mb-4">
               <img src="{{ asset('assets/images/before-after/botox.jpg') }}" alt="Neuromodulator">
               <p class="batitle text-center mt-2">Neuromodulator</p>
            </div>
            <div class="col-md-4 mb-4">
               <img src="{{ asset('assets/images/before-after/cheek-lift.jpg') }}" alt="Cheek Lift">
               <p class="batitle text-center mt-2">Cheek Lift</p>
            </div>
            <div class="col-md-4 mb-4">
               <img src="{{ asset('assets/images/before-after/hand-filler.jpg') }}" alt="Hand Filler">
               <p class="batitle text-center mt-2">Hand Filler</p>
            </div>
            <div class="col-md-4 mb-4">
               <img src="{{ asset('assets/images/before-after/lip-filler.jpg') }}" alt="Lip Filler">
               <p class="batitle text-center mt-2">Lip Filler</p>
            </div>
            <div class="col-md-4 mb-4">
               <img src="{{ asset('assets/images/before-after/thread-lift.jpg') }}" alt="Thread Lift">
               <p class="batitle text-center mt-2">Thread Lift</p>
            </div>
         </div>
      </div>
   </section>

   <section class="about-section">
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <div>
                  <img src="{{ asset('assets/images/dr-samreen-khan.jpg') }}" alt="Dr Samreen Khan">
               </div>
            </div>
            <div class="col-md-7 right-column" style="align-content: center;">
               <h2>About the Skin Specialist</h2>
               <p class="text">Dr. Samreen Khan is the clinical head at Fab Aesthetics. She has graduated from the prestigious Maharashtra University of Health Sciences(MUHS), Nasik and is a proud “Gold medalist”. She is an internationally trained aesthetic cosmetologist.</p>
            </div>
         </div>
      </div>
   </section>

   <section class="info-section py-5">
      <div class="row">
         <div class="col-md-6" style="text-align: center; margin-bottom:30px;">
            <h4 class="mb-3">Visit Us</h4>
            <p>Fab Aesthetics - Dr. Samreen Khan,<br>
               Unit no. 110, 1st floor,<br>
               Vicino Mega Mall, Off New Link Road,<br>
               Oshiwara, Andheri West,<br>
               Mumbai 400102 </p>
            <div class="fusion-text fusion-text-17">
               <div class="social-icons">
                   <a href="https://www.facebook.com/share/zgPr6E4zjWT5gbgb/?mibextid=JRoKGi" target="_blank"><i class="fab fa-facebook-f"></i></a>
                   <a href="https://www.instagram.com/fabaestheticsmumbai?igsh=d2c0ZTVwdWduc3do" target="_blank"><i class="fab fa-instagram"></i></a>
                   <a href="https://youtube.com/@skinclinicmumbai-fabaesthe1467?si=vv7AlaFYv-ny-eIp " target="_blank"><i class="fab fa-youtube"></i></a>
               </div>
            </div>
         </div>
         <div class="col-md-6" style="text-align: center">
            <h4>Call Us to Know More:</h4>
            <a class="dark-link" href="tel:+918433966645">+91-8433966645</a>
            <p style="margin: 16px 10px;">OR</p>
            <h5>Email Us:</h5>
            <a class="dark-link" href="mailto:info@fabaesthetics.in">info@fabaesthetics.in</a>
         </div>
      </div>
   </section>


   <footer class="text-center py-4" style="background: aliceblue;">
      <p style="margin-bottom: 0px;">&copy; 2025 Fabeaesthetics. All rights reserved.</p>
   </footer>

   <!-- Popup Form Overlay -->
   <div id="popup-overlay" class="popup-overlay">
      <div class="popup-content">
         <span class="close-btn">&times;</span>
         <div class="form-container">
            <h4 class="text-center">Enquire Now</h4>
            <form method="post" action="{{ route('landingpageform.submit') }}">
               @csrf
               @include('partials.antispam')
               <div class="form-group">
                  <input required name="name" type="text" class="form-control" placeholder="Enter Name..">
               </div>
               <div class="form-group">
                  <input required name="email" type="email" class="form-control" placeholder="Enter Email..">
               </div>
               <div class="form-group">
                  <input required name="phone" type="number" class="form-control" placeholder="Enter Phone Number">
               </div>
               <div class="form-group">
                  <textarea required name="message" rows="2" class="form-control" placeholder="Message.."></textarea>
               </div>
               <div class="text-center">
                  <input type="submit" class="btn enquire-btn" value="Send Message">
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Popup Form -->
   @if(session('popupMessage'))
   <div id="popup-success-message" class="popup-success-message">
      {{ session('popupMessage') }}
   </div>
   @endif

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



   <script>
      document.addEventListener("DOMContentLoaded", function() {
         // Popup Logic
         let popupOverlay = document.getElementById("popup-overlay");
         let enquireBtn = document.querySelector(".enquire-btn");
         let closeBtn = document.querySelector(".close-btn");

         if (popupOverlay && enquireBtn && closeBtn) {
            // Show popup after 15 seconds
            setTimeout(function() {
               popupOverlay.style.display = "flex";
            }, 15000);

            // Show popup on "Enquire Now" button click
            enquireBtn.addEventListener("click", function(event) {
               event.preventDefault();
               popupOverlay.style.display = "flex";
            });

            // Close popup on close button click
            closeBtn.addEventListener("click", function() {
               popupOverlay.style.display = "none";
            });

            // Close popup if user clicks outside the form
            popupOverlay.addEventListener("click", function(event) {
               if (event.target === popupOverlay) {
                  popupOverlay.style.display = "none";
               }
            });

            // Check if the popupMessage exists and show it for 5 seconds
            let popupMessage = "{{ session('popupMessage') }}";
            if (popupMessage.trim() !== "") {
               let successMessage = document.createElement('div');
               successMessage.classList.add('popup-success-message');
               successMessage.textContent = popupMessage;
               document.body.appendChild(successMessage);

               // Show success message
               successMessage.style.display = 'block';

               // Hide after 5 seconds
               setTimeout(function() {
                  successMessage.style.display = 'none';
               }, 5000);
            }
         }

         // Card Slider Logic
         const prevBtn = document.querySelector('.prev-btn');
         const nextBtn = document.querySelector('.next-btn');
         const cardsWrapper = document.querySelector('.cards-wrapper');
         const card = document.querySelector('.card');

         if (prevBtn && nextBtn && cardsWrapper && card) {
            const cardWidth = card.offsetWidth + 15; // Ensure cardWidth is correctly calculated
            let currentIndex = 0;

            nextBtn.addEventListener('click', () => {
               if (currentIndex < cardsWrapper.children.length - 3) {
                  currentIndex++;
                  cardsWrapper.style.transform = `translateX(-${cardWidth * currentIndex}px)`;
               }
            });

            prevBtn.addEventListener('click', () => {
               if (currentIndex > 0) {
                  currentIndex--;
                  cardsWrapper.style.transform = `translateX(-${cardWidth * currentIndex}px)`;
               }
            });
         }
      });
   </script>


   <!-- CSS for Popup -->
   <style>
      .popup-success-message {
         background-color: #4CAF50;
         /* Green */
         color: white;
         padding: 10px;
         border-radius: 5px;
         text-align: center;
         position: fixed;
         top: 20%;
         left: 50%;
         transform: translateX(-50%);
         z-index: 9999;
         display: none;
      }

      .popup-overlay {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.6);
         display: none;
         align-items: center;
         justify-content: center;
         z-index: 1000;
      }

      .popup-content {
         background: white;
         padding: 20px;
         border-radius: 10px;
         max-width: 600px;
         width: 90%;
         box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
         position: relative;
      }

      .close-btn {
         position: absolute;
         top: 10px;
         right: 15px;
         font-size: 24px;
         cursor: pointer;
      }

   </style>


</body>
</html>
