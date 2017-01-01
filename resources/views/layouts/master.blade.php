<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/public/css/materialize.css">
    <link rel="stylesheet" href="/public/css/icon.css"/>
    <link rel="stylesheet" href="/public/css/main.css"/>

    <script type="text/javascript" src="/public/js/jquery.js"></script>
    <script src="/public/js/materialize.js"></script>
    <script type="text/javascript" src="/public/js/app.js"></script>

    <title>@yield('title')</title>
</head>
<body>
@include('includes.header')

@yield('content')

@include('includes.footer')


</body>

</html>