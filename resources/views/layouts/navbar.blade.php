<nav class="navbar navbar-expand-lg fixed-top navbar-white bg-white" aria-label="Main navigation">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-info" href="#">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

<div class="nav-scroller bg-white shadow-sm">
    <nav class="nav nav-underline d-flex justify-content-center" aria-label="Secondary navigation">

        @role('admin')
            <li class="nav-item">
                <a class="nav-link item-center" href="{{ route('home') }}">{{ __('home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-center" href="{{ route('invitations') }}">{{ __('Data Pengguna') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-center" href="{{ route('classification') }}">{{ __('Klasifikasi') }}</a>
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
                <a class="nav-link item-center" href="{{ route('daftar-isi') }}">{{ __('Daftar Isi Berkas') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-center" href="{{ route('upload') }}">{{ __('Upload') }}</a>
            </li>

        @endrole
        @role('petugas')
            <li class="nav-item">
                <a class="nav-link item-center" href="{{ route('home') }}">{{ __('home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-center" href="{{ route('rekap-arsip') }}">{{ __('Formulir rekam arsip') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-center" href="{{ route('daftar-isi') }}">{{ __('Daftar Isi Berkas') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-center" href="{{ route('upload') }}">{{ __('Data Upload') }}</a>
            </li>
        @endrole
    </nav>
</div>
