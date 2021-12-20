<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bumida') }}</title>

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <style>

        .table{
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;

        }
        th{
            font-size: 70%;
        }
        td{
            font-size: 70%;
        }
    </style>
</head>

<body class="bg-white">
    <div id="app">
        <div class="content bg-white">
            @yield('content')
        </div>
    </div>

</body>

</html>
