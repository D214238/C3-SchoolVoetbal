<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $urlLS = request()->segment(count(request()->segments()));
        $urlSTLS = request()->segment(count(request()->segments()) - 1);

        if (!is_numeric($urlLS)) {
            $title = $urlLS;
        }elseif (is_numeric($urlLS) && !is_numeric($urlSTLS)) {
            $title = $urlSTLS;
        }else {
            $title = 'C3-SchoolVoetval';
        }
    @endphp

    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('img/4S-Logo.svg') }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<div class="body-wrapper">
    @auth
        @include('components.main.navigation')
    @endauth
    <main @class(['main-content', 'main-grid' => Auth::check()])>
        {{ $slot }}
    </main>
    @auth
        @include('components.main.footer')
    @endauth
</div>
</body>
</html>
