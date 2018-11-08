<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Serie as Serie;
Use App\Actor as Actor;
Use App\Genre as Genre;


class View extends Controller
{
  public function addSeries()
  {
    $actors = Actor::all();
    $genres = Genre::all();
    return view('addseries', [
    "actors" => $actors,
    "genres" => $genres,
]);
    return view ('addSeries');
  }
  public function showSeries()
  {
    $series = Serie::all();
    return view ('series', ['series' => $series]);
  }
  public function home()
  {
    return view('welcome');
  }
    public function contact($name)
    {
      return view('contact', [
      "name" => $name,
      "data" => [
        "poulet",
        "patate",
        "carotte",
        "Tofu",
      ]
    ]);

    }
    public function updateForm(Request $request)
    {
        $serie = \App\Serie::find($request->input('id'));
        $actors = Actor::all();
        $genres = Genre::all();
        return view('update',[
            'serie'=>$serie,
            'actors'=>$actors,
            'genres'=>$genres,
        ]);
    }
    public function addactor()
    {
      return view('addactor');
    }
    public function listactor(Request $request)
    {
          $actors = Actor::all();
         return view('listactor', ['actors'=>$actors]);
    }
    public function addgenres()
    {
      return view('addgenres');
    }
    public function listgenres(Request $request)
    {
          $genres = Genre::all();
         return view('listgenres', ['genres'=>$genres]);
    }
}
