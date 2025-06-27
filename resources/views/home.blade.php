<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    @include('partials.sidebar')
    @include('partials.navbar')


    <div class="header">Home</div>

    <div class="card">
        <div class="container">
            <div>
                hellooooo
            </div>
        </div>
    </div>


</body>

</html>
