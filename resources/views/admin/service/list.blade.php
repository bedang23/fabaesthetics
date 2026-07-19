@extends('admin.template')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h1>Services</h1></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Services</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    @if(session()->has('mesg'))
        <div class="alert alert-success m-3">{{ session()->get('mesg') }}</div>
    @endif
    @if(session()->has('msg'))
        <div class="alert alert-info m-3">{{ session()->get('msg') }}</div>
    @endif

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title mb-0"><i class="fas fa-spa mr-2"></i>All Services
              <span class="badge badge-secondary ml-2">{{ count($record_details) }}</span>
            </h3>
            <a href="{{url('admin/service/create')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> New Service</a>
          </div>
          <div class="card-body table-responsive">
            <table id="example1" class="table table-hover table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="no-sort">Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>URL / Slug</th>
                        <th>SEO Title</th>
                        <th>Date</th>
                        <th class="no-sort text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse ($record_details as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>
                          @if($value->featured_image)
                            <img src="{{ asset($value->featured_image) }}" class="fab-thumb" alt="">
                          @else <span class="fab-cell-muted">—</span> @endif
                        </td>
                        <td>
                          <div class="fab-cell-title">{{ $value->title }}</div>
                          <div class="fab-excerpt">{{ Str::limit(strip_tags($value->content), 90) }}</div>
                        </td>
                        <td><span class="fab-badge">{{ ucwords(str_replace('-', ' ', $value->category)) }}</span></td>
                        <td class="fab-cell-muted">{{ $value->slug }}</td>
                        <td class="fab-cell-muted">{{ Str::limit($value->seo_title, 45) ?: '—' }}</td>
                        <td data-order="{{ \Carbon\Carbon::parse($value->created_at)->timestamp }}">
                          {{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y') }}
                        </td>
                        <td class="text-center fab-actions" style="white-space:nowrap;">
                          <a href="{{ route('service.show', ['category'=>$value->category,'slug'=>$value->slug]) }}" target="_blank" class="btn btn-sm btn-outline-secondary" title="View"><i class="fas fa-eye"></i></a>
                          <a href="{{url('/admin/service/edit')}}/{{$value->id}}" class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="javascript:void(0);" onclick="deleteRow({{$value->id}})" class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                  @empty
                    <tr><td colspan="8" class="text-center fab-cell-muted py-4">No services yet. Click “New Service” to add one.</td></tr>
                  @endforelse
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
</div>

<script type="text/javascript">
    function deleteRow(id) {
      if (confirm("Are you sure you want to delete this service? This cannot be undone.")) {
        window.location.href = '{{url("/admin/service/delete")}}/' + id;
      }
    }
</script>
@endsection
