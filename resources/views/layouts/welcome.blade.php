<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

  {{--   <header>
        <div class="container_header">
            <div class="row d-flex justify-content-center align-content-center">
                <div class="col-3">

                    <!-- Logo immagine -->
                    <img class="logo" src="https://picsum.photos/200/300" alt="logo DC Univers">

                </div>

                <div class="col-9 d-flex justify-content-center align-content-center">

                    <!-- Navbar header loop per 10 -->
                    <nav class="navbar navbar-expand-sm d-flex justify-between">
                        <div class="container_a pad_x">

                            <a class="active navbar-brand text-red text-uppercase" href="#">characters</a>
                            <a class="active navbar-brand text-red text-uppercase" href="#">comics</a>
                            <a class="active navbar-brand text-red text-uppercase" href="#">movies</a>
                            <a class="active navbar-brand text-red text-uppercase" href="#">tv</a>
                            <a class="active navbar-brand text-red text-uppercase" href="#">games</a>
                            <a class="active navbar-brand text-red text-uppercase" href="#">collectibles</a>
                            <a class="active navbar-brand text-red text-uppercase" href="#">videos</a>
                            <a class="active navbar-brand text-red text-uppercase" href="#">fans</a>
                            <a class="active navbar-brand text-red text-uppercase" href="#">news</a>
                            <a class="active navbar-brand text-red text-uppercase" href="#">shop</a>

                        </div>
                    </nav>

                    {{-- <nav class="navbar navbar-expand-sm d-flex justify-between">
                        <div class="container_a pad_x">

                            @foreach ($menuHeader as $menu)
                                <a class="active navbar-brand text-red text-uppercase" href="#"><?= $menu->link ?></a>
                            @endforeach

                        </div>
                    </nav> --}}

             {{--    </div>
            </div>

        </div> 

    </header>--}}

    <main>
        
        @yield('main_content')

      {{--   <section id="content">

            <div class="col-2">

                <div class="card">
                    <img class="img_book" src="https://picsum.photos/200/300" alt="title">

                    <h6>title fumetto</h6>
                </div>

            </div>

        </section>

        <section id="jumbotron">



        </section>

        <section id="books">

            <div class="container_main">

                <!-- Content goes here -->
                <div class="container_content">

                    <div class="row">

                        <div class="col-2">

                            <div class="card">
                                <img class="img_book" src="https://picsum.photos/200/300" alt="title">

                                <h6>title</h6>
                            </div>

                        </div>


                    </div>

                </div>

                <div class="container_foot">

                    <div class="row jst_btwn">

                        <!-- Button load more -->
                        <div class="col none_bg_img jst_ctr">

                            <div class="sing_up">

                                <button class="color" type="button"><b>LOAD MORE</b></button>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </section> --}}

    </main>

{{--     <footer>

        <div class="container container_img">

            <div class="row">
                <div v-for="(menu, i) in brands.navMenu" class="col-2">

                    <ul class="list_unstyle">

                        <li class="title">menu title</li>
                        <li class="gray"><a class="" href="#"></a>
                           name</li>

                    </ul>

                </div>

            </div>


            <div class="img_dc_logo"></div>


        </div>
        <!-- Sing up & Follow us -->
        <div class="container_foot">

            <div class="row jst_btwn">

                <!-- Button sing up -->
                <div class="col-6 none_bg_img jst_ctr">

                    <div class="sing_up">

                        <button class="color" type="button">SING-UP NOW!</button>

                    </div>

                </div>

                <!-- Follow us and icon brands -->
                <div class="col-6 none_bg_img jst_ctr">

                    <div class="features jst_ctr">

                        <a href="#"><b>FOLLOW US</b></a>

                        <div class="logo">

                            <img src="" alt="pic.name">

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </footer> --}}





</body>

</html>
