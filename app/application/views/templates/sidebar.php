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
   <hr class="bg-white my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item bg-appregis">
      <a class="nav-link" href="<?= base_url('user') ?>">
         <i class="fas fa-columns"></i>
         <span>Dashboard</span></a>
   </li>

   <!-- Divider -->
   <hr class="bg-white my-0 mb-2">

   <!-- Heading -->
   <div class="sidebar-heading">
      Barang
   </div>
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('user/barangtable') ?>">
         <i class="fas fa-info-circle"></i>
         <span>Detail</span></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('user/stokbarang') ?>">
         <i class="fas fa-plus-circle"></i>
         <span>Tambah Barang</span></a>
   </li>

   <!-- Divider -->
   <hr class="bg-white my-0 mb-2">

   <!-- Heading -->
   <div class="sidebar-heading">
      Sistem
   </div>

   <!-- Nav Item - Charts -->
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('user/belanja') ?>">
         <i class="fas fa-shopping-basket"></i>
         <span>Belanja</span></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('user/transaksi') ?>">
         <i class="fas fa-money-bill-wave"></i>
         <span>Transaksi</span></a>
   </li>

   <!-- Divider -->
   <hr class="bg-white my-0">

   <li class="nav-item">
      <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
         <i class="fas fa-fw fa-sign-out-alt"></i>
         <span>Keluar</span></a>
   </li>

   <!-- Divider -->
   <hr class="d-none d-md-block bg-white my-0 mb-2">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

</ul>
<!-- End of Sidebar -->