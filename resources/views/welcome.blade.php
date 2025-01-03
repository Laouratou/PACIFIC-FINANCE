@extends('layouts.app')


@section('content')
<div class="boxed_wrapper ltr">
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="P" class="letters-loading">P</span>
                            <span data-text-preloader="a" class="letters-loading">a</span>
                            <span data-text-preloader="c" class="letters-loading">c</span>
                            <span data-text-preloader="i" class="letters-loading">i</span>
                            <span data-text-preloader="f" class="letters-loading">f</span>
                            <span data-text-preloader="i" class="letters-loading">i</span>
                            <span data-text-preloader="q" class="letters-loading">q</span>
                            <span data-text-preloader="q" class="letters-loading">u</span>
                            <span data-text-preloader="q" class="letters-loading">e</span>
                            <span data-text-preloader="f" class="letters-loading">f</span>
                            <span data-text-preloader="i" class="letters-loading">i</span>
                            <span data-text-preloader="n" class="letters-loading">n</span>
                            <span data-text-preloader="a" class="letters-loading">a</span>
                            <span data-text-preloader="n" class="letters-loading">n</span>
                            <span data-text-preloader="c" class="letters-loading">c</span>
                            <span data-text-preloader="e" class="letters-loading">e</span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
<!-- page-direction -->
<div class="page_direction">
    {{-- <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div> --}}
    {{-- <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div> --}}
</div>
<!-- page-direction end -->


@include('partials.header')

