@extends('layouts.app')
@include('partials.header')

<section class="about-style-two ">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_three">
                    <div class="content-box mr_110">
                        <div class="sec-title mb_20">
                            <h6 class="title-with-underscore">
                                Particuliers
                                <span class="underscore"></span>
                            </h6>
                        </div>
                        <div class="text-box mb_40">
                            <h2>Crédit aux groupes (homme, femmes et mixtes) de solidarité</h2>
                        </div>
                        <p>Chez PACIFIC FINANCE, nous croyons que chaque rêve mérite d’être réalisé. Nos services de crédit sont conçus pour vous offrir les ressources financières nécessaires afin de transformer vos idées en réalité. Que vous soyez un entrepreneur, un commerçant, ou que vous ayez simplement besoin d’un soutien financier temporaire, nous sommes là pour vous accompagner.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box">
                        <div class="image-shape">
                            <figure class="image pt_80 d-none d-lg-block">
                                <img src="assets/images/resource/49782.jpg" alt="" style="width:400px;height:400px;object-fit:cover;border-radius: 50%;">
                            </figure>
                            <figure class="image pt_115 d-lg-none">
                                <img src="assets/images/resource/49782.jpg" alt="" class="img-fluid" style="width:100%;max-width:300px;height:300px;object-fit:cover;border-radius:50%;">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- service-style-two -->
<section class="service-style-two pb_120 pt_120">
    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-3.jpg);"></div>
    <div class="auto-container">
        <div class="sec-title centred mb_70">
            {{-- <h6>Our Services</h6> --}}
            <h2>Les crédits</h2>
        </div>
        <div class="tabs-box">
            <div class="tab-btn-box p_relative mb_100">
                <ul class="tab-btns tab-buttons">
                    <li class="tab-btn active-btn" data-tab="#tab-1"><span>TYPES DE PRETS</span></li>
                    <li class="tab-btn" data-tab="#tab-2"><span>CONDITIONS</span></li>
                    <li class="tab-btn" data-tab="#tab-3"><span>MODALITES</span></li>
                    {{-- <li class="tab-btn" data-tab="#tab-4"><span>Bank Accounts</span></li> --}}
                </ul>
            </div>
            <div class="tabs-content">
                <div class="tab active-tab" id="tab-1">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_four">
                                <div class="content-box mr_110">
                                    <h6>Vous êtes un agriculteur ou un éleveur ?</h6>
                                    <p> Pacific finance met à votre disponition plusieurs types de prêts :</p>
                                    {{-- <br> --}}
                                    <ul class="list-item mb_40 clearfix">
                                        <li>Crédit intrants</li>
                                        <li>Crédit fonds de roulement</li>
                                        <li>Crédit équipements</li>
                                        <li>Crédit embouche</li>
                                        <li>Élevage</li>
                                         <li>Crédit warrantage</li>
                                        {{-- <li>Préfinancements des marchés</li> --}}
                                    </ul>
                                    {{-- <a href="index-2.html" class="theme-btn btn-one">Discover More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box ml_40">
                                <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <figure class="image"><img src="assets/images/service/service-1.jpg" alt="" style="width:400px;height:400px;object-fit:cover;"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-2">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_four">
                                <div class="content-box mr_110">
                                    <h5>Tout bénéficiaire des produits et services </h5>
                                    <p>de PACIFIC FINANCE doit répondre aux conditions minimales suivantes :</p>
                                    <ul class="list-item mb_40 clearfix">
                                        <li>5 à 10 emprunteurs pour les crédits de groupement avec une caution solidaire</li>
                                        <li>4 à 7 emprunteurs et une caution solidaire ,pour les crédits solidaires </li>
                                        <li>1 emprunteur,un aval et une garantie réelles pour les crédits individuels</li>
                                        {{-- <li>Over 20 Years Experience</li>
                                        <li>Expert Agents</li> --}}
                                    </ul>
                                    {{-- <a href="index-2.html" class="theme-btn btn-one">Discover More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box ml_40">
                                <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <figure class="image"><img src="assets/images/service/service-2.jpg" alt="" style="width:400px;height:400px;object-fit:cover;"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-3">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_four">
                                <div class="content-box mr_110">
                                    <h2>Modalités</h2>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis, suscipit you take action against fraud. See it the Security Center for and Mobile and Online Banking.</p> --}}
                                    <ul class="list-item mb_40 clearfix">
                                        <li>Durée : 1 à 24 Mois selon le type de crédit.</li>
                                        <li>Montant : en fonction de la nature, du niveau de l’activité et de la capacité de remboursement du client.</li>
                                        <li>Taux : en fonction du type de crédit.</li>
                                        {{-- <li>Over 20 Years Experience</li>
                                        <li>Expert Agents</li> --}}
                                    </ul>
                                    {{-- <a href="index-2.html" class="theme-btn btn-one">Discover More</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box ml_40">
                                <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <figure class="image"><img src="assets/images/service/service-3.jpg" alt="" style="width:400px;height:400px;object-fit:cover;"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-4">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_four">
                                <div class="content-box mr_110">
                                    <h2>Bank Accounts</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis, suscipit you take action against fraud. See it the Security Center for and Mobile and Online Banking.</p>
                                    <ul class="list-item mb_40 clearfix">
                                        <li>Background Check</li>
                                        <li>Quick Response</li>
                                        <li>Free Consultation</li>
                                        <li>Over 20 Years Experience</li>
                                        <li>Expert Agents</li>
                                    </ul>
                                    <a href="index-2.html" class="theme-btn btn-one">Discover More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box ml_40">
                                <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <figure class="image"><img src="assets/images/service/service-4.jpg" alt="" style="width:400px;height:400px;object-fit:cover;"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-style-two end -->
<section class="py-5">
    <div class="container text-center">
        <h4 class="font-weight-bold mb-4">
            Pour plus de détails, cliquez sur le bouton ci-dessous pour nous contacter.
        </h4>
        <a href="tel:+22662909603" class="theme btn btn-one btn-lg rounded-pill" style="background-color: #2c6ea8; color: #ffffff; text-decoration: none;">
            <i class="fas fa-phone-square-alt" style="margin-right: 10px;"></i> Nous contacter
        </a>
    </div>
</section>
@include('partials.footer')
