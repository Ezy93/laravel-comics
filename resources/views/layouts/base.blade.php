<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics - @yield('title')</title>
    
    {{-- custom CSS --}}
    <link rel="stylesheet" href="{{asset("css/app.css")}}">

</head>
<body>
    @include('guest/header')

    <main class="text-white">
        <div class="container">
            @yield('main-content')
        </div>
        <div class="container-fluid px-0 bg-primary">
            @yield('shop-navbar')
        </div>
    </main>

    @include('guest/footer')
</body>
</html>