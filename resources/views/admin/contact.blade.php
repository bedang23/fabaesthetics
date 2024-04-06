@extends('admin.templatenew')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Us Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Contact Us Data</li>
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
                             
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="30">#</th>                            
                            <th>Name</th>                   
                            <th>Email</th>                   
                            <th>City</th>                   
                            <th>Contact</th>                   
                            <th>Date</th>                   
                            <th>Message</th>                   
                        </tr>
                    </thead>

                    <tbody>
                       @if ( !empty($record_details) )
                      @foreach ($record_details as $key => $value)
                        <tr>
                            <td width="30">{{ $value['id'] }}</td>
                            <td>{{ $value['name'] }}</td>
                            <td>{{ $value['email'] }}</td>
                            <td>{{ $value['city'] }}</td>
                            <td>{{ $value['phone'] }}</td>
                            <td>{{ date('d-M-Y',strtotime($value['created_at'])) }}</td>
                            <td>{{ $value['message'] }}</td>
                        </tr> 
                        @endforeach
                        @endif
                    </tbody>

                    <tfoot>
                        <tr>
                            <th width="30">#</th>                            
                            <th>Name</th>                   
                            <th>Email</th>                   
                            <th>City</th>                   
                            <th>Contact</th>                                   
                            <th>Date</th>                                   
                            <th>Message</th>                                   
                        </tr>
                    </tfoot>

                </table>                   
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
