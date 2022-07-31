<html lang="en" data-layout="horizontal" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-style="default" data-layout-mode="light" data-layout-width="fluid" data-layout-position="fixed"><head>
    <meta charset="utf-8">
    <title>Inscrivez-vous |Espace client CTC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin &amp; Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/dropzone/dropzone.css') }}" type="text/css" />
</head>
<style>#gw_map1 {
    display: none;
    }</style>
<body style="">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-am.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-am.png" alt="" height="17">
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-am.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-am.png" alt="" height="17">
                                </span>
                            </a>
                        </div>
                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                    id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar="init" style="max-height: 320px;">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <!-- item-->
                                                        <div class="dropdown-header">
                                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">
                                                                Recent Searches</h6>
                                                        </div>
                                                        <div class="dropdown-item bg-transparent text-wrap">
                                                            <a href="index.html"
                                                                class="btn btn-soft-secondary btn-sm btn-rounded">how to
                                                                setup <i class="mdi mdi-magnify ms-1"></i></a>
                                                            <a href="index.html"
                                                                class="btn btn-soft-secondary btn-sm btn-rounded">buttons
                                                                <i class="mdi mdi-magnify ms-1"></i></a>
                                                        </div>
                                                        <!-- item-->
                                                        <div class="dropdown-header mt-2">
                                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">
                                                                Pages</h6>
                                                        </div>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <i
                                                                class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                                            <span>Analytics Dashboard</span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <i
                                                                class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                                            <span>Help Center</span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <i
                                                                class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                                            <span>My account settings</span>
                                                        </a>
                                                        <!-- item-->
                                                        <div class="dropdown-header mt-2">
                                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">
                                                                Members</h6>
                                                        </div>
                                                        <div class="notification-list">
                                                            <!-- item -->
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item notify-item py-2">
                                                                <div class="d-flex">
                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                        class="me-3 rounded-circle avatar-xs"
                                                                        alt="user-pic">
                                                                    <div class="flex-1">
                                                                        <h6 class="m-0">Angela Bernier</h6>
                                                                        <span
                                                                            class="fs-11 mb-0 text-muted">Manager</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <!-- item -->
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item notify-item py-2">
                                                                <div class="d-flex">
                                                                    <img src="assets/images/users/avatar-3.jpg"
                                                                        class="me-3 rounded-circle avatar-xs"
                                                                        alt="user-pic">
                                                                    <div class="flex-1">
                                                                        <h6 class="m-0">David Grasso</h6>
                                                                        <span class="fs-11 mb-0 text-muted">Web
                                                                            Designer</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <!-- item -->
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item notify-item py-2">
                                                                <div class="d-flex">
                                                                    <img src="assets/images/users/avatar-5.jpg"
                                                                        class="me-3 rounded-circle avatar-xs"
                                                                        alt="user-pic">
                                                                    <div class="flex-1">
                                                                        <h6 class="m-0">Mike Bunch</h6>
                                                                        <span class="fs-11 mb-0 text-muted">React
                                                                            Developer</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>
                                <div class="text-center pt-3 pb-1">
                                    <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results
                                        <i class="ri-arrow-right-line ms-1"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown ms-1 topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language"
                                    height="20" class="rounded">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language py-2"
                                    data-lang="en" title="English">
                                    <img src="assets/images/flags/us.svg" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp"
                                    title="Spanish">
                                    <img src="assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">Española</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr"
                                    title="German">
                                    <img src="assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded"
                                        height="18"> <span class="align-middle">Deutsche</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it"
                                    title="Italian">
                                    <img src="assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">Italiana</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru"
                                    title="Russian">
                                    <img src="assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">русский</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch"
                                    title="Chinese">
                                    <img src="assets/images/flags/china.svg" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">中国人</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr"
                                    title="French">
                                    <img src="assets/images/flags/french.svg" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">français</span>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">@if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Nom}}@endif</span>
                                        <span
                                            class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">@if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Qualite}}@endif</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Anna!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i
                                        class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                                        class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i
                                        class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Balance : <b>$5971.67</b></span></a>
                                <a class="dropdown-item" href="pages-profile-settings.html"><span
                                        class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                        class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span></a>
                                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                        class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="{{route('logout-compte')}}"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed active" href="{{route('compte')}}"
                                data-bs-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Tableau de bord</span>
                            </a>
                            <div class="collapse menu-dropdown show" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('compte')}}" class="nav-link" data-key="t-analytics"> Tableau de bord </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#sidebarApps" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-pages-line"></i><span data-key="t-apps">Bon de Commande</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="" class="nav-link" data-key="t-calendar">
                                            Ajouter </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('list_bbcommandeClient')}}" class="nav-link collapsed"
                                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                                            aria-controls="sidebarProjects" data-key="t-projects">
                                            listes
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTasks">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="{{route('list_bbcommandeClient')}}" class="nav-link"
                                                        data-key="t-task-details"> listes </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarTasks" class="nav-link collapsed" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarTasks"
                                            data-key="t-tasks"> Dossier Architecture
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTasks">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-tasks-kanban.html" class="nav-link"
                                                        data-key="t-kanbanboard">
                                                        Kanban Board </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-list-view.html" class="nav-link"
                                                        data-key="t-list-view">
                                                        List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-details.html" class="nav-link"
                                                        data-key="t-task-details"> Task Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarTasks" class="nav-link collapsed" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarTasks"
                                            data-key="t-tasks"> Dossier Génie Civil
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTasks">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-tasks-kanban.html" class="nav-link"
                                                        data-key="t-kanbanboard">
                                                        Kanban Board </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-list-view.html" class="nav-link"
                                                        data-key="t-list-view">
                                                        List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-details.html" class="nav-link"
                                                        data-key="t-task-details"> Task Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#sidebarLayouts" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Réclamation</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="layouts-horizontal.html" target="_blank" class="nav-link"
                                            data-key="t-horizontal">Horizontal</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#sidebarPages" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i class="ri-pages-line"></i> <span data-key="t-pages">Projets</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarPages">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#sidebarMaps" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="ri-map-pin-line"></i> <span data-key="t-maps">Cartographie des projets</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                            Leaflet
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Wizard</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Wizard</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Ajouter un bon de commande</h4>
                                </div>
                                <!-- end card header -->
                                <div class="card-body form-steps">
                                    <form class="vertical-navs-step" action="/saveBon" method="POST"enctype="multipart/form-data" >
                                        {{ csrf_field() }}
                                        <div class="row gy-5">
                                            <div class="col-lg-3">
                                                <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true" data-position="0">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> 
                                                            Etape 1
                                                        </span>
                                                        Maitre de l'Ouvrage  
                                                    </button>
                                                    <button class="nav-link" id="v-pills-bill-address-tab"
                                                     data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false" data-position="1">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 2
                                                        </span>
                                                        Situation du Projet 
                                                    </button>
                                                    <button class="nav-link" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 3
                                                        </span>
                                                        Maitre d’œuvre 
                                                    </button>
                                                    <button class="nav-link" id="v-pills-Bureau-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Bureau" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 4
                                                        </span>
                                                        Bureau d’Etudes Techniques 
                                                    </button>
                                                    <button class="nav-link" id="v-pills-labo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-labo" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 5
                                                        </span>
                                                        Laboratoire Etudes de Sol(Géotechnique) 
                                                    </button>
                                                    <button class="nav-link" id="v-pills-Batiment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Batiment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 6
                                                        </span>
                                                      DESCIPTION DES BATIMENTS et/ou OUVAGES
                                                    </button>
                                                    <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false" data-position="3">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 7
                                                        </span>
                                                        Enregistrez
                                                    </button>
                                                    <button class="nav-link" id="v-pills-dossier-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dossier" type="button" role="tab" aria-controls="v-pills-dossier" aria-selected="false" data-position="3">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 8
                                                        </span>
                                                        Joindre le dossier Téchnique
                                                    </button>
                                                    <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false" data-position="3">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 9
                                                        </span>
                                                        Terminé
                                                    </button>
                                                   
                                                </div>
                                                <!-- end nav -->
                                            </div>
                                            <!-- end col-->
                                            <div class="col-lg-6">
                                                <div class="px-lg-4">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                            <div>
                                                                <h5>Maitre de l'Ouvrage</h5>
                                                                <p class="text-muted">Fill all information below</p>
                                                            </div>
                                                            <div>
                                                                <div class="col-12">
                                                                    <label for="email" class="form-label">Maitre de l’Ouvrage *
                                                                     <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                     @if (Auth::guard('web')->user()->type == 3)
                                                                     <input type="text" name="MaitreOuvrage" type="text" value="{{Auth::guard('web')->user()->Nom}}" class="form-control" id="email" placeholder="Entrer MaitreOuvrage">
                                                                     @else
                                                                     <input id="userName-2"  name="MaitreOuvrage" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer MaitreOuvrage">
                                                                     @endif
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="email" class="form-label">Adresse *
                                                                     <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                     @if (Auth::guard('web')->user()->type == 3)
                                                                     <input type="text"name="MaitreOuvrageAdr" type="text"value="{{Auth::guard('web')->user()->Adresse}}" readonly class="form-control" id="email" placeholder="Entrer Adresse">
                                                                     @else
                                                                     <input id="userName-2"  name="MaitreOuvrage" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                     @endif
                                                                </div>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6">
                                                                        <label for="firstName" class="form-label">Nif </label>
                                                                        @if (Auth::guard('web')->user()->type == 3) 
                                                                        <input type="text" class="form-control" name="MaitreOuvrageNif"   value="{{Auth::guard('web')->user()->Nif}}" readonly placeholder="Entrer Nif" value="">
                                                                        @else
                                                                        <input type="text" class="form-control" name="MaitreOuvrageNif"   oninput="this.value = this.value.toUpperCase()" name="MaitreOuvrageNif"  placeholder="Entrer Nif" value="">
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="cleave-phone" class="form-label">Tél</label>
                                                                        @if (Auth::guard('web')->user()->type == 3) 
                                                                        <input type="text" class="form-control" id="lastName" placeholder="Entrer Tél"value="{{Auth::guard('web')->user()->Telephone}}"name="MaitreOuvrageTel">
                                                                        @else
                                                                        <input type="text" class="form-control" name="MaitreOuvrageTel" id="cleave-phone" placeholder="(xxx)xxx-xxxx">
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="firstName" class="form-label">
                                                                            Email </label>
                                                                            @if (Auth::guard('web')->user()->type == 3) 
                                                                            <input type="text" class="form-control" name="MaitreOuvrageEmail"type="email" class="form-control "value="{{Auth::guard('web')->user()->email}}" readonly>
                                                                            @else
                                                                            <input  class="form-control" name="MaitreOuvrageEmail"type="email"placeholder="Entrer  Email" value="">
                                                                            @endif
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="cleave-fax" class="form-label">Fax</label>
                                                                        @if (Auth::guard('web')->user()->type == 3) 
                                                                        <input type="text" class="form-control" name="MaitreOuvrageFax"value="{{Auth::guard('web')->user()->Fax}}" readonly>
                                                                        @else
                                                                        <input type="text"  class="form-control" name="MaitreOuvrageFax"id="cleave-fax" placeholder="(xxx)xxx-xxxx">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab">
                                                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>L'étape suivante</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-bill-address" role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                                                            <div>
                                                                <h5>Situation du Projet :</h5>
                                                                <p class="text-muted">Ajouter description conçernant les coordonnées géographiques
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <label for="address" class="form-label">Intitulé du Projet *</label>
                                                                        <input type="text" class="form-control" id="address"name="intitule_proj" placeholder="1234 Main St">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="address2" class="form-label">Descript projet <span class="text-muted">(Optional)</span></label>
                                                                        <textarea type="text" class="form-control" id="address2"name="descript_projet" placeholder="Apartment or suite"></textarea>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <label for="country" class="form-label">Wilaya</label>
                                                                        <select name="country" id="country"class="form-control" required="required" data-error="Please specify your need.">
                                                                            @foreach(App\Bwilaya::all() as $countryData)
                                                                            <option value="{{$countryData->CODE_Wilaya}}" selected>{{$countryData->nom_wilaya}}</option>
                                                                            @endforeach
                                                                            </select>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="state" class="form-label">Commune</label>
                                                                        <select name="state" id="state" class="form-control">
                                                                            <option>--Commune--</option>
                                                                             </select>
                                                                    </div>
                                                                </div>
                                                                <hr class="my-4 text-muted">
                                                                <div>
                                                                    <div class="row g-3">
                                                                        <div class="col-md-5">
                                                                            <label for="country" class="form-label">latitude (X)</label>
                                                                            <input id="latitude" type="text" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude', request('latitude')) }}" required>
                                                                            {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label for="state" class="form-label">longitude (Y)
                                                                            </label>
                                                                            <input id="longitude" type="text" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', request('longitude')) }}" required>
                                                                            {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div id="map" id="gw_map1" style="width: 780px; height: 300px !important"></div></center>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour aux informations Maitre de l'Ouvrage</button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> 
                                                                    Maitre d’œuvre</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                                                            <div>
                                                                <h5>Avancement des études à la date du Bon de Commande :
                                                                </h5>
                                                                <p class="text-muted">Remplissez toutes les informations ci-dessous</p>
                                                            </div>
                                                            <div>
                                                                <div class="my-3">
                                                                    <div class="form-check form-check-inline">
                                                                        <input id="credit" name="Esquisse" type="checkbox"class="form-check-input">
                                                                        <label class="form-check-label" for="credit">Esquisse</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input id="debit" name="AvantProjet" type="checkbox" class="form-check-input">
                                                                        <label class="form-check-label" for="debit">Avant Projet</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input id="paypal" name="Projetdexécution" type="checkbox" class="form-check-input" >
                                                                        <label class="form-check-label" for="paypal">Projet d’exécution</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row gy-3">
                                                                    <div class="col-12"> <h5>Maitre d’œuvre</h5>
                                                                        <label for="email" class="form-label">Dénomination *
                                                                         <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                         <input id="userName-2"  name="maitre_oeuv" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer Dénomination ">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="Adresse" class="form-label">Adresse *</label>
                                                                         <textarea id="userName-2"  name="maitre_oeuvAdresse" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                        </textarea>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="firstName" class="form-label">
                                                                            Email </label>
                                                                            <input  class="form-control"name="maitre_oeuvEmail"type="email"placeholder="Entrer  Email" value="">
                                                                    </div>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6">
                                                                            <label for="cleave-phone" class="form-label">Tél</label>
                                                                            <input type="text" class="form-control"name="maitre_oeuvTél" id="cleave-phone"placeholder="(xxx)xxx-xxxx"value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="cleave-fax" class="form-label">Fax</label>
                                                                            <input type="text"  class="form-control" name="maitre_oeuvFax" id="cleave-fax"placeholder="(xxx)xxx-xxxx" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Situation du Projet </button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-Bureau-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>  Bureau d’Etudes Techniques </button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-Bureau" role="tabpanel" aria-labelledby="v-pills-Bureau-tab">
                                                            <div>
                                                                <div class="row gy-3">
                                                                    <div class="col-12"> <h5>Bureau d’Etudes Techniques</h5>
                                                                        <label for="email" class="form-label">Dénomination *
                                                                         <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                         @if (Auth::guard('web')->user()->type == 1) 
                                                                         <input id="userName-2" name="bureau_etud" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer Dénomination "value="{{Auth::guard('web')->user()->Nom}}"readonly>
                                                                         @else
                                                                         <select id="sel"class="form-control" name="bureauSel"  onchange="toggle()">
                                                                            <option   class="form-control"selected disabled>Selectionée un Bureau Etude</option>
                                                                             <option value="new"  style="color:red" class="form-control" >Ajouter un  Nouveau Bureau Etude</option>
                                                                             @foreach(App\B_bcommande::select('bureau_etud')->where('client_id','=',Auth::guard('web')->user()->id)->groupBy('bureau_etud')->get() as $bureau)
                                                                                                              <option class="form-control"  value="{{$bureau->bureau_etud}}">{{$bureau->bureau_etud}}</option>
                                                                                                               @endforeach
                                                                         </select>@endif
                                                                        </div>
                                                                    <div id="cont" style="display:none; border:solid 1px #CCC;padding:10px;">
                                                                        <div class="col-12">
                                                                            <label for="address" class="form-label">Dénomination*</label>
                                                                             <input id="userName-2" name="bureau_etud"type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Dénomination">
                                                                        </div>
                                                                        <div class="col-12">
                                                                        <label for="Adresse" class="form-label">Adresse *
                                                                         <input id="userName-2"  name="bureau_etudAdr" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                    </div>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Email</label>
                                                                            <input type="text" class="form-control"name="bureau_etudEmail" placeholder="Entrer Email" value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Tél</label>
                                                                            <input type="text" class="form-control"name="bureau_etudTél" placeholder="Entrer Tél" value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Fax</label>
                                                                            <input type="text"  class="form-control" name="bureau_etudFax" placeholder="Entrer  Fax" value="">
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="row g-2">
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Ingénieur Chargé de l'Etude G.Civil</label>
                                                                            <input type="text" class="form-control"name="maitre_oeuvTél" placeholder="Entrer Chargé de l'Etude" oninput="this.value = this.value.toUpperCase()"   value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Numéro d'agrement :(tableau des Ingénieurs) </label>
                                                                            <input type="text"  class="form-control" name="IngNumeroagrement" placeholder="Entrer  Fax" value="">
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        function toggle() {
                                                                            var cont = document.getElementById('cont');
                                                                                                                      if(document.getElementById('sel').value =="new"){
                                                                                                                         cont.style.display = 'block';
                                                                                                                                                                        }
                                                                                                                                                                        else {
                                                                                                                                                                          cont.style.display = 'none';
                                                                                                                                                                        }
                                                                                           }
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-payment-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour  Maitre d’œuvre</button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-labo-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Laboratoire Etudes de Sol</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-labo" role="tabpanel" aria-labelledby="v-pills-labo-tab">
                                                            <div>
                                                                <div class="row gy-3">
                                                                    <div class="col-12"> <h5>Laboratoire Etudes de Sol(Géotechnique) :</h5>
                                                                        <label for="email" class="form-label">Dénomination *
                                                                         <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                         <input id="userName-2"  name="laboratoire" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer Dénomination ">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="Adresse" class="form-label">Adresse *</label>
                                                                         <input id="userName-2" name="laboratoireAdresse" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                    </div>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Email</label>
                                                                            <input type="text" class="form-control"name="laboratoireEmail"placeholder="Entrer Tél" value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Tél</label>
                                                                            <input type="text" class="form-control" name="laboratoireTél" placeholder="Entrer Tél" value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Fax</label>
                                                                            <input type="text"  class="form-control" name="laboratoireFax" placeholder="Entrer  Fax" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-Bureau-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour  Bureau d’Etudes Techniques</button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-Batiment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> DESCIPTION DES BATIMENTS et/ou OUVAGES</button>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-Batiment" role="tabpanel" 
                                                        aria-labelledby="v-pills-Batiment-tab">
                                                            <table class="table align-middle table-nowrap">
                                                                <tbody>
                                                                    <tr>
                                                                    <th>Surface Totale du Terrain D’Assiette en M²</th>
                                                                    <th>Date prévisionnelle du début des travaux</th>
                                                                    <th>Délais desTravaux en Mois</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="text" name="SurfaceConstruitM2" ></td>
                                                                    <td><input type="date" name="DateDebuttravaux"></td>
                                                                    <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="DateDélaisTravaux" ></td>
                                                                </tr>
                                                            </tbody></table>
                                                            <table class="table" id="dynamicTable">  
                                                                <tr>
                                                                <th>Désignation du Bâtiment et/ou Ouvrage</th>
                                                                                <th>Emprise du Bâtimentet /ou Ouvrageau Sol enm²</th>
                                                                                <th>Nombre  d’Etages du Bâtiment et/ou Hauteurdel’ouvrage</th>
                                                                                <th>Nombre de Bâtimentset/ou Ouvrages</th>
                                                                                <th>Action</th>
                                                                </tr>
                                                                <tr>  
                                                                    <td><textarea type="text" name="addmore[0][Désignation]" oninput="this.value = this.value.toUpperCase()" class="form-control" /></textarea> </td>  
                                                                    <td><input type="text" name="addmore[0][EmpriseduBatiment]"  oninput="this.value = this.value.toUpperCase()"class="form-control" /></td>  
                                                                    <td><input type="text"  name="addmore[0][NombredEtages]" oninput="this.value = this.value.toUpperCase()"  class="form-control" /></td>  
                                                                    <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"name="addmore[0][NombredeBatiment]"  class="form-control" /></td>  
                                                                    <td> <div class="edit">
                                                                        <button type="button" name="add" id="add" class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Ajouter une ligne</button>
                                                                    </div></td>  
                                                                </tr>  
                                                            </table> 
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-labo-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour  Laboratoire Etudes de Sol</button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-finish-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> DESCIPTION DES BATIMENTS et/ou OUVAGES</button>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="tab-pane fade" id="v-pills-dossier" role="tabpanel" aria-labelledby="v-pills-dossier-tab">
                                                            <div class="card-body form-steps">
                                                                <form action="#">
                                                                   
                                                                    <div class="step-arrow-nav mb-4">
                            
                                                                        <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                                                            <li class="nav-item" role="presentation">
                                                                                <button class="nav-link active" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true" data-position="0">Dossier architecture</button>
                                                                            </li>
                                                                            <li class="nav-item" role="presentation">
                                                                                <button class="nav-link" id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false" data-position="1">Dossier Génie civil</button>
                                                                            </li>
                                                                            <li class="nav-item" role="presentation">
                                                                                <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false" data-position="2">Note de calcule</button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                            
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane fade active show" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                                                                            <div>
                                                                             ffffffffffffdddddddddddddddddd
                                                                            </div>
                                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="steparrow-description-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to more info</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end tab pane -->
                            
                                                                        <div class="tab-pane fade" id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                                                                            <div>
                                                                               ffffff
                                                                            </div>
                                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to General</button>
                                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end tab pane -->
                            
                                                                        <div class="tab-pane fade" id="pills-experience" role="tabpanel">
                                                                            <div class="text-center">
                            
                                                                                <div class="avatar-md mt-5 mb-4 mx-auto">
                                                                                    <div class="avatar-title bg-light text-success display-4 rounded-circle">
                                                                                        <i class="ri-checkbox-circle-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <h5>Well Done !</h5>
                                                                                <p class="text-muted">You have Successfully Signed Up</p>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end tab pane -->
                                                                    </div>
                                                                    <!-- end tab content -->
                                                                </form>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                                            <div class="text-center pt-4 pb-2">
                                                                <div class="mb-4">
                                                                    <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                                </div>
                                                                <h5>Votre demande est terminée  !</h5>
                                                                <div class="col text-center">
                                                                    <button type="submit" value=" Enregistrez"class="btn btn-warning"  onclick="func()"id="submit" >Enregistrez</button>
                                                                    <button type="submit" value=" Enregistrez"style="display: none;" class="btn btn-success" id="submit" >Envoyer</button>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="row gy-3">
                                                                <h5>Note :</h5>
                                                                <p class="text-muted">Aprés l'enregistrement la Visualisation du document est possible
                                                                     <i
                                                                    class="ri-eye-line align-bottom me-2 text-muted"></i>
                                                                    </a>
                                                                </p>
                                                                <p class="text-muted">Aprés l'envoie le document  soit envoyé automatiqument vers leCTC
                                                                </p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                    </div>
                                                    <!-- end tab content -->
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </form>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif


                   
                    @if(session()->has('message'))
                    
                        <div class="card-body" id="kjkjk"  style="" >
                            <div class="d-flex align-items-center mb-4">
                                <h5 class="card-title flex-grow-1">chargement des pièces jointe Dossier Arhcitecture  plan version PDF/Image/DWG</h5>
                                @if($errors->any())
                                <h4 style="colro:red">{{$errors->first()}}</h4>
                                @endif 
                            </div>  @if(session()->has('message'))
                            <div class="alert alert-success"> {{ session()->get('go') }} </div>
                            @endif
                            <div class="card">
             
                  
                                <div class="card">
                                    <div class="card-header">
                                        <h5> Télécharger le document scannée avec pièces jointe Dossier Arhcitecture</h5>
                                       
                                        <div class="card-header-right">  
                                              <ul class="list-unstyled card-option"> 
                                                       <li><i class="icofont icofont-simple-left "></i>
                                                    </li>    
                                                        <li>
                                                            <i class="icofont icofont-maximize 
                                                            full-card"></i>
                                                        </li>      
                                                    <li>
                            <i class="icofont icofont-minus minimize-card"></i></li>     
                               <li><i class="icofont icofont-refresh reload-card"></i></li>   
                                    <li><i class="icofont icofont-error close-card"></i></li> 
                                   </ul></div>
                                    </div>
                                  
                                    <form  id="frmFileUpload"
                                        class="dropzone dz-clickable" 
                                        method="post" action="{{route('uploabordereau',session()->get('go') )}}"
                                        enctype="multipart/form-data"class="dropzone dz-clickable"
                                         id="image-upload">
                                       @csrf
                                      
                                <div class="dz-default dz-message" >    
                                    Déposez les Plans ici ou cliquez pour télécharger..<br>
                                    <span class="note needsclick"></span>
                                  </div>
            
                               
                                </form>
                                
                            <!-- end card body Dossier Architectures -->
                        </div>
                                
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                        </div>  @endif
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>2022 © .
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top" style="display: block;">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->
    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class="mdi mdi-spin mdi-cog-outline fs-22"></i>
        </div>
    </div>
    <!-- Theme Settings -->
    <link href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
       <!-- Cordonnées geo -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
    <script>var cleaveBlocks = new Cleave('#cleave-phone', {
        delimiters: ['(', ')', '-'],
        blocks: [0, 3, 3, 4]
    });</script>

<script>var cleaveBlocks = new Cleave('#cleave-fax', {
    delimiters: ['(', ')', '-'],
    blocks: [0, 3, 3, 4]
});</script>

    <script>
$("#v-pills-bill-address-tab").click(function() {
    $("#gw_map1").toggle(); setTimeout(function(){ map.invalidateSize()}, 400);
});
       var map = L.map('map');
    map.setView([36.752887, 3.042048], 13);
   //var map = L.map('map' ,{attributionControl: false}) to hide name in the map
    var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
    //get coordinat location
    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");
    var curlocation =[36.752887, 3.042048];
    map.attributionControl.setPrefix('YOUR_ATTRIBUTION');
    var marker =new L.marker(curlocation, {
                     draggable:'true',
    });
   marker.on('dragend', function (event){
         var position = marker.getLatLng();
         marker.setLatLng(position ,{
             draggable :'true',
              }).bindPopup(position).update();
              $("#latitude").val(position.lat);
              $("#longitude").val(position.lng);
   });
   map.addLayer(marker);
   map.on("click",function(e){
       var lat=e.latlng.lat;
       var lng=e.latlng.lng;
       if(!marker){
           marker= l.marker(e.latlng).addTo(maymap);
       }else{
           marker.setLatLng(e.latlng);
       }
       latInput.value=lat;
       lngInput.value=lng;
   });
    </script>
    <script type="text/javascript">
        var i = 0;
        $("#add").click(function(){
            ++i;
            $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][Désignation]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][EmpriseduBatiment]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][NombredEtages]" class="form-control" /></td> <td><input type="text" name="addmore['+i+'][NombredeBatiment]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
        });
        $(document).on('click', '.remove-tr', function(){  
             $(this).parents('tr').remove();
        });  
     </script>
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $('#country').change(function(){
    var countryID = $(this).val();
    if(countryID){
    $.ajax({
    type:"GET",
    url:"{{url('getstatelistInscription')}}?countryid="+countryID,
    success:function(res){
    if(res){
    $("#state").empty();
    $("#state").append('<option>Select</option>');
    $.each(res,function(key,value){
    $("#state").append('<option value="'+key+'">'+value+'</option>');
    });
    }else{
    $("#state").empty();
    }
    }
    });
    }else{
    $("#state").empty();
    }
    });
    });
    </script>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script><script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script type="text/javascript" src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script type="text/javascript" src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body></html>
<script src="{{asset('assets/libs/dropzone/dropzone-min.js')}}"></script>

<script  src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@include('front.layouts.scripts.dropzone')
