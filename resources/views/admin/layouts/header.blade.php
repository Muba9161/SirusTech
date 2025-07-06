<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('../assets/backend/assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>{{ env('APP_NAME') }} </title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}" />



    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('../assets/backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{ asset('../assets/backend/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('../assets/backend/assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('../assets/backend/assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('../assets/backend/assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('../assets/backend/assets/css/icons.css') }}" rel="stylesheet" />

    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('../assets/backend/assets/colors/color1.css') }}" />
    <!-- Add Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    {{--
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-treed/0.1.5/jquery.treed.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/sortable.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-treed/0.1.5/css/jquery.treed.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

</head>

<body class="app sidebar-mini ltr light-mode">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets/backend/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="{{ route('dashboard') }}">
                            <img src="../assets/backend/assets/images/brand/logo-3.png"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/backend/assets/images/brand/logo-3.png"
                                class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input type="text" class="form-control" id="typehead" placeholder="Search for results...">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>

                        <!-- Placeholder for search results -->
                        <div id="search-results" class="search-results-container" style="display:none;">
                            <!-- Results will be populated here -->
                        </div>

                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon"
                                                data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fa fa-moon"></i></span>
                                                <span class="light-layout"><i class="fa fa-sun"></i></span>
                                            </a>
                                        </div>


                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                class="nav-link leading-none d-flex">
                                                @if (Auth::user())
                                                    @if (!is_null(Auth::user()->profile_picture))
                                                        <img src="{{ asset('storage/profile_pictures/' . Auth::user()->profile_picture) }}"
                                                            alt="profile-user" class="avatar  profile-user brround cover-image"
                                                            style="object-fit: cover;">
                                                    @else
                                                        <img src="../assets/backend/assets/images/users/user.png"
                                                            alt="profile-user" class="avatar  profile-user brround cover-image"
                                                            style="object-fit: cover;">
                                                    @endif

                                                @endif
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <!-- Check if 'user_name' is available in session, then display it -->
                                                        @if (Auth::check())
                                                            <!-- Checks if the user is authenticated -->
                                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">
                                                                {{ Auth::user()->name }} <br>
                                                                <!-- Display the authenticated user's name -->
                                                                <small class="text-muted"
                                                                    style="text-transform: capitalize;">{{ Auth::user()->option }}</small>
                                                            </h5>
                                                        @else
                                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">Guest</h5>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="#">
                                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                                </a>
                                                <a class="dropdown-item" href="email-inbox.html">
                                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                                    <span class="badge bg-danger rounded-pill float-end">5</span>
                                                </a>
                                                <a class="dropdown-item" href="lockscreen.html">
                                                    <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                                </a>
                                                <form action="{{ route('logout') }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{ route('dashboard') }}">
                            <img src="../assets/backend/assets/images/brand/logo-3.png"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/backend/assets/images/brand/logo-3.png"
                                class="header-brand-img toggle-logo" alt="logo">
                            <img src="../assets/backend/assets/images/brand/logo-3.png"
                                class="header-brand-img light-logo" alt="logo">
                            <img src="../assets/backend/assets/images/brand/logo-3.png"
                                class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">

                            <li class="sub-category">
                                <h3>Tools</h3>
                            </li>

                            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('dashboard')}}"><i class="side-menu__icon fa-solid fa-home"></i><span class="side-menu__label">Dashboard</span><i class="angle fe fe-chevron-right"></i></a>

                            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.feedback.index')}}"><i class="side-menu__icon fa-solid fa-user"></i><span class="side-menu__label">Feedbacks</span><i class="angle fe fe-chevron-right"></i></a>

                            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('contact.index')}}"><i class="side-menu__icon fa-solid fa-user"></i><span class="side-menu__label">Contact</span><i class="angle fe fe-chevron-right"></i></a>

                            <li class="sub-category">
                                <h3>Manage Users</h3>
                            </li>

                            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('users.index')}}"><i class="side-menu__icon fa-solid fa-user"></i><span class="side-menu__label">Users</span><i class="angle fe fe-chevron-right"></i></a>




                        </ul>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
