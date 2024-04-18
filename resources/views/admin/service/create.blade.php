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
            <li class="breadcrumb-item"><a href={{url('admin/service/list')}}"">Service</a></li>
            <li class="breadcrumb-item active">Create New Service</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  @if(session()->has('mesg'))
  <div class="alert alert-danger m-3">
      {{ session()->get('mesg') }}
  </div>
@endif

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">
                  Create New Service
                </div>

            </div>
            <!-- /.card-header -->
            <form name="createlist" id="createlist" method="post" action="{{url('admin/service/create')}}" enctype="multipart/form-data">
              @csrf

                <div class="card-body">
                <div class = "form-group">
                    <label>Title</label>
                    <input type="text" name="title" id="title" value="" class="ckeditor form-control">
                </div>
                <div class = "form-group">
                    <label>SEO Title</label>
                    <input type="text" name="seo_title" id="seo_title" value="" class="ckeditor form-control">
                </div>
                <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                    <input type="file" name="featured_image" id="featured_image" class="form-control ckeditor">
                </div>
                <div class = "form-group">
                    <label>URL</label>
                    <input type="text" name="slug" id="slug" value="" class="ckeditor form-control">
                </div>
                <div class = "form-group">
                    <label>SEO Description</label>
                    <input class="form-control"  name="seo_description" id="seo_description" value=""  type="text">
                </div>
                <div class = "form-group">
                    <label>Category</label>
                    <select class="form-control" name="category" id="category">
                      <option value="skin-treatment">Skin Treatment</option>
                      <option value="cosmetic-treatment">Cosmetic Treatment</option>
                      <option value="hair-treatment">Hair Treatment</option>
                      <option value="laser-treatment">Laser Treatment</option>
                      <option value="skin-rejuvenation-treatment">Skin Rejuvenation Treatment</option>
                      <option value="make-over">Make Over</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="ckeditor form-control" value="" name="content" id="ck_editor_txt"></textarea>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/admin/service/list')}}" class="btn btn-secondary">Back</a>
                </div>

            </form>

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