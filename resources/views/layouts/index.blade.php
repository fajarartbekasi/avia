<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.navbar')
        <div id="app">
            @yield('content')
        </div>
        <script>
            $(document).ready(function(){
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $("select").on('change', function(){
                        var id = $(this).val();
                        $.ajax({
                            url:"{{route('autocomplete')}}",
                            type:"POST",
                            data:{'id' : id},
                            dataType:'json',
                            success: function(data){
                                $('#desc').show().val(data[0].uraian);
                            },
                            error: function(data){
                                alert('Error ');
                            }
                        });
                    });
            });
        </script>

    </body>
</html>
