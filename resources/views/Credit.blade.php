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
                            <h2>Crédit</h2>
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
<br>
<br>

<!-- career-section -->
<section class="career-section pt_80 pb_80">
    <div class="bg-layer" style="background-image: url(assets/images/resource/entrepreneur.jpg);"></div>
    <div class="auto-container">
        <div class="sec-title centred mb_70">
            {{-- <h6>Current JObs</h6> --}}
            <h2>Nos credits disponibles</h2>
        </div>
        <div class="inner-container">
            <div class="career-block-one">
                <div class="inner-box">
                    <div class="author-box">
                        <figure class="thumb-box"><img src="assets/images/resource/entrepreneur.jpg" alt="" style="width:150px;height:150px;object-fit:cover"></figure>
                        <div class="text-box">
                            <h3>Crédit aux entrepreneurs et commerçants</h3>
                            <span class="designation">Marketing Department</span>
                        </div>
                    </div>
                    {{-- <ul class="info-box clearfix">
                        <li><i class="icon-34"></i>Manhattan, New York</li>
                        <li><i class="icon-35"></i>22th July, 2023</li>
                    </ul> --}}
                    <div class="btn-box">
                        <a href="{{ route('Credit.entrepreneur') }}">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="career-block-one">
                <div class="inner-box">
                    <div class="author-box">
                        <figure class="thumb-box"><img src="assets/images/resource/artisan.jpg" alt="" style="width:150px;height:150px;object-fit:cover"></figure>
                        <div class="text-box">
                            <h3>Crédit aux artisans </h3>
                            <span class="designation">Marketing Department</span>
                        </div>
                    </div>
                    {{-- <ul class="info-box clearfix">
                        <li><i class="icon-34"></i>Manhattan, New York</li>
                        <li><i class="icon-35"></i>21th July, 2023</li>
                    </ul> --}}
                    <div class="btn-box">
                        <a href="{{ route('Artisans') }}">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="career-block-one">
                <div class="inner-box">
                    <div class="author-box">
                        <figure class="thumb-box"><img src="assets/images/resource/elevage.jpg" alt="" style="width:150px;height:150px;object-fit:cover"></figure>
                        <div class="text-box">
                            <h3>Crédits aux agriculteurs et éleveurs</h3>
                            <span class="designation">Marketing Department</span>
                        </div>
                    </div>
                    {{-- <ul class="info-box clearfix">
                        <li><i class="icon-34"></i>Manhattan, New York</li>
                        <li><i class="icon-35"></i>20th July, 2023</li>
                    </ul> --}}
                    <div class="btn-box">
                        <a href="{{ route('Agriculteurs') }}">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="career-block-one">
                <div class="inner-box">
                    <div class="author-box">
                        <figure class="thumb-box"><img src="assets/images/resource/groupe.jpg" alt="" style="width:150px;height:150px;object-fit:cover"></figure>
                        <div class="text-box">
                            <h3>Crédit aux groupes (homme, femmes et mixtes) de solidarité</h3>
                            <span class="designation">Marketing Department</span>
                        </div>
                    </div>
                    {{-- <ul class="info-box clearfix">
                        <li><i class="icon-34"></i>Manhattan, New York</li>
                        <li><i class="icon-35"></i>19th July, 2023</li>
                    </ul> --}}
                    <div class="btn-box">
                        <a href="{{ route('Groupe') }}">Voir plus</a>
                    </div>
                </div>
            </div>
            {{-- <div class="career-block-one">
                        <div class="inner-box">
                            <div class="author-box">
                                <figure class="thumb-box"><img src="assets/images/resource/career-5.jpg" alt=""></figure>
                                <div class="text-box">
                                    <h3>Crédit aux entrepreneurs et commerçants</h3>
                                    <span class="designation">Marketing Department</span>
                                </div>
                            </div>
                            <ul class="info-box clearfix">
                                <li><i class="icon-34"></i>Manhattan, New York</li>
                                <li><i class="icon-35"></i>18th July, 2023</li>
                            </ul>
                            <div class="btn-box">
                                <a href="career-details.html">Apply Now</a>
                            </div>
                        </div>
                    </div> --}}
            <div class="career-block-one">
                <div class="inner-box">
                    <div class="author-box">
                        <figure class="thumb-box"><img src="assets/images/resource/personnel.jpg" alt="" style="width:150px;height:150px;object-fit:cover"></figure>
                        <div class="text-box">
                            <h3>Crédit au personnel</h3>
                            <span class="designation">Marketing Department</span>
                        </div>
                    </div>
                    {{-- <ul class="info-box clearfix">
                        <li><i class="icon-34"></i>Manhattan, New York</li>
                        <li><i class="icon-35"></i>18th July, 2023</li>
                    </ul> --}}
                    <div class="btn-box">
                        <a href="{{ route('Personnels') }}">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="career-block-one">
                <div class="inner-box">
                    <div class="author-box">
                        <figure class="thumb-box"><img src="assets/images/banner/salarie.jpg" alt="" style="width:150px;height:150px;object-fit:cover"></figure>
                        <div class="text-box">
                            <h3>Crédit aux salariés virés du privés et du publics</h3>
                            <span class="designation">Marketing Department</span>
                        </div>
                    </div>
                    {{-- <ul class="info-box clearfix">
                        <li><i class="icon-34"></i>Manhattan, New York</li>
                        <li><i class="icon-35"></i>18th July, 2023</li>
                    </ul> --}}
                    <div class="btn-box">
                        <a href="{{ route('Salaries')}}">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- career-section end -->
@include('partials.footer')