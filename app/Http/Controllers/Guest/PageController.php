<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comics;

class PageController extends Controller
{
    //qui do la rotta per welcome, pagina che visulizzerà l'utente
    function index(){
        //Prendo tutti i dati dal Model Comics e li inserisco nella variabile comics
        $comics = Comics::all();

        return view('pages.admin.comics.index', compact('comics'));
       
    }

}
