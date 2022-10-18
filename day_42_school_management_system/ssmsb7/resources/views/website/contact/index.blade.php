@extends('website.master')
@section('title')
    Contact With Us
@endsection
@section('body')

    <section>

        <div class="container-fluid py-4 bg-primary">
            <div class="row">
                <div class="col">
                    <h1 class="text-white text-center">Contact With Us </h1>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="row">
                <div class="col-md-6">
                    <h4> Send Us A Message</h4>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <input type="text" placeholder="Name" class="form-control"/>
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="Email" class="form-control"/>
                        </div>
                        <div class="col-md-4">
                            <input type="text" placeholder="Phone" class="form-control"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="" id="" class="form-control" placeholder="Message Here"></textarea>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <h4>Contact Info</h4>
                    <hr>
                    <address>
                        House #40, Road #21, Newmarket, Dhaka-1205 <br/>
                        Phone: 01785425516, 01845216699 <br/>
                        Email: info@ssmsb7.com
                    </address>
                    <ul class=" nav ">
                        <li><a href="" class="nav-link"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-instagram-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-twitter-square"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d456.48831394000325!2d90.393168!3d23.750713000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sus!4v1662529907994!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
