@extends('layouts.app_admin')
<!-- Assurez-vous d'utiliser le bon layout -->
@section('content')
@include('partials.header_admin')
@include('partials.sidebar')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Créer un Utilisateur</h4>
                <h6>Ajoutez un nouvel utilisateur au système</h6>
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
            <form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="row">
        <!-- Nom -->
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
        </div>

        <!-- Email -->
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
        </div>

        <!-- Mot de passe -->
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label>Mot de Passe</label>
                <input type="password" name="password" class="form-control" required>
            </div>
        </div>

        <!-- Confirmation du mot de passe -->
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label>Confirmez le Mot de Passe</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
        </div>

        <!-- Rôle -->
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label>Rôle</label>
                <select name="role" class="form-control">
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>Utilisateur</option>
                </select>
            </div>
        </div>

        <!-- Boutons -->
        <div class="col-lg-12">
            <button type="submit" class="btn btn-submit me-2">Créer</button>
            <a href="{{ route('users.index') }}" class="btn btn-cancel">Annuler</a>
        </div>
    </div>
</form>

            </div>
        </div>
    </div>
</div>
@endsection
