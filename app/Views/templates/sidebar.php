        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion " id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href=" <?= base_url('user/index'); ?> ">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">KodeKu</div>
            </a>

            <!-- Divider -->
            <?php if( in_groups('user')) :  ?>
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/user'); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Utama</span></a>
                </li>
            <?php endif; ?>
            

        <?php if( in_groups('admin')) :  ?>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Admin Kontrol
            </div>
            <!-- Nav Item - My profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fas fa-users"></i>
                <span>Daftar user</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('upload'); ?>">
                <i class="fas fa-upload"></i>
                <span>Projek</span></a>
            </li>
        <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Profile User
            </div>

            <!-- Nav Item - My profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/my_profile'); ?>">
                    <i class="fas fa-user"></i>
                    <span>Profilku</span></a>
            </li>

            <!-- Nav Item - edit profile -->
            <li class="nav-item">
                <a class="nav-link" href=" <?= base_url(); ?>/user/edit_profile/<?= user()->id; ?> ">
                <i class="fas fa-user-edit"></i>
                <span>Ubah Profil</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - About -->
            <li class="nav-item">
                <a class="nav-link" href="/about">
                <i class="far fa-address-card"></i>
                <span>Tentang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout');?>" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
                <span>Keluar</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>