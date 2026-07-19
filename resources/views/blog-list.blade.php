@extends('new-layout')

@section('mytitle', 'Fab Aesthetic Blog | Expert Skincare Tips, Trends & Solutions')
@section('mydescription', 'Stay updated with Fab Aesthetic’s blog. Explore skincare tips, trends, treatment guides, and expert advice to keep your skin glowing and healthy year-round.')

@section('mycontent')

<section class="blog-list" style="padding-top:0px;">
   <div class="row" style="text-align: center; margin-bottom:20px; background:#f6f6f6; padding:40px 20px;">
      <h1>Our Blogs</h1>
   </div>
   <div class="container">
       <div class="row">
           @foreach ($blogs as $blog)
               <div class="col-md-4">
                   <div class="blog-card">
                       <a href="{{ route('blog.show', ['category' => $blog->category, 'slug' => $blog->slug]) }}">
                           <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}">
                       </a>
                       <div class="blog-content">
                           <h3>
                               <a href="{{ route('blog.show', ['category' => $blog->category, 'slug' => $blog->slug]) }}">
                                   {{ $blog->title }}
                               </a>
                           </h3>
                           <p>{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                           <a href="{{ route('blog.show', ['category' => $blog->category, 'slug' => $blog->slug]) }}" class="read-more">
                               Read More
                           </a>
                       </div>
                   </div>
               </div>
           @endforeach
       </div>

       <!-- Pagination -->
       <div class="pagination">
           {{ $blogs->links() }}
       </div>
   </div>
</section>



@endsection
