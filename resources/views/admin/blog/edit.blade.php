@extends('admin.template')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Blogs</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="">Blogs</a></li>
            <li class="breadcrumb-item active">Edit Blog</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>



  <!-- Main content -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">
                  Edit Blog
                </div>

            </div>
            <!-- /.card-header -->

            @if ( !empty($edit_blog_details) )

            {{-- {!!$edit_blog_details->content!!} --}}

            <form name="" id="" method="post" action="{{url('/admin/blog/update')}}/{{$edit_blog_details->id}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="article_id" value="{{$edit_blog_details->id}}">
                <div class="card-body">
                <div class = "form-group">
                    <label>Title</label>
                    <input type="text" name="title" id="title" value="{{$edit_blog_details->title}}" class="form-control">
                </div>
                <div class = "form-group">
                  <label>SEO Title</label>
                  <input class="form-control"  name="seo_title" id="seo_title" value="{{$edit_blog_details->seo_title}}" type="text">
              </div>
              <div class="form-group">
                <label for="featured_image">Featured Image</label>
                <input type="file" name="featured_image" id="featured_image" class="form-control-file">
                @if ($edit_blog_details->featured_image)
                    <img src="{{ asset('' . $edit_blog_details->featured_image) }}" alt="Featured Image" style="max-width: 100px;">
                @else
                    <p>No featured image uploaded</p>
                @endif
            </div>
              <div class = "form-group">
                <label>URL</label>
                <input type="text" name="slug" id="slug"  value="{{$edit_blog_details->slug}}" class="ckeditor form-control">
            </div>
                <div class = "form-group">
                    <label>SEO Description</label>
                    <input class="form-control"  name="seo_description" id="seo_description" value="{{$edit_blog_details->seo_description}}"  type="text">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category" id="category">
                      <option value="skin-treatment" {{ $edit_blog_details->category == 'skin-treatment' ? 'selected' : '' }}>Skin Treatment</option>
                      <option value="cosmetic-treatment" {{ $edit_blog_details->category == 'cosmetic-treatment' ? 'selected' : '' }}>Cosmetic Treatment</option>
                      <option value="hair-treatment" {{ $edit_blog_details->category == 'hair-treatment' ? 'selected' : '' }}>Hair Treatment</option>
                      <option value="laser-treatment" {{ $edit_blog_details->category == 'laser-treatment' ? 'selected' : '' }}>Laser Treatment</option>
                      <option value="skin-rejuvenation-treatment" {{ $edit_blog_details->category == 'skin-rejuvenation-treatment' ? 'selected' : '' }}>Skin Rejuvenation Treatment</option>
                      <option value="make-over" {{ $edit_blog_details->category == 'make-over' ? 'selected' : '' }}>Make Over</option>
                  </select>
              </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="ckeditor form-control" value="" name="content" id="content">{{$edit_blog_details->content}}</textarea>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/admin/blog/list')}}" class="btn btn-secondary">Back</a>
                </div>
            </form>

           @endif
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection