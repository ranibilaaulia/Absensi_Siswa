<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo-light.svg" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">ADMIN ABSEN</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Data guru</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Data siswa</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Data kelas</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Data jurusan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:text-field-focus-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('/login')}}" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Login</span>
              </a>
          </ul>
          <div class="unlimited-access hide-menu bg-primary-subtle position-relative mb-7 mt-7 rounded-3"> 
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-75">Upgrade to pro</h6>
                <a href="#" target="_blank"
                  class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          

                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      
                  
    
    </div>
  </div>
  <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}" ></script>
  <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}" ></script>
  <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}" ></script>
  <script src="{{asset('assets/libs/simplebar/dist/simplebar.js')}}" ></script>
  <script src="{{asset('assets/js/sidebarmenu.js')}}" ></script>
  <script src="{{asset('assets/js/app.min.js')}}" ></script>
  <script src="{{asset('assets/js/dashboard.js')}}" ></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>