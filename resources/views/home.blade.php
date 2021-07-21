<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
        @extends('layout.main')
        @section('content')
            <h1>DC Comix home page</h1>
            <h3>The best comics of this century.</h3>
        @endsection
    </body>
</html>
