@extends('admin.template')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h1>Landing Page Enquiries</h1></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Landing Page Enquiries</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title mb-0"><i class="fas fa-bullhorn mr-2"></i>Landing Page Submissions
              <span class="badge badge-secondary ml-2">{{ count($enquiries) }}</span>
            </h3>
          </div>
          <div class="card-body table-responsive">
            <table id="example1" class="table table-hover table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse ($enquiries as $enquiry)
                      <tr>
                          <td>{{ $enquiry->id }}</td>
                          <td data-order="{{ isset($enquiry->created_at) ? \Carbon\Carbon::parse($enquiry->created_at)->timestamp : 0 }}">
                            {{ isset($enquiry->created_at) ? \Carbon\Carbon::parse($enquiry->created_at)->format('M d, Y') : '—' }}
                          </td>
                          <td>{{ $enquiry->name }}</td>
                          <td><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></td>
                          <td><a href="tel:{{ $enquiry->phone }}">{{ $enquiry->phone }}</a></td>
                          <td style="max-width:420px;white-space:normal;">{{ $enquiry->message }}</td>
                      </tr>
                  @empty
                      <tr><td colspan="6" class="text-center fab-cell-muted py-4">No landing page enquiries yet.</td></tr>
                  @endforelse
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection
