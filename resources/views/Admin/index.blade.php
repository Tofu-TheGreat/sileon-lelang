<!DOCTYPE html>
<html lang="en">

<head>
    @include('partial.headContent')
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

</body>

</html>
