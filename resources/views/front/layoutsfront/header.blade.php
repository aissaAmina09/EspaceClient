<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
            </a>
            <a href="index.html">
                <img class="img-fluid" src="{{asset('front/images/logo.png')}}" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                </li>
                
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="ti-fullscreen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification lng-dropdown">
                    <a href="#" id="dropdown-active-item" class="">
                        <i class="flag-icon flag-icon-gb m-r-5"></i> English
                    </a>
                    <ul class="show-notification">
                        <li>
                            <a href="#" data-lng="fr">
                                <i class="flag-icon flag-icon-dz m-r-5"></i> Français
                            </a>
                        </li>
                        <li>
                            <a href="#" data-lng="en">
                                <i class="flag-icon flag-icon-gb m-r-5"></i> Anglais
                            </a>
                        </li>
                       
                        <li>
                            <a href="#" data-lng="fr">
                                <i class="flag-icon flag-icon-dz m-r-5"></i> Arabe
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="header-notification">
                    <a href="#!">
                        <i class="ti-bell"></i>
                        <span class="badge bg-c-pink"></span>
                    </a>
                    <ul class="show-notification">
                        <li>
                            <h6>Notifications</h6>
                            <label class="label label-danger">New</label>
                        </li>
                        <li>
                            <div class="media">
                                <img class="d-flex align-self-center" src="{{ asset('front/images/user.png') }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="notification-user">John Doe</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <img class="d-flex align-self-center" src="{{asset('front/images/user.png')}}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="notification-user">Joseph William</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <img class="d-flex align-self-center" src="{{asset('front/images/user.png')}}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="notification-user">Sara Soudein</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="user-profile header-notification">
                    <a href="#!">
                        <img src="{{asset('front/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                        <span>@if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Nom}}@endif</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a href="#!">
                                <i class="ti-settings"></i> Paramètres
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-user"></i> Profil
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-email"></i> My Messages
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-lock"></i> Lock Screen
                            </a>
                        </li>
                        <li>
                            <a href="{{route('logout-compte')}}">
                                <i class="ti-layout-sidebar-left"></i> Se déconnecter
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            
        </div>
    </div>
</nav>