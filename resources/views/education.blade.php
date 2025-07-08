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
    @include('partials.sidebar')
    @include('partials.navbar')
    <div class="main-body-container">
        <div class="header">Education</div>
        <div class="card small">
            <div>Midkent College</div>
            <div>2017 - 2019</div>
            <div>Maths and English GCSE qualifications at grades B and C, respectively.</div>
            <div>Level 2 Diploma in Graphic Design.</div>
        </div>
        <div class="card small">
            <div>The Open University</div>
            <div>2020 - 2024</div>
            <div>Bachelor of Science (Honours) in Computing and IT (2:2).</div>
        </div>
    </div>
</body>

</html>
