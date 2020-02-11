<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('layouts.menu')
    @yield('content')
    @include('layouts.jumbo')
    @include('layouts.dt-section')
    @include('layouts.press')

    @include('layouts.footer')





    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
</body>
</html>
