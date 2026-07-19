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
                        <th>#</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
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
                          <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                          <td><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></td>
                          <td style="max-width:420px;white-space:normal;">{{ $contact->message }}</td>
                      </tr>
                  @empty
                      <tr><td colspan="6" class="text-center fab-cell-muted py-4">No contact enquiries yet.</td></tr>
                  @endforelse
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection
