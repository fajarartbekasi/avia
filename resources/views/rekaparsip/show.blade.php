@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card border-0">
                <div class="card-body">
                    <h3>Detail Informasi Rekap Arsip - {{$record->box->nomor_kotak}}</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>KD Klasifikasi</th>
                                    <th>No. Portagel</th>
                                    <th>No. Berkas</th>
                                    <th>Info Berkas</th>
                                    <th>Durasi</th>
                                    <th>Jumlah</th>
                                    <th>Uraian</th>
                                    <th>Aktif</th>
                                    <th>In Aktif</th>
                                    <th>Tindak Lanjut</th>
                                    <th>Media</th>
                                    <th>Reg Ska</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{$record->classification->kode}}</td>
                                    <td>{{$record->nomor_portagel}}</td>
                                    <td>{{$record->nomor_berkas}}</td>
                                    <td>{{$record->info_berkas}}</td>
                                    <td>{{$record->durasi}}</td>
                                    <td>{{$record->jumlah}}</td>
                                    <td>{{$record->classification->uraian}}</td>
                                    <td>{{$record->aktif}}</td>
                                    <td>{{$record->in_aktif}}</td>
                                    <td>{{$record->tindak_lanjut}}</td>
                                    <td>{{$record->media}}</td>
                                    <td>{{$record->reg_ska}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection