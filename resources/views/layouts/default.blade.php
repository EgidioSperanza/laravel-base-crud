<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel DC | @yield('pageTitle')</title>
    {{-- ----CSS---- --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <header>
        @include ('partials.navbar')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
    @include('partials.footer')
    </footer>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>