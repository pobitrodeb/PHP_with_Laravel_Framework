@extends('website.master')

@section('title')

@endsection

@section('body')
    <section class="">
        <div class="">

            <div class="container-fluid py-4 bg-primary">
                <div class="row">
                    <div class="col">
                        <h1 class="text-white text-center">Login And Registration </h1>
                    </div>
                </div>
            </div>

            <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="card card-body border-0">
                        <h2 class="text-center">Login From</h2>
                        <hr>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="login" class="btn btn-primary">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-body border-0">
                        <h2 class="text-center">Registration Form</h2>
                        <hr>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Full Name </label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email Address </label>
                                <div class="col-md-9">
                                    <input type="email" name="regimail" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Password </label>
                                <div class="col-md-9">
                                    <input type="password" name="regipass" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="submit" class="btn btn-success w-100" value="Registration Now">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
