
@extends('templates.header')

@section('title', 'Ajouter une séries')

@section('content')
  <form class="" action="/insertserie" method="post">
    @csrf
        <input placeholder="Title" type="text" name="title" value="" required>
        <input placeholder="0000" type="number" name="publication_year" value="">
        <select multiple name="actors[]">
            @foreach ($actors as $actor)
                <option value="{{ $actor->id }}">
                    {{ $actor->completeName() }}
                </option>
            @endforeach
        </select>
        <select multiple name="genres[]">
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>
    <input type="submit" name="" value="Insert">
  </form>
@endsection
