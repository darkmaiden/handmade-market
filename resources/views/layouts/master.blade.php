<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ URL::to('css/materialize.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/icon.css') }}"/>
    <link rel="stylesheet" href="{{ URL::to('css/main.css') }}"/>

    <script type="text/javascript" src="{{ URL::to('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/materialize.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/app.js') }}"></script>

    <title>@yield('title')</title>
</head>
<body>
@include('includes.header')

@yield('content')

@include('includes.footer')


</body>

</html>