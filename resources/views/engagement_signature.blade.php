@extends('layouts.app')
@include('partials.header')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<section class="about-style-two ">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_three">
                    <div class="content-box mr_110">
                        <div class="sec-title mb_20">
                            <h6 class="title-with-underscore">
                                Entreprises
                                <span class="underscore"></span>
                            </h6>
                        </div>
                        <div class="text-box mb_40">
                            <h2>Engagements par signature.</h2>
                        </div>
                        <p>La Tontine Laba est un système d'épargne collectif qui permet à ses membres de se regrouper pour épargner de manière solidaire. Chaque participant contribue à un fonds commun, et ces contributions sont redistribuées à tour de rôle, offrant ainsi un coup de pouce financier à chaque membre lorsqu'il en a le plus besoin.</p>
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_two">
                    <div class="image-box">
                        <div class="image-shape">
                            <figure class="image pt_80 d-none d-lg-block">
                                <img src="assets/images/resource/tontine-explication.jpg" alt="" style="width:400px;height:400px;object-fit:cover;border-radius: 50%;">
                            </figure>
                            <figure class="image pt_115 d-lg-none">
                                <img src="assets/images/resource/tontine-explication.jpg" alt="" class="img-fluid" style="width:100%;max-width:300px;height:300px;object-fit:cover;border-radius:50%;">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<br>
<br>

<!-- process-section -->
<section class="process-section centred ">
    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-3.jpg);"></div>
    <div class="auto-container">
        <div class="sec-title mb_110 pt-5">
            <h2>POUR DEVENIR CLIENT PACIFIC FINANCE SA</h2>
        </div>
        <div class="inner-container">
            <div class="processing-block-one">
                <div class="arrow-shape" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                <div class="inner-box">
                    <span class="count-text">01 <br />Step</span>
                    <p>RCCM & IFU<br />pour les entreprises</p>
                </div>
            </div>
            <div class="processing-block-one">
                <div class="arrow-shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                <div class="inner-box">
                    <span class="count-text">02 <br />Step</span>
                    <p>03 Photos <br />d’identité,</p>
                </div>
            </div>
            <div class="processing-block-one">
                <div class="inner-box">
                    <span class="count-text">03 <br />Step</span>
                    <p>Photocopie légalisée d’une carte d’identité officielle en cours de validité <br /></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process-section end -->

</div>

<!-- requirements-section -->
<section class="requirements-section centred pt_80 pb_80">
    <div class="auto-container">
        <div class="sec-title mb_70">
            <h2>Avantages</h2>
        </div>
        <div class="row clearfix">
            <!-- Sécurité -->
            <div class="col-lg-4 col-md-6 col-sm-12 requirements-block">
                <div class="requirements-block-one">
                    <div class="inner-box">
                        <h4>Sécurité</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit velit nisl, quis suscipit nulla venenatis vel. Maecenas diam tellus, ultrices et metus hendrerit, condimentum dictum eros.</p>
                    </div>
                </div>
            </div>

            <!-- Possibilité de Crédit -->
            <div class="col-lg-4 col-md-6 col-sm-12 requirements-block">
                <div class="requirements-block-one">
                    <div class="inner-box">
                        <h4>Possibilité de Crédit</h4>
                        <p>Curabitur vitae neque eget odio elementum faucibus. In varius sed sem a ullamcorper. Donec quis pulvinar mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
            </div>

            <!-- gain de temps -->
            <div class="col-lg-4 col-md-6 col-sm-12 requirements-block">
                <div class="requirements-block-one">
                    <div class="inner-box">
                        <h4>Gain de temps</h4>
                        <p>Praesent consequat rutrum nunc, nec fermentum purus. Nulla facilisi. Integer auctor massa at metus gravida, a sollicitudin lorem tincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- requirements-section end -->





<!-- subscribe-section -->
<section class="subscribe-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                <div class="text-box">
                    <h2>Nous contactez pour en savoir plus</h2>
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
<!-- subscribe-section end -->


<!-- faq-section -->
<section class="faq-section pt_80 pb_80">
    <div class="auto-container">
        <div class="sec-title centred mb_70">
            <h2>Questions réponses</h2>
        </div>
        <div class="row clearfix">
            <!-- Colonne FAQ à gauche -->
            <div class="col-lg-6 col-md-12 col-sm-12 accordion-column">
                <ul class="accordion-box">
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>Quick Response</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>Flexible Payment</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>Flexible Payment</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>Flexible Payment</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-box"></div>
                            <h4>What is the Duration</h4>
                        </div>
                        <div class="acc-content">
                            <div class="text">
                                <p>Pulvinar dolor aliquet netus ultrices neque, mi non accumsan ullamco reper. Et nunc donen scelerisque turpis on facilisis pretium ut facilisis pharetra, ultrices. Duis imperdiet habitant arcu.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Colonne Image à droite -->
            <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <figure class="image d-none d-lg-block">
                    <img src="assets/images/resource/tontine (2).jpg" alt="" style="width:500px;height:500px;object-fit:cover;border-radius: 50%;">
                </figure>
                <figure class="image pt_115 d-lg-none">
                    <img src="assets/images/resource/tontine (2).jpg" alt="" class="img-fluid" style="width:100%;max-width:300px;height:300px;object-fit:cover;border-radius:50%;">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- faq-section end -->

@include('partials.contact')




<!-- faq-form-section end -->




@include('partials.footer')
