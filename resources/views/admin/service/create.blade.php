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
            <form name="createlist" id="createlist" method="post" action="{{url('admin/service/create')}}">
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
                <div class = "form-group">
                    <label>SEO Description</label>
                    <input class="form-control"  name="seo_description" id="seo_description" value=""  type="text">
                </div>
                <div class = "form-group">
                    <label>Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="Skin Treatment">Skin Treatment</option>
                        <option value="Cosmetic Treatment">Cosmetic Treatment</option>
                        <option value="Hair Treatment">Hair Treatment</option>
                        <option value="Laser Treatment">Laser Treatment</option>
                        <option value="Skin Rejuvenation Treatment">Skin Rejuvenation Treatment</option>
                        <option value="Make Over">Make Over</option>
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