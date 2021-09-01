@extends('welcome')

@section('content')
        <div class="circle"></div>
        {{-- <img class="circleSpan" src="{{asset('images/pexels-pixabay-534220@2x.png')}}"> --}}

        <header class="position-absolute top-0 start-0 w-100 align-items-center d-inline-flex">
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
                @if(session()->has('LoggedUser'))
{{--                    <div class="vLine"></div>--}}
                    <div class="signInBtn">
                        <li class="nav-item dropdown list-unstyled">
                            <a class="dropdown-toggle d-inline-block fs-5 text-decoration-none ms-3 text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user list-unstyled"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Parametres</a></li>
                                <li><a href="{{route('auth.logout')}}" class="dropdown-item">Deconnexion</a></li>
                            </ul>
                        </li>
{{--                        <a href="{{route('auth.logout')}}" class="text-white">Logout</a>--}}
                    </div>
                @else
                    <div class="launchBtn">
                        <a href="{{route('login')}}" class="text-white">Je suis porteur de projet</a>
                    </div>
                    <div class="vLine"></div>
                    <div class="signInBtn">
                        <a href="{{route('login')}}" class="text-white">Connexion</a>
                    </div>
                @endif
            </div>
        </header>
        <div class="pageContent position-relative w-100 d-flex justify-content-between align-items-center">
            <div class="textBox">
                <h2 class="mt-2 mb-3">
                    Title of project or caterory
                    presentation 2
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa.
                    Cum sociis natoque penatibus et magnis dis.
                </p>
                <a href="#" class="d-inline-block">Voir les projets</a>
            </div>
        </div>
    @endsection
