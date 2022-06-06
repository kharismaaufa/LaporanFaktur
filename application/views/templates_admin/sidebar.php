<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/Dashboard') ?>">
            <img src="<?php echo base_url('template/photo/fajaranugerah.jpeg') ?>" style="width:20%">
                <div class="sidebar-brand-text mx-3">Laporan Faktur</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-paste"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url('admin/LaporanFaktur') ?>">Laporan Faktur</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/LaporanFaktur/tambahFaktur') ?>">Buat Laporan Faktur</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/CetakLaporan/cetakLaporanFaktur') ?>">Cetak Laporan Faktur</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/dataUser') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Kelola User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('gantiPassword') ?>">
                    <i class="fas fa-fw fa-unlock"></i>
                    <span>Ganti Password</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('welcome/logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h3 class="font-weight-bold">CV. Fajar Anugerah</h3>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang <?php echo $this->session->userdata('nama_user') ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('template/photo/').$this->session->userdata('photo')?>">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->