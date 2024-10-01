@extends('layouts.app_admin')
@include('partials.header_admin')
@include('partials.sidebar')

@section('content')

<div class="page-wrapper">
    <div class="content">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="page-header">
            <div class="page-title">
                <h4>{{ __('Liste des actualités') }}</h4>
                <h6>{{ __('Gérer vos actualités') }}</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('news.create') }}" class="btn btn-added">
                    <img src="{{ asset('img/icons/plus.svg') }}" alt="img" class="me-1">{{ __('Ajouter une nouvelle actualité') }}
                </a>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>{{ __('Titre') }}</th>
                                <th>{{ __('Date de Publication') }}</th>
                                <th>{{ __('Image') }}</th> <!-- Nouvelle colonne pour l'image -->
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $article)
                                <tr>
                                    <td>
                                        <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                                    </td>
                                    <td>{{ $article->publish_date->format('d-m-Y') }}</td>
                                    <td>
                                        @if($article->image)
                                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" style="width: 100px; height: auto;"> <!-- Affichage de l'image -->
                                        @else
                                            <span>Aucune image</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="me-3" href="{{ route('news.edit', $article->slug) }}">
                                            <img src="{{ asset('img/icons/edit.svg') }}" alt="Éditer">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $article->id }}').submit();">
                                            <img src="{{ asset('img/icons/delete.svg') }}"alt="Supprimer">
                                        </a>
                                        <form id="delete-form-{{ $article->id }}" action="{{ route('news.destroy', $article->slug) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $news->links() }} <!-- Pagination -->
            </div>
        </div>
    </div>
</div>

@endsection
