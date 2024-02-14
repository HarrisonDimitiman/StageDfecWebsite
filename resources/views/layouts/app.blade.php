<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin - DFEC</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{{ secure_asset('adminAsset/assets/images/favicon.ico') }}">

    <link rel="stylesheet" href="{{ secure_asset('adminAsset/plugins/morris/morris.css') }}">

    <link href="{{ secure_asset('adminAsset/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('adminAsset/assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('adminAsset/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('adminAsset/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- DataTables -->
    <link href="{{ secure_asset('adminAsset/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ secure_asset('adminAsset/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    
</head>

<body>

    <div class="header-bg">
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <div>
                        <a href="{{ URL::to('/home') }}" class="logo">
                            <span class="logo-light">
                                    {{-- <i class="mdi mdi-camera-control"></i> --}}
                                    DFEC
                            </span>
                        </a>
                    </div>

                    <div class="menu-extras topbar-custom navbar p-0">
                        <ul class="list-inline d-none d-lg-block mb-0">
                            <li class="hide-phone app-search float-left">
                                <form role="search" class="app-search">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>

                        <ul class="navbar-right ml-auto list-inline float-right mb-0">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="dropdown notification-list list-inline-item">
                                    <div class="dropdown notification-list nav-pro-img">
                                        <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                            <img src="{{ secure_asset('adminAsset/assets/images/kierProfile.jpeg') }}" alt="user" class="rounded-circle">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                                                <i class="mdi mdi-power text-danger"></i> Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>

                                <li class="menu-item dropdown notification-list list-inline-item">
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            {{-- NAV BAR STARTS HERE --}}
            @include('layouts.sidebar')
            {{-- END OF NAVBAR --}}

        </header>
    </div>

    <div class="wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    <footer class="footer">
        © 2023 DFEC <span class="d-none d-sm-inline-block"> - Crafted with 🤸 by DFEC - CODERS</span>.
    </footer>


    {{-- SCRIPTS HERE --}}
    <script src="{{ secure_asset('adminAsset/assets/js/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/assets/js/waves.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/assets/pages/dashboard.init.js') }}"></script>
    
    <!-- Required datatable js -->
    <script src="{{ secure_asset('adminAsset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('adminAsset/assets/pages/datatables.init.js') }}"></script>  

    <!-- Buttons examples -->
    <script src="{{ secure_asset('adminAsset/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ secure_asset('adminAsset/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">      
        var success = "{{ Session::get('success') }}";
        if (success) {
            swal ({
                text: success,
                icon: 'success',
                button: 'OK',
            });
        }
        var deleted = "{{ Session::get('deleted') }}";
        if (deleted) {
            swal ({
                text: deleted,
                icon: 'error',
                button: 'OK',
            });
        }
        var error = "{{ Session::get('error') }}";
        if (error) {
            swal ({
                text: error,
                icon: 'error',
                button: 'OK',
            });
        }
        var danger = "{{ Session::get('flash_danger') }}";
        if (danger) {
            swal ({
                text: danger,
                icon: 'error',
                button: 'OK',
            });
        }
        var warning = "{{ Session::get('warning') }}";
        if (warning) {
            swal ({
                text: warning,
                icon: 'info',
                button: 'OK',
            });
        }
        var errors = $('.alert-errors').length;
        var html_errors = $('#html_errors').val();
        if(errors){
            swal ({
                text: html_errors,
                icon: 'error',
                button: 'OK',
            });
        }
    </script>

    @yield('scripts')

    <script src="{{ secure_asset('adminAsset/assets/js/app.js') }}"></script>

    {{-- END OF SCRIPTS --}}

</body>

</html>