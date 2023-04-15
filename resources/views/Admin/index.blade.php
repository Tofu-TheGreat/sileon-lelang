<!DOCTYPE html>
<html lang="en">

<head>
    @include('partial.headContent')
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
        @include('Admin.sidebar_admin')
        {{-- LOKASI SIDEBAR --}}

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">


                            <a class="nav- d-none d-sm-inline-block" href="" data-bs-toggle="dropdown">
                                <span class="text-dark"><a href="{{ route('logout.admin') }}" class="btn btn-danger">Log
                                        Out</a></span>
                            </a>

                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                @yield('konten')

            </main>

            <footer class="footer">
                @include('partial.footer')
            </footer>
        </div>
    </div>

    @include('partial.script')
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>
