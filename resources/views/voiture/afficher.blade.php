@extends('layouts.master')

@section('content')

    <div  class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">prix</th>
                   
                </tr>
            </thead>
            
            <tbody>
                @foreach ($voitures as $voiture)
                <tr>
                    <td scope="row">{{$voiture->nom}}</td>
                    <td scope="row">{{$voiture->matricule}}</td>
                    <td scope="row">{{$voiture->prix}} USD</td>
                   
                </tr>
               @endforeach
            </tbody>
        </table>
        
        

        

       
    </div>
    
@endsection