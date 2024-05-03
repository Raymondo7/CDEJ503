<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CDEJ | @yield('titre') </title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    @yield('nouveau-css')
</head>

<body class="hold-transition @yield('body-element')">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">
                            <h6 class="text-center text-dark p-0 m-0">
                                Voulez-vous vous déconnecter?
                            </h6>
                        </span>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex justify-content-end dropdown-footer">
                            <a href="#" class="btn btn-primary m-1">
                                Annuler</a>
                            <a href="{{ route('logout') }}" class="btn btn-danger m-1">
                                Confirmer</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
                <img src="{{ asset('img/logo.png') }}" alt="CDEJ Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Aller sur le site</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image d-flex justify-content-center align-items-center">
                        <i class="fa fa-user text-light" style="font-size: 25px;" aria-hidden="true"></i>
                    </div>
                    <div class="info">
                        <h3 class="d-block m-0 text-light">Administrateur</h3>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('cdej0503/nouveauPost') }}"
                                class="nav-link {{ Request::is('cdej0503/nouveauPost*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                    Nouvel Article
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cdej0503/nosPosts') }}"
                                class="nav-link {{ Request::is('cdej0503/nosPosts*') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-newspaper"></i>
                                <p>
                                    Nos Articles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('nosPhotos') }}"
                                class="nav-link {{ Request::is('cdej0503/photos*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Galerie Photos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('televerser') }}"
                                class="nav-link {{ Request::is('cdej0503/upload*') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-arrow-down"></i>
                                <p>
                                    Téléverser Photos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cdej0503/parametres') }}"
                                class="nav-link {{ Request::is('cdej0503/parametres*') ? 'active' : '' }}">
                                <i class="nav-icon fa fa-tools"></i>
                                <p>
                                    Paramètres
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @yield('admin-content')

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="">CDEJ-503</a>.</strong> All
            rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- CodeMirror -->
    <script src="{{ asset('plugins/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('plugins/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('plugins/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    @yield('autre-js')
</body>

</html>
