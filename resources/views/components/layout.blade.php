<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Hammersmith+One" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/booknow.css') }}">
</head>

<body class="bg-Dark w-full">
    @if (session('status'))
        <div id="notification"
            class="notification bg-white p-5 border-4 border-primary shadow-lg flex items-center justify-between">
            <h1>{{ session('status') }}</h1>
            <button onclick="closeNotification()">X</button>
            <div class="progress-bar"></div>
        </div>
    @endif
    @include('partials._navbar')
    <div class="">
        @yield('content')
    </div>
    @include('partials._footer')
    <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
    <script src="{{ asset('assets/js/alert.js') }}"></script>
    <script src="{{ asset('assets/js/Store.js') }}"></script>
    <script src="{{ asset('assets/js/admin.js') }}"></script>
</body>

</html>
