@extends('layouts.app_admin')
<!-- Assurez-vous d'utiliser le bon layout -->
@section('content')
@include('partials.header_admin')
@include('partials.sidebar')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Créer une Nouvelle Actualité</h4>
                <h6>Ajoutez une nouvelle actualité</h6>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Titre</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Contenu</label>
                                <textarea name="content" class="form-control" rows="4" required></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="image-upload">
                                    <input type="file" name="image" class="form-control">
                                    <div class="image-uploads">
                                        <img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
                                        <h4>Glissez et déposez un fichier à uploader</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Soumettre</button>
                            <a href="{{ route('news.index') }}" class="btn btn-cancel">Annuler</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
