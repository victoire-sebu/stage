@extends('layouts.master')

@section('content')

<div class="container">
    <h1> Formulaire pour Voiture</h1>

    <p>
        <form action="{{route('VoitureStore')}}" method="post">
            @csrf
            <div >
                <label for="nom">Nom</label>    
                <input class="form-control" type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="matricule">Matricule</label>    
                <input class="form-control" type="text" name="matricule" id="matricule">
            </div>
            <div>
                <label for="prix">Prix (en USD)</label>    
                <input class="form-control" type="number" name="prix" id="prix">
            </div>
            

            <button class="btn btn-primary" type="submit"> Enregister</button>

        </form>
    </p>
</div>
@endsection