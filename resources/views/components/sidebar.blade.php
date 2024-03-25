<div class="navbar-vertical navbar nav-dashboard">
  <div class="h-100" data-simplebar>
    <a class="navbar-brand" href="../index.html">
      <img src="https://dashui.codescandy.com/dashuipro/assets/images/brand/logo/logo-2.svg"
        alt="dash ui - bootstrap 5 admin dashboard template">
    </a>
    <ul class="navbar-nav flex-column" id="sideNavbar">
      <x-nav-item :href="route('home')" :active="request()->routeIs('home')">
        <i class="mdi mdi-view-dashboard-outline nav-icon me-2 fs-3"></i>
        Dashboard
      </x-nav-item>
      <x-nav-item :href="route('muatan')" :active="request()->routeIs('muatan')">
        <i class="mdi mdi-package-variant nav-icon me-2 fs-3"></i>
        Muatan
      </x-nav-item>
      <x-nav-item :href="route('users')" :active="request()->routeIs('users')">
        <i class="mdi mdi-account-group-outline nav-icon me-2 fs-3"></i>
        Pengguna
      </x-nav-item>
    </ul>
  </div>
</div>