@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3 mb-3">
            <li class="breadcrumb-item"><a href="#">Rekap Arsip</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Nomor Kotak
                                </th>
                                <th>
                                    Nomor Portgal
                                </th>
                                <th>
                                    Options
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($records as $record)
                            <tr>
                                <td>{{$record->box->nomor_kotak}}</td>
                                <td>
                                    <a href="{{route('form-input.kedalaman',$record->id)}}" class="btn btn-outline-info btn-sm">
                                        {{$record->nomor_portagel}}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('rekap-arsip.show', $record->id)}}" class="btn btn-outline-info btn-sm">View Detail Rekap Arsip</a>
                                    <a href="{{route('label-arsip.show', $record->id)}}" class="btn btn-outline-info btn-sm">Cetak Label Arsip</a>
                                    <a href="{{route('daftar-arsip.show', $record->id)}}" class="btn btn-outline-info btn-sm">Daftar Arsip</a>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                    {{$records->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection