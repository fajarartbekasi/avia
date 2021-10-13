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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/OJK_logo.png')}}" class="120px" width="120" height="" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                    <ul class="navbar-nav mr-auto">
                        @role('admin')
                            <li class="nav-item">
                                <a class="nav-link item-center" href="{{ route('classification') }}">{{ __('classification') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item-center" href="{{ route('satuan-kerja') }}">{{ __('Satuan Kerja') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item-center" href="{{ route('kotak-arsip') }}">{{ __('Kotak Arsip') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item-center" href="{{ route('rekap-arsip') }}">{{ __('Formulir rekam arsip') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item-center" href="{{ route('upload') }}">{{ __('Upload') }}</a>
                            </li>
                        @endrole
                        @role('petugas')
                            <li class="nav-item">
                                <a class="nav-link item-center" href="{{ route('upload') }}">{{ __('Data Upload') }}</a>
                            </li>
                        @endrole
                    </ul>
                    @endauth
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="jumbotron" style="background-image: url('img/OJK_logo.png'); background-size: 100åß%;">
                <div class="container">
                    <h1 class="display-3 text-secondary">Selamat Datang di aplikasi, </h1>
                    <p class="text-white">
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
            </div>
            <div class="container">
                <div id="flash-msg">
                    @include('flash::message')
                </div>
            </div>

            @yield('content')
        </main>
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
