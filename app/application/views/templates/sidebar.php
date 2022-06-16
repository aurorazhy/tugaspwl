<!-- Sidebar -->
<ul class="navbar-nav bg-appside sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Warung DEA</div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider bg-white my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item bg-appregis">
      <a class="nav-link" href="index.html">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider bg-white">

   <!-- Heading -->
   <div class="sidebar-heading">
      Profile
   </div>

   <!-- Nav Item - Charts -->
   <li class="nav-item">
      <a class="nav-link" href="charts.html">
         <i class="fas fa-fw fa-chart-area"></i>
         <span>Belanja</span></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="charts.html">
         <i class="fas fa-fw fa-chart-area"></i>
         <span>Barang</span></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="charts.html">
         <i class="fas fa-fw fa-chart-area"></i>
         <span>Transaksi</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider bg-white">

   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
         <i class="fas fa-fw fa-sign-out-alt"></i>
         <span>Keluar</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block bg-white">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

</ul>
<!-- End of Sidebar -->