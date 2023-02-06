@extends('layouts.app')
@section('title', "liste des étudiants")
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-2">
                <h1 class="display-one">{{ config('app.name') }}</h1>
                <hr>
                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="{{ route('etudiant.create') }}">Ajouter un étudiant</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Liste des étudiants
                        </div>
                        <div class="card-body">
                            <ol>
                                @forelse($etudiants as $etudiant)
                                    <li><a href="{{ route('etudiant.show', $etudiant->id) }}">{{ $etudiant->nom }}</a></li>
                                @empty
                                    <li class="text-danger">Aucun étudiants disponible.</li>
                                @endforelse
                            </ol>
                            {{ $etudiants }}
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection