@extends('layout')

@section('mytitle', 'Expert [Service Name] Solutions | Fabaesthetics Mumbai')

@section('mydescription', "Explore our specialized [Service Name] solutions at Fabaesthetics. Tailored treatments for you in Mumbai")

@section('content')

<section id="slider" class="slider-element include-header" style="background: linear-gradient(90deg, rgba(34, 193, 195, 0.06), rgba(253, 187, 45, 0.1));">
    <div class="container mt-lg-12" style="text-align: center">
        <div class="row justify-content-between align-items-center py-lg-6 py-5" style="padding-top: 12rem !important;">
            <h1 class="display-3 color all-ts" style="font-weight: 600">Anti Aging Treatment</h1>
        </div>
    </div>
</section>

<section id="service-details" class="service-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <!-- Featured Image -->
          <div class="featured-image">
            <img style="max-height:600px" src="{{ asset('assets/images/home/treatment-two.jpg') }}" alt="">
          </div>
          <!-- Service Content -->
          <div class="service-content">
            <h2>Anti Aging Treatment</h2>
            <p>This article is written by Dr Niketa Sonavane, one of the best Dermatologist in Mumbai. She is a specialist in anti aging treatment in Mumbai. Dr Niketa Sonavane is considered one of the best dermatologist in Mumbai for anti aging treatment. Her special interest is non surgical skin tightening treatment in Mumbai.</p>
            <h3>What is skin aging?</h3>
            <p>Indian faces don’t age well. As we grow older we deal with many skin problems. Earliest signs of aging start around your eyes. You may start to develop dark circles and under eye hollows.</p>
            <p>Next, under eye bags or puffiness may also appear. The eyebrows start to droop and your upper eyelids look hooded.</p>
            <p>Not just that, the entire face also starts to sag. This excess skin causes jowls and your jaw line doesn’t look sharp anymore. Also, the bones of your face start to change. This makes your chin look shorter and the tip of your nose starts to droop.</p>
            <p>Collagen and elastin reduces and smile lines start to form. The skin becomes loose and sagging skin starts to develop.</p>
            <h3>What is anti aging treatment?</h3>
            <p>Anti aging treatments make you look younger. They can also improve your flaws and make you look more beautiful. These treatments are non-surgical. Not only that, they are completely painless.</p>
            <p>A wrinkle removal treatment repairs your skin, reduces pigmentation and makes the skin tighter. And of course, your skin will have the most healthy glow.</p>
            <h3>What are the causes of skin aging?</h3>
            <p><b>Internal Causes</b></p>
            <p>Aging which happens due to internal causes is called intrinsic aging or chronological aging. Factors such as hormonal imbalance and genetic skin type play an important role in your aging process.</p>
            <p><b>External Causes</b></p>
            <p>Aging happens largely due to external factors or environmental causes. This is also known as extrinsic aging or premature aging. Exposure to UV rays of the sun, pollution and smoking fasten the aging process. Other factors such as skin care habits, diet, exercise, alcohol consumption also affect your skin health.</p>
            <p>Our experienced dermatologists will assess your skin condition and recommend the best treatment plan tailored to your needs.</p>
            <p>Contact us today to schedule a consultation and start your journey towards clearer skin!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Sidebar with Categories and Social Icons -->
          <div id="sidebar" class="sidebar">
            <!-- Featured Categories -->
            <div class="featured-categories">
              <!-- Your featured categories code goes here -->
              <h3 style="font-size: 22px">Make Over</h3>
              <ul class="popular-treatments">
                <li><a href="{{ url('service/eyebrow-microblading') }}">Eyebrow Microblading</a></li>
                <li><a href="{{ url('service/eyebrow-micropigmentation') }}">Eyebrow Micropigmentation</a></li>
                <li><a href="{{ url('service/scalp-micropigmentation') }}">Scalp Micropigmentation</a></li>
                <li><a href="{{ url('service/lip-micropigmentation') }}">Lip Micropigmentation</a></li>                         
              </ul>
            </div>
          </div>
          <div id="sidebar-two" class="sidebar-two">
            <!-- Featured Categories -->
            <div class="featured-categories">
              <!-- Your featured categories code goes here -->
              <h3 style="font-size: 22px">Popular Treatments</h3>
              <ul class="popular-treatments">
                <li><a href="{{ url('service/hydra-facial') }}">Hydra Facial</a></li>
                <li><a href="{{ url('service/oxygeneo-facial') }}">Oxygeneo Facial</a></li>
                <li><a href="{{ url('service/microneedling') }}">Microneedling</a></li>
                <li><a href="{{ url('service/chemical-peel') }}">Chemical Peel</a></li>
                <li><a href="{{ url('service/prp') }}">PRP</a></li>
                <li><a href="{{ url('service/dermapen-4') }}">Dermapen 4</a></li>
                <li><a href="{{ url('service/botox') }}">Botox</a></li>
                <li><a href="{{ url('service/derma-filler') }}">Derma Filler</a></li>
                <li><a href="{{ url('service/thread-lift') }}">Thread Lift</a></li>
                <li><a href="{{ url('service/glutathione') }}">Glutathione</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





@endsection('content')