<!-- banner-section -->
<section class="banner-section p_relative">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
        <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image: url(assets/images/banner/banner-4.jpg);"></div>
            <div class="pattern-layer">
                <!-- <div class="pattern-1" style="background-image: url(assets/images/banner/banner-3.jpg);"></div> -->
                <div class="pattern-2" style="background-image: url(assets/images/banner/banner-6.jpg);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Le crédit <span>à</span> votre portée</h2>
                    <p>L'épargne pour votre avenir.</p>
                    <div class="btn-box">
                        <a href="index.html" class="theme-btn btn-one">Choisissez PACIFIC FINANCE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image: url(assets/images/resource/banner-1.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            </div>
           <div class="auto-container">
    <div class="content-box">
        <h2 id="credit-title">Le crédit <span>à</span> votre portée</h2> <!-- Texte initial -->
        <h2 id="engagement" style="display: none;">Engagement par signature</h2> <!-- Masqué par défaut -->
        <h2 id="tontine" style="display: none;">Tontine</h2> <!-- Masqué par défaut -->
        <p>L'épargne pour votre avenir.</p>
        <div class="btn-box">
            <a href="index.html" class="theme-btn btn-one">Choisissez PACIFIC FINANCE</a>
        </div>
    </div>
</div>

<!-- Ajoute ce script juste avant la balise de fermeture </body> -->
<script>
    // Fonction pour changer le texte
    function changeText() {
        const titleElement = document.getElementById("credit-title");
        const engagementElement = document.getElementById("engagement");
        const tontineElement = document.getElementById("tontine");

        // Affiche "Engagement par signature" après 3 secondes
        setTimeout(() => {
            titleElement.style.display = "none"; // Masque le texte original
            engagementElement.style.display = "block"; // Affiche "Engagement par signature"
        }, 3000); // Attendre 3 secondes avant d'afficher le prochain texte

        // Affiche "Tontine" après 6 secondes
        setTimeout(() => {
            engagementElement.style.display = "none"; // Masque "Engagement par signature"
            tontineElement.style.display = "block"; // Affiche "Tontine"
        }, 6000); // Attendre 6 secondes au total
    }

    // Lancer la séquence de changement de texte
    changeText();
</script>
</body>
        </div>
        <div class="slide-item p_relative">
            <div class="bg-layer" style="background-image: url(assets/images/banner/banner-6.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Le crédit <span>à</span> votre portée</h2>
                    <p>L'épargne pour votre avenir.</p>
                    <div class="btn-box">
                        <a href="index.html" class="theme-btn btn-one">Choisissez PACIFIC FINANCE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

<!-- feature-section -->

<section class="feature-section">
        <div class="container py-5">
            <h2 class="text-center fw-bold mb-5">Nos produits et services proposés</h2>
            <div class="row g-4">
                <!-- Carte 1 -->
                <div class="col-md-6 col-lg-6">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center border-0 shadow-sm h-100 p-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fa-solid fa-credit-card fs-1" style="color: #2C6EA8;"></i>
                                </div>
                                <h5 class="card-title fw-bold" style="color: #2C6EA8;">Crédit</h5>
                                <p class="card-text text-muted">
                                    Le crédit TPE à partir de 100 000 FCFA et le crédit PME jusqu’à 100 millions de FCFA. Être Burkinabè, résider au Burkina Faso et avoir au moins une année d’existence dans un local.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Carte 2 -->
                <div class="col-md-6 col-lg-6">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center border-0 shadow-sm h-100 p-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fa-solid fa-chart-line fs-1" style="color: #2C6EA8;"></i>
                                </div>
                                <h5 class="card-title fw-bold" style="color: #2C6EA8;">Produits d’Épargne</h5>
                                <p class="card-text text-muted">
                                    ACEP Burkina offre les types d’épargne tels que : le Dépôt à Terme (DAT), l’Épargne Education, l’Épargne Projet, l’Épargne logement, l’Épargne libre.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Carte 3 -->
                <div class="col-md-6 col-lg-6">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center border-0 shadow-sm h-100 p-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fa-solid fa-file-signature fs-1" style="color: #2C6EA8;"></i>
                                </div>
                                <h5 class="card-title fw-bold" style="color: #2C6EA8;">Engagement par signature</h5>
                                <p class="card-text text-muted">
                                    Découvrez notre engagement pour soutenir vos projets par signature avec une offre adaptée à vos besoins.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Carte 4 -->
                <div class="col-md-6 col-lg-6">
                    <a href="#" class="text-decoration-none">
                        <div class="card text-center border-0 shadow-sm h-100 p-4">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fa-solid fa-shield-alt fs-1" style="color: #2C6EA8;"></i>
                                </div>
                                <h5 class="card-title fw-bold" style="color: #2C6EA8;">Tontines</h5>
                                <p class="card-text text-muted">
                                    Nos autres services incluent des solutions financières innovantes pour vos besoins quotidiens et professionnels.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<!-- feature-section end -->

<section class="subscribe-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                <div class="text-box">
                    <h2>Des questions ou suggestions ?</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner ml_40">
                    <form id="whatsapp-form">
                        <div class="form-group">
                            <button type="button" class="theme-btn btn-two" id="whatsapp-submit" style="width: auto;">
                                <span style="color: #25D366; margin-right: 8px;">
                                    <i class="fab fa-whatsapp"></i> 
                                </span>
                                Contactez-nous
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news-section -->
<section class="news-style-two pb_90 py-5">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-6.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-7.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred mb_70">
            <h2>Notre Dernière Mise à Jour Médias</h2>
        </div>
        <div class="row clearfix">
            @foreach($news as $item)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box" style="height: 400px;"> <!-- Limiter la hauteur de la carte -->
                        <figure class="image-box img-fluid" style="height: 200px; overflow: hidden;"> <!-- Limiter la hauteur de l'image -->
                            <a href="{{ route('news.show', $item->slug) }}">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="" style="height: 100%; width: 100%; object-fit: cover;">
                            </a>
                        </figure>
                        <div class="lower-content" style="height: calc(100% - 200px);"> <!-- Ajuster la hauteur -->
                            <div class="post-date" style="margin-bottom: 10px;"> <!-- Ajouter un espacement -->
                                <h4 style="margin: 0;">{{ \Carbon\Carbon::parse($item->publish_date)->format('d') }}<span>{{ \Carbon\Carbon::parse($item->publish_date)->format('M') }}</span></h4>
                            </div>
                            <h3 class="text-truncate" style="white-space: nowrap; overflow: hidden;"> <!-- Limiter le titre -->
                                <a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a>
                            </h3>
                            <p class="text-truncate" style="overflow: hidden;">{{ Str::limit($item->content, 100, '...') }}</p> <!-- Limiter le contenu -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- about-section -->
<section class="about-section pb_60 pt_50">
    <div class="pattern-layer rotate-me"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_one">
                    <div class="image-box pr_90 mr_40">
                        <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                        <figure class="image"><img src="assets/images/banner/equipe.jpg" alt="" style="object-fit: cover"></figure>
                        {{-- <div class="rating-box">
                                    <ul class="rating mb_5 clearfix">
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                    </ul>
                                    <h6>5 Star Rating Bank</h6>
                                </div> --}}
                        <div class="experience-box">
                            <div class="inner">
                                <h2>40</h2>
                                <h6>ans d'expérience</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box ml_40">
                        <div class="sec-title mb_20">
                            <h6></span></h6>

                            <h3>Le group PACIFIC-FiNANCE</h3>
                        </div>
                        <div class="text-box mb_40">
                            <p>Pacific-Finance propose des services financiers à des milliers d'entreprises en Afrique, élargissant ainsi l'accès au financement pour ceux qui ne sont pas desservis par les banques traditionnelles, tout en favorisant leur développement économique.</p>
                        </div>
                        {{-- <div class="inner-box mb_45">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-10"></i></div>
                                        <h3>Solution Focused</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis tincidunt feugiat</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-11"></i></div>
                                        <h3>99.99% Success</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis tincidunt feugiat</p>
                                    </div>
                                </div> --}}
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn btn-one">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->





<!-- calculator-section -->
<section class="calculator-section  pb_50">
    <div class="light-icon float-bob-y" style="background-image: url(assets/images/banner/banner/icon-1.png);"></div>
    <div class="auto-container">
        <div class="inner-container">
            <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_two">
                        <div class="content-box">
                            <div class="sec-title mb_50">
                                <h6>Calculer le prêt</h6>
                                <h2>Simulateur</h2>
                            </div>
                            <div class="calculator-inner">
                                <form id="loan-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="amount" placeholder="Montant du prêt">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" id="years" placeholder="Nombre de mois">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="interest" placeholder="Taux d'interêt">
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <input type="submit" value="Calculer" class="theme-btn btn-one mr_20">
                                        <input type="button" value="Réinitialiser" class="reset-btn">
                                    </div>
                                </form>
                                <div id="results">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" placeholder="Le versement mensuel est :" id="monthly-payment" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group none">
                                        <div class="input-group">
                                            <input type="number" id="total-payment" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group none">
                                        <div class="input-group">
                                            <input type="number" id="total-interest" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box"><img src="assets/images/resource/accueil.jpg" alt="" style="object-fit: cover;width:500px;height:500 px;"></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- calculator-section end -->

<section class="subscribe-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                <div class="text-box">
                    <h2>Des questions ou suggestions ?</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="form-inner ml_40">
                    <form id="whatsapp-form">
                        <div class="form-group">
                            <button type="button" class="theme-btn btn-two" id="whatsapp-submit" style="width: auto;">
                                <span style="color: #25D366; margin-right: 8px;">
                                    <i class="fab fa-whatsapp"></i> 
                                </span>
                                Contactez-nous
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-section -->
<section class="partners-section pt_50 pb_90">
    <div class="auto-container">
        <div class="sec-title centred mb_60">
            <h2>Nos partenaires</h2>
        </div>
        <div class="partners-logos" style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap;">
            <div class="partner-logo" style="flex: 0 1 auto;">
            <img src="/img/partenaire_1.png" alt="Partenaire 1" style="max-width: 120px; height: auto;">

            </div>
            <div class="partner-logo" style="flex: 0 1 auto;">
            <img src="/img/partenaire_2.png" alt="Partenaire 1" style="max-width: 120px; height: auto;">

            </div>
            <div class="partner-logo" style="flex: 0 1 auto;">
            <img src="/img/téléchargement.png" alt="Partenaire 1" style="max-width: 120px; height: auto;">

            </div>
            <div class="partner-logo" style="flex: 0 1 auto;">
            <img src="/img/partenaire_3.png" alt="Partenaire 1" style="max-width: 120px; height: auto;">

            </div>
            <div class="partner-logo" style="flex: 0 1 auto;">
            <img src="/img/partenaire_6.jpg" alt="Partenaire 6" style="max-width: 120px; height: auto;">

            </div>
           
        </div>
    </div>
</section>
<!-- service-section end -->
<!-- funfact-section -->



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








<!-- subscribe-section -->
{{-- <section class="subscribe-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                        <div class="text-box">
                            <h2>Abonnez-vous pour recevoir les dernières mises à jour</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner ml_40">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Votre email" required>
                                    <button type="submit" class="theme-btn btn-two">Abonnez-vous maintenant</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
<!-- subscribe-section end -->


@include('partials.footer')



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
<!-- Formulaire de Newsletter -->
<div id="newsletterModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-lg shadow-lg">
            <div class="modal-header" style="background-color: #2c6ea8;">
                <h5 class="modal-title text-white">Inscrivez-vous à notre Newsletter</h5>
                <button type="button" class="close text-white" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <form id="newsletterForm">
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Votre adresse email :</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Entrez votre email" required>
                    </div>
                    <button type="submit" class="btn btn-lg btn-block text-white" style="background-color: #2c6ea8; border-radius: 30px;">
                        S'inscrire
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        if (!localStorage.getItem('newsletterSubscribed')) {
            $('#newsletterModal').modal('show');
        }
    }

    function closeModal() {
        $('#newsletterModal').modal('hide');
    }

    document.getElementById('newsletterForm').onsubmit = function(e) {
        e.preventDefault();
        const email = document.getElementById('email').value;
        console.log('Inscrit avec l\'email:', email);
        localStorage.setItem('newsletterSubscribed', 'true');
        closeModal();
    }
</script>


@endsection