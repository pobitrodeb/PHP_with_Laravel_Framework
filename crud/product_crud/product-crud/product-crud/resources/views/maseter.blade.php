<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css"/>

</head>
<body>

<nav class="navbar navbar-expand-md bg-light navbar-light shadow">
    <div class="container">
        <div class="navbar-brand">
            <a href="" class="text-decoration-none"> <i>PRODUCT CRUD</i> </a>
        </div>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>

            <li><a href="{{route('create-product')}}" class="nav-link">Product Add </a></li>
            <li><a href="{{route('manage-product')}}" class="nav-link">Product Manage </a></li>

        </ul>
    </div>
</nav>


@yield('body')


<script src="{{asset('/')}}js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>
