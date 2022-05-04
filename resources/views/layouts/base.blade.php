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

    <main>
        @yield('main-content')
    </main>

    @include('guest/footer')
</body>
</html>