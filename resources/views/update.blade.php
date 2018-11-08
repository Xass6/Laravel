
@extends('templates.header')

@section('title', 'Ajouter une séries')

@section('content')
  <form class="" action="/updateserieaction" method="post">
    @csrf
      <input type="hidden" name="id" value="{{ $serie->id }}" >
        <input type="text" name="title" value="{{ $serie->title }}" required>
        <input type="number" name="publication_year" value="{{ $serie->publication_year }}">
        <select multiple name="actors[]">
            @foreach ($actors as $actor)
              <option value="{{$actor->id}}"
                @foreach ($serie->actors as $serieActor)
                @if($serieActor->id == $actor->id)
                    selected
                  @endif
             @endforeach
                        >{{ $actor->completeName() }}
                    </option>
            @endforeach
        </select>
        <select multiple name="genres[]">
            @foreach ($genres as $genre)
              <option value="{{$genre->id}}"
                @foreach ($serie->genres as $serieGenre)
                @if($serieGenre->id == $genre->id)
                    selected
                  @endif
             @endforeach
                        >{{ $genre->completeName() }}
                    </option>
            @endforeach
        </select>
    <input type="submit" name="" value="Insert">

  </form>
@endsection
