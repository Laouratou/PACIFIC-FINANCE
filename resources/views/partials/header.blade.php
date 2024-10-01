<!-- switcher menu -->
<div class="switcher">
    {{-- <div class="switch_btn">
                <button><i class="fas fa-palette"></i></button>
            </div> --}}
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
<!-- end switcher menu -->
<!-- main header -->
<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="large-container">
            <div class="top-inner">
                <ul class="links-list clearfix">
                    {{-- <li>
                        <img src="assets/images/resource/burkina.jpg" alt="Burkina Faso" style="width: 50px;">
                    </li>
                    <li>
                        <img src="assets/images/resource/cote (1).jpg" alt="Côte d'Ivoire" style="width: 50px;">
                    </li> --}}
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
                <div class="">
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

                                <!-- Particuliers -->
                                <li class="{{ request()->is('particuliers') ? 'current ' : '' }}">
                                    <a href="{{ route('particuliers.index') }}">Particuliers</a>
                                </li>
                                <li class="{{ request()->is('Entreprises') ? 'current ' : '' }}">
                                    <a href="{{ route('Entreprises') }}">Entreprises</a>
                                </li>

                                <!-- Nos services -->
                                {{-- <li class="{{ request()->is('services*') ? 'current dropdown' : '' }}">
                                <a href="#">Entreprises</a>
                                <ul>
                                    <li><a href="{{ url('service.html') }}">Engagements par signature</a></li>
                                    <li><a href="{{ url('service-2.html') }}">Our Services 2</a></li>
                                    <li><a href="{{ url('service-details.html') }}">Digital Banking</a></li>
                                    <li><a href="{{ url('service-details-2.html') }}">Mobile & Web Banking</a></li>
                                    <!-- ... autres services -->
                                </ul>
                                </li> --}}

                                <!-- Actualités -->
                                <li class="{{ Route::currentRouteName() == 'news.index' ? 'current' : '' }}">
                                    <a href="{{ route('news.index') }}">Actualités</a>
                                </li>

                                {{-- <li class="{{ request()->is('actualites*') ? 'current dropdown' : '' }}">
                                <a href="#">Actualités</a>
                                <ul>
                                    <li class="dropdown">
                                        <a href="#">Directors</a>
                                        <ul>
                                            <li><a href="{{ url('team.html') }}">Board of Directors</a></li>
                                            <li><a href="{{ url('team-details.html') }}">Director Details</a></li>
                                        </ul>
                                    </li>
                                    <!-- Autres sous-menus pour Actualités -->
                                </ul>
                                </li> --}}

                                <li class="dropdown"><a href="index.html">Présentations</a>
                                    <ul>
                                        <li><a href="service.html">Mot du DIRECTEUR GENERAL</a></li>
                                        <li><a href="service-2.html">Qui sommes nous ?</a></li>
                                        <li><a href="service-details.html">Nos agences</a></li>
                                        {{-- <li><a href="service-details-2.html">Mobile & Web Banking</a></li>
                                        <li><a href="service-details-3.html">Insurance Policies</a></li>
                                        <li><a href="service-details-4.html">Home & Property Loan</a></li>
                                        <li><a href="service-details-5.html">All Bank Account</a></li>
                                        <li><a href="service-details-6.html">Borrowing Accounts</a></li>
                                        <li><a href="service-details-7.html">Private Banking</a></li>
                                        <li><a href="service-details-8.html">Fixed Term Account</a></li> --}}
                                    </ul>
                                </li>


                                <!-- Contact -->
                                {{-- <li class="{{ request()->is('contact') ? 'current' : '' }}">
                                <a href="{{ url('contact.html') }}">Présentations</a>
                                </li> --}}
                            </ul>
                        </div>
                    </nav>

                    <div class="menu-right-content ml_70">
                        <a href="index.html" class="theme-btn btn-two mr_20">Se connecter</a>
                        <a href="index.html" class="theme-btn btn-one">Se créer un compte</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="large-container">
            <div class="outer-box">
                <div class="">
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

    <!-- Mobile Menu  -->
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
    </div><!-- End Mobile Menu -->



</header>
<!-- main-header end -->
