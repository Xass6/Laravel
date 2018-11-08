
@extends('templates.header')

@section('title', 'Toute les acteurs')

@section('content')
  <p>Liste des acteurs :</p>
  <table>
  <tr>
      <th>Acteurs</th>
  </tr>
      @foreach($actors as $actor)
        <tr>
          <td>
                {{ $actor->completeName() }}</br>
          </td>
          <td>
            <form class="" action="/deleteactor" method="post">
              @csrf
                <input type="hidden" name="id" value="{{ $actor->id }}">
              <input type="submit" name="" value="X">
            </form>
        </td>
      </tr>
      @endforeach
  </table>
  <a href="/addactor">Ajouter un acteur</a>
@endsection
