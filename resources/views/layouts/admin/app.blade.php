<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="describe" content="hb design, design, hb, hb dakar, hb Senegal, hb dakar senegal">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('layouts.favicon')
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>HB Design | Sénégal</title>
        
    </head>
    <body>
        @include('layouts.admin.navbar')

        <main role="main">
            @yield('content')
        </main>
        <div class="footer bg-dark mb-0">
            @include('layouts.footer')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
