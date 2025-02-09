<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('assets/logo.ico') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard KKN International
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  {{-- <link href="../assets/css/bootstrap.min.css" rel="stylesheet" /> --}}
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          KKN International
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="{{ Request::is('dashboard/pendaftar-kkn') ? 'active' : '' }}">
            <a href="/dashboard/pendaftar-kkn">
                <i class="now-ui-icons users_single-02"></i>
                <p>KKN Registrant</p>
            </a>
        </li>
        <li class="{{ Request::is('dashboard/pengumuman') ? 'active' : '' }}">
            <a href="/dashboard/pengumuman">
                <i class="now-ui-icons education_atom"></i>
                <p>Announcement</p>
            </a>
        </li>
        <li class="{{ Request::is('dashboard/sponsor') ? 'active' : '' }}">
            <a href="/dashboard/sponsor">
                <i class="now-ui-icons business_money-coins"></i>
                <p>Sponsorship</p>
            </a>
        </li>
          {{-- <li>
            <a href="/icons">
              <i class="now-ui-icons education_atom"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="/map">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="/notifications">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="/user">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="/tables">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="/typography">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="/upgrade">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel" >
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute" >
        <div class="container-fluid " >
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand text-dark" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li> --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02" style="color: black;"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/">Logout</a>
                  {{-- <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a> --}}
                </div>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02" style="color: black;"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Logout</span>
                  </p>
                </a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      @if (session('success'))
          <div class="alert alert-success mt-5" id="success-alert">
              {{ session('success') }}
          </div>
      @endif

      <div class="panel-header panel-header-lg">
      </div>

      

        @yield('container')



      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

  <!-- Include DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<!-- Include DataTables Buttons extension CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.bootstrap5.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.bootstrap5.min.js"></script>

<!-- Initialize DataTable with Buttons -->
<script>
    $(document).ready(function() {
        $('#registrantTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5'
                // 'pdfHtml5'
            ],
            responsive: true,
            language: {
                paginate: {
                    previous: "<i class='fas fa-angle-left'></i>",
                    next: "<i class='fas fa-angle-right'></i>"
                }
            }
        });
    });
</script>

  <script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isipengumuman');
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
      var successAlert = document.getElementById('success-alert');
      if (successAlert) {
          setTimeout(function() {
              successAlert.style.display = 'none';
          }, 4000); // 4000 milliseconds = 4 seconds
      }
  });
</script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

  });
</script>
</body>

</html>