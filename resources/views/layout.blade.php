<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    <script src="{{ elixir('js/app.js') }}"></script>

    <!-- Styles -->
    @yield('head')
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
