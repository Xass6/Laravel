
@extends('templates.header')

@section('title', 'Toute les genres')

@section('content')
  <p>Liste des genres :</p>
  <table>
  <tr>
      <th>Genres</th>
  </tr>
      @foreach($genres as $genre)
        <tr>
          <td>
                {{ $genre->completeName() }}</br>
          </td>
          <td>
            <form class="" action="/deletegenres" method="post">
              @csrf
                <input type="hidden" name="id" value="{{ $genre->id }}">
              <input type="submit" name="" value="X">
            </form>
        </td>
      </tr>
      @endforeach
  </table>
  <a href="/addgenres">Ajouter un acteur</a>
@endsection
