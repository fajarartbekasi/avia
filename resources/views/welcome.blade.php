@extends('layouts.index')

@section('content')
<div class="container d-flex p-15 mx-auto flex-column">
    <main class="px-3">
    <h1 class="text-info fw-bold">Selamat Datang kembali di Aplikasi {{ config('app.name', 'Laravel') }}</h1>
    <p class="lead">
        Aplikasi yang disediakan untuk melakukan semua kebutuhan  dokumentasi dalam pekerjaan anda setiap hari
    </p>
  </main>
</div>
@endsection