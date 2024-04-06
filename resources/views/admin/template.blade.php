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
      <img src="https://chahalacademy.com/assets/logonew.jpeg" alt="chahal academy logo" width="150px" class="img-responsive">
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
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ Request::is('admin/hindu/list') || Request::is('admin/indianexpress/list') || Request::is('admin/hindueditorial/list') || Request::is('admin/indianexpresseditorial/list') || Request::is('admin/dailycurrentaffairs/list') || Request::is('admin/factsofday/list') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/hindu/list') || Request::is('admin/indianexpress/list') || Request::is('admin/hindueditorial/list') || Request::is('admin/indianexpresseditorial/list') || Request::is('admin/dailycurrentaffairs/list') || Request::is('admin/factsofday/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Current Affairs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-2">
              <li class="nav-item">
                <a href="{{url('/admin/hindu/list')}}" class="nav-link {{ Request::is('admin/hindu/list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>What to Read in Hindu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/indianexpress/list')}}" class="nav-link {{ Request::is('admin/indianexpress/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    What to Read in Indian Express
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/hindueditorial/list')}}" class="nav-link {{ Request::is('admin/hindueditorial/list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>The Hindu Editorial Analysis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/indianexpresseditorial/list')}}" class="nav-link {{ Request::is('admin/indianexpresseditorial/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Indian Express Editorial Analysis
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/dailycurrentaffairs/list')}}" class="nav-link {{ Request::is('admin/dailycurrentaffairs/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Daily Current Affairs Analysis
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/factsofday/list')}}" class="nav-link {{ Request::is('admin/factsofday/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    Facts of The Day
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::is('admin/dailyquiztitle/list') || Request::is('admin/dailyquiz/list') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/dailyquiztitle/list') || Request::is('admin/dailyquiz/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Daily Quiz
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-2">
              <li class="nav-item">
                <a href="{{url('/admin/dailyquiztitle/list')}}" class="nav-link {{ Request::is('admin/dailyquiztitle/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Daily CA Quiz Title
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/dailyquiz/list')}}" class="nav-link {{ Request::is('admin/dailyquiz/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Daily CA Quiz Questions
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::is('admin/dailyanswerwriting/list') || Request::is('admin/answers/list') || Request::is('admin/registereduser/list') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/dailyanswerwriting/list') || Request::is('admin/answers/list') || Request::is('admin/registereduser/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Answer Writing
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-2">
              <li class="nav-item">
                <a href="{{url('/admin/dailyanswerwriting/list')}}" class="nav-link {{ Request::is('admin/dailyanswerwriting/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Daily Answer Writing
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/answers/list')}}" class="nav-link {{ Request::is('admin/answers/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Edit Answers
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/registereduser/list')}}" class="nav-link {{ Request::is('admin/registereduser/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    Users: Daily Answer Writing
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a href="{{url('/admin/cseanswerwriting/list')}}" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-chart-pie"></i>-->
          <!--    <p>-->
          <!--      CSE Answer Writing                -->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <!--<li class="nav-item">-->
          <!--  <a href="{{url('/admin/cseregistereduser/list')}}" class="nav-link">-->
          <!--    <i class="nav-icon fas fa-tree"></i>-->
          <!--    <p>-->
          <!--      Users: CSE Answer Writing            -->
          <!--    </p>-->
          <!--  </a>-->
          <!--</li>-->
          <li class="nav-item">
            <a href="{{url('/admin/gyankibaat/list')}}" class="nav-link {{ Request::is('admin/gyankibaat/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Gyan Ki Baat
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ Request::is('admin/current-affairs-magazine/list') || Request::is('admin/yojana-magazine/list') || Request::is('admin/kurukshetra/list') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/current-affairs-magazine/list') || Request::is('admin/yojana-magazine/list') || Request::is('admin/kurukshetra/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Magazine
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-2">
              <li class="nav-item">
                <a href="{{url('/admin/current-affairs-magazine/list')}}" class="nav-link {{ Request::is('admin/current-affairs-magazine/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    Current Affairs Magazine
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/yojana-magazine/list')}}" class="nav-link {{ Request::is('admin/yojana-magazine/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    Yojana Magazine
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/kurukshetra/list')}}" class="nav-link {{ Request::is('admin/kurukshetra/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    Kurukshetra Magazine
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('/admin/marqueue/list')}}" class="nav-link {{ Request::is('admin/marqueue/list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Homepage Marqueue
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ Request::is('admin/centerwisedata/list') || Request::is('admin/registration') || Request::is('admin/onlinedata/list') || Request::is('admin/citywisedata/list') || Request::is('admin/statepscdata/list') || Request::is('admin/testseriesdata/list') || Request::is('admin/optionaldata/list') || Request::is('admin/contact') || Request::is('admin/miscellaneousdata/list') || Request::is('admin/popupdata/list') || Request::is('admin/mockinterview') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/centerwisedata/list') || Request::is('admin/registration') || Request::is('admin/onlinedata/list') || Request::is('admin/citywisedata/list') || Request::is('admin/statepscdata/list') || Request::is('admin/testseriesdata/list') || Request::is('admin/optionaldata/list') || Request::is('admin/contact') || Request::is('admin/miscellaneousdata/list') || Request::is('admin/popupdata/list') || Request::is('admin/mockinterview') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-2">
              <li class="nav-item">
                <a href="{{url('/admin/centerwisedata/list')}}" class="nav-link {{ Request::is('admin/centerwisedata/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Centerwise Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/registration')}}" class="nav-link {{ Request::is('admin/registration') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Registration Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/onlinedata/list')}}" class="nav-link {{ Request::is('admin/onlinedata/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Online Classes Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/citywisedata/list')}}" class="nav-link {{ Request::is('admin/citywisedata/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Citywise Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/statepscdata/list')}}" class="nav-link {{ Request::is('admin/statepscdata/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    StatePSC Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/testseriesdata/list')}}" class="nav-link {{ Request::is('admin/testseriesdata/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Test Series Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/optionaldata/list')}}" class="nav-link {{ Request::is('admin/optionaldata/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Optional Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/contact')}}" class="nav-link {{ Request::is('admin/contact') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Contact Us Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/miscellaneousdata/list')}}" class="nav-link {{ Request::is('admin/miscellaneousdata/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Miscellaneous Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/popupdata/list')}}" class="nav-link {{ Request::is('admin/popupdata/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Popup Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/mockinterview')}}" class="nav-link {{ Request::is('admin/mockinterview') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Mock Interview Data
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ Request::is('admin/booklet/list') || Request::is('admin/freecounselling/list') || Request::is('admin/bookletcitiwise') || Request::is('admin/registrationold') || Request::is('admin/oip-form-details') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('admin/booklet/list') || Request::is('admin/freecounselling/list') || Request::is('admin/bookletcitiwise') || Request::is('admin/registrationold') || Request::is('admin/oip-form-details') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Old Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-2">
              <li class="nav-item">
                <a href="{{url('/admin/booklet/list')}}" class="nav-link {{ Request::is('admin/booklet/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Old Booklet Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/freecounselling/list')}}" class="nav-link {{ Request::is('admin/freecounselling/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Old Counselling Data
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{url('/admin/freecounselling/list')}}" class="nav-link {{ Request::is('admin/freecounselling/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                  Old Citywise Counselling Data
                  </p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{url('/admin/bookletcitiwise')}}" class="nav-link {{ Request::is('admin/bookletcitiwise') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Old Citywise Booklet Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/registrationold')}}" class="nav-link {{ Request::is('admin/registrationold') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Old Registration Data
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/admin/oip-form-details')}}" class="nav-link {{ Request::is('admin/oip-form-details') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    OIP Form Data
                  </p>
                </a>
              </li>
            </ul>
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
  <strong>Copyright &copy; <a href="{{url('/')}}">Chahal Academy</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.0.5
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
        $('.ckeditor').ckeditor();
    });
    var editor = CKEDITOR.replace( 'ckfinder.image-upload' );
    CKFinder.setupCKEditor( editor );
</script>

</body>
</html>
