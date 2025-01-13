<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    --}}

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('/css/test.css') }}">
    <!-- <link rel="stylesheet" href="/css/test.css"> -->


    <title>MyPages</title>


</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('start.index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about.index') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('post.index') }}">Post</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">Конец Страницы</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Y9n2J/22F8jXb5cE20vWJqI9H29J1I20f03q8s02v08Q1e7i9j+W9qH0k2b+vX"
        crossorigin="anonymous"></script>

</body>

</html>