<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <div class="sidebar-brand-icon rotate-n-15"> --}}
        <div class="sidebar-brand-icon ">
            <i class="fas fa-laptop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Monitoring FDT RCFA</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{route ('dashboardPic')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- Divider -->
 

    <!-- Nav Item - Dashboard -->

  
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="#">  
            <span>DATA MONITORING</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="{{route ('rcfaPic')}}">
                <i class="fas fa-exclamation-triangle"></i>
                <span>RCFA</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route ('fdtPic')}}">
                <i class="fas fa-check-circle"></i>
                <span>FDT</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route ('progresPic')}}">
                <i class="fas fa-spinner"></i>
                <span>Progres</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>