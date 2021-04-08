
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Admin Panal">
    <meta name="author" content="Masudrana">
    <meta name="keywords" content="Devloper rana">

    <title>Application</title>

    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('contents/admin')}}/dist/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{asset('contents/admin')}}/dist/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('contents/admin')}}/dist/css/theme.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/css/bootstrap.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('contents/admin')}}/dist/css/Style.css" rel="stylesheet" media="all">
    <script src="{{asset('contents/admin')}}/dist/js/jquery-3.5.1.js"></script>
    <script src="{{asset('contents/admin')}}/dist/js/sweetalert2@10.js"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('contents/admin')}}/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block print-none">
            <div class="logo print-none">
                <a href="#">
                    <img src="{{asset('contents/admin')}}/images/icon/logo.png" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{url('admin')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">Dashboard 1</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('admin/user')}}">
                                <i class="fas fa-user"></i>User</a>
                        </li>
                        <li>
                            <a href="{{url('admin/summary')}}">
                                <i class="fa fa-gg-circle"></i>Summary</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-filter-list"></i>Cetagory</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                  <a href="{{url('admin/IncomeCategory')}}">
                                      <i class="zmdi zmdi-markunread-mailbox"></i>Income Cetagory</a>
                              </li>
                              <li>
                                  <a href="{{url('admin/ExpenseCategory')}}">
                                      <i class="fa fa-object-group" aria-hidden="true"></i>Expense Cetagory</a>
                              </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('admin/Income')}}">
                                <i class="zmdi zmdi-balance-wallet"></i>Income</a>
                        </li>
                        <li>
                            <a href="{{url('admin/Expense')}}">
                                <i class="fa fa-money" aria-hidden="true"></i>Expense</a>
                        </li>
                        <li>
                            <a href="{{url('admin/Recycle')}}">
                                <i class="fa fa-recycle"></i>Recyclebin</a>
                        </li>
                        <!-- <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop print-none mr-right">
              <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="GET">

                            </form>
                            <div class="header-button ">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 1 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{asset('contents/admin')}}/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 1 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{asset('contents/admin')}}/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 1 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('contents/admin')}}/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('contents/admin')}}/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                            <form id="logout-form" method="post" action="{{ route('logout') }}">
                                              @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid ">
                      <div class="content_b">
                        @yield('content')
                      </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2021. All rights reserved. Template by <a href="#">Masud Rana</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
      <script src="{{asset('contents/admin')}}/dist/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="{{asset('contents/admin')}}/dist/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('contents/admin')}}/dist/vendor/slick/slick.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/wow/wow.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/select2/select2.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/vector-map/jquery.vmap.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="{{asset('contents/admin')}}/dist/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="{{asset('contents/admin')}}/dist/js/main.js"></script>
    <script src="{{asset('contents/admin')}}/dist/js/custom.js"></script>
    <script src="{{asset('contents/admin')}}/dist/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('contents/admin')}}/dist/js/bootstrap-datepicker.js"></script>
    <script>
      $(document).ready(function(){
        $( "#search" ).click(function() {
          var from = $('#datepickerForm').val();
          var to = $('#datepickerTo').val();
          var base_url = window.location.origin;
          var url = base_url+'/admin/summary/search/'+from+'/'+to;
          location.href = url;
        });
      });
    </script>


</body>
</html>
