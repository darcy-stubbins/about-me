<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Navbar</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <div class="area"></div>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="/">
                    <i class="fa fa-house fa-2x"></i>
                    <span class="nav-text">
                        Home
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="/education">
                    <i class="fa fa-user-graduate fa-2x"></i>
                    <span class="nav-text">
                        Education
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="/skills">
                    <i class="fa fa-robot fa-2x"></i>
                    <span class="nav-text">
                        Skills
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="/contact">
                    <i class="fa fa-phone fa-2x"></i>
                    <span class="nav-text">
                        Contact
                    </span>
                </a>
            </li>
        </ul>
    </nav>


</body>

</html>
