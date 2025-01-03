@extends('layouts.app') <!-- Étend le layout de base Laravel -->

@section('content')
@include('partials.header')
<!-- Section Bannière -->
<div class="  text-center py-5" style="background-color: #2c6ea8">
    <h1 class="display-4 fw-bold text-white">Notre Mission</h1>
    <p class="lead text-white">Participer à la réussite économique de l'Afrique</p>
</div>

<!-- Section Mission -->
<div class="position-relative">
<img src="assets/images/banner/finance1.jpg" class="img-fluid w-100" style="height: 450px; object-fit: cover;" alt="Image de mission">

    <div class="position-absolute top-50 start-50 translate-middle bg-dark text-white p-4 rounded">
        <h2 class="h4 text-white">Les grandes opportunités</h2>
        <p class="mb-0 text-white">
        Pacific Finance s'engage à offrir des solutions financières et non financières accessibles aux micro-entrepreneurs, Très Petites Entreprises (TPE) et Petites et Moyennes Entreprises (PME) des zones urbaines et rurales, afin de les accompagner dans leur développement économique, social et durable.
        </p>
    </div>
</div>

@include('partials.footer')
@endsection
