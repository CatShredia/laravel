<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body>
    @livewire('clicker')

    <div class="container">
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>

        <div class="text-3xl font-bold text-blue-500">
            Tailwind CSS is working!
        </div>
    </div>
</body>

</html>