@extends('admin.template')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Service List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Service List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    @if(session()->has('mesg'))
        <div class="alert alert-success m-3">
            {{ session()->get('mesg') }}
        </div>
    @endif
    @if(session()->has('msg'))
        <div class="alert alert-danger m-3">
            {{ session()->get('msg') }}
        </div>
    @endif
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">

                  </div>
                  <div class="card-tools">
                      <a href="{{url('admin/service/create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  @if ( !empty($record_details) )
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="30">#</th>
                            <th width="30">Featured Image</th>
                            <th width="150">Title</th>
                            <th width="150">URL</th>
                            <th width="150">Category</th>
                            <th width="220">Content</th>
                            <th width="120" class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      @foreach ($record_details as $key => $value)
                        <tr>
                            <td width="30">{{ $value['id'] }}</td>
                            <td><img src="http://127.0.0.1:8000/{{ $value['featured_image'] }}" style="max-width:100px" alt=""></td>
                            <td>{{ $value['title'] }}</td>
                            <td>{{ $value['slug'] }}</td>
                            <td>{{ $value['category'] }}</td>
                            <td><textarea readonly>{{ $value['content'] }}</textarea></td>
                            <td width="120" class="text-center">
                              <a href="{{url('/admin/service/edit')}}/{{$value['id']}}" class="btn btn-sm btn-primary">Edit</a>
                              <a href="javascript:void(0);"onclick="deleteArticle({{$value['id']}})" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                          <th width="30">#</th>
                          <th width="30">Featured Image</th>
                          <th width="150">Title</th>
                          <th width="150">URL</th>
                          <th width="150">Category</th>
                          <th width="220">Content</th>
                          <th width="120" class="text-center">Action</th>
                        </tr>
                    </tfoot>

                </table>
                <div class="pt-4">{{ $record_details->links() }}</div>
                @endif
              </div>
              <!-- /.card-body -->
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

<script type="text/javascript">
    function deleteArticle(id) {

      if(confirm("Are you sure you want to article")){
        window.location.href='{{url('/admin/hindu/delete')}}/'+id;
      }

    }
</script>