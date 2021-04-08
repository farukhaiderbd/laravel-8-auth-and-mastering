<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@stack('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Dasho Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, Dasho, Dasho bootstrap admin template">
    <meta name="author" content="Phoenixcoded" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('contents/admin') }}/assets/images/favicon.svg" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/animation/css/animate.min.css">
    <!-- notification css -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/notification/css/notification.min.css">
    <!-- data tables css -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/data-tables/css/datatables.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/plugins/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/plugins/pnotify/css/pnotify.custom.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/pages/pnotify.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/style.css">
    {{-- Toster Css --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/custom.css">
    @stack('css')
    <script src="{{ asset('contents/admin') }}assets/plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/vendor-all.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/sweetalert.min.js"></script>
</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menupos-fixed menu-dark menu-item-icon-style6 ">
        <div class="navbar-wrapper ">
            <div class="navbar-brand header-logo">
                <a href="#" class="b-brand">
                    <img src="{{ asset('contents/admin') }}/assets/images/logo.svg" alt="" class="logo images">
                    <img src="{{ asset('contents/admin') }}/assets/images/logo-icon.svg" alt=""
                        class="logo-thumb images">
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <!--<li data-username="animations" class="nav-item"><a href="landing.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">New front</span></a></li>-->
                    <li data-username="dashboard default ecommerce sales Helpdesk ticket CRM analytics project"
                        class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="index.html" class="">Analytics</a></li>
                        </ul>
                    </li>
                    <li data-username="documentation" class="nav-item"><a href="{{ url('admin/user') }}"><span
                                class="pcoded-micon"><i class="feather icon-user"></i></span><span
                                class="pcoded-mtext">User</span></a></li>
                    <li data-username="documentation" class="nav-item"><a href="{{ url('admin/course') }}"><span
                                class="pcoded-micon"><i class="fas fa-layer-group"></i></span><span
                                class="pcoded-mtext">Writer</span></a></li>
                    <li data-username="documentation" class="nav-item"><a href="{{ url('admin/seminar') }}"><span
                                class="pcoded-micon"><i class="feather icon-wind"></i></span><span
                                class="pcoded-mtext">Visitor</span></a></li>
                    <li data-username="documentation" class="nav-item"><a href="#"><span class="pcoded-micon"><i
                                    class="fas fa-recycle"></i></span><span class="pcoded-mtext">Recycle</span></a></li>
                    <li data-username="need support" class="nav-item"><a href="#" class="nav-link" target="_blank"><span
                                class="pcoded-micon"><i class="feather icon-help-circle"></i></span><span
                                class="pcoded-mtext">Need support</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">

        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
            <a href="index.html" class="b-brand">
                <!-- <div class="b-bg">
      <i class="fas fa-bolt"></i>
     </div>
     <span class="b-title">Dasho</span> -->
                <img src="{{ asset('contents/admin') }}/assets/images/logo.svg" alt="" class="logo images">
                <img src="{{ asset('contents/admin') }}/assets/images/logo-icon.svg" alt="" class="logo-thumb images">
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="#!">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <a href="#!" class="mob-toggler"></a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="main-search open">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="#!" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i
                                class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius"
                                            src="{{ asset('contents/admin') }}/assets/images/user/avatar-1.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius"
                                            src="{{ asset('contents/admin') }}/assets/images/user/avatar-2.jpg"
                                            alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i
                                                        class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#!" class="displayChatbox"><i class="icon feather icon-mail"></i></a></li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="{{ asset('contents/admin') }}/assets/images/user/avatar-1.jpg"
                                    class="img-radius" alt="User-Profile-Image">
                                <span>
                                    <span class="text-muted">Free Trial</span>
                                    <span class="h6">doe@company.com</span>
                                </span>
                            </div>
                            <ul class="pro-body">
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i>
                                        Settings</a></li>
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a>
                                </li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My
                                        Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i>
                                        Lock Screen</a></li>
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-power text-danger"></i>
                                        Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->
    @yield('content')
    <!-- Required Js -->
    <script src="{{ asset('contents/admin') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/pcoded.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/menu-setting.min.js"></script>
    <script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>
    <!-- dashboard-custom js -->
    <script src="{{ asset('contents/admin') }}/assets/js/pages/dashboard-analytics.js"></script>
    <!-- datatable Js -->
    <script src="{{ asset('contents/admin') }}/assets/plugins/data-tables/js/datatables.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datepicker.min.js">
    </script>
    <script src="{{ asset('contents/admin') }}/assets/js/pages/ac-datepicker.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/pages/data-basic-custom.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/plugins/bootstrap-timepicker.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/pnotify/js/pnotify.custom.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/plugins/pnotify/js/notify-event.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/custom.js"></script>
     {{-- Toster alert js --}}
    @stack('js')

</body>
<footer>
    <div class="col-lg-12 text-center">
        Copyright &copy; 2021 Admin Panal. Designed by <a href="#">Masud Rana</a>
    </div>
</footer>

</html>
