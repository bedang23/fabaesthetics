@extends('new-layout')

@section('mytitle',){{  $blog->seo_title }}@endsection('mytitle')

@section('mydescription',){{ $blog->seo_description }}@endsection('mydescription')

@section('mycontent')

<section id="slider" class="slider-element include-header" style="background: #f6f6f6; padding: 40px 20px;">
    <div  style="text-align: center">
        <div class="row justify-content-between align-items-center py-lg-6 py-5 service-breadcrumb">
            <h1 class="fusion-responsive-typography-calculated" style="--fontSize: 18; --minFontSize: 18;" data-fontsize="18" data-lineheight="normal" >{{ $blog->title }}</h1>
        </div>
    </div>
</section>

<section id="service-details" class="service-details">
   <div class="row">
      <div class="service-container">
         <!-- Featured Image -->
         <div class="featured-image">
         <img style="width: 100%;" src="https://www.fabaesthetics.in/{{ $blog->featured_image }}" alt="Featured Image">
         {{-- <img style="width: 100%;" src="http://127.0.0.1:8000/{{ $blog->featured_image }}" alt="Featured Image"> --}}
         </div>
         <!-- Service Content -->
         <div class="service-content" style="text-align:justify;">
         {!! $blog->content !!}
         </div>
      </div>
   </div>
</section>

<main id="main" class="clearfix width-100">
   <div class="fusion-row" style="max-width:100%;">
      <section id="content" style="width: 100%;">
         <div id="post-8" class="post-8 page type-page status-publish hentry">

@endsection('mycontent')