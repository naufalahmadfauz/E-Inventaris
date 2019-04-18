<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
</script>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                </ul>
            </form>

            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="features-profile.html" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="features-activities.html" class="dropdown-item has-icon">
                            <i class="fas fa-bolt"></i> Activities
                        </a>
                        <a href="features-settings.html" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
            <!--        Ini Navbar Kanan Profil End -->
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.html">E-Inventaris</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html">EV</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li><a class="nav-link" href="blank.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard Admin</span></a></li>

                    <!--            Data Header-->
                    <li class="menu-header">Welcome</li>
                    <li class=active><a class="nav-link" href="blank.html"><i class="fas fa-home"></i> <span>Welcome</span></a></li>
                    <!--            Data Header END-->

                    <!--            Data -->
                    <li class="menu-header">Stok Barang</li>
                    <li class="dropdown">

                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-cube"></i> <span>Barang</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="#">Data Barang</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-door-open"></i> <span>Ruangan</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="#">Data Ruangan</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Jenis</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="#">Data Jenis</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-ruler-combined"></i> <span>Satuan</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="#">Data Satuan</a></li>
                        </ul>
                    </li>
                    <!--            End Data-->
                    <li class="menu-header">Peminjaman/Pengembalian</li>
                    <li><a class="nav-link" href="blank.html"><i class="fas fa-file-export"></i> <span>Pinjam Barang</span></a></li>
                    <li><a class="nav-link" href="blank.html"><i class="fas fa-file-import"></i> <span>Pengembalian Barang</span></a></li>

                    <li class="menu-header">Lain Lain</li>
                    <li><a class="nav-link" href="blank.html"><i class="fas fa-user"></i> <span>User</span></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/modules/jquery.min.js"></script>
<script src="assets/modules/popper.js"></script>
<script src="assets/modules/tooltip.js"></script>
<script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/modules/moment.min.js"></script>
<script src="assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/cleave-js/dist/cleave.min.js"></script>
<script src="assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<!-- Page Specific JS File -->
<script src="assets/js/page/forms-advanced-forms.js"></script>


<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>


{{--<div class="container">--}}
{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">--}}
{{--        <a class="navbar-brand" href="{{url('/')}}">E-Inventaris</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarsExample09">--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                @if (!empty($halaman) && $halaman=='barang')--}}
{{--                    <li class="nav-item active">--}}
{{--                        <a class="nav-link" href="{{url('barang')}}"> Barang <span class="sr-only"></span></a>--}}
{{--                    </li>--}}
{{--                @else--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{url('barang')}}"> Barang <span class="sr-only"></span></a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--                    @if(Auth::check())--}}
{{--                        @if (!empty($halaman) && $halaman=='ruangan')--}}
{{--                            <li class="nav-item active">--}}
{{--                                <a class="nav-link" href="{{url('ruangan')}}">Ruangan</a>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{url('ruangan')}}">Ruangan</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @endif--}}

{{--                    @if(Auth::check())--}}
{{--                        @if (!empty($halaman) && $halaman=='jenis')--}}
{{--                            <li class="nav-item active">--}}
{{--                                <a class="nav-link" href="{{url('jenis')}}">Jenis</a>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{url('jenis')}}">Jenis</a>--}}
{{--                        </li>--}}
{{--                        @endif--}}
{{--                    @endif--}}

{{--                    @if(Auth::check())--}}
{{--                        @if (!empty($halaman) && $halaman=='satuan')--}}
{{--                            <li class="nav-item active">--}}
{{--                                <a class="nav-link" href="{{url('satuan')}}">Satuan</a>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{url('satuan')}}">Satuan</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @endif--}}

{{--                    @if(Auth::check() && Auth::User()->level=='admin')--}}
{{--                        @if (!empty($halaman) && $halaman=='pengguna')--}}
{{--                            <li class="nav-item active">--}}
{{--                                <a class="nav-link" href="{{url('pengguna')}}">Pengguna</a>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{url('pengguna')}}">Pengguna</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @endif--}}

{{--                    @if(Auth::check())                   --}}
{{--                        @if (!empty($halaman) && $halaman=='pinajaman')--}}
{{--                            <li class="nav-item active">--}}
{{--                                <a class="nav-link" href="{{url('pinjaman')}}">Pinjaman</a>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{url('pinjaman')}}">Pinjaman</a>--}}
{{--                            </li>--}}
{{--                       	@endif                                      --}}
{{--                    @endif--}}

{{--                @if(Auth::check())--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{url('logout')}}">{{Auth::user()->name}}</a>--}}
{{--                    </li>--}}
{{--                @else--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{url('login')}}">Masuk</a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</div>--}}