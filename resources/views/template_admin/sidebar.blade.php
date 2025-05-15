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
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link {{ $menu == 'home' ? '' : 'collapsed' }}" href="{{ route('dashboard-admin') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link {{ $menu == 'guru' ? '' : 'collapsed' }}" href="{{ route('guru.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">GURU</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link {{ $menu == 'siswa' ? '' : 'collapsed' }}" href="{{ route('siswa.index') }}">
            <span>
              <i class="bi bi-person"></i>
              <span>SISWA</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link {{ $menu == 'ortu' ? '' : 'collapsed' }}" href="{{ route('ortu.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">ORANG TUA</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link {{ $menu == 'lokal' ? '' : 'collapsed' }}" href="{{ route('lokal.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:file-text-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">KELAS</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link {{ $menu == 'walikelas' ? '' : 'collapsed' }}" href="{{ route('walikelas.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:text-field-focus-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu"> WALI KELAS</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link {{ $menu == 'jurusan' ? '' : 'collapsed' }}" href="{{ route('jurusan.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:briefcase-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">JURUSAN</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link {{ $menu == 'user' ? '' : 'collapsed' }}" href="{{ route('user.index') }}" aria-expanded="false">
            <span>
              <iconify-icon icon="solar:users-bold-duotone" class="fs-6"></iconify-icon>
            </span>
            <span class="hide-menu">USER</span>
          </a>
        </li>



        <div class="unlimited-access hide-menu bg-primary-subtle position-relative mb-7 mt-7 rounded-3">
          <div class="d-flex">
            <div class="unlimited-access-title me-3">
              <h6 class="fw-semibold fs-4 mb-6 text-dark w-75">Upgrade to pro</h6>
              <a href="#" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
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
<!-- Sidebar End -->