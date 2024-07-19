<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--favicon-->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}" type="image/png" />

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
