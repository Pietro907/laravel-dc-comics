<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comics;

class PageController extends Controller
{
    function index(){
        $comics = Comics::all();
        return view('welcome', compact('comics'));
    }
/*     function about(){
        return view('about');
    }

    function comics(){
        return view('comics');
    } */
}
