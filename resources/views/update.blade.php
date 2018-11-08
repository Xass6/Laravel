
@extends('templates.header')

@section('title', 'Ajouter une séries')

@section('content')
  <form class="" action="/updateserieaction" method="post">
    @csrf
      <input type="hidden" name="id" value="{{ $serie->id }}" >
        <input type="text" name="title" value="{{ $serie->title }}" required>
        <input type="number" name="publication_year" value="{{ $serie->publication_year }}">
        <select name="actors">
            @foreach ($actors as $actor)
                @if($actor->id == $serie->actors[0]->id)
                    <option selected value="{{ $actor->id }}">
                        {{ $actor->completeName() }}
                    </option>
                @else
                    <option value="{{ $actor->id }}">
                        {{ $actor->completeName() }}
                    </option>
                @endif
            @endforeach
        </select>
        <select name="genres">
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">
                    {{ $genre->name }}
                </option>
            @endforeach
          </select>
    <input type="submit" name="" value="Insert">

  </form>
@endsection
