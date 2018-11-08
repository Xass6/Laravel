
@extends('templates.header')

@section('title', 'Toute les séries')

@section('content')
  <p>Liste des series :</p>
  <table>
  <tr>
      <th>Titre</th>
      <th>Date de parution</th>
      <th>Acteurs</th>
      <th>Genres</th>
  </tr>
      @foreach($series as $serie)
          <tr>
          <td>{{ $serie->title }}</td>
          <td>{{ $serie->publication_year }}</td>
          <td>
            @foreach ($serie->actors as $actor)
                {{ $actor->completeName() }}</br>
            @endforeach
          </td>
          <td>
            @foreach ($serie->genres as $genre)
                {{ $genre->name }}</br>
            @endforeach
          </td>

          <td>
            <form class="" action="/deleteserie" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $serie->id }}">
              <input type="submit" name="" value="X">
            </form>
        </td>
        <td>
            <form class="" action="/updateserie" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $serie->id }}">
              <input type="submit" name="" value="update">
            </form>
       </td>
      </tr>
      @endforeach
  </table>
@endsection
