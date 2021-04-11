
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | {{ env('DOMAIN_NAME') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center" style="background-color: #101112">
            <a class="navbar-brand brand-logo" href="{{ route('home') }}">
              <img src="{{asset('logo.png')}}" style="width: 90px;" alt="logo" />
              {{-- {{env('DOMAIN_NAME')}} --}}
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
              <img src="{{asset('logo.png')}}" style="width: 50px;" alt="logo" />
            </a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav">
              <li class="nav-item font-weight-semibold d-none d-lg-block">Help: support@motasko.com</li>
            </ul>
            {{--
            <form class="ml-auto search-form d-none d-md-block" action="#">
              <div class="form-group">
                <input type="search" class="form-control" placeholder="Search Here">
              </div>
            </form>
            --}}
            <ul class="navbar-nav ml-auto" >

              <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

                  <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/face8.jpg')}}" alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                  <div class="dropdown-header text-center">
                    <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
                    <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</p>
                  </div>
                  <a class="dropdown-item" href="{{ route('profile') }}">My Profile <i class="dropdown-item-icon ti-dashboard"></i></a>
                  <hr>
                  <a class="dropdown-item" href="{{ route('logout') }}">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar" >
            <ul class="nav" style="background-color: #101112">
              <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                  <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/face8.jpg') }}" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                  </div>
                  <div class="text-wrapper">
                    <p class="profile-name">{{strtoupper(Auth::user()->name)}}</p>
                  </div>
                </a>
              </li>
              {{-- <li class="nav-item nav-category">Main Menu</li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                  <i class="menu-icon typcn typcn-document-text"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              @if(!Auth::user()->is_admin)
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="menu-icon typcn typcn-coffee"></i>
                  <span class="menu-title">Funding</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('deposits') }}">Fund Wallet</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('deposits.history') }}">Purchased Packages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('withdrawal') }}">Withdrawal Request</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('transactions') }}">Transactions</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-trading" aria-expanded="false" aria-controls="ui-trading">
                  <i class="menu-icon typcn typcn-coffee"></i>
                  <span class="menu-title">Investment</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-trading">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('income') }}">Trading Income</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('referrals') }}">
                  <i class="menu-icon typcn typcn-th-large-outline"></i>
                  <span class="menu-title">Referrals</span>
                </a>
              </li>

              @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-deposits') }}">
                  {{-- <i class="menu-icon typcn typcn-bell"></i> --}}
                  <span class="menu-title">Deposit</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-users') }}">
                  {{-- <i class="menu-icon typcn typcn-bell"></i> --}}
                  <span class="menu-title">Users</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-withdrawal-request') }}">
                  {{-- <i class="menu-icon typcn typcn-bell"></i> --}}
                  <span class="menu-title">Withdrawal Requests</span>
                </a>
              </li>

              @endif
              <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}">
                  <i class="menu-icon typcn typcn-bell"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                  <i class="menu-icon typcn typcn-user-outline"></i>
                  <span class="menu-title">Sign Out</span>
                </a>
              </li>

            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            @yield('contents')
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{env('DOMAIN_NAME')}} {{date('Y')}}</span>
              </div>
            </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
  </div>
    <!-- container-scroller -->
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6051fa06f7ce182709310a54/1f103hbgb';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/demo_1/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('assets/js/shared/jquery.cookie.js')}}" type="text/javascript"></script>
  </body>
</html>
