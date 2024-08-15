@extends('layout')

@section('mytitle',){{  $service->seo_title }}@endsection('mytitle')

@section('mydescription',){{ $service->seo_description }}@endsection('mydescription')

@section('mycontent')

<section id="slider" class="slider-element include-header" style="background: linear-gradient(90deg, rgba(34, 193, 195, 0.06), rgba(253, 187, 45, 0.1));">
    <div class="container mt-lg-12" style="text-align: center"> 
        <div class="row justify-content-between align-items-center py-lg-6 py-5 service-breadcrumb">
            <h1 class="display-3 color all-ts" style="font-weight: 600">{{ $service->title }}</h1>
        </div>
    </div>
</section>

<section id="service-details" class="service-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <!-- Featured Image -->
          <div class="featured-image">
            <img style="max-height:500px; width: 100%;" src="https://www.fabaesthetics.in/{{ $service->featured_image }}" alt="Featured Image">
          </div>
          <!-- Service Content -->
          <div class="service-content">
            {!! $service->content !!}
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Sidebar with Categories and Social Icons -->
          {{-- <div id="sidebar" class="sidebar">
            <!-- Featured Categories -->

          </div> --}}
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


@endsection('mycontent')