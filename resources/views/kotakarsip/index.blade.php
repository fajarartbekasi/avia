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
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
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
                                            <a href="{{route('kotak-arsip.edit', $box->id)}}" class="btn btn-outline-info btn-sm">Input Nomor Kotak</a>
                                        </td>
                                        <td colspan="2">
                                            {{$box->unit->unit_kerja}}
                                        </td>
                                    @else
                                        <td>{{$box->nomor_kotak}}</td>
                                        <td>{{$box->unit->unit_kerja}}</td>
                                        <td>
                                           <a href="{{route('rekap-arsip.edit', $box->id)}}" class="btn btn-outline-info btn-sm">Input Rekam Arsip</a>
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
                    {{$boxs->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection