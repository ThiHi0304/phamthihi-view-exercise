<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>
    <div class="row">
        @include('clients.sidebar')
        <div class="col-11">
            @include('clients.header')
            <hr>
            <div class="row">
                @yield('sidebar')
                @yield('home')
                @yield('product')
            </div>
            <div class="row">
                @yield('deal')
                <hr>
                @yield('relative')
            </div>
        </div>
    </div>
</body>


</html>
