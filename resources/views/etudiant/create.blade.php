@extends('layouts.app')
@section('title', "créer un étudiant")
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one ">
                Ajout d'étudiant
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    <div class="card-header">
                        Formulaire
                    </div>
                    <div class="card-body">
                        <div class="control-group col-12">
                            <label for="nom">Nom de l'étudiant</label>
                            <input type="text" id="nom" name="nom" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="courriel">Courriel</label>
                            <input type="email" name="courriel" id="courriel" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="date_de_naissance">Date de naissance</label>
                            <input type="date" name="date_de_naissance" id="date_de_naissance" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="telephone">Numéro de téléphone</label>
                            <input type="text" name="telephone" id="telephone" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">Adresse de domicile</label>
                            <input type="text" name="adresse" id="adresse" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="ville_id">Ville de résidence</label>
                            <select name="ville_id" id="ville_id" class="form-control">
                                <option>Cliquer pour selectionner une ville</option>
                                @forelse($villes as $ville)
                                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                @empty
                                    <option class="text-danger">Aucun ville disponible.</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center mb-2">
                            <div class="col-6">
                                <input type="submit" value="Sauvegarder" class="btn btn-success">
                            </div>
                            <div class="col-6">
                                <a class="btn btn-danger" href="{{ route('etudiant.index') }}">Annuler</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection