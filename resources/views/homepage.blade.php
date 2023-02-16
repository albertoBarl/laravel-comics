<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-dark text-white">
    <div>
        @include('partials.header')

    </div>
    <div>
        @include('partials.main')

    </div>
    <div>
        @include('partials.footer')

    </div>
</body>
</html>