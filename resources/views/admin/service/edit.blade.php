@extends('admin.template')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Articles</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="">Artciles</a></li>
            <li class="breadcrumb-item active">Create New Articles</li>
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
                  Create New Articles
                </div>

            </div>
            <!-- /.card-header -->

            @if ( !empty($edit_article_details) )

            {{-- {!!$edit_article_details->content!!} --}}

            <form name="" id="" method="post" action="{{url('/admin/service/update')}}/{{$edit_article_details->id}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="article_id" value="{{$edit_article_details->id}}">
                <div class="card-body">
                <div class = "form-group">
                    <label>Title</label>
                    <input type="text" name="title" id="title" value="{{$edit_article_details->title}}" class="form-control">
                </div>
                <div class = "form-group">
                  <label>SEO Title</label>
                  <input class="form-control"  name="seo_title" id="seo_title" value="{{$edit_article_details->seo_title}}" type="text">
              </div>
              <div class="form-group">
                <label for="featured_image">Featured Image</label>
                <input type="file" name="featured_image" id="featured_image" class="form-control-file">
                @if ($edit_article_details->featured_image)
                    <img src="{{ asset('' . $edit_article_details->featured_image) }}" alt="Featured Image" style="max-width: 100px;">
                @else
                    <p>No featured image uploaded</p>
                @endif
            </div>
              <div class = "form-group">
                <label>URL</label>
                <input type="text" name="slug" id="slug"  value="{{$edit_article_details->slug}}" class="ckeditor form-control">
            </div>
                <div class = "form-group">
                    <label>SEO Description</label>
                    <input class="form-control"  name="seo_description" id="seo_description" value="{{$edit_article_details->seo_description}}"  type="text">
                </div>
                <div class = "form-group">
                  <label>Category</label>
                  <select class="form-control" name="category" id="category">
                    <option value="skin-treatment" {{$edit_article_details->category == 'Skin Treatment' ? 'selected' : ''}}>Skin Treatment</option>
                    <option value="cosmetic-treatment" {{$edit_article_details->category == 'Cosmetic Treatment' ? 'selected' : ''}}>Cosmetic Treatment</option>
                    <option value="hair-treatment" {{$edit_article_details->category == 'Hair Treatment' ? 'selected' : ''}}>Hair Treatment</option>
                    <option value="laser-treatment" {{$edit_article_details->category == 'Laser Treatment' ? 'selected' : ''}}>Laser Treatment</option>
                    <option value="skin-rejuvenation-treatment" {{$edit_article_details->category == 'Skin Rejuvenation Treatment' ? 'selected' : ''}}>Skin Rejuvenation Treatment</option>
                    <option value="make-over" {{$edit_article_details->category == 'Make Over' ? 'selected' : ''}}>Make Over</option>
                    <!-- Add more options as needed -->
                </select>
              </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="ckeditor form-control" value="" name="content" id="content">{{$edit_article_details->content}}</textarea>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/admin/service/list')}}" class="btn btn-secondary">Back</a>
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