<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets') }}/images/favicon.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets') }}/images/logo-dark.png" alt="" height="40">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/favicon.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="40">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Proses</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-database"></i>
                        <span>Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li class="{{ Request::is('master-jabatan') ? 'active' : '' }}">
                            <a href="{{ route('master.jabatan') }}" class="waves-effect">
                                <span>Jabatan</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('master-dimensi') ? 'active' : '' }}">
                            <a href="{{ route('master.dimensi') }}" class="waves-effect">
                                <span>Dimensi KPI</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html" class="waves-effect">
                                <span>Jenis Dokumen</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html" class="waves-effect">
                                <span>Jenis Absensi</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-title">Apps</li>

                <li>
                    <a href="calendar.html" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>Calendar</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
