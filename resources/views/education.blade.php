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
        <div class="header">Education</div>
        <div class="card small">
            <div class="subheader">Midkent College</div>
            <div class="date">2017 - 2019</div>
            <p class="text">Maths and English GCSE qualifications at grades B and C, respectively.</p>
            <p class="text">Level 2 Diploma in Graphic Design.</p>
        </div>
        <div class="card small">
            <div class="subheader">The Open University</div>
            <div class="date">2020 - 2024</div>
            <p class="text">Bachelor of Science (Honours) in Computing and IT (2:2).</p>
        </div>
    </div>
</body>

</html>
