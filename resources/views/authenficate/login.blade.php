@extends('base', ['pageTitle'=> 'Spash Screen'])
@section('cssLink')
    <link href="{{asset('css/authenficate.css')}}" rel="stylesheet">
@endsection
@section('baseContent')
    <section class="d-flex justify-content-around">
        <div class="allPage roundedBox position-relative w-50 min-vh-100 d-flex p-5 align-items-center" style="background-image: url('{{asset('images/pexels-cytonn-photography-9553@2x.png')}}'); background-size: cover;">
            <div class="pageContent position-relative w-100 d-flex justify-content-between align-items-center">
                <div class="textBox text-center fs-5 w-75">
                    <h2 class="mt-2 mb-3 fw-bold">
                        Invest and Partners
                    </h2>
                    <p class="text-start m-5" style="width: 95%">
                        Lorem ipsum dolor sit amet, consetetur sadipscing
                        elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore magna.
                    </p>
                </div>
            </div>
        </div>
        <div class="position-relative d-flex p-5 align-items-center ms-5  w-50" style="margin-top: -20px">


            {{-- min-vh-100 --}}
            <div class="d-block">
                <p class="fs-3 fw-bold text-sm-center">Bienvenue chez Invest and Partners</p>
                <div class="d-flex justify-content-center">
                    <div class="d-block mt-3" style="width: 90%">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login" aria-selected="true">S'inscrire</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-signIn-tab" data-bs-toggle="pill" data-bs-target="#pills-signIn" type="button" role="tab" aria-controls="pills-signIn" aria-selected="false">Se connecter</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-home-tab">
                                <form class="">
                                    <div class="left-inner-addon d-block mb-4">
                                        <i class="far fa-user fs-4"></i>
                                        <input class=" w-100 border-end-0 border-start-0 border-top-0 border-dark" type="text" placeholder="Votre nom">
                                    </div>
                                    <div class="left-inner-addon d-block mb-4">
                                        <i class="far fa-envelope fs-4"></i>
                                        <input class=" w-100 border-end-0 border-start-0 border-top-0 border-dark" type="text" placeholder="Votre boite mail">
                                    </div>
                                    <div class="left-inner-addon d-block mb-4">
                                        <i class="far fa-lock-alt fs-4"></i>
                                        <input class=" w-100 border-end-0 border-start-0 border-top-0 border-dark" type="text" placeholder="Mot de passe">
                                    </div>
                                    <div class="left-inner-addon d-block mb-4">
                                        <i class="far fa-handshake fs-4"></i>
                                        <select class=" w-100 border-end-0 border-start-0 border-top-0 border-dark border-2">
                                            <option>Je suis</option>
                                            <option>Mr</option>
                                            <option>Mme</option>
                                            <option>Mlle</option>
                                        </select>
                                    </div>
                                    <dib class="d-flex justify-content-between mb-4">
                                        <label for="">
                                            <input type="checkbox">
                                            Garder ma session ouverte
                                        </label>
                                        <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
                                    </dib>
                                    <input type="button" value="Envoyer" class="btn" style="width: 100%; background-color: #CB3B3B; color: #fff">
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-signIn" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <form class="">
                                    <div class="left-inner-addon d-block mb-4">
                                        <i class="far fa-envelope fs-4"></i>
                                        <input class="form-control w-100 border-end-0 border-start-0 border-top-0 border-dark" type="text" placeholder="Votre boite mail">
                                    </div>
                                    <div class="left-inner-addon d-block mb-4">
                                        <i class="far fa-lock-alt fs-4"></i>
                                        <input class="form-control w-100 border-end-0 border-start-0 border-top-0 border-dark" type="text" placeholder="Mot de passe">
                                    </div>
                                    <dib class="d-flex justify-content-between mb-4">
                                        <label for="">
                                            <input type="checkbox">
                                            Garder ma session ouverte
                                        </label>
                                        <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
                                    </dib>
                                    <input type="button" value="Connection" class="btn" style="width: 100%; background-color: #CB3B3B; color: #fff">
                                </form>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-4">

                            <hr class="" style="width: 40%">
                            Ou
                            <hr class="" style="width: 40%">
                        </div>
                        <p class="text-center">Connectez vous via vos réseau sociaux</p>
                        <div class="d-flex w-100 justify-content-center mt-4">

{{--                            <div class="circle-img1 circle"><span></span></div>--}}
                            <div class="roundedApiButton">
{{--                                <img src="https://img.icons8.com/fluency/30/000000/google-logo.png"/>--}}
                                <img src="{{asset('images/icons8-google.svg')}}" style="height: 31px">
                            </div>
{{--                            <div class="roundedApiButton"></div>--}}
                            <div class="ms-5 roundedApiButton">
                                <img src="{{asset('images/icons8-facebook-f.svg')}}"/>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>


{{--    <aside class="allPage position-relative float-end w-100 min-vh-100 d-flex justify-content-between p-5 align-items-center">--}}

{{--    </aside>--}}
@endsection
