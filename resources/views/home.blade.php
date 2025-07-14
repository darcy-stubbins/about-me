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
                    Lighthouse tool, this allowed me to ensure the quality of my application as well as it's
                    accessibility. </p>
                {{-- <p>You can view this project <a
                        href="https://github.com/darcy-stubbins/final-year-project?tab=readme-ov-file"></a>here.</p> --}}
                <br>
                <p>After finishing my university studies, I started looking at Laravel as well as vanilla PHP as to
                    familiarise myself with a scalable framework. During this, I utilised many packages including
                    Laravel Breeze,
                    along with front end frameworks such as Tailwind
                    and Bootstrap. In one of my projects, I created a simple weather
                    app that upon the user inputting their location will consume an external API, to return their
                    current and five-day forecast. Using Tailwind I was able to create an attractive and clear dashboard
                    where I could display the data and weather icons from the API. </p>
                <br>
                <p>I’ve also worked on projects involving authentication systems and closely followed the MVC
                    architectural pattern. One such project is a plant application that organises plants into various
                    categories. Each category contains different plant types, allowing users to sort and filter plants
                    based on their preferences, for example easy-to-manage plants. By associating categories with
                    specific plant characteristics, the app
                    can dynamically display plants that match the user's wants.</p>
                <br>
                <p>Naturally, most of these projects have required NPM, Vite, and Sass. For example, in one of my
                    projects I switched
                    from
                    Tailwind to Bootstrap 5 during development, making this switch gave me a better familiarity with
                    NPM.</p>
                <br>
                <p>You can see a more condensed list of my skills <a href="/skills">here.</a></p>
            </div>
        </div>
    </div>

</body>

</html>
