@extends('base', ['pageTitle'=> 'home'])
@section('cssLink')
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
@endsection
@section('baseContent')
    <header>
        <h2 class="text-center fs-3 mt-4">Tous les secteurs porteurs</h2>
        <hr class="m-auto mb-5" style="width: 8%; height: 3px">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <div>
                            <div class="bg-danger m-auto mt-2" style="width: 10%; padding: 50px; border-radius: 22px"></div>
                            <p class="text-center">Agriculture</p>
                        </div>
                        <div>
                            <div class="bg-danger m-auto mt-2" style="width: 10%; padding: 50px; border-radius: 22px"></div>
                            <p class="text-center">Agriculture</p>
                        </div>
                        <div>
                            <div class="bg-danger m-auto mt-2" style="width: 10%; padding: 50px; border-radius: 22px"></div>
                            <p class="text-center">Agriculture</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <div>
                            <div class="bg-danger m-auto mt-2" style="width: 10%; padding: 50px; border-radius: 22px"></div>
                            <p class="text-center">hjshdsjhdj</p>
                        </div>
                        <div>
                            <div class="bg-danger m-auto mt-2" style="width: 10%; padding: 50px; border-radius: 22px"></div>
                            <p class="text-center">kjsdfdjshjdf</p>
                        </div>
                        <div>
                            <div class="bg-danger m-auto mt-2" style="width: 10%; padding: 50px; border-radius: 22px"></div>
                            <p class="text-center">jdsjhsdjhk</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <i class="fas fa-chevron-left carousel-control-prev-icon" style="font-size: 33px; color: black"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <i class="fas fa-chevron-right carousel-control-next-icon" style="font-size: 33px; color: black"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    {{--    <div class="d-flex justify-content-around">--}}
    {{--        <i class="fas fa-chevron-left mt-5" style="font-size: 33px"></i>--}}
    {{--            <div>--}}
    {{--                <div class="bg-danger m-auto mt-2" style="width: 10%; padding: 50px; border-radius: 22px"></div>--}}
    {{--                <p class="text-center">Agriculture</p>--}}
    {{--            </div>--}}
    {{--            <div>--}}
    {{--                <div class="bg-danger m-auto mt-2" style="width: 10%; padding: 50px; border-radius: 22px"></div>--}}
    {{--                <p class="text-center">Agriculture</p>--}}
    {{--            </div>--}}
    {{--            <div>--}}
    {{--                <div class="bg-danger m-auto mt-2" style="width: 10%; padding: 50px; border-radius: 22px"></div>--}}
    {{--                <p class="text-center">Agriculture</p>--}}
    {{--            </div>--}}
    {{--        <i class="fas fa-chevron-right mt-5" style="font-size: 33px"></i>--}}
    {{--    </div>--}}
    </header>

    <section>
        <h2 class="text-center fs-3" style="margin-top: 100px">Projets populaires</h2>
        <hr class="m-auto " style="width: 8%; height: 3px">
    {{--    <div class="m-auto" style="width: %">--}}
        <div class="d-flex mt-5" style="margin-left: 8%">
            <div class="d-flex flex-row">
                <div class="bg-danger mt-2" style="; padding: 150px 100px"></div>
                <div class="d-block ms-3">
                    <h4 class="mb-4">Titre du projet</h4>
                    <p class="w-75">
                        This is a wider card with supporting text
                        below as a natural lead-in to additional content.
                        This content is a little bit longer. This is a wider
                        card with supporting text below as a natural lead-in
                        to additional content. This content is a little bit longer.
                        This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a
                    </p>
                    <a class="btn btn-danger" href="#">Je suis intéressé</a>
                    <div class="d-flex mt-4">
                        <p style="font-size: 15px">1 000 000 000 XAF Déjà investi</p>
                        <i class="far fa-heart ms-5" style="font-size: 20px; color: #CB3B3B"></i>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="bg-danger mt-2" style=" padding: 150px 100px"></div>
                <div class="d-block ms-3">
                    <h4 class="mb-4">Titre du projet</h4>
                    <p class="w-75">
                        This is a wider card with supporting text
                        below as a natural lead-in to additional content.
                        This content is a little bit longer. This is a wider
                        card with supporting text below as a natural lead-in
                        to additional content. This content is a little bit longer.
                        This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a
                    </p>
                    <a class="btn btn-danger" href="#">Je suis intéressé</a>
                    <div class="d-flex mt-4">
                        <p style="font-size: 15px">1 000 000 000 XAF Déjà investi</p>
                        <i class="far fa-heart ms-5" style="font-size: 20px; color: #CB3B3B"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-auto mt-5 mb-5" style="width: 13%">
            <a class="btn border border-danger border-3 rounded-3 bg-white text-center" href="#">Voir tous les projets</a>
        </div>
    {{--    </div>--}}
    </section>

    <section class="mt-5">
        <div class="rectangleContent w-100 d-flex">
            <div class="">
                <img src="{{asset('images/pexels-fauxels-3184338_1@2x.png')}}" alt="jhdjhfjk" style="width: 500px">
            </div>
            <div class="">
                <h3 class="text-center text-white mt-5">Qui sommes nous ?</h3>
                <p class="w-75 text-start text-white m-auto mt-5">
                    This is a wider card with supporting text
                    below as a natural lead-in to additional content.
                    This content is a little bit longer. This is a wider
                    card with supporting text below as a natural lead-in
                    to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural
                    lead-in to additional content. This content is a
                    This is a wider card with supporting text
                    below as a natural lead-in to additional content.
                    This content is a little bit longer. This is a wider
                    card with supporting text below as a natural lead-in
                    to additional content. This content is a little bit longer.
                    This is a wider card with supporting text below as a natural
                    lead-in to additional content. This content is a
                </p>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <h2 class="text-center fs-3" style="margin-top: 100px">Nos Partenaires</h2>
        <hr class="m-auto " style="width: 8%; height: 3px">
        <div class="d-flex mt-5 justify-content-around " style="width: ">
                <img class="partnersImage" src="{{asset('images/partners/n_85990234f6ae202fedf28cf@2x.png')}}">

                <img class="partnersImage" src="{{asset('images/partners/n_280px-Chevrolet-logo@2x.png')}}">


                <img class="partnersImage" src="{{asset('images/partners/visa-5-logo-png-transparent.png')}}">

                <img class="partnersImageBig" src="{{asset('images/partners/images.png')}}">

                <img class="partnersImage" src="{{asset('images/partners/Kia-logo.png')}}">
        </div>

    </section>

    <section>
        <h2 class="text-center fs-3" style="margin-top: 100px">Evènements marquants</h2>
        <hr class="m-auto " style="width: 8%; height: 3px">
        <div class="d-flex mt-5" style=" margin-left: 12%">
            <div class="d-flex flex-row">
                <div class="d-block ms-3">
                    <img class="eventsImages" style="width: 70%" src="{{asset('images/events/shape_eq@2x.png')}}">
                </div>
            </div>
            <div class="d-flex">
                <div class="d-block">
                    <img class="eventsImages" style="width: 70%" src="{{asset('images/events/shape_eq@2x.png')}}">
                </div>
            </div>
        </div>
        <div class="d-flex mt-5" style="margin-left: 12%">
            <div class="d-flex flex-row">
                <div class="d-block ms-3">
                    <img class="eventsImages" style="width: 70%" src="{{asset('images/events/shape_fh.png')}}">
                </div>
            </div>
            <div class="d-flex">
                <div class="d-block ms-3">
                    <img class="eventsImages" style="width: 70%" src="{{asset('images/events/shape_gz.png')}}">
                </div>
            </div>
        </div>
    </section>

{{--    <footer>--}}
{{--        <div class="bg-dark">--}}
{{--            <div class="d-flex w-100 justify-content-start mt-5">--}}
{{--                <div class="ms-5 roundedApiButton">--}}
{{--                    <img src="{{asset('images/icons8-google.svg')}}" style="height: 31px">--}}
{{--                </div>--}}
{{--                <div class="ms-5 roundedApiButton">--}}
{{--                    <img src="{{asset('images/icons8-facebook-f.svg')}}"/>--}}
{{--                </div>--}}
{{--                <div class="ms-5 roundedApiButton">--}}
{{--                    <img src="{{asset('images/icons8-google.svg')}}" style="height: 31px">--}}
{{--                </div>--}}
{{--                <div class="ms-5 roundedApiButton">--}}
{{--                    <img src="{{asset('images/icons8-facebook-f.svg')}}"/>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
@endsection
