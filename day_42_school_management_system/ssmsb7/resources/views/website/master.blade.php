<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> ssmsb7 @yield('title') </title>
    <link rel="stylesheet" href="{{asset('/website/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/style.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a href="" class="navbar-brand">NenoTech</a>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-link">About </a></li>
                <li><a href="{{route('course')}}" class="nav-link">All Course </a></li>
                <li><a href="{{route('contact')}}" class="nav-link">Contact </a></li>
                <li><a href="{{route('login-regi')}}" class="nav-link">Login </a></li>
            </ul>
        </div>
    </div>

</nav>

@yield('body')

<footer class="mt-5">
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h2 class="text-uppercase fw-bold"> NenoTech </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Consectetur illo ipsa nisi nostrum, quaerat reprehenderit!
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h2 class="text-uppercase fw-bold"> Important Link </h2>
                        <hr>
                        <ul class="navbar-nav">
                            <li><a href="" class="nav-link">About Us </a></li>
                            <li><a href="" class="nav-link">Our Courses</a></li>
                            <li><a href="" class="nav-link">Our Instructor</a></li>
                            <li><a href="" class="nav-link">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h2 class="text-uppercase fw-bold"> Contact Us </h2>
                        <address>
                            House #3, Main Road, Banasree, Rampura Dhaka 1219

                            <ul class="nav">
                                <li>
                                    <a href="" class="nav-link"><i class=" fab fa-brands fa-square-facebook"></i></a>
                                </li>
                            </ul>

                        </address>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-center text-white">
                        &copy;BASIS SEIP TRANCE-3 | <b class="text-white">PHP WITH LARAVEL FRAMEWORK BATCH-7</b>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>


<script src="{{asset('/website/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('/website/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('/website/js/all.min.js')}}"></script>
</body>
</html>
