@if ($title === 'Home')
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.html">
                <span class="align-middle">SiLeOn Admin</span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Pages
                </li>

                <li class="sidebar-item {{ $subTitle === '' ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('Admin.index') }}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Home</span>
                    </a>
                </li>
                <li class="sidebar-header">
                    Tables
                </li>
                @if (auth()->user()->level == 'Admin')
                    <li class="sidebar-item {{ $subTitle === 'Data_petugas' ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('table.datapetugas') }}">
                            <i class="bi bi-person-rolodex align-middle"></i> <span class="align-middle">Data
                                Petugas</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ $subTitle === 'Data User' ? 'active' : '' }}">
                        <a class="sidebar-link" href="{{ route('table.datauser') }}">
                            <i class="bi bi-person-hearts align-middle"></i></i> <span class="align-middle">Data
                                User</span>
                        </a>
                    </li>
                @else
                @endif

                <li class="sidebar-item  {{ $subTitle === 'Data Barang' ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('table.databarang') }}">
                        <i class="bi bi-box-seam align-middle"></i></i> <span class="align-middle">Data Barang</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $subTitle === 'Lelang' ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('table.lelang') }}">
                        <i class="bi bi-hammer align-middle"></i> <span class="align-middle">Data Lelang</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $subTitle === 'Data History' ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('table.datahistory') }}">
                        <i class="bi bi-clock-history align-middle"></i> <span class="align-middle">History
                            Lelang</span>
                    </a>
                </li>
                <li class="sidebar-header">
                    Other
                </li>
                <li class="sidebar-item {{ $subTitle === 'inbox' ? 'active' : '' }}">
                    <a class="sidebar-link" href="{{ route('show.inbox') }}">
                        <i class="bi bi-envelope align-middle"></i> <span class="align-middle">Inbox<span
                                class="badge text-bg-danger ms-1"></span>
                        </span>
                    </a>
                </li>



            </ul>


        </div>
    </nav>
@elseif ($title === 'Login')
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.html">
                <span class="align-middle">SiLeOn</span>
            </a>
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Pages
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-in-right align-middle"></i> <span
                            class="align-middle">{{ $subTitle === 'tambah_petugas' ? 'Tambah Data' : '' }}
                            {{ $subTitle === 'Profile' ? 'Profile' : '' }}</span>
                        {{ $subTitle === 'Login' ? 'Login' : '' }}</span>
                        {{ $subTitle === 'Tambah Barang' ? 'Tambah Barang' : '' }}</span>
                    </a>
                </li>
        </div>
    </nav>
@elseif ($title === 'Register')
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.html">
                <span class="align-middle">SiLeOn</span>
            </a>
            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Pages
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('login') }}">
                        <i class="bi bi-node-plus align-middle"></i> <span class="align-middle">Register</span>
                    </a>
                </li>
        </div>
    </nav>
@endif
