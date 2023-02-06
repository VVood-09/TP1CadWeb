@extends('layouts.app')
@section('title', "étudiant")
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <h1 class="display-one text-center">Étudiant</h1>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ route('etudiant.index') }}" class="btn btn-primary">Retouner</a>
                </div>
            </div>
            <hr>
            <h4 class="display-one mt-2">{{ $etudiant->nom }}</h4>
            <p><small>Date de naissance : </small><b>{{ $etudiant->date_de_naissance }}</b></p>
            <p><small>Courriel : </small><b>{{ $etudiant->courriel }}</b></p>
            <p><small>Téléphone : </small><b>{{ $etudiant->telephone }}</b></p>
            <p><small>Adresse : </small><b>{{ $etudiant->adresse }}</b></p>
            <p><small>Ville : </small><b>{{ $etudiant->etudiantHasVille->nom}}</b></p>
            <hr>
        </div>
    </div>
    <div class="row text-center mb-2">
        <div class="col-6">
            <a href="{{route('etudiant.edit', $etudiant->id)}}" class="btn btn-success">Mettre a jour</a>
        </div>
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Effacer
            </button>           
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer un étudiant</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Etes-vous certain de vouloir effacer cette donnée?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <form action="{{ route('etudiant.edit', $etudiant->id)}}" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection