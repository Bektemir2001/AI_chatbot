<!-- Loopple Templates: https://www.loopple.com/templates | Copyright Loopple (https://www.loopple.com) | This copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chat Page Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="https://rawcdn.githack.com/Loopple/loopple-public-assets/ad60f16c8a16d1dcad75e176c00d7f9e69320cd4/argon-dashboard/css/nucleo/css/nucleo.css">
    <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/loopple/loopple.css')}}">
{{--    @if(!auth()->user())--}}
{{--        <script src="{{asset('js/user.js')}}"></script>--}}
{{--    @endif--}}
</head>

<body>
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white loopple-fixed-start" id="sidenav-main">
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <hr class="mt-0 mb-3">
        <div class="d-flex align-items-center">
            <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg" class="avatar ml-3">
            <div class="ml-3">
                <h4 class="mb-0">Tania Amber</h4>
                <p class="text-xs mb-0">Web Developer</p>
            </div>
        </div>
        <hr class="mt-3 mb-0">
        <div class="navbar-inner">
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:">
                            <i class="fa fa-desktop text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:">
                            <i class="fa fa-globe text-info"></i>
                            <span class="nav-link-text">Icons</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:">
                            <i class="fa fa-map-marker text-warning"></i>
                            <span class="nav-link-text">Maps</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:">
                            <i class="fa fa-table text-dark"></i>
                            <span class="nav-link-text">Tables</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:">
                            <i class="fa fa-lock text-danger"></i>
                            <span class="nav-link-text">Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:">
                            <i class="fa fa-key text-success"></i>
                            <span class="nav-link-text">Register</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-gradient-primary card position-fixed bottom-0">
                <div class="card-body">
                    <h4 class="text-white">Need heelp?</h4>
                    <p class="text-white text-sm">Please verify our <a href="javascript:;" class="text-white font-weight-bold text-uppercase">docs</a>.</p>
                    <a href="javascript:;" class="btn btn-white">Documentation</a>
                </div>
            </div>
        </div>
    </nav>
</nav>
<div class="main-content" id="panel">
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom" id="navbarTop">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="navbar-search navbar-search-dark form-inline mr-sm-3 mb-0" id="navbar-search-main">
                    <div class="form-group mb-0">
                        <div class="input-group input-group input-group-merge">
                            <input class="form-control ml-2" placeholder="Type here..." type="text">
                            <div class="input-group-append mr-2">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </form>
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                            <i class="ni ni-zoom-split-in"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img alt="flag" src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right py-0 overflow-hidden">
                            <div class="px-3 pt-3">
                                <h6 class="text-sm text-muted m-0">Select Language</h6>
                            </div>
                            <div class="list-group list-group-flush">

                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img alt="flag" src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">English</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mt-3">
                                        <div class="col-auto">
                                            <img alt="flag" src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/DE.png">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">Germany</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-layer-group"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                            <div class="row shortcuts px-4">
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    <small class="text-white">Calendar</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    <small class="text-white">Email</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                            <i class="fa fa-credit-card"></i>
                                        </span>
                                    <small class="text-white">Payments</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                            <i class="fa fa-book"></i>
                                        </span>
                                    <small class="text-white">Reports</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                            <i class="fa fa-map"></i>
                                        </span>
                                    <small class="text-white">Maps</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                            <i class="fa fa-store"></i>
                                        </span>
                                    <small class="text-white">Shop</small>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link position-relative" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-danger badge-sm position-absolute top-0 mt-n2 right-1 px-2 py-1">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0 overflow-hidden">
                            <div class="px-3 pt-3">
                                <h6 class="text-sm text-muted m-0">You have <span class="text-primary">3</span> new notifications!</h6>
                            </div>
                            <div class="list-group list-group-flush">

                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-1.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>2 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-2.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">Alexa Mira</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>3 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Did you have time to read my E-mail?</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-3.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">Rala Micharel</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>4 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Just saw your referring program. Can you please give me more details?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                    <span class="avatar avatar-sm">
                                        <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg">
                                    </span>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="#!" class="dropdown-item">
                                <i class="fa fa-user"></i>
                                <span>My profile</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="fa fa-tools"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="far fa-calendar"></i>
                                <span>Activity</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="fa fa-phone"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#!" class="dropdown-item">
                                <i class="fa fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer -->
    <footer class="footer pt-0 px-4">
        <div class="row align-items-center justify-content-lg-between">
        </div>
    </footer>
</div>
<div class="loopple-badge">Made with<a href="https://www.loopple.com"><img src="https://www.loopple.com/img/loopple-logo.png" class="loopple-ml-1" style="width:55px"></a></div>
<script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/jquery.min.js"></script>
<script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/bootstrap.bundle.min.js"></script>
<script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/js.cookie.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/chart.extension.js"></script>
<script src="https://rawcdn.githack.com/Loopple/loopple-public-assets/7bb803d2af2ab6d71d429b0cb459c24a4cd0fbb4/argon-dashboard/js/argon.min.js"></script>
</body>
