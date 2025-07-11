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
    @include('partials.navbar')
    @include('partials.sidebar')

    <div class="main-body-container">
        <div class="header">About Me</div>

        <div class="card">
            <div>
                <p>Throughout my university studies and personal projects, I primarily worked with LEMP stacks. For
                    my
                    final year project, I utilised Docker to containerise and deploy my application (again, a LEMP
                    stack). I developed a cross-platform mobile/web app using Flutter that implemented a custom auth
                    system using the API I created on the LEMP stack. I also optimised the application using
                    Chrome’s
                    Lighthouse tool.</p>
                <br>

                <p>finishing my university studies I started looking at Laravel instead of just vanilla PHP as to
                    familiarise myself with a scalable framework. During this, I utilised Laravel Breeze with
                    Tailwind
                    for some projects and Bootstrap for others. In one of my projects, I created a simple weather
                    app
                    that consumes an external API, to get weather data based on the users’ location.</p>
                <br>

                <p>Naturally, these projects have required NPM, Vite, and Sass. In one of my projects I switched
                    from
                    Tailwind to Bootstrap 5 during development, this gave me a better familiarity with NPM.</p>
            </div>
        </div>
    </div>

</body>

</html>
