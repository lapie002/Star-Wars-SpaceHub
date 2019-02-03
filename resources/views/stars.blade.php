@extends('star-template')

@section('titre')
    Le personnage
@endsection

@section('contenu')

    <p>C'est le personnage {{ $character->name }}</p>

@endsection
