<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />

    <!-- Compiled CSS -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>
    <!-- Wrapper -->
    <div class="wrapper">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>

    <!-- Compiled JS -->
    <script src="{{ asset('js/all.js') }}"></script>
    @yield('scripts')
</body>

</html>
