@extends('layouts.app')




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
                <div class="pattern-1" style="background-image: url(assets/images/banner/banner-3.jpg);"></div>
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
    <div class="auto-container">
        <div class="inner-container clearfix wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="feature-block-one">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-5"></i></div>
                    <h4>Épargne (Particuliers et Entreprises)</h4>
                    <p>Pacific Finance, vous offre l’opportunité de planifier et de mieux gérer vos revenus à travers un compte d’épargne.</p>
                </div>
            </div>
            <div class="feature-block-one">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-6"></i></div>
                    <h4>Tontine (Particuliers )</h4>
                    <p>Épargnez par jour, sans quittez un instant votre clientèle. Nos collecteurs vous facilitent la tâche en vous rejoignant dans votre lieu de commerce. </p>
                </div>
            </div>
            <div class="feature-block-one">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-7"></i></div>
                    <h4>Crédit (Particuliers et Entreprises)</h4>
                    <p>L’accès au financement est un outil, un moyen de développement social et économique.</p>
                </div>
            </div>
            <div class="feature-block-one">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-8"></i></div>
                    <h4>Engagements par signature (Entreprises)</h4>
                    <p>A Pacific Finance, nous nous engageons à soulager la trésorerie de nos clients en nous substituant à eux.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-section end -->


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
                                <h2>Calculateur EMI en ligne</h2>
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

<section class="video-section container-fluid auto-container pb_50 py-5">
    <div class="row no-gutters align-items-stretch">

        <!-- Player de la vidéo principale -->
        <div class="col-lg-7 col-md-8 p-0">
            <div class="video-player shadow">
                <div class="embed-responsive embed-responsive-16by9">
                    @if ($videos->count() > 0)
                        <iframe id="main-video" class="embed-responsive-item" src="{{ str_replace('watch?v=', 'embed/', $videos[0]->youtube_url) }}" allowfullscreen></iframe>
                    @else
                        <p>Aucune vidéo disponible.</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Liste des vidéos -->
        <div class="col-lg-5 col-md-4 p-0">
            <div class="video-list bg-light p-3">
                <div class="playlist-title mb-3">
                    <h2 class="text-center">Espace Vidéos</h2>
                </div>
                <div class="video-items">
                    @foreach ($videos as $video)
                        <div class="video-item d-flex align-items-center mb-3 border-bottom pb-2" data-video="{{ str_replace('watch?v=', 'embed/', $video->youtube_url) }}">
                            <img src="https://img.youtube.com/vi/{{ explode('=', $video->youtube_url)[1] }}/0.jpg" alt="{{ $video->title }}" class="img-thumbnail rounded" style="width: 80px;">
                            <div class="video-info ml-3">
                                <h5 class="mb-0">{{ $video->title }}</h5>
                                {{-- <span>Durée : 2:11</span> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* Conteneur vidéo */
    .video-section .row {
        margin-right: 0;
        margin-left: 0;
    }

    .video-section .video-player iframe {
        width: 100%;
        height: 100%;
        /* S'adapte à la hauteur du parent */
    }

    .video-section .video-list {
        max-height: 500px;
        overflow-y: auto;
        border-left: 1px solid #e6e6e6;
    }

    .video-section .video-item {
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .video-section .video-item:hover {
        background-color: #f7f7f7;
    }

    .video-section .video-item img {
        width: 80px;
        height: 60px;
    }

    .video-section .video-info h5 {
        font-size: 14px;
        margin-bottom: 0;
    }

    .video-section .video-info span {
        font-size: 12px;
        color: gray;
    }

    .video-section .col-lg-9,
    .video-section .col-lg-3 {
        padding-right: 0;
        padding-left: 0;
    }

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

</style>

<!-- JS pour changer la vidéo -->
<script>
    document.querySelectorAll('.video-item').forEach(item => {
        item.addEventListener('click', function() {
            const videoUrl = this.getAttribute('data-video');
            document.getElementById('main-video').src = videoUrl;
        });
    });

</script>




<!-- video-section end -->
{{-- faire un br --}}
<br>
<br>
<!-- service-section -->
<section class="service-section pt_50 pb_90">
    <div class="bg-layer" style="background-image: url(assets/images/background/service-bg.jpg);"></div>
    <div class="auto-container">
        <div class="sec-title centred mb_60">
            {{-- <h6>Nos partenaires</h6> --}}
            <h2>Nos partenaires à portée de main</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon-box"><i class="icon-12"></i></div>
                        <h4><a href="service-details.html">Digital Banking</a></h4>
                        <ul class="list-item clearfix">
                            <li>Bank & savings accounts</li>
                            <li>Credit cards</li>
                            <li>Personal loans</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon-box"><i class="icon-13"></i></div>
                        <h4><a href="service-details-2.html">Mobile & Web Banking</a></h4>
                        <ul class="list-item clearfix">
                            <li>Instant Access</li>
                            <li>Savings Fixed Term</li>
                            <li>Savings Instant</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon-box"><i class="icon-14"></i></div>
                        <h4><a href="service-details-3.html">Insurance Policies</a></h4>
                        <ul class="list-item clearfix">
                            <li>Pet insurance</li>
                            <li>Transport Insurance</li>
                            <li>Accident insurance</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="shape"></div>
                        <div class="icon-box"><i class="icon-15"></i></div>
                        <h4><a href="service-details-4.html">Home & Property Loan</a></h4>
                        <ul class="list-item clearfix">
                            <li>Residential Mortgages</li>
                            <li>Buy-to-let Mortgages</li>
                            <li>Building Mortgages</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- service-section end -->
<!-- funfact-section -->
<section class="funfact-section">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-21"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="50">0</span><span>k+</span>
                    </div>
                    <p>Clients satisfaits</p>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-22"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="90">0</span><span>milliards</span>
                    </div>
                    <p>de transactions au total</p>
                </div>
            </div>
            <div class="funfact-block-one">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-23"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="40">0</span><span>+</span>
                    </div>
                    <p>Filiales en Afrique</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->


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


<!-- testimonial-section -->
<section class="testimonial-section centred pt_80 pb_80">
    <div class="bg-layer" style="background-image: url(assets/images/background/testimonial-bg.jpg);"></div>
    <div class="auto-container">
        <div class="sec-title mb_70">
            <h6>Témoignages</h6>
            <h2>L'amour de nos clients</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="thumb-box"><img src="assets/images/banner/banner-3.jpg" alt=""></figure>
                    <h4>Sandra Bullock</h4>
                    <span class="designation">Manager</span>
                    <ul class="rating mb_6 clearfix">
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                    </ul>
                    <p>“Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque etiam nis quis at arcu nunc neque ac integer sit lobortis diam semper nulla duis in blandit.”</p>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="thumb-box"><img src="assets/images/banner/avatar.jpg" alt=""></figure>
                    <h4>Julien Anthor</h4>
                    <span class="designation">Manager</span>
                    <ul class="rating mb_6 clearfix">
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                    </ul>
                    <p>“Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque etiam nis quis at arcu nunc neque ac integer sit lobortis diam semper nulla duis in blandit.”</p>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="thumb-box"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                    <h4>Rolier Demonil</h4>
                    <span class="designation">Manager</span>
                    <ul class="rating mb_6 clearfix">
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                        <li><i class="icon-26"></i></li>
                    </ul>
                    <p>“Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque etiam nis quis at arcu nunc neque ac integer sit lobortis diam semper nulla duis in blandit.”</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->





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


