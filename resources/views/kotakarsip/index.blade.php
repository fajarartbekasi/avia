@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3 mb-3">
            <li class="breadcrumb-item"><a href="#">Kotak Arsip</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="alert alert-danger d-flex align-items-center" role="alert">

                <div>
                    Perhatian.
                    <ul>
                        <li>apabila button nomor kotak muncul silahkan mengisi nomor kotak tersebut</li>
                        <li>Untuk mengisi input rekam arsip silahkan klik button Input Rekam Arsip</li>
                    </ul>
                </div>
            </div>
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <table class="table table-strip">
                        <thead>
                            <tr>
                                <th>Nomor Kontak</th>
                                <th>Unit Kerja</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($boxs as $box)
                            <tr>
                                @if( $box->nomor_kotak == null)
                                <td>
                                    <a href="{{route('kotak-arsip.edit', $box->id)}}" class="btn btn-outline-success btn-sm">Input Nomor Kotak
                                        Arsip</a>
                                </td>
                                <td colspan="2">
                                    {{$box->unit->unit_kerja}}
                                </td>
                                @else
                                <td>{{$box->nomor_kotak}}</td>
                                <td>{{$box->unit->unit_kerja}}</td>
                                <td>
                                    <a href="{{route('rekap-arsip.edit', $box->id)}}" class="btn btn-outline-info btn-sm">Input Rekam Arsip</a>
                                    <a href="{{route('kotak-arsip.ubah', $box->id)}}" class="btn btn-outline-info btn-sm">Edit</a>
                                    <a href="{{route('kotak-arsip.show', $box->id)}}" class="btn btn-outline-primary btn-sm">Cetak Data</a>
                                </td>
                                @endif
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Maaf Data belum tersedia</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
