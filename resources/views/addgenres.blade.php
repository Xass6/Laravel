
@extends('templates.header')

@section('title', 'Ajouter un genre')

@section('content')
  <form class="" action="/insertgenres" method="post">
    @csrf
        <input placeholder="Romance" type="text" name="name" value="" required>
    <input type="submit" name="" value="Insert">
  </form>
@endsection
