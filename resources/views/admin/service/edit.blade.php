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

            <form name="" id="" method="post" action="{{url('/admin/service/update')}}/{{$edit_article_details->id}}">
              @csrf
              <input type="hidden" name="article_id" value="{{$edit_article_details->id}}">
                <div class="card-body">
                <div class = "form-group">
                    <label>Title</label>
                    <input type="text" name="title" id="title" value="{{$edit_article_details->title}}" class="form-control">
                </div>
                <div class = "form-group">
                  <label>SEO Title</label>
                  <input class="form-control"  name="seo_title" id="seo_title" value="{{$edit_article_details->seo_title}}"  type="text">
              </div>
                <div class = "form-group">
                    <label>SEO Description</label>
                    <input class="form-control"  name="seo_description" id="seo_description" value="{{$edit_article_details->seo_description}}"  type="text">
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