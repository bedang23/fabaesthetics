@extends('admin.template')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h1>Contact Enquiries</h1></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Contact Enquiries</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title mb-0"><i class="fas fa-address-card mr-2"></i>Contact Form Submissions
              <span class="badge badge-secondary ml-2">{{ count($contacts) }}</span>
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
                  @forelse ($contacts as $contact)
                      <tr>
                          <td>{{ $contact->id }}</td>
                          <td data-order="{{ isset($contact->created_at) ? \Carbon\Carbon::parse($contact->created_at)->timestamp : 0 }}">
                            {{ isset($contact->created_at) ? \Carbon\Carbon::parse($contact->created_at)->format('M d, Y') : '—' }}
                          </td>
                          <td>{{ $contact->name }}</td>
                          <td class="fab-cell-muted">{{ $contact->email }}</td>
                          <td class="fab-cell-muted">{{ $contact->phone }}</td>
                          <td><div class="fab-msg-preview">{{ Str::limit($contact->message, 90) }}</div></td>
                          <td class="text-center">
                            <button type="button" class="btn btn-sm btn-primary fab-view-btn"
                              data-toggle="modal" data-target="#detailModal"
                              data-name="{{ e($contact->name) }}"
                              data-email="{{ e($contact->email) }}"
                              data-phone="{{ e($contact->phone) }}"
                              data-date="{{ isset($contact->created_at) ? \Carbon\Carbon::parse($contact->created_at)->format('M d, Y g:i A') : '—' }}"
                              data-message="{{ e($contact->message) }}">
                              <i class="fas fa-eye"></i>
                            </button>
                          </td>
                      </tr>
                  @empty
                      <tr><td colspan="7" class="text-center fab-cell-muted py-4">No contact enquiries yet.</td></tr>
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
