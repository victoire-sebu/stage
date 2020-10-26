@extends('layouts.master')

@section('content')

<div class="container">
    <h1> Acceuil</h1>
    <p>

        <a class="btn btn-primary" href="{{route('VoitureAjout')}}">Enregister Voiture</a>
        
        <a class="btn btn-primary" href="{{route('VoitureIndex')}}">List des Voiturse</a>

        

    </p>
</div>
@endsection