<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comics;

class PageController extends Controller
{
    //qui do la rotta per welcome, pagina che visulizzerà l'utente
    function index(){
        $comics = Comics::all();
        return view('welcome', compact('comics'));
        //return view('welcome', ['comics' => Comics]);
    }
/*     function about(){
        return view('about');
    }

    function comics(){
        return view('comics');
    } */
}
