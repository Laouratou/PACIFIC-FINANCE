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
                <h4>{{ __('Liste des vidéos') }}</h4>
                <h6>{{ __('Gérez vos vidéos') }}</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('videos.create') }}" class="btn btn-added">
                    <img src="{{ asset('img/icons/plus.svg') }}" alt="img" class="me-1">{{ __('Ajouter une nouvelle vidéo') }}
                </a>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datavideo">
                        <thead>
                            <tr>
                                <th>{{ __('Titre') }}</th>
                                <th>{{ __('Lien YouTube') }}</th>
                                <th>{{ __('Miniature') }}</th> <!-- Nouvelle colonne pour la miniature -->
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $video)
                                <tr>
                                    <td>{{ $video->title }}</td>
                                    <td><a href="{{ $video->youtube_url }}" target="_blank">{{ $video->youtube_url }}</a></td>
                                    <td>
                                        @if($video->thumbnail)
                                            <img src="{{ asset('storage/' . $video->thumbnail) }}" alt="{{ $video->title }}" style="width: 100px; height: auto;">
                                        @else
                                            <span>{{ __('Aucune miniature') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="me-3" href="{{ route('videos.edit', $video->id) }}">
                                            <img src="{{ asset('img/icons/edit.svg') }}" alt="Éditer">
                                        </a>
                                        <a class="confirm-text" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $video->id }}').submit();">
                                            <img src="{{ asset('img/icons/delete.svg') }}" alt="Supprimer">
                                        </a>
                                        <form id="delete-form-{{ $video->id }}" action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- {{ $videos->links() }} <!-- Pagination --> --}}
            </div>
        </div>
    </div>
</div>

@endsection
