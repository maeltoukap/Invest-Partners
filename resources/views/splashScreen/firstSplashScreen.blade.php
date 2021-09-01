@extends('welcome')
@section('content')
    <div class="circle"></div>
    {{-- <img class="circleSpan" src="{{asset('images/pexels-pixabay-534220@2x.png')}}"> --}}

    <header class="position-absolute top-0 start-0 w-100 align-items-center d-inline-flex">
{{--        <svg xmlns="http://www.w3.org/2000/svg" width="1066" height="1102" viewBox="0 0 1066 1102">--}}
{{--            <g id="Rectangle_169" data-name="Rectangle 169" fill="#fff" stroke="#707070" stroke-width="1">--}}
{{--                <path d="M105,0h961a0,0,0,0,1,0,0V1102a0,0,0,0,1,0,0H105A105,105,0,0,1,0,997V105A105,105,0,0,1,105,0Z" stroke="none"/>--}}
{{--                <path d="M105,.5h960a.5.5,0,0,1,.5.5V1101a.5.5,0,0,1-.5.5H105A104.5,104.5,0,0,1,.5,997V105A104.5,104.5,0,0,1,105,.5Z" fill="none"/>--}}
{{--            </g>--}}
{{--        </svg>--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" width="1211" height="1080" viewBox="0 0 1211 1080">--}}
{{--            <g id="Rectangle_171" data-name="Rectangle 171" fill="#a53f3f" stroke="#707070" stroke-width="1" opacity="0.4">--}}
{{--                <rect width="1211" height="1080" stroke="none"/>--}}
{{--                <rect x="0.5" y="0.5" width="1210" height="1079" fill="none"/>--}}
{{--            </g>--}}
{{--        </svg>--}}

        {{--            <a href="#"><img src="#" alt="Web app logo" class="logo"></a>--}}
        <a href="#"><p class="logo fs-2"><img style="height: 50px" class="img-fluid" src="{{asset('images/logo/rs600Artboard_1@2x.png')}}" alt="Web app logo"></p></a>
        <ul class="navigation position-relative d-flex text-start list-unstyled">
            <nav class="navbar navbar-expand-lg navbar-dark bg-none">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <div id="marker"></div>
                            <li><a href="#" class="firstLink d-inline-block fs-5 text-decoration-none">Projet</a></li>
                            <li><a href="#" class="d-inline-block fs-5 text-decoration-none ms-4 text-white">Evenement</a></li>
                            <li><a href="#" class="d-inline-block fs-5 text-decoration-none ms-4 text-white">Contactez-nous</a></li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle d-inline-block fs-5 text-decoration-none ms-3 text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Eng
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Fr</a></li>
                                    <li><a class="dropdown-item" href="#">Esp</a></li>
                                    <li><a class="dropdown-item" href="#">Dtch</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </ul>
        <div class="linkBox d-inline-flex fs-6 fw-normal">
            <div class="launchBtn">
                <a href="{{route('login')}}" class="text-white">Lancer mon projet</a>
            </div>
            <div class="vLine"></div>
            <div class="signInBtn">
                <a href="{{route('login')}}" class="text-white">Connexion</a>
            </div>

        </div>
    </header>
    <div class="pageContent position-relative w-100 d-flex justify-content-between align-items-center">
        <div class="textBox">
            <h2 class="mt-2 mb-3">
                Title of project or caterory
                presentation
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa.
                Cum sociis natoque penatibus et magnis dis.
            </p>
            <a href="#" class="d-inline-block">Voir les projets</a>

            <a href="#" class="d-inline-block mx-4 bg-dark">Parler à un conseillé</a>
        </div>
    </div>
@endsection
