@extends('layouts.welcome')

@section('main_content')
    <div>
        <h1>All comics</h1>

        <div class="container">
            <div class="row">

                @if (session('messaggio'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>Congratulazioni!</strong> {{ session('messaggio') }}
                    </div>
                @endif

                <div style="font-size: x-small" class="col d-flex flex-wrap">
                    @foreach ($comics as $comic)
                        <a style="width: 150px" href="{{ route('comics.show', $comic->id) }}"
                            class="card w-25 m-2 p-5 text-decoration-none">


                            {{-- se l'immagine la mette l'utente stmpo questo sotto, senò uso il percorso di prima --}}
                            {{-- @if (Str::startsWith($comic->thumb, 'comics_images'))
                                <img class="card-img-top" src="{{  asset('storage/' .  $comic->thumb)}}" alt="">
                                
                                
                                @else
                                <img class="card-img-top" src="{{$comic->thumb}}" alt="">
                                @endif --}}
                            <img style="width: 150px; aspect-ratio: 1/1; obj-fit: cover" class="card-img-top"
                                src="{{ Str::startsWith($comic->thumb, 'comics_images') ? asset('storage/' . $comic->thumb) : $comic->thumb }}"
                                alt="">

                            <div class="card-body">
                                <h6>Titolo:</h6>
                                <div>{{ $comic->title }}</div>
                                <h6>Descrizione:</h6>
                                <div>{{ $comic->description }}</div>
                                <h6>Prezzo:</h6>
                                <div>{{ $comic->price }}</div>
                                <h6>Serie:</h6>
                                <div>{{ $comic->series }}</div>
                                <h6>Data di uscita:</h6>
                                <div>{{ $comic->sale_date }}</div>
                                <h6>Genere:</h6>
                                <div>{{ $comic->type }}</div>
                                <h6>Artista/i:</h6>
                                <div>{{ $comic->artists }}</div>
                                <h6>Autore:</h6>

                                <div>{{ $comic->writers }}</div>

                                <form action="{{ route('comics.destroy', [$comic->id]) }}" method="POST" class="mt-3">

                                    <!-- //codice che per evitare attacchi informatici -->
                                    @csrf

                                    {{-- @method('VIEW') --}}

                                    <button class="bg-danger mb-3 border-0 text-white rounded-2"
                                        type="submit">Details</button>

                                    {{-- @method('EDIT') --}}
                                    <button class="bg-danger mb-3 border-0 text-white rounded-2"
                                        type="submit">Edit</button>

                                    @method('DELETE')
                                    <button class="bg-danger mb-3 border-0 text-white rounded-2"
                                        type="submit">Delete</button>
                                </form>

                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>






    </div>
@endsection
