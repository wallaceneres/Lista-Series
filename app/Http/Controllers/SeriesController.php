<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {

    $series = \DB::select('SELECT * FROM series');

    return view('series.index',compact('series'));

    }

    public function create()
    {

        return view('series.create');

    }

    public function store (Request $request)
    {

        $nomeSerie = $request->input('nome');

        if(\DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]))
        {
            return "OK";
        }else
        {
            return "Erro";
        }


    }
}
