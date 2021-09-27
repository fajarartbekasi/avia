@extends('layouts.cetak')


@section('content')

<div class="">
    <div class="">
        <div class="mb-3">
            <img src="{{asset('img/OJK_Logo.png')}}" width="30%" alt="">
            <div>
                <h3>{{$record->box->nomor_kotak}}</h3>
            </div>
        </div>
        <div class="pt">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Kode Klasifikasi</td>
                        <td>{{$record->classification->kode}}</td>
                    </tr>
                    <tr>
                        <td>In-Aktif</td>
                        <td>{{$record->in_aktif}}</td>
                    </tr>
                    <tr>
                        <td>Tindak Lanjut Akhir</td>
                        <td>{{$record->tindak_lanjut}}</td>
                    </tr>
                    <tr>
                        <td>Unit Pengolahan</td>
                        <td>{{$record->box->unit->unit_kerja}}</td>
                    </tr>
                    <tr>
                        <td>Tahun Arsip</td>
                        <td>{{$record->durasi}}</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>{{$record->uraian}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection