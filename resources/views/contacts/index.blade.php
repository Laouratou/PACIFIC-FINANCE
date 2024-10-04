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
                <h4>{{ __('Liste des demandes de contact') }}</h4>
                <h6>{{ __('Gérer vos demandes de contact') }}</h6>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datanew" id="DataTables_Table_0">
                        <thead>
                            <tr>
                                <th>{{ __('Type de Demande') }}</th>
                                <th>{{ __('Type de Client') }}</th>
                                <th>{{ __('Produit d\'Intérêt') }}</th>
                                <th>{{ __('Nom') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Téléphone') }}</th>
                                <th>{{ __('Ville') }}</th>
                                <th>{{ __('Quartier') }}</th>
                                <th>{{ __('Document d\'Identité') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->request_type }}</td>
                                <td>{{ $contact->client_type }}</td>
                                <td>{{ $contact->product_interest }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->city }}</td>
                                <td>{{ $contact->neighborhood }}</td>
                                {{-- <td>
                                    @if ($contact->identity_document)
                                    <img src="{{ route('files.show', basename($contact->identity_document)) }}" alt="Document d'identité" style="width: 50px; height: auto;">
                                    @else
                                    <span>{{ __('Aucune image disponible') }}</span>
                                    @endif
                                </td> --}}


                                {{-- <td>
                                        <a class="me-3" href="{{ route('contacts.edit', $contact->id) }}">
                                <img src="{{ asset('img/icons/edit.svg') }}" alt="Éditer">
                                </a>
                                <a class="confirm-text" href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $contact->id }}').submit();">
                                    <img src="{{ asset('img/icons/delete.svg') }}" alt="Supprimer">
                                </a>
                                <form id="delete-form-{{ $contact->id }}" action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- {{ $contacts->links() }} <!-- Pagination --> --}}
            </div>
        </div>
    </div>
</div>

@endsection

 
