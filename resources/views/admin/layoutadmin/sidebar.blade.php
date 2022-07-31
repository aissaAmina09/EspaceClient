<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-40 img-radius" src="{{asset('front/images/avatar-4.jpg')}}" alt="User-Profile-Image">
                        <div class="user-details">
                            <span>  @if(Auth::guard('admin')->check()){{Auth::guard('admin')->user()->Nom}}@endif</span>
                            <span id="more-details"> @if(Auth::guard('admin')->check()){{Auth::guard('admin')->user()->Qualite}}@endif<i class="ti-angle-down"></i></span>
                        </div>
                    </div>

                    <div class="main-menu-content">
                        <ul>
                            <li class="more-details">
                                <a href="#"><i class="ti-user"></i>Voir le Profil</a>
                                <a href="#!"><i class="ti-settings"></i>Paramètres</a>
                                <a href="{{route('logout-compte')}}"><i class="ti-layout-sidebar-left"></i>Se déconnecter</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pcoded-search">
                    <span class="searchbar-toggle">  </span>
                    <div class="pcoded-search-box ">
                        <input type="text" placeholder="Search">
                        <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                    </div>
                </div>
                
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Accueil</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="">
                        <a href="{{route('admin.Dashboard')}}">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Tableau de bord</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                   
                </ul>
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Partenaires</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Partenaires</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                           
                            <li class=" ">
                                <a href="{{route('List-Partenaires')}}">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"> listes des Partenaires</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                          
                        </ul>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Bon de commande</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="auth-normal-sign-in.html">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Login</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                           
                           
                        </ul>
                    </li>
                    
                    
                </ul>
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Suivi des Affaires</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                          <a href="javascript:void(0)">
                              <span class="pcoded-micon"><i class="ti-email"></i></span>
                              <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Listes Affaires</span>
                              <span class="pcoded-mcaret"></span>
                          </a>
                          <ul class="pcoded-submenu">
                             
                              <li class=" ">
                                  <a href="{{route('Affaires')}}">
                                      <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                      <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Listes Affaires</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                             
                             
                          </ul>
                      </li>
                      
                  </ul>
               
                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">RECLAMATION PARTENAIRE</div>
                <ul class="pcoded-item pcoded-left-item">
                  <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="ti-email"></i></span>
                            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Réclamation</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                           
                            <li class=" ">
                                <a href="{{route('reclamation')}}">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Listes Réclamation</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                           
                           
                        </ul>
                    </li>
                    
                </ul>

                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Other</div>
                
            </div>
        </nav>
        
</div>