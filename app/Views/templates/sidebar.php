<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-code" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SLB B YAKUT</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Divider
    <hr class="sidebar-divider"> -->


    <?php if (in_groups('admin')) : ?>
        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>User List</span></a>
        </li>
    <?php endif; ?>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - User Manual -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span>User Manual</span></a>
    </li>

    <!-- Nav Item - Form -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fa fa-file" aria-hidden="true"></i>
            <span>Form</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>