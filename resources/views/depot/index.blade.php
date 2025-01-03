@extends('layouts.app')

@section('content')
@include('partials.header')

<div class="container mt-5">
    <!-- Titre Principal -->
    <div class="row">
        <div class="col-12">
            <h2 class="fw-bold mb-4">Nos Offres</h2>
        </div>
    </div>

    <div class="row">
        <!-- Colonne Gauche : Cartes -->
        <div class="col-md-4 d-flex flex-column gap-4">
            <!-- Carte TÉLÉCHARGER -->
            <div class="card border-0 shadow-sm text-white card-hover-effect" style="background-color: #2C6EA8;">
                <div class="card-body text-center text-white">
                    <h5 class="fw-bold text-white">TELECHARGER <i class="fas fa-file-pdf"></i></h5>
                    <p class="text-white">Obtenez nos offres dans ce fichier PDF</p>
                    <a href="#" class="btn btn-light btn-sm fw-bold" download>Télécharger</a>
                </div>
            </div>

            <!-- Carte Besoin d'aide -->
            <div class="card border-1 shadow-sm card-hover-effect" style="border-color: #2C6EA8;">
                <div class="card-body text-center">
                    <h5 class="fw-bold" style="color: #2C6EA8;">Besoin d’aide ou d’assistance ?</h5>
                    <p class="mb-1">Appelez ou écrivez-nous maintenant par WhatsApp :</p>
                    <p class="mb-0"><i class="fas fa-phone-alt"></i> +226 64 20 37 86</p>
                    <p class="mb-0"><i class="fab fa-whatsapp"></i> +226 63 17 48 48</p>
                    <p class="mb-0">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:contact@pacificfinance.com" class="fw-bold" style="color: #2C6EA8;">
                            contact@pacificfinance.com
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Colonne Droite : Contenu principal -->
        <div class="col-md-8">
    <div class="p-5 rounded-3 shadow-sm text-center bounce-hover" style="
        background: linear-gradient(to right, #e0f2f1, #f1f8e9);
        color: #2C6EA8;
    ">
        <h1 class="fw-bold">Dépôt à Terme (DAT)</h1>
        <p class="small">PARTICIPER À LA RÉUSSITE ÉCONOMIQUE DE L'AFRIQUE</p>
        <p class="mt-4">
            Pacific Finance met à la disposition de sa clientèle des DAT (Dépôt à Terme) rémunérés jusqu’à
            <strong>8% l’an</strong>.
        </p>
    </div>
</div>

    </div>
</div>
<br>
<br>
@include('partials.footer')
@endsection
