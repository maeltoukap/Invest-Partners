@extends('base', ['pageTitle'=> 'Spash Screen'])
    @section('cssLink')
        <link href="{{asset('css/splashScreens.css')}}" rel="stylesheet">
        <link href="{{asset('css/home.css')}}" rel="stylesheet">
    @endsection
@section('baseContent')
    <section class="allPage position-relative w-100 min-vh-100 d-flex justify-content-between p-5 align-items-center">
@yield('content')

        <div class="navIcons position-absolute mx-5 bottom-0 start-50 w-75 translate-middle-x d-flex">
            <a href="{{route('firstSplashScreen') }}"><li class="far fa-long-arrow-alt-left d-inline-block list-unstyled mt-0 mb-0 mx-2" style="font-size: 40px; color: #fff"></li></a>
            <div class="bottomVLine"></div>
{{--            <i class="far fa-long-arrow-alt-right"></i>--}}
             <a href="{{route('secondSplashScreen') }}"><li class="far fa-long-arrow-alt-right d-inline-block list-unstyled mt-0 mb-0 mx-2" style="font-size: 40px; color: #fff"></li></a>
        </div>
    </section>

    <section>
        <h2 class="text-center fs-3 mt-4">Nos services</h2>
        <hr class="m-auto mb-5" style="width: 5%; height: 3px">
        <div class="w-50 m-auto">
            <p class="text-center">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam et justo duo dolores et ea rebum. Stet clita kasd
                gubergren, no sea takimata sanctus est Lorem
            </p>
        </div>
        <div>
            <div class="d-flex justify-content-around mt-5 ms-5 mb-5">
                {{--            <div class="border border-dark rounded-circle" style="width: 5px; height: 5px; padding: 37px"></div>--}}
                <div class="d-flex">
                    <div class="bg-danger rounded-circle border-dark border border-3 mt-3 me-2" style="width: 5px; height: 5px; padding: 35px"></div>
                    <div class="d-block">
                        <p class="text-danger fw-bold fs-5">Conseil en investissement</p>
                        <p class="mx-4 w-100">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy
                        </p>
                    </div>
                </div>
                {{--            <div class="border border-dark rounded-circle" style="width: 5px; height: 5px; padding: 37px"></div>--}}
                <div class="d-flex">
                    <div class="bg-danger rounded-circle border-dark border border-3 mt-3 me-2" style="width: 5px; height: 5px; padding: 35px"></div>
                    <div class="d-block">
                        <p class="text-danger fw-bold fs-5">Conseil en investissement</p>
                        <p class="mx-4 w-100">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy
                        </p>
                    </div>
                </div>
                {{--            <div class="border border-dark rounded-circle" style="width: 5px; height: 5px; padding: 37px"></div>--}}
                <div class="d-flex">
                    <div class="bg-danger rounded-circle border-dark border border-3 mt-3 me-2" style="width: 5px; height: 5px; padding: 35px"></div>
                    <div class="d-block">
                        <p class="text-danger fw-bold fs-5">Conseil en investissement</p>
                        <p class="mx-4 w-100">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-around mt-5 ms-5 mb-5">
                {{--            <div class="border border-dark rounded-circle" style="width: 5px; height: 5px; padding: 37px"></div>--}}
                <div class="d-flex">
                    <div class="bg-danger rounded-circle border-dark border border-3 mt-3 me-2" style="width: 5px; height: 5px; padding: 35px"></div>
                    <div class="d-block">
                        <p class="text-danger fw-bold fs-5">Conseil en investissement</p>
                        <p class="mx-4 w-100">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy
                        </p>
                    </div>
                </div>
                {{--            <div class="border border-dark rounded-circle" style="width: 5px; height: 5px; padding: 37px"></div>--}}
                <div class="d-flex">
                    <div class="bg-danger rounded-circle border-dark border border-3 mt-3 me-2" style="width: 5px; height: 5px; padding: 35px"></div>
                    <div class="d-block">
                        <p class="text-danger fw-bold fs-5">Conseil en investissement</p>
                        <p class="mx-4 w-100">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy
                        </p>
                    </div>
                </div>
                {{--            <div class="border border-dark rounded-circle" style="width: 5px; height: 5px; padding: 37px"></div>--}}
                <div class="d-flex">
                    <div class="bg-danger rounded-circle border-dark border border-3 mt-3 me-2" style="width: 5px; height: 5px; padding: 35px"></div>
                    <div class="d-block">
                        <p class="text-danger fw-bold fs-5">Conseil en investissement</p>
                        <p class="mx-4 w-100">
                            Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </section>



    <section class="mt-5">
        <div class="rectangleContent w-100 d-flex">
            <div class="">
                <img src="{{asset('images/pexels-fauxels-3184338_1@2x.png')}}" alt="jhdjhfjk" style="width: 500px">
            </div>
            <div class="">
                <div class="w-50 m-auto">
                    <h3 class="text-center text-white mt-5">Votre meilleur partenaire d'affaire</h3>
                </div>
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
            <div class="parallelogram"></div>
        </div>
    </section>

    <section>
        <h2 class="text-center fs-3" style="margin-top: 100px">Nos experts</h2>
        <hr class="m-auto " style="width: 8%; height: 3px">
        <div class="d-flex mt-5">
            <div class="">
                <div class="w-75 m-auto">
                    <i class="fas fa-plus-circle fs-3 text-danger iconPlus"></i>
                    <img class="img-fluid" src="{{asset('images/experts/pexels-dellon-thomas-2216607.png')}}">
                </div>
                <div class="w-75 m-auto">
                    <p class="text-danger fs-3 text-start">Nom prenom</p>
                    <p class="text-start" style="font-size: 13.5px">Lorem ipsum dolor sit amet, consetetur</p>
                    <hr class="text-danger" style="height: 3px">
                </div>
            </div>
            <div class="">
                <div class="w-75 m-auto">
                    <a href="#" class="fas fa-plus-circle fs-3 text-danger iconPlus"></a>
                    <img class="img-fluid" src="{{asset('images/experts/pexels-dellon-thomas-2474307.png')}}">
                </div>
                <div class="w-75 m-auto">
                    <p class="text-danger fs-3 text-start">Nom prenom</p>
                    <p class="text-start" style="font-size: 13.5px">Lorem ipsum dolor sit amet, consetetur</p>
                    <hr class="text-danger" style="height: 3px">
                </div>
            </div>
            <div class="">
                <div class="w-75 m-auto">
                    <a href="#" class="fas fa-plus-circle fs-3 text-danger iconPlus"></a>
                    <img class="img-fluid" src="{{asset('images/experts/pexels-emmy-e-2381069.png')}}">
                </div>
                <div class="w-75 m-auto">
                    <p class="text-danger fs-3 text-start">Nom prenom</p>
                    <p class="text-start" style="font-size: 13.5px">Lorem ipsum dolor sit amet, consetetur</p>
                    <hr class="text-danger" style="height: 3px">
                </div>
            </div>
            <div class="">
                <div class="w-75 m-auto">
                    <a href="#" class="fas fa-plus-circle fs-3 text-danger iconPlus"></a>
                    <img class="img-fluid" src="{{asset('images/experts/pexels-sandy-torchon-3973552.png')}}">
                </div>
                <div class="w-75 m-auto">
                    <p class="text-danger fs-3 text-start">Nom prenom</p>
                    <p class="text-start" style="font-size: 13.5px">Lorem ipsum dolor sit amet, consetetur</p>
                    <hr class="text-danger" style="height: 3px">
                </div>
            </div>
        </div>
    </section>


    <section class="mt-5">
        <h2 class="text-center fs-3" style="margin-top: 100px">Nos Partenaires</h2>
        <hr class="m-auto " style="width: 8%; height: 3px">
        <div class="m-auto mt-5" style="width: 35%">
            <p class="text-center">
                Lorem ipsum dolor sit amet, consetetur sadipscing
                elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et dolore magna
            </p>
        </div>
        <div class="d-flex mt-5 justify-content-around " style="width: ">
            <img class="partnersImage img-fluid" src="{{asset('images/partners/n_85990234f6ae202fedf28cf@2x.png')}}">

            <img class="partnersImage img-fluid" src="{{asset('images/partners/n_280px-Chevrolet-logo@2x.png')}}">


            <img class="partnersImage img-fluid" src="{{asset('images/partners/visa-5-logo-png-transparent.png')}}">

            <img class="partnersImageBig img-fluid" src="{{asset('images/partners/images.png')}}">

            <img class="partnersImage img-fluid" src="{{asset('images/partners/Kia-logo.png')}}">
        </div>

    </section>

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
{{--        <div class="m-auto mt-5 mb-5" style="width: 13%">--}}
{{--            <a class="btn border border-danger border-3 rounded-3 bg-white text-center" href="#">Voir tous les projets</a>--}}
{{--        </div>--}}
        {{--    </div>--}}
    </section>

    <section>
        <div class="mt-5">
            <img class="img-fluid" src="{{asset('images/businessman-1031755_1920.png')}}">
            <div class="d-flex justify-content-around statImg">
                <p class="w-25 text-white text-start" style="font-size: 60px">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                </p>
                <img class="img-fluid" src="{{asset('images/pie-chart-154411_960_720.png')}}">
            </div>
        </div>

    </section>
    <section>
        <h2 class="text-center fs-3" style="margin-top: 100px">Evènements marquants</h2>
        <hr class="m-auto " style="width: 8%; height: 3px">
        <div class="d-flex mt-5 justify-content-around" style=" margin-left: 12%">
            <div class="d-flex flex-row">
                <div class="contain d-block w-75 ms-3">
                    <div class="overlay">
                        <p class="overlayTitle fw-bold align-text-top">Titre de l'evenement</p>
                        <p class="overlayText">
                            Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua.
                            At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd
                            gubergren, no
                        </p>
                        <i class="overlayTextBottom text-danger far fa-calendar-alt"><span class="text-white"> 25 - 9 - 21 | 12H00</span></i>
                        <div class="d-flex">
                            <a href="#" class="overlayTextBtn btn bg-none border border-2 border-danger py-1">Participer</a>
                            <a href="#" class="overlayTextBtnFlex text-white fs-6">En savoir plus...</a>
                        </div>
                    </div>
                    <img class="eventsImages w-100" style="" src="{{asset('images/events/shape_eq@2x.png')}}">
                </div>
            </div>
            <div class="d-flex">
                <div class="contain d-block w-75 ms-3">
                    <div class="overlay">
                        <p class="overlayTitle fw-bold align-text-top">Titre de l'evenement</p>
                        <p class="overlayText">
                            Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua.
                            At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd
                            gubergren, no
                        </p>
                        <i class="overlayTextBottom text-danger far fa-calendar-alt"><span class="text-white"> 25 - 9 - 21 | 12H00</span></i>
                        <div class="d-flex">
                            <a href="#" class="overlayTextBtn btn bg-none border border-2 border-danger py-1">Participer</a>
                            <a href="#" class="overlayTextBtnFlex text-white fs-6">En savoir plus...</a>
                        </div>
                    </div>
                    <img class="eventsImages w-100" style="" src="{{asset('images/events/shape_eq@2x.png')}}">
                </div>
            </div>
        </div>
        <div class="d-flex mt-5 justify-content-around" style="margin-left: 12%">
            <div class="d-flex flex-row">
                <div class="contain d-block w-75 ms-3">
                    <div class="overlay">
                        <p class="overlayTitle fw-bold align-text-top">Titre de l'evenement</p>
                        <p class="overlayText">
                            Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua.
                            At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd
                            gubergren, no
                        </p>
                        <i class="overlayTextBottom text-danger far fa-calendar-alt"><span class="text-white"> 25 - 9 - 21 | 12H00</span></i>
                        <div class="d-flex">
                            <a href="#" class="overlayTextBtn btn bg-none border border-2 border-danger py-1">Participer</a>
                            <a href="#" class="overlayTextBtnFlex text-white fs-6">En savoir plus...</a>
                        </div>
                    </div>
                    <img class="eventsImages  w-100" style="" src="{{asset('images/events/shape_fh.png')}}">
                </div>
            </div>
            <div class="d-flex">
                <div class="contain d-block w-75 ms-3">
                    <div class="overlay">
                        <p class="overlayTitle fw-bold align-text-top">Titre de l'evenement</p>
                        <p class="overlayText">
                            Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua.
                            At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd
                            gubergren, no
                        </p>
                        <i class="overlayTextBottom text-danger far fa-calendar-alt"><span class="text-white"> 25 - 9 - 21 | 12H00</span></i>
                        <div class="d-flex">
                            <a href="#" class="overlayTextBtn btn bg-none border border-2 border-danger py-1">Participer</a>
                            <a href="#" class="overlayTextBtnFlex text-white fs-6">En savoir plus...</a>
                        </div>
                    </div>
                    <img class="eventsImages w-100" style="" src="{{asset('images/events/shape_gz.png')}}">
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark" style="margin-top: 15%">
        <div class="d-flex w-50 justify-content-center mt-5" style="transform: translateY(60%)">

            <div class="footerIconContain bg-white m-auto mt-5" style="width: 7%; padding: 10px; border-radius: 10px">
                <i style="margin-left: 7%;" class="footerIcon fab fa-facebook-f fs-3"></i>
            </div>
            <div class="footerIconContain bg-white m-auto mt-5" style="width: 7%; padding: 10px; border-radius: 10px">
                <i class="footerIcon fab fa-linkedin-in fs-3"></i>
            </div>
            <div class="footerIconContain bg-white m-auto mt-5" style="width: 7%; padding: 10px; border-radius: 10px">
                <i class="footerIcon fab fa-twitter fs-3"></i>
            </div>
            <div class="footerIconContain bg-white m-auto mt-5" style="width: 7%; padding: 10px; border-radius: 10px">
                <i style="margin-left: 7%;" class="footerIcon fab fa-instagram fs-3"></i>
            </div>
        </div>

        <div class="d-block me-5" style="width: 25%; position: relative; float: right">
            <p class="text-white fs-5 fw-bold">Restez à l'écoute de notre actualité</p>
            <div class="d-flex">
                <form id="my-form" class="m-auto">
                    <input placeholder="Votre adresse email" type="text" />
                    <button type="submit" class="bg-danger">OK</button>
                </form>
            </div>
        </div>
        <div class="d-flex ms-3 me-3" style="margin-top: 10%">
            <div class="d-block" style="width: 25%">
                <p class="text-white fs-4 fw-bold">Qui somme nous ?</p>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(15.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Invest and Partners</p>
                </div>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(18.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Chiffres clés</p>
                </div>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(18.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Management</p>
                </div>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(18.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Commité d'investissement</p>
                </div>
            </div>
            <div class="d-block" style="width: 25%">
                <p class="text-white fs-4 fw-bold">Nos Projets</p>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(15.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Agro-Industrie</p>
                </div>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(18.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Lorem ipsum dolor sit.</p>
                </div>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(18.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Lorem ipsum</p>
                </div>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(18.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Lorem ipsum</p>
                </div>
            </div>
            <div class="d-block" style="width: 25%">
                <p class="text-white fs-4 fw-bold">Comment lancer son projet</p>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(15.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Comment ça marche</p>
                </div>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(18.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Lorem ipsum dolor sit.</p>
                </div>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(18.805 0) rotate(41)">
                            <g id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Lorem ipsum</p>
                </div>
                <div class="d-flex footerLink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.439" height="40.439" viewBox="0 0 40.439 40.439">
                        <g id="send" transform="translate(18.805 0) rotate(41)">
                            <g class="svgIcon" id="Group_34" data-name="Group 34" transform="translate(0 0)">
                                <path id="Path_603" data-name="Path 603" d="M28.418.246A.84.84,0,0,0,27.513.06L.528,10.854a.84.84,0,0,0-.055,1.535L11.114,17.55l5.161,10.641a.84.84,0,0,0,.755.473h.03a.84.84,0,0,0,.75-.527L28.6,1.152A.84.84,0,0,0,28.418.246ZM2.916,11.707,24.338,3.139,11.572,15.905Zm14.04,14.04-4.2-8.655L25.525,4.327Z" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p class="mt-1 fs-5 ms-2">Lorem ipsum</p>
                </div>
            </div>
            <div class="d-block" style="width: 25%">
                <p class="text-white fs-4 fw-bold">I&P</p>
                <div class="d-flex">
                    <p class="text-white mt-1 fs-5 ms-2" style="width: 100%">
                        Le meilleur partenaire
                        pour la mise sur pied
                        et le développement de
                        votre projet
                    </p>
                </div>
                <p class="text-white fs-4 fw-bold">Contact</p>
                <div class="d-flex">
                    <svg class="mt-3 me-2" xmlns="http://www.w3.org/2000/svg" width="32.231" height="37.229" viewBox="0 0 37.231 37.229">
                        <g id="_003---Call" data-name="003---Call" transform="translate(0)">
                            <path id="Shape" d="M16.415,21.834A15.025,15.025,0,0,1,11.878,13.3a1.276,1.276,0,0,1,.367-1.068L15.12,9.361A1.284,1.284,0,0,0,15.3,7.773L10.723.663A1.284,1.284,0,0,0,9.059.2L1.709,3.657A1.277,1.277,0,0,0,1,4.932c.385,3.659,1.98,12.653,10.819,21.492S29.654,36.858,33.314,37.243a1.277,1.277,0,0,0,1.275-.706l3.462-7.35a1.284,1.284,0,0,0-.465-1.661l-7.109-4.577a1.284,1.284,0,0,0-1.589.18L26.013,26a1.276,1.276,0,0,1-1.068.367,15.025,15.025,0,0,1-8.531-4.537Z" transform="translate(-0.997 -0.021)" fill="#fff"/>
                            <path id="Shape-2" data-name="Shape" d="M40.2,23.479A1.284,1.284,0,0,1,38.912,22.2a9.639,9.639,0,0,0-9.628-9.628,1.284,1.284,0,1,1,0-2.568,12.209,12.209,0,0,1,12.2,12.2A1.284,1.284,0,0,1,40.2,23.479Z" transform="translate(-10.667 -3.581)" fill="#fff"/>
                            <path id="Shape-3" data-name="Shape" d="M46.614,19.9a1.284,1.284,0,0,1-1.284-1.284A16.065,16.065,0,0,0,29.284,2.568a1.284,1.284,0,1,1,0-2.568A18.635,18.635,0,0,1,47.9,18.614,1.284,1.284,0,0,1,46.614,19.9Z" transform="translate(-10.667)" fill="#fff"/>
                        </g>
                    </svg>
                    <div class="text-white fs-5">
                        <p>(+237) 698-55-62-14</p>
                        <p style="margin-top: -7%">(+237) 655-85-07-14</p>
                    </div>
                </div>
                <div class="d-flex">
                    <i class="fas fa-envelope text-white fs-3 me-2"></i>
                    <div class="text-white fs-5">
                        <a href="#" class="text-white">info@invest--partners.com</a>
                    </div>
                </div>
                <div class="d-flex">
                    <svg class="me-2" id="Mailbox" xmlns="http://www.w3.org/2000/svg" width="31.943" height="31.943" viewBox="0 0 31.943 31.943">
                        <path id="Path_606" data-name="Path 606" d="M12.63,25.883a1.711,1.711,0,0,1-2.282,0l-.6-.538L5.5,29.141H17.479l-4.248-3.8Z" transform="translate(-4.644 -13.17)" fill="#fff"/>
                        <path id="Path_607" data-name="Path 607" d="M24.8,17.342l-4.247,3.8s3.185,4.744,4.247,3.794S24.8,17.342,24.8,17.342Z" transform="translate(-11.112 -9.732)" fill="#fff"/>
                        <path id="Path_608" data-name="Path 608" d="M10.595,34,9.3,36.6a.57.57,0,0,0,.51.825H20.946a.57.57,0,0,0,.51-.315L23.009,34Z" transform="translate(-6.25 -16.888)" fill="#fff"/>
                        <path id="Path_609" data-name="Path 609" d="M24.571,20V10.3a6.274,6.274,0,0,0-12.52-.57h9.668a.57.57,0,0,1,.57.57V20Z" transform="translate(-7.459 -4.024)" fill="#fff"/>
                        <path id="Path_610" data-name="Path 610" d="M11.109,21.02a.57.57,0,0,0,.761,0L17.479,16H5.5Z" transform="translate(-4.644 -9.155)" fill="#fff"/>
                        <path id="Path_611" data-name="Path 611" d="M4,24.936l4.247-3.794L4,17.342Z" transform="translate(-4 -9.732)" fill="#fff"/>
                        <path id="Path_612" data-name="Path 612" d="M47.08,10.274A6.282,6.282,0,0,0,40.805,4H29.924a7.367,7.367,0,0,1,3.466,6.274v9.7H47.08Z" transform="translate(-15.137 -4)" fill="#fff"/>
                        <path id="Path_613" data-name="Path 613" d="M37.563,34h-3.07L33,36.987V48.831h4.563Z" transform="translate(-16.458 -16.888)" fill="#fff"/>
                    </svg>

                    <div class="text-white fs-5">
                        <p class="">BP: 07756 Douala, Cameroun</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <p class="text-white text-center fs-5">&copy; By House Innovation SARL</p>
        </div>
    </footer>
@endsection
