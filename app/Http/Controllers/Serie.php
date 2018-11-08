<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serie extends Controller
{
    public function insertOne(Request $request)
    {
      $serie = new \App\Serie;
      $serie->title = $request->input('title');
      $serie->publication_year = $request->input('publication_year');
      $serie->save();
      $serie->actors()->attach($request->input('actors'));
      $serie->genres()->attach($request->input('genres'));
      return redirect('/Series');
    }
    public function deleteOne(Request $request)
    {
      $serie= \App\Serie::find($request->id);
      $serie->delete();
      return redirect('/Series');
    }
    public function updateOne(Request $request)
    {
      $serie= \App\Serie::find($request->input('id'));
      $serie->title = $request->input('title');
      $serie->publication_year = $request->input('publication_year');
      $serie->save();
      $serie->actors()->detach();
      $serie->genres()->detach();
      $serie->actors()->attach($request->input('actors'));
      $serie->genres()->attach($request->input('genres'));
      return redirect('/Series');

    }
    public function insertactor(Request $request)
    {
      $actors = new \App\Actor;
      $actors->first_name = $request->input('firstName');
      $actors->last_name = $request->input('lastName');
      $actors->save();
      return redirect('/listactor');
    }
    public function deleteactor(Request $request)
    {
      $actors= \App\Actor::find($request->id);
      $actors->delete();
      return redirect('/listactor');
    }
    public function insertgenres(Request $request)
    {
      $genres = new \App\Genre;
      $genres->name = $request->input('name');
      $genres->save();
      return redirect('/listgenres');
    }
    public function deletegenres(Request $request)
    {
      $genres= \App\Genre::find($request->id);
      $genres->delete();
      return redirect('/listgenres');
    }

}
