@extends('layouts.app_admin')
@section('content')
@include('partials.header_admin')
@include('partials.sidebar')

<div class="page-wrapper">
    <div class="content">
        <!-- Notification de succès -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- En-tête de la page -->
        <div class="page-header">
            <div class="page-title">
                <h4>{{ __('Liste des utilisateurs') }}</h4>
                <h6>{{ __('Gérer les utilisateurs du système') }}</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('users.create') }}" class="btn btn-added">
                    <img src="{{ asset('img/icons/plus.svg') }}" alt="img" class="me-1">{{ __('Ajouter un utilisateur') }}
                </a>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped datanew">
                        <thead>
                            <tr>
                                <th>{{ __('Nom') }}</th>
                                <th>{{ __('Email') }}</th>
                            
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <!-- Nom -->
                                    <td>
                                        <strong>{{ $user->name }}</strong>
                                    </td>
                                    <!-- Email -->
                                    <td>{{ $user->email }}</td>
                                    <!-- Rôle -->
                                    
                                    <!-- Actions -->
                                    <td>
                                        
                                        <button class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                            <img src="{{ asset('img/icons/delete.svg') }}" alt="Supprimer" class="me-1"> {{ __('Supprimer') }}
                                        </button>
                                        <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
