<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('back_end/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('back_end/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back_end/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet"
          href="{{ asset('back_end/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('back_end/assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title> Konstruktions - @yield('title')</title>
</head>

<body>

<div class="dashboard-main-wrapper">
    <!-- navbar -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="#">Konstruktions</a>
=======
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title>Welcome - @yield('title')</title>
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- -----------------------------------------------------------------
    -                      Top Navigation Menu                           -
    - -------------------------------------------------------------------- -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="{{ route('home') }}">konstruktion</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item">
                        <div id="custom-search" class="top-search-bar">
                            <input class="form-control" type="text" placeholder="Search..">
                        </div>
                    </li>
                    <li class="nav-item dropdown notification">
                        <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span
                                class="indicator"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                            <li>
                                <div class="notification-title"> Notification</div>
                                <div class="notification-list">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img
<<<<<<< HEAD
                                                        src="{{ asset('back_end/assets/images/avatar-2.jpg') }}" alt=""
=======
                                                        src="assets/images/avatar-2.jpg" alt=""
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                                        class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span
                                                        class="notification-list-user-name">Jeremy Rakestraw</span>accepted
                                                    your invitation to join the team.
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img
<<<<<<< HEAD
                                                        src="{{ asset('back_end/assets/images/avatar-3.jpg') }}" alt=""
                                                        class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span
                                                        class="notification-list-user-name">John Abraham </span>is now
                                                    following you
=======
                                                        src="assets/images/avatar-3.jpg" alt=""
                                                        class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span
                                                        class="notification-list-user-name"></span>is now following you
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                                    <div class="notification-date">2 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img
<<<<<<< HEAD
                                                        src="{{ asset('back_end/assets/images/avatar-4.jpg') }}" alt=""
=======
                                                        src="assets/images/avatar-4.jpg" alt=""
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                                        class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span
                                                        class="notification-list-user-name">Monaan Pechi</span> is
                                                    watching your main repository
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img
<<<<<<< HEAD
                                                        src="{{ asset('back_end/assets/images/avatar-5.jpg') }}" alt=""
=======
                                                        src="assets/images/avatar-5.jpg" alt=""
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                                        class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span
                                                        class="notification-list-user-name">Jessica Caruso</span>accepted
                                                    your invitation to join the team.
                                                    <div class="notification-date">2 min ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list-footer"><a href="#">View all notifications</a></div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown connection">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                            <li class="connection-list">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
<<<<<<< HEAD
                                        <a href="#" class="connection-item"><img src="{{ asset('back_end/assets/images/github.png') }}" alt="">
                                            <span>Github</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="{{ asset('back_end/assets/images/dribbble.png') }}"
                                                                                 alt=""> <span>Dribbble</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="{{ asset('back_end/assets/images/dropbox.png') }}" alt="">
=======
                                        <a href="#" class="connection-item"><img src="assets/images/github.png" alt="">
                                            <span>Github</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/dribbble.png"
                                                                                 alt=""> <span>Dribbble</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="">
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                            <span>Dropbox</span></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
<<<<<<< HEAD
                                        <a href="#" class="connection-item"><img src="{{ asset('back_end/assets/images/bitbucket.png') }}"
                                                                                 alt=""> <span>Bitbucket</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="{{ asset('back_end/assets/images/mail_chimp.png') }}"
                                                                                 alt=""><span>Mail chimp</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="{{ asset('back_end/assets/images/slack.png') }}" alt="">
=======
                                        <a href="#" class="connection-item"><img src="assets/images/bitbucket.png"
                                                                                 alt=""> <span>Bitbucket</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png"
                                                                                 alt=""><span>Mail chimp</span></a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="">
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                            <span>Slack</span></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="conntection-footer"><a href="#">More</a></div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
<<<<<<< HEAD
                           aria-haspopup="true" aria-expanded="false"><img src="{{ asset('back_end/assets/images/avatar-1.jpg') }}" alt=""
=======
                           aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt=""
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                                                           class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                             aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
<<<<<<< HEAD
                                <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
=======
                                <h5 class="mb-0 text-white nav-user-name">{{ auth()->user()->username }}</h5>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                <span class="status"></span><span class="ml-2">Available</span>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
<<<<<<< HEAD
                            <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
=======
                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-power-off mr-2"></i>Logout</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end navbar -->
<<<<<<< HEAD
    <!-- left sidebar -->

=======
    <!-- -----------------------------------------------------------------
    -                       Left Side Navigation Menu                    -
    ---------------------------------------------------------------------- -->
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
<<<<<<< HEAD
                        <li class="nav-item ">
                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-1" aria-controls="submenu-1"><i
                                    class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                    class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                           data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                        <div id="submenu-1-2" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">E Commerce Dashboard</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="">Product List</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="">Product
                                                        Single</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="">Product
                                                        Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                           data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                        <div id="submenu-1-1" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="influencer-finder.html">Influencer
                                                        Finder</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="influencer-profile.html">Influencer
                                                        Profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI
                                Elements</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/cards.html">Cards <span
                                                class="badge badge-secondary">New</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/general.html">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/carousel.html">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/listgroup.html">List Group</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/typography.html">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/accordions.html">Accordions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/tabs.html">Tabs</a>
=======

                        {{-- Dashboard Treee --}}
                        <li class="nav-item ">
                            <a class="nav-link {{(request()->is('dashboard'))? 'active' : ''}}"
                               href="{{ route('admin.dashboard') }}" aria-expanded="false"
                            ><i class="fa fa-fw fa-user-circle"></i>Dashboard </a>
                        </li>

                        {{-- Projects Tree --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Projects</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link {{ (request()->is('project/add'))? 'active' : '' }}" href="{{ route('project.add') }}">Add Project<span
                                                class="badge badge-secondary">New</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Active Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Hold Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Completed Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Canceled Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">All Projects</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                    </li>
                                </ul>
                            </div>
                        </li>
<<<<<<< HEAD
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-charts.html">Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-morris.html">Morris</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
=======

                        {{-- Vendors Tree --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Vendors</a>
                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Add Vendor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">All Vendors</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                    </li>
                                </ul>
                            </div>
                        </li>
<<<<<<< HEAD
                        <li class="nav-item ">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                            <div id="submenu-4" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/form-elements.html">Form Elements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/form-validation.html">Parsely Validations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/multiselect.html">Multiselect</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/datepicker.html">Date Picker</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/bootstrap-select.html">Bootstrap Select</a>
=======

                        {{-- Administrator Tree --}}
                        <li class="nav-item ">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Administrator
                                Area</a>
                            <div id="submenu-4" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Add New Administrator</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">All Administrators</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                    </li>
                                </ul>
                            </div>
                        </li>
<<<<<<< HEAD
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
=======

                        {{-- Inventory Tree --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Inventory
                                Area</a>
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Add New Item</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Item List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Item List</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                    </li>
                                </ul>
                            </div>
                        </li>
<<<<<<< HEAD
                        <li class="nav-divider">
                            Features
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>
                                Pages </a>
                            <div id="submenu-6" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/blank-page.html">Blank Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/login.html">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/404-page.html">404 page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/timeline.html">Timeline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/calendar.html">Calendar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/sortable-nestable-lists.html">Sortable/Nestable
                                            List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/widgets.html">Widgets</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/media-object.html">Media Objects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/cropper-image.html">Cropper</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
=======

                        {{-- Man Power Tree--}}
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>Man
                                Power</a>
                            <div id="submenu-6" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Attendance / List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Add New Staff</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">See Report</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                    </li>
                                </ul>
                            </div>
                        </li>
<<<<<<< HEAD
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps
=======

                        {{-- Accounting Tree--}}
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Accounting
                                Area
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                <span class="badge badge-secondary">New</span></a>
                            <div id="submenu-7" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
<<<<<<< HEAD
                                        <a class="nav-link" href="pages/inbox.html">Inbox</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
=======
                                        <a class="nav-link" href="">Banks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Loans</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Income</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Expense</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                    </li>
                                </ul>
                            </div>
                        </li>
<<<<<<< HEAD
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                            <div id="submenu-8" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-fontawesome.html">FontAwesome Icons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-material.html">Material Icons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-simple-lineicon.html">Simpleline Icon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-themify.html">Themify Icon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-flag.html">Flag Icons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-weather.html">Weather Icon</a>
=======

                        {{-- Clients Tree--}}
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Clients
                                Area</a>
                            <div id="submenu-8" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Add New Client</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Client History</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                    </li>
                                </ul>
                            </div>
                        </li>
<<<<<<< HEAD
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-9" aria-controls="submenu-9"><i
                                    class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                            <div id="submenu-9" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/map-google.html">Google Maps</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu
                                Level</a>
                            <div id="submenu-10" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Level 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                           data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                        <div id="submenu-11" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Level 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Level 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Level 3</a>
=======

                        {{-- Preferences Tree--}}
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                               data-target="#submenu-9" aria-controls="submenu-9"><i
                                    class="fas fa-fw fa-map-marker-alt"></i>Preferences</a>
                            <div id="submenu-9" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Revert Preferences</a>
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                                    </li>
                                </ul>
                            </div>
                        </li>
<<<<<<< HEAD
=======

>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<<<<<<< HEAD

    <!-- end left sidebar -->

    <!-- --------------------------------------------------------------
    -           Main Content Wrapper                                  -
    ---------------------------------------------------------------- -->
    @yield('content')
    <!-- end wrapper  -->

</div>

<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{ asset('back_end/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<!-- bootstap bundle js -->
<script src="{{ asset('back_end/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<!-- slimscroll js -->
<script src="{{ asset('back_end/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<!-- main js -->
<script src="{{ asset('back_end/assets/libs/js/main-js.js') }}"></script>
<!-- chart chartist js -->
<script src="{{ asset('back_end/assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
<!-- sparkline js -->
<script src="{{ asset('back_end/assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
<!-- morris js -->
<script src="{{ asset('back_end/assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
<script src="{{ asset('back_end/assets/vendor/charts/morris-bundle/morris.js') }}"></script>
<!-- chart c3 js -->
<script src="{{ asset('back_end/assets/vendor/charts/c3charts/c3.min.js') }}"></script>
<script src="{{ asset('back_end/assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
<script src="{{ asset('back_end/assets/vendor/charts/c3charts/C3chartjs.js') }}"></script>
<script src="{{ asset('back_end/assets/libs/js/dashboard-ecommerce.js') }}"></script>
=======
    <!-- end left sidebar -->

    <!-- -----------------------------------------------------------------
    -                       Main Content Appeared Section                -
    ---------------------------------------------------------------------- -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Howdy, {{ auth()->user()->getFullNameAttribute() }} </h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- End Content Appeared Section-->

</div>
<!-- end main wrapper  -->


<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<!-- bootstap bundle js -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<!-- slimscroll js -->
<script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
<!-- chart chartist js -->
<script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
<!-- sparkline js -->
<script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
<!-- morris js -->
<script src="{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/morris-bundle/morris.js') }}"></script>
<!-- chart c3 js -->
<script src="{{ asset('assets/vendor/charts/c3charts/c3.min.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
<script src="{{ asset('assets/vendor/charts/c3charts/C3chartjs.js') }}"></script>
<script src="{{ asset('assets/libs/js/dashboard-ecommerce.js') }}"></script>
@yield('script')
>>>>>>> 99e821481d7224ee815f1432b9990c2be1b7d866
</body>

</html>
