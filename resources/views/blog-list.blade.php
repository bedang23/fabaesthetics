@extends('new-layout')

@section('mytitle', 'Fab Aesthetic Blog | Expert Skincare Tips, Trends & Solutions')
@section('mydescription', 'Stay updated with Fab Aesthetic’s blog. Explore skincare tips, trends, treatment guides, and expert advice to keep your skin glowing and healthy year-round.')

@section('mycontent')

<div class="fab-blog-hero">
   <span class="fab-eyebrow">FAB Aesthetics Journal</span>
   <h1>Our Blogs</h1>
   <p>Skincare tips, treatment guides and expert advice to keep your skin glowing and healthy year-round.</p>
</div>

<section class="blog-list" style="padding-top:44px;">
   <div class="container">
       @if(count($blogs))
       <div class="row fab-blog-grid">
           @foreach ($blogs as $blog)
               <div class="col-lg-4 col-md-6">
                   <article class="fab-blog-card">
                       <a class="fab-blog-thumb" href="{{ route('blog.show', ['category' => $blog->category, 'slug' => $blog->slug]) }}">
                           <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" loading="lazy">
                           <span class="fab-blog-cat">{{ ucwords(str_replace('-', ' ', $blog->category)) }}</span>
                       </a>
                       <div class="fab-blog-body">
                           <div class="fab-blog-date"><i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</div>
                           <h3 class="fab-blog-title">
                               <a href="{{ route('blog.show', ['category' => $blog->category, 'slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                           </h3>
                           <p class="fab-blog-excerpt">{{ Str::limit(strip_tags($blog->content), 130) }}</p>
                           <a href="{{ route('blog.show', ['category' => $blog->category, 'slug' => $blog->slug]) }}" class="fab-blog-readmore">
                               Read More <i class="fas fa-arrow-right"></i>
                           </a>
                       </div>
                   </article>
               </div>
           @endforeach
       </div>

       <div class="fab-pagination">
           {{ $blogs->links('pagination::bootstrap-4') }}
       </div>
       @else
       <p class="text-center" style="padding:40px 0;color:#6b5b60;">No blog posts yet. Check back soon!</p>
       @endif
   </div>
</section>



@endsection
