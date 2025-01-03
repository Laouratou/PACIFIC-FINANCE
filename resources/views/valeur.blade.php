@extends('layouts.app')

@section('content')
@include('partials.header')

<!-- Section principale avec image d'arrière-plan -->
<div style="position: relative; background-image: url('assets/images/banner/youtube.jpg'); background-size: cover; background-position: center; padding: 100px 0;">
    <!-- Overlay gris semi-transparent -->
    <div style="background-color: rgba(230, 230, 230, 0.9); padding: 50px 0;">
        <div class="container">
            <h2 class="text-center fw-bold mb-5" style="color: #2C6EA8;">
                NOUS METTONS NOS ÉNERGIES EN COMMUN POUR SERVIR AU MIEUX LES CLIENTS
            </h2>

            <!-- Première ligne de blocs -->
            <div class="row mb-4">
                <!-- Bloc Responsable -->
                <div class="col-md-4 text-center">
                    <div>
                        <i class="fas fa-user-circle" style="font-size: 50px; color: #2C6EA8;"></i>
                    </div>
                    <h4 class="fw-bold mt-3" style="color: #2C6EA8;">Responsable</h4>
                    <p style="color: #333;">
                        Chez Pacific Finance, nous écoutons nos clients avec attention. Nous nous engageons à protéger leurs projets financiers et à assurer leur sérénité grâce à des solutions durables.
                    </p>
                </div>
                <!-- Bloc Intègre -->
                <div class="col-md-4 text-center">
                    <div>
                        <i class="fas fa-rocket" style="font-size: 50px; color: #2C6EA8;"></i>
                    </div>
                    <h4 class="fw-bold mt-3" style="color: #2C6EA8;">Intègre</h4>
                    <p style="color: #333;">
                        Nous agissons avec transparence et éthique. Chaque membre de Pacific Finance respecte des valeurs solides pour bâtir une relation de confiance avec nos clients.
                    </p>
                </div>
                <!-- Bloc Efficace -->
                <div class="col-md-4 text-center">
                    <div>
                        <i class="fas fa-chart-line" style="font-size: 50px; color: #2C6EA8;"></i>
                    </div>
                    <h4 class="fw-bold mt-3" style="color: #2C6EA8;">Efficace</h4>
                    <p style="color: #333;">
                        Nous apportons des réponses claires et rapides. Notre expertise nous permet de proposer des services financiers performants, simples et accessibles.
                    </p>
                </div>
            </div>

            <!-- Deuxième ligne de blocs -->
            <div class="row">
                <!-- Bloc Proche -->
                <div class="col-md-6 text-center">
                    <div>
                        <i class="fas fa-users" style="font-size: 50px; color: #2C6EA8;"></i>
                    </div>
                    <h4 class="fw-bold mt-3" style="color: #2C6EA8;">Proche</h4>
                    <p style="color: #333;">
                        Notre équipe est toujours disponible pour accompagner nos clients à chaque étape. Chez Pacific Finance, la proximité et la simplicité font partie de notre ADN.
                    </p>
                </div>
                <!-- Bloc Esprit d'équipe -->
                <div class="col-md-6 text-center">
                    <div>
                        <i class="fas fa-handshake" style="font-size: 50px; color: #2C6EA8;"></i>
                    </div>
                    <h4 class="fw-bold mt-3" style="color: #2C6EA8;">Esprit d'équipe</h4>
                    <p style="color: #333;">
                        Ensemble, nous innovons et collaborons pour réussir. L'esprit d'équipe chez Pacific Finance est notre force pour relever les défis de demain.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection
