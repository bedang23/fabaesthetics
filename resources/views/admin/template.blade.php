<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_assets/dist/css/adminlte.min.css')}}">
  <!-- Custom style -->
  <link rel="stylesheet" href="{{asset('admin_assets/dist/css/custom-style.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <!-- FAB Aesthetics admin brand theme -->
  <style>
    :root{ --fab:#671b32; --fab-dark:#4c1425; --fab-soft:#faf4f5; }
    .sidebar-dark-primary{ background:#3a0f1c; }
    .brand-link{ background:var(--fab-dark); }
    .brand-link .brand-text{ font-weight:600; letter-spacing:.02em; }
    .nav-sidebar .nav-link.active,
    .nav-sidebar>.nav-item>.nav-link.active{
      background:var(--fab)!important; color:#fff!important;
      box-shadow:0 3px 10px rgba(0,0,0,.25);
    }
    .nav-sidebar .nav-link:hover{ background:rgba(255,255,255,.08); }
    .btn-primary{ background:var(--fab); border-color:var(--fab); }
    .btn-primary:hover,.btn-primary:focus{ background:var(--fab-dark); border-color:var(--fab-dark); }
    a{ color:var(--fab); }
    .card-primary:not(.card-outline)>.card-header{ background:var(--fab); }
    .content-header h1{ color:var(--fab); font-weight:600; }
    .table thead th{ background:var(--fab-soft); color:var(--fab-dark); border-bottom:2px solid #ecdfe2; white-space:nowrap; }
    .table td{ vertical-align:middle; }
    .fab-thumb{ width:70px; height:52px; object-fit:cover; border-radius:8px; border:1px solid #eee; }
    .fab-cell-title{ font-weight:600; color:#33262b; max-width:260px; }
    .fab-cell-muted{ color:#8a7b80; font-size:.86rem; }
    .fab-badge{ display:inline-block; background:var(--fab-soft); color:var(--fab-dark);
      border:1px solid #ecdfe2; border-radius:999px; padding:2px 10px; font-size:.76rem; font-weight:600; white-space:nowrap; }
    .fab-excerpt{ max-width:320px; color:#6b5b60; font-size:.85rem;
      display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden; }
    .fab-actions .btn{ margin:2px; }
    .form-text-help{ font-size:.82rem; color:#9a8a8f; }
    .required-star{ color:#b3123a; }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>
    <div>
      <img src="" alt="Fab Aesthetics" width="150px" class="img-responsive">
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <form action="{{ url('/admin/logout') }}" method="post">
          @csrf
          <button type="submit" class="nav-link btn btn-link"><b>Logout</b></button>
      </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-5">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{asset('admin_assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('admin/dashboard')}}" class="d-block">Chahal Academy</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/admin/dashboard')}}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/contact')}}" class="nav-link {{ Request::is('admin/contact') ? 'active' : '' }}">
              <i class="nav-icon fas fa-address-card "></i>
              <p>
               Contact Enquries
              </p>
            </a>
            <a href="{{url('/admin/enquiryform')}}" class="nav-link {{ Request::is('admin/enquiryform') ? 'active' : '' }}">
              <i class="nav-icon fas fa-address-card "></i>
              <p>
               Landing Page Enquries
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/service/list')}}" class="nav-link {{ Request::is('admin/service/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
               Services
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/blog/list')}}" class="nav-link {{ Request::is('admin/blog/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
               Blogs
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


@yield('content')


  <!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; <a href="{{url('/')}}">Fab Aesthetics</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 2.0
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('admin_assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->



<!-- DataTables  & Plugins -->
<script src="{{asset('admin_assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin_assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin_assets/dist/js/adminlte.js')}}"></script>
<script src="{{asset('admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>


<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('ckfinder/ckfinder.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        // Rich text editor only where explicitly requested
        $('.ckeditor').ckeditor();

        // Initialise DataTables on admin list tables (search / sort / paginate)
        if ($.fn.DataTable && $('#example1').length) {
            $('#example1').DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "order": [],            // keep server order (newest first)
                "pageLength": 25,
                "columnDefs": [{ "orderable": false, "targets": 'no-sort' }]
            });
        }
    });
</script>

</body>
</html>
