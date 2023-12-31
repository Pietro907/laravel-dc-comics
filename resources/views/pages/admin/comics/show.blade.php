@extends('layouts.welcome')

@section('main_content')
    
    {{-- se l'immagine la mette l'utente stmpo questo sotto, senò uso il percorso di prima --}}
    {{-- @if (Str::startsWith($comic->thumb, 'comics_images'))
        <img class="card-img-top" src="{{  asset('storage/' .  $comic->thumb)}}" alt="">

    
    @else
        <img class="card-img-top" src="{{$comic->thumb}}" alt="">
    @endif --}}
    
    <img class="card-img-top" src="{{ Str::startsWith($comic->thumb, 'thumb') ? asset('storage/' . $comic->thumb) : $comic->thumb }}" alt="">

    <div class="card-body">
        <h5>Titolo:</h5>
        <div>{{$comic->title}}</div>
        <h5>Descrizione:</h5>
        <div>{{$comic->description}}</div>
        <h5>Prezzo:</h5>
        <div>{{$comic->price}}</div>
        <h5>Serie:</h5>
        <div>{{$comic->series}}</div>
        <h5>Data di uscita:</h5>
        <div>{{$comic->sale_date}}</div>
        <h5>Genere:</h5>
        <div>{{$comic->type}}</div>
        <h5>Artista/i:</h5>
        <div>{{$comic->artists}}</div>
        <h5>Autore:</h5>
        <div>{{$comic->writers}}</div>
    </div>
</a>
@endsection