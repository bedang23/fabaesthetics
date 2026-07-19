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
                        <th style="width:50px;">#</th>
                        <th style="width:110px;">Date</th>
                        <th style="width:150px;">Name</th>
                        <th style="width:190px;">Email</th>
                        <th style="width:120px;">Phone</th>
                        <th>Message</th>
                        <th class="no-sort text-center" style="width:80px;">View</th>
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
                          <td class="fab-cell-muted">{{ $enquiry->email }}</td>
                          <td class="fab-cell-muted">{{ $enquiry->phone }}</td>
                          <td><div class="fab-msg-preview">{{ Str::limit($enquiry->message, 90) }}</div></td>
                          <td class="text-center">
                            <button type="button" class="btn btn-sm btn-primary fab-view-btn"
                              data-toggle="modal" data-target="#detailModal"
                              data-name="{{ e($enquiry->name) }}"
                              data-email="{{ e($enquiry->email) }}"
                              data-phone="{{ e($enquiry->phone) }}"
                              data-date="{{ isset($enquiry->created_at) ? \Carbon\Carbon::parse($enquiry->created_at)->format('M d, Y g:i A') : '—' }}"
                              data-message="{{ e($enquiry->message) }}">
                              <i class="fas fa-eye"></i>
                            </button>
                          </td>
                      </tr>
                  @empty
                      <tr><td colspan="7" class="text-center fab-cell-muted py-4">No landing page enquiries yet.</td></tr>
                  @endforelse
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
</div>

@include('admin.partials.detail-modal')

@endsection
