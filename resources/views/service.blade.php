@extends('layout')

@section('mytitle', 'Expert [Service Name] Solutions | Fabaesthetics Mumbai')

@section('mydescription', "Explore our specialized [Service Name] solutions at Fabaesthetics. Tailored treatments for you in Mumbai")

@section('content')

<section id="slider" class="slider-element include-header" style="background: linear-gradient(90deg, rgba(34, 193, 195, 0.06), rgba(253, 187, 45, 0.1));">
    <div class="container mt-lg-12" style="text-align: center">
        <div class="row justify-content-between align-items-center py-lg-6 py-5" style="padding-top: 12rem !important;">
            <h1 class="display-3 color all-ts" style="font-weight: 600">Service Name</h1>
        </div>
    </div>
</section>


<section>
    <div class="container contact-container">
        <div class="row">
            <div class="col-lg-12" style="text-align: center">
                <div>

                </div>
            </div>
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
            <h2>Acne Treatment</h2>
            <p>Acne can be frustrating, but our clinic offers effective solutions to help you achieve clear, healthy skin. Our acne treatment services include:</p>
            <ul>
              <li>Customized skincare regimen</li>
              <li>Chemical peels</li>
              <li>Microdermabrasion</li>
              <li>Blue light therapy</li>
              <li>Extraction of blackheads and whiteheads</li>
            </ul>
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
              <h3>Featured Categories</h3>
              <ul>
                <li>Category 1</li>
                <li>Category 2</li>
                <li>Category 3</li>
                <li>Category 1</li>
                <li>Category 2</li>
                <li>Category 3</li>
                <li>Category 1</li>
                <li>Category 2</li>
                <li>Category 3</li>
              </ul>
            </div>
            <!-- Social Icons -->
            <div class="social-icons">
              <!-- Your social icons code goes here -->
              <h3>Follow Us</h3>
              <ul>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





@endsection('content')