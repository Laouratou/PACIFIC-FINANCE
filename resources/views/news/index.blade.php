@extends('layouts.app')
@include('partials.header')

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(assets/images/banner/banner-1.jpg); height:80%; object-fit:cover;"></div>
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-18.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Actualités</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Accueil</a></li>
                <li>Actualités</li>
            </ul>
        </div>
    </div>
</section>

<!-- news-style-two -->
<section class="news-style-two blog-grid pb_80">
    <div class="auto-container">
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

        {{-- <div class="pagination-wrapper centred pt_50 pb_50">
            <ul class="pagination">
                <li><a href="blog.html"><i class="icon-40"></i></a></li>
                <li><a href="blog.html" class="current">1</a></li>
                <li><a href="blog.html">2</a></li>
                <li><a href="blog.html">3</a></li>
                <li><a href="blog.html"><i class="icon-41"></i></a></li>
            </ul>
        </div>
    </div> --}}

  
</section>
  @include('partials.footer')
<!-- news-style-two end -->
