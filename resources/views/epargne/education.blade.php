@extends('layouts.app')

@section('content')
@include('partials.header')
    <!-- Conteneur principal avec une couleur de fond et des marges -->
    <div class="container-fluid p-5" style="background-color: rgba(44, 110, 168, 0.1);">
        <div class="row">
            <!-- Colonne gauche pour le titre principal -->
            <div class="col-md-6">
                <h2 class="fw-bold text-uppercase" style="color: #2C6EA8;">ÉPARGNE M’BEOG NEERE</h2>
                <h3 class="mt-2" style="color: #2C6EA8;">(ÉDUCATION)</h3>
            </div>
            <!-- Colonne droite pour le texte descriptif -->
            <div class="col-md-6">
                <p class="fw-bold fs-5" style="color: #2C6EA8;">
                    Avec M’Beog Neere de <span class="fw-bold">Pacific Finance</span>, c’est garantir une éducation sans stress à ses enfants.
                </p>
                <ul class="list-unstyled mt-3" style="color: #2C6EA8;">
                    <li class="mb-2">• Dépôt à partir de 5000 F</li>
                    <li>• Taux d’intérêt 4%</li>
                </ul>
            </div>
        </div>
    </div>
@include('partials.footer')
@endsection
