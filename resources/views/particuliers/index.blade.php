@extends('layouts.app')
@section('content')
<div class="boxed_wrapper ltr">


    @include('partials.header')


 <!-- page-title -->
        {{-- <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/banner/banner-1.jpg);"style="object-fit:cover;"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Nos services financiers</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Accueil</a></li>
                        <li>Particuliers</li>
                    </ul>
                </div>
            </div>
        </section> --}}
        <!-- page-title end -->
    <!-- feature-style-two -->
    {{-- <section class="feature-style-two">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="sec-title light">
                            <h6>Benefits</h6>
                            <h2>Get More <span>Benefits</span> at Our Charge Station.</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="content-box pl_160 pr_120">
                            <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                                <div class="feature-block-two">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-7"></i></div>
                                        <h3><a href="index-2.html">Low Processing Fee</a></h3>
                                        <p>Tortor neque sed tellus estianian eget dui id ante tristique morever tristique dolor.</p>
                                    </div>
                                </div>
                                <div class="feature-block-two">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-8"></i></div>
                                        <h3><a href="index-2.html">Fast Loans Approval</a></h3>
                                        <p>Tortor neque sed tellus estianian eget dui id ante tristique morever tristique dolor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- feature-style-two end -->


    <!-- about-style-two -->
   <section class="about-style-two  pb_80">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_three">
                    <div class="content-box mr_110">
                        <div class="sec-title mb_20">
                            <h2>Particuliers</h2>
                            {{-- <h2>Particuliers.</h2> --}}
                        </div>
                        <div class="text-box mb_40">
                            <p>Pacific Finance SA, nous comprenons vos besoins financiers et nous sommes déterminés à vous fournir les solutions les plus adaptées pour une vie financière stable et prospère.</p>
                            <ul class="list-style-one clearfix">
                                <li>Improving all types of opportunities</li>
                                <li>Quick solutions for daily problems</li>
                                <li>Community that grows larger</li>
                            </ul>
                        </div>
                        <div class="btn-box">
                            {{-- <a href="index-2.html" class="theme-btn btn-one">Découvrir l'offre</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box">
                        <div class="image-shape">
                            {{-- Grand écran (desktop) : image de 500x500 pixels --}}
                            <figure class="image pt_115 d-none d-lg-block">
                                <img src="assets/images/resource/pacific.jpg" alt="" style="width:500px;height:500px;object-fit:cover;border-radius: 50%;">
                            </figure>

                            {{-- Petit écran (mobile) : image responsive et carrée pour garder la forme circulaire --}}
                            <figure class="image pt_115 d-lg-none">
                                <img src="assets/images/resource/pacific.jpg" alt="" class="img-fluid" style="width:100%;max-width:300px;height:300px;object-fit:cover;border-radius:50%;">
                            </figure>

                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="image-inner">
                                    {{-- Contenu supplémentaire ici si nécessaire --}}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="image-inner">
                                    {{-- Contenu supplémentaire ici si nécessaire --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- about-style-two end -->


    <!-- service-style-two -->
    <section class="service-style-two pb_120">
        {{-- <div class="bg-layer" style="background-image: url(assets/images/background/service-bg-2.jpg);"></div> --}}
        <div class="auto-container">
            <div class="sec-title centred mb_70">
                {{-- <h6>Nos Services</h6> --}}
                <h3 style="underline">Les produits et services des particuliers</h3>
            </div>
            <div class="tabs-box ">
                <div class="tab-btn-box p_relative mb_100">
                    <ul class="tab-btns tab-buttons">
                        <li class="tab-btn active-btn" data-tab="#tab-1"><span>Comptes d'Epargnes</span></li>
                        {{-- <li class="tab-btn" data-tab="#tab-2"><span>Comptes d'épargnes à terme (DAT)</span></li> --}}
                        <li class="tab-btn" data-tab="#tab-3"><span>Tontines</span></li>
                        <li class="tab-btn" data-tab="#tab-4"><span>Crédit</span></li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_four">
                                    <div class="content-box mr_110">
                                        <h2>Comptes d'épargnes</h2>
                                        <p>compte libre qui vous permet d’effectuer vos opérations de dépôts et de retraits à tout moment .</p>
                                        <ul class="list-item mb_40 clearfix">
                                            <li>Epargne à vue</li>
                                            <li>Dépot à terme</li>
                                            {{-- <li>Free Consultation</li>
                                            <li>Over 20 Years Experience</li>
                                            <li>Expert Agents</li> --}}
                                        </ul>
                                        <a href="{{ route('Epargne.index') }}" class="theme-btn btn-one">Découvrez encore plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_40">
                                    <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <figure class="image"><img src="assets/images/resource/accueil.jpg" alt="" style="width:400px;height:400px;object-fit:cover;"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="tab" id="tab-2">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_four">
                                    <div class="content-box mr_110">
                                        <h2>Comptes d'épargnes (DAT)</h2>
                                        <p>Il permet de bloquer votre revenu rémunéré à un taux d’intérêt intéressant sur plusieurs mois pour des projets futures. .</p>
                                        <ul class="list-item mb_40 clearfix">
                                            <li>Background Check</li>
                                            <li>Quick Response</li>
                                            <li>Free Consultation</li>
                                            <li>Over 20 Years Experience</li>
                                            <li>Expert Agents</li>
                                        </ul>
                                        <a href="index-2.html" class="theme-btn btn-one">Découvrez encore plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_40">
                                    <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <figure class="image"><img src="assets/images/resource/epargne.jpg" alt="" style="width:400px;height:400px;object-fit:cover;"></figure>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="tab" id="tab-3">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_four">
                                    <div class="content-box mr_110">
                                        <h2>Tontines</h2>
                                        <p>Épargnez par jour, sans quittez un instant votre clientèle. Nos collecteurs vous facilitent la tâche en vous rejoignant dans votre lieu de commerce. .</p>
                                        <ul class="list-item mb_40 clearfix">
                                            <li>Background Check</li>
                                            <li>Quick Response</li>
                                            <li>Free Consultation</li>
                                            <li>Over 20 Years Experience</li>
                                            <li>Expert Agents</li>
                                        </ul>
                                        <a href="{{ route('Tontine.index') }}" class="theme-btn btn-one">Découvrez encore plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_40">
                                    <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <figure class="image"><img src="assets/images/resource/tontine.jpg" alt="" style="width:400px;height:400px;object-fit:cover;"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-4">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="content_block_four">
                                    <div class="content-box mr_110">
                                        <h2>Crédits</h2>
                                        <p>L’accès au financement est un outil, un moyen de développement social et économique. Nous offrons à nous clients commerçants, entrepreneurs, agriculteurs, éleveurs une diversité de facilités :</p>
                                        <ul class="list-item mb_40 clearfix">
                                            <li>Avance sur facture</li>
                                            <li>Escompte de chèque </li>
                                            <li>Crédit fonds de roulement</li>
                                            <li>Crédit équipement et investissement</li>
                                            <li>Crédit préfinancement de marché</li>
                                        </ul>
                                        <a href="{{ route('credits.index') }}" class="theme-btn btn-one">Découvrez encore plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="image-box ml_40">
                                    <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <figure class="image"><img src="assets/images/resource/credit_1.jpg" alt="" style="width:400px;height:400px;object-fit:cover;"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-two end -->

    <!-- team-details -->
 <section class="team-details pt_120 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box mr_25">
                    <h2 style="margin-bottom: 20px;">Ouverture de compte</h2>
                    <span class="designation" style="display: block; margin-bottom: 20px;">Engagez-vous avec nous</span>

                    <p style="margin-bottom: 20px;">
                        Au-delà des produits, PACIFC-FINANCE SA s'engage à vous accompagner dans tous les aspects de votre vie financière. Nous sommes fiers de notre proximité, de notre flexibilité et de notre engagement à vous servir. Nos agents de crédit sont toujours disponibles pour des visites de suivi et pour veiller à ce que vos besoins financiers soient pleinement satisfaits. Si vous avez des questions, n'hésitez pas à contacter.
                    </p>

                    <h6 style="margin-bottom: 20px;">
                        <a href="votre-lien-ici" style="text-decoration: none; color: inherit;">Ouvrir un compte ou demander un crédit maintenant</a>
                    </h6>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_three">
                    <div class="image-box pl_80 text-center text-lg-start">
                        <div class="image-shape">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                        </div>
                        
                        {{-- Grand écran (desktop) : image de 400x400 pixels --}}
                        <figure class="image d-none d-lg-block">
                            <img src="assets/images/banner/youtube.jpg" alt="" class="img-fluid rounded-circle image-responsive" style="width:400px; height:400px; object-fit:cover;">
                        </figure>

                        {{-- Petit écran (mobile) : image responsive et centrée --}}
                        <figure class="image pt_115 d-lg-none text-center">
                            <img src="assets/images/resource/pacific.jpg" alt="" class="img-fluid mx-auto" style="width:100%;max-width:300px;height:300px;object-fit:cover;border-radius:50%;">
                        </figure>

                        {{-- Inscrivez-vous placé sous l'image et centré sur petits écrans --}}
                        <div class="experience-box mt-3 mt-lg-4 text-center">
                            <div class="inner">
                                <h2>Inscrivez<span>vous</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
<style>
/* Pour les petits écrans, limiter la largeur et hauteur de l'image */
@media (max-width: 768px) {
    .image-responsive {
        width: 300px;
        height: 300px;
        object-fit: cover;
    }
}
</style>



    <!-- team-details end -->
    <!-- video-section -->
    {{-- <section class="video-section alternat-2 centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/video-bg-2.jpg);"></div>
            <div class="auto-container">
                <div class="inner-box">
                    <h2>The 3rd Generation Private Commercial Bank</h2>
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption="">
                            <i class="icon-20"></i>
                            <span class="border-animation border-1"></span>
                            <span class="border-animation border-2"></span>
                            <span class="border-animation border-3"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- video-section end -->


    <!-- card-section -->
    {{-- <section class="card-section centred pt_120 pb_90">
            <div class="pattern-layer">
                <div class="pattern-1 rotate-me"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title mb_70">
                    <h6>Our Credit Card</h6>
                    <h2>Credit Cards We Provides</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 card-block">
                        <div class="card-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index-2.html"><img src="assets/images/resource/card-1.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="index-2.html">Visa Silver Card</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis tincidunt</p>
                                    <div class="btn-box">
                                        <a href="index-2.html" class="theme-btn btn-two">Apple for Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 card-block">
                        <div class="card-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index-2.html"><img src="assets/images/resource/card-2.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="index-2.html">Mastercard Gold Card</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis tincidunt</p>
                                    <div class="btn-box">
                                        <a href="index-2.html" class="theme-btn btn-two">Apple for Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 card-block">
                        <div class="card-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index-2.html"><img src="assets/images/resource/card-3.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="index-2.html">Visa Platinum Card</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis tincidunt</p>
                                    <div class="btn-box">
                                        <a href="index-2.html" class="theme-btn btn-two">Apple for Card</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- card-section end -->


    <!-- funfact-style-two -->
    {{-- <section class="funfact-style-two">
            <div class="bg-layer" style="background-image: url(assets/images/background/funfact-bg.jpg);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="50">0</span><span>k+</span>
                                </div>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-22"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="90">0</span><span>Bn</span>
                                </div>
                                <p>Total Transection</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-23"></i></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="40">0</span><span>+</span>
                                </div>
                                <p>Branchs in USA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- funfact-style-two end -->


    <!-- process-section -->
    {{-- <section class="process-section centred pt_120 pb_90">
            <div class="bg-layer" style="background-image: url(assets/images/background/process-bg.jpg);"></div>
            <div class="auto-container">
                <div class="sec-title mb_110"> 
                    <h6>Our process</h6>
                    <h2>Open Bank Accounts</h2>
                </div>
                <div class="inner-container">
                    <div class="processing-block-one">
                        <div class="arrow-shape" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                        <div class="inner-box">
                            <span class="count-text">01 <br />Step</span>
                            <h3>Fill In The <br />Required Form</h3>
                            <p>Amet minim mollit no duis deserunt ulamco.</p>
                        </div>
                    </div>
                    <div class="processing-block-one">
                        <div class="arrow-shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                        <div class="inner-box">
                            <span class="count-text">02 <br />Step</span>
                            <h3>Submit All <br />Your Documents</h3>
                            <p>Amet minim mollit no duis deserunt ulamco.</p>
                        </div>
                    </div>
                    <div class="processing-block-one">
                        <div class="inner-box">
                            <span class="count-text">03 <br />Step</span>
                            <h3>Get Your <br />Desire Account</h3>
                            <p>Amet minim mollit no duis deserunt ulamco.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- process-sectione end -->


    <!-- apps-section -->
    {{-- <section class="apps-section pt_120 pb_120">
            <div class="light-icon" style="background-image: url(assets/images/icons/icon-4.png);"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                        <div class="shape-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image image-1"><img src="assets/images/resource/mockup-1.png" alt=""></figure>
                                <figure class="image image-2"><img src="assets/images/resource/mockup-2.png" alt=""></figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="sec-title mb_20">
                                    <h6>Mobile App</h6>
                                    <h2>Get the Fastest and Most Secure Banking</h2>
                                </div>
                                <div class="text-box mb_50">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis, suscipit you take action against fraud. See it the Security Center for and Mobile and Online Banking.</p>
                                </div>
                                <div class="btn-box">
                                    <a href="index.html" class="play-store mr_20">
                                        <img src="assets/images/icons/icon-2.png" alt="">
                                        <span>get it on</span>
                                        Google Play
                                    </a>
                                    <a href="index.html" class="play-store">
                                        <img src="assets/images/icons/icon-3.png" alt="">
                                        <span>Download on the</span>
                                        App Store
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- apps-section end -->


    <!-- news-style-two -->

    <!-- news-style-two end -->






    <!--Scroll to top-->
    <div class="scroll-to-top">
        <div>
            <div class="scroll-top-inner">
                <div class="scroll-bar">
                    <div class="bar-inner"></div>
                </div>
                <div class="scroll-bar-text">Go To Top</div>
            </div>
        </div>
    </div>
    <!-- Scroll to top end -->

</div>


@include('partials.footer')
@endsection