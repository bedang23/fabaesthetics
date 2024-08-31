@extends('new-layout')

@section('mytitle',){{  $service->seo_title }}@endsection('mytitle')

@section('mydescription',){{ $service->seo_description }}@endsection('mydescription')

@section('mycontent')

<section id="slider" class="slider-element include-header" style="background: #f6f6f6;">
    <div  style="text-align: center">
        <div class="row justify-content-between align-items-center py-lg-6 py-5 service-breadcrumb">
            <h1 class="fusion-responsive-typography-calculated" style="--fontSize: 18; --minFontSize: 18;" data-fontsize="18" data-lineheight="normal" >{{ $service->title }}</h1>
        </div>
    </div>
</section>

<section id="service-details" class="service-details">
   <div class="row">
      <div class="service-container">
         <!-- Featured Image -->
         <div class="featured-image">
         <img style="width: 100%;" src="https://www.fabaesthetics.in/{{ $service->featured_image }}" alt="Featured Image">
         </div>
         <!-- Service Content -->
         <div class="service-content">
         {!! $service->content !!}
         </div>
      </div>
   </div>
</section>

<main id="main" class="clearfix width-100">
   <div class="fusion-row" style="max-width:100%;">
      <section id="content" style="width: 100%;">
         <div id="post-8" class="post-8 page type-page status-publish hentry">

@endsection('mycontent')