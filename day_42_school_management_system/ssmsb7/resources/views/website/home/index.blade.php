@extends('website.master')

@section('title')
   | NanoTech
@endsection
@section('body')
    <section class="py-5">

        <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="slider">

            <ol class="carousel-indicators">
                <li data-bs-target="#slider" data-bs-slider-to="0" class="active" ></li>
                <li data-bs-target="#slider" data-bs-slider-to="1" class=""> </li>
                <li data-bs-target="#slider" data-bs-slider-to="2" class=""> </li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/website/img/slider-1.jpg')}}" alt="" class="w-100" style="height: 550px">
                    <div class="carousel-caption">
                        <h3>PHP with Laravel FramWork</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing eimus earum eos eveniet ex
                            ipsa mollitia neque nihil nulla Harum!
                        </p>
                        <a href="" class="btn btn-outline-success px-5"> Read More </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('/website/img/slider-2.jpg')}}" alt="" class="w-100" style="height: 550px">
                    <div class="carousel-caption">
                        <h3>MERN Stack Web Development </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing eimus earum eos eveniet ex
                            ipsa mollitia neque nihil nulla Harum!
                        </p>
                        <a href="" class="btn btn-outline-success px-5"> Read More </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('/website/img/slider-3.jpg')}}" alt="" class="w-100" style="height: 550px">
                    <div class="carousel-caption">
                        <h3>Mobile Application Development </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing eimus earum eos eveniet ex
                            ipsa mollitia neque nihil nulla Harum!
                        </p>
                        <a href="" class="btn btn-outline-success px-5"> Read More </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

{{--    ########### POPULER SEction --}}
    <section class="populer-section" >
        <div class="">
            <div class="container-fluid py-4 bg-primary">
                <div class="row">
                    <div class="col">
                        <h1 class="text-white text-center">Our Populer Course</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row mt-3">

                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{asset('/website/img/course_1.jpg')}}" alt="">
                            <div class="card-body">
                                <h3>Resoponsive Web Desing </h3>
                                <h4>Selim Rana </h4>
                                <h4>TK. 1800</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{asset('/website/img/course_2.jpg')}}" alt="">
                           <div class="card-body">
                               <h3>Resoponsive Web Desing </h3>
                               <h4>Selim Rana </h4>
                               <h4>TK. 1800</h4>
                           </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{asset('/website/img/course_3.jpg')}}" alt="">
                            <div class="card-body">
                                <h3>Resoponsive Web Desing </h3>
                                <h4>Selim Rana </h4>
                                <h4>TK. 1800</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    Recent Courese--}}

    <section class="py-5">
        <div class="">
            <div class="container-fluid py-4 bg-primary">
                <div class="row">
                    <div class="col">
                        <h1 class="text-white text-center">Contact With Us </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3">

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/website/img/recent_1.jpg')}}" alt="" class="w-100">
                        <div class="card-body">
                            <h3>Socail Media Design  </h3>
                            <h4>Selim Rana </h4>
                            <h4>TK. 1800</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/website/img/recent_2.jpg')}}" alt="" class="w-100">
                        <div class="card-body">
                            <h3>Email Signature </h3>
                            <h4>Selim Rana </h4>
                            <h4>TK. 1800</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/website/img/recent_3.jpg')}}" alt="" class="w-100">
                        <div class="card-body">
                            <h3>Socail Media Marketing</h3>
                            <h4>Selim Rana </h4>
                            <h4>TK. 1800</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @endsection
