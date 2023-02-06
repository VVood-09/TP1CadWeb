@extends('layouts.app')
@section('title', "bienvenue")
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1>Site Maisonneuve 2295393</h1>
            <hr>
            <p>Bienvenue sur le site de gestion des étudiants du collège</p>
            <a class="btn btn-primary" href="{{ route('etudiant.index') }}">Allez à la liste</a>
        </div>
    </div>
</div>
@endsection