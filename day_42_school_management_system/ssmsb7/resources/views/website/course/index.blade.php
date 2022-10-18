@extends('website.master')

@section('title')

@endsection

@section('body')
    <section class="populer-section" >
        <div class="">
            <div class="container-fluid py-4 bg-primary">
                <div class="row">
                    <div class="col">
                        <h1 class="text-white text-center">Our All Course </h1>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row mt-3">

                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{asset('/website/img/instructory_2.jpg')}}" alt="">
                            <div class="card-body">
                                <h3>Resoponsive Web Desing </h3>
                                <h4>Selim Rana </h4>
                                <h4>TK. 1800</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{asset('/website/img/instructory_1.jpg')}}" alt="">
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
@endsection
