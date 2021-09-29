@extends('layouts.cetak')

@section('content')

<div class="bg-white">
    <div class="mb-3">
        <h3>Nomor Induk : {{$record->box->unit->first()->kode_unit}}</h3>
        <h3>Nama perusahaan : {{$record->box->unit->first()->unit_kerja}}</h3>
        <h3>Nama Kotak : {{$record->box->nomor_kotak}} </h3>
    </div>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nomor Berkas</th>
                    <th>Uraian informasi</th>
                    <th>Kurun Waktu</th>
                    <th>Jumlah</th>
                    <th>Kode Klasifikasi</th>
                    <th>Jadwal Refisi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$record->nomor_berkas}}</td>
                    <td>{{$record->info_berkas}}</td>
                    <td>{{$record->durasi}}</td>
                    <td>{{$record->jumlah}}</td>
                    <td>{{$record->classification->kode}}</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nomor Item</th>
                    <th>Uraian informasi Arsip</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$record->nomor_portagel}}</td>
                    <td>{{$record->classification->uraian}}</td>
                    <td>{{$record->created_at}}</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection