<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    @include('partials.navbar')
    @include('partials.sidebar')

    <div class="main-body-container">
        <div class="header">Skills</div>
        <div class="card">
            <ul>
                <li>PHP/ Laravel</li>
                <br>
                <li>CSS/ Bootstrap/ Tailwind</li>
                <br>
                <li>JavaScript/ jQuery</li>
                <br>
                <li>NPM/ Node</li>
                <br>
                <li>Linux/ Debian</li>
                <br>
                <li>Docker</li>
                <br>
                <li>MySQL/ SQLite</li>
            </ul>
        </div>
    </div>
</body>

</html>
