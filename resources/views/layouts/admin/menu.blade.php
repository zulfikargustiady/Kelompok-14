<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Pengguna</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('vote.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Voting</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Admin</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.manage_candidates') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Manage Metdi</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('vote.results') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Hasil Voting</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Catatan</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('catatankandidat') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Catatan Kandidat</span>
            </a>
        </li>
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Bantuan</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('tentangkami') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Tentang Kami</span>
            </a>
        </li>
    </ul>
</nav>
