<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>internal">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('foto/logo.png') ?>" width="50px" style="border-radius: 5px;">
        </div>
        <div class="sidebar-brand-text mx-3 ">Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>internal">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>internal/infowisudadaftar">
            <i class="fas fa-fw fa-table"></i>
            <span>Informasi Wisuda</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>internal/alumnidaftar">
            <i class="fas fa-fw fa-table"></i>
            <span>Alumni</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>