@extends('layouts.app')

@include('partials.header')

@section('content')
<!-- news-details -->
<section class="news-details pt_80 pb_80">
    <div class="">
        <div class="row justify-content-center">
            <!-- Content with image above -->
            <div class="col-lg-9 col-md-12 col-sm-12">
                <!-- Image section -->
                <div class="image-section mb-4">
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid rounded" style="object-fit:cover; max-height: 900px; width: 100%;">
                </div>
                <!-- Content section -->
                <div class="content-section">
                    <h2>{{ $news->title }}</h2>
                    <p class="text-muted mb-3">Publié le: {{ $news->publish_date->format('d M Y') }}</p>
                    <p>{{ $news->content }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news-details end -->
@include('partials.footer')
@endsection
