
@extends('templates.header')

@section('title', 'Ajouter un acteur')

@section('content')
  <form class="" action="/insertactor" method="post">
    @csrf
        <input placeholder="Prenom" type="text" name="firstName" value="" required>
        <input placeholder="Nom" type="text" name="lastName" value="">
    <input type="submit" name="" value="Insert">
  </form>
@endsection
