@extends('base', ['pageTitle'=> 'Spash Screen'])
    @section('cssLink')
        <link href="{{asset('css/splashScreens.css')}}" rel="stylesheet">
    @endsection
@section('baseContent')
    <section class="allPage position-relative w-100 min-vh-100 d-flex justify-content-between p-5 align-items-center">
@yield('content')

        <div class="navIcons position-absolute bottom-0 start-50 translate-middle d-flex">
            <a href="{{route('firstSplashScreen') }}"><li class="fas fa-long-arrow-alt-left d-inline-block list-unstyled mt-0 mb-0 mx-2" style="font-size: 40px; color: #fff"></li></a>
            <div class="bottomVLine"></div>
             <a href="{{route('secondSplashScreen') }}"><li class="fas fa-long-arrow-alt-right d-inline-block list-unstyled mt-0 mb-0 mx-2" style="font-size: 40px; color: #fff"></li></a>
        </div>
    </section>
@endsection
