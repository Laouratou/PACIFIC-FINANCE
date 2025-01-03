<!-- switcher menu -->
<div class="switcher">
    <div class="switch_menu">
        <!-- color changer -->
        <div class="switcher_container">
            <ul id="styleOptions" title="switch styling">
                <li>
                    <a href="javascript: void(0)" data-theme="theme-color" class="theme-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- main header -->
<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="large-container">
            <div class="top-inner">
                <ul class="links-list clearfix">
                    <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f" style="font-size: 1.3rem;"></i></a></li>
                    <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram" style="font-size: 1.3rem;"></i></a></li>
                </ul>
                <ul class="info-list clearfix">
                    <li>
                        <i class="icon-1"></i>
                        <a href="mailto:info@example.com">info@example.com</a>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+22663174848">63 17 48 48</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- header-lower -->
    <div class="header-lower">
        <div class="large-container">
            <div class="outer-box">
                <div>
                    <div class="shape"></div>
                    <figure class="logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/banner/logo (5).jpg') }}" alt="Logo" style="object-fit: cover; width: 100px; height: 100px;">
                        </a>
                    </figure>
                </div>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <!-- Accueil -->
                                <li class="{{ request()->is('/') ? 'current ' : '' }}">
                                    <a href="{{ url('/') }}">Accueil</a>
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home Page One</a></li>
                                        <li><a href="{{ url('index-2.html') }}">Home Page Two</a></li>
                                        <li><a href="{{ url('index-3.html') }}">Home Page Three</a></li>
                                        <li><a href="{{ url('index-onepage.html') }}">OnePage Home</a></li>
                                    </ul>
                                </li>

                                <!-- Pacifique Finance -->
                                <li class="nav-item dropdown {{ request()->is('particuliers') ? 'current' : '' }}">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Pacifique Finance
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('particuliers.index') }}">Mot du directeur</a></li>
                                        <li><a class="dropdown-item" href="{{ route('particuliers.index') }}">Historique</a></li>
                                        <li><a class="dropdown-item" href="{{ route('mission.index') }}">Notre mission</a></li>
                                        <li><a class="dropdown-item" href="{{ route('values.index') }}">Notre valeur</a></li>
                                    </ul>
                                </li>

                                <!-- Nos Produits -->
                                <li class="nav-item dropdown {{ request()->is('Entreprises') ? 'current' : '' }}">
    <a class="nav-link" href="#" id="dropdownProducts" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Nos produits
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownProducts">
        <li><a class="dropdown-item" href="{{ route('credits.index') }}">Crédits</a></li>
        <!-- Sous-menu "Épargne" -->
        <li class="nav-item dropdown">
            <a class="dropdown-item dropdown-toggle" href="#" id="dropdownEpargne" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Épargne
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownEpargne">
                <li><a class="dropdown-item" href="{{ route('depot.index') }}">Dépot à terme (DAT)</a></li>
                <li><a class="dropdown-item" href="{{ route('epargne.education') }}">Épargne Educatif</a></li>
                <li><a class="dropdown-item" href="{{ route('epargne.logement') }}">Épargne logement</a></li>
                <li><a class="dropdown-item" href="#">Épargne Projet</a></li>
            </ul>
        </li>
    </ul>
</li>

                                <!-- Nos Services -->
                                <!-- Nos Services -->
<li class="nav-item dropdown {{ request()->is('Particuliers') ? 'current' : '' }}">
    <a class="nav-link" href="#" id="dropdownServices" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Nos services
    </a>
    <ul class="dropdown-menu dropdown-menu-end w-auto" aria-labelledby="dropdownServices">
     
        <!-- Sous-menu "Engagement par signature" -->
        <li class="nav-item dropdown">
    <a class="dropdown-item dropdown-toggle" href="#" id="dropdownEngagement" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Engagement par signature
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownEngagement">
        <li><a class="dropdown-item" href="#">Caution\garantie de soumission</a></li>
        <li><a class="dropdown-item" href="#">Caution\garantie de Demarrage d'avance</a></li>
        <li><a class="dropdown-item" href="#">Caution\garantie de bonne fin d'exécution</a></li>
    </ul>
</li>


        <li><a class="dropdown-item" href="#">Tontines</a></li>
        <li><a class="dropdown-item" href="#">Education financière</a></li>
        <li><a class="dropdown-item" href="#">Autres services</a></li>
    </ul>
</li>

                                <!-- Nous rejoindre -->
                                <li class="{{ Route::currentRouteName() == 'news.index' ? 'current' : '' }}">
                                    <a href="{{ route('news.index') }}">Nous rejoindre</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="menu-right-content ml_70">
                        <a href="{{ route('login') }}" class="theme-btn btn-two mr_20">Se connecter</a>
                        <a href="{{ route('register.create') }}" class="theme-btn btn-one">Se créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header -->
    <div class="sticky-header">
        <div class="large-container">
            <div class="outer-box">
                <div>
                    <div class="shape"></div>
                    <figure class="logo"><a href="index.html"><img src="{{ asset('assets/images/banner/logo (5).jpg') }}" alt="" style="object-fit: cover;width:100px;height:100px;"></a></figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <div class="menu-right-content ml_70">
                        <a href="index.html" class="theme-btn btn-two mr_20">Login</a>
                        <a href="index.html" class="theme-btn btn-one">Open Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/images/banner/logo (5).jpg') }}" alt="" title="Pacific-finance"></a></div>
            <div class="menu-outer"></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>

