<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- CDNS --}}
    @yield('cdns')
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

    {{-- JS --}}
    <script defer src="{{ asset('js/app.js') }}"></script>
    <title>Document | @yield('title')</title>
</head>
<body>
    {{-- @include('includes.header') --}}
    <main class="mmt-3">
        <div class="container">
            <div class="card main-card my-5 p-5">
                @yield('content')
            </div>
        </div>
    </main>
</body>
</html>