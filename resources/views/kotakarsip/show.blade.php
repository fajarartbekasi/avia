@extends('layouts.cetak')


@section('content')

<div class="">
    <div class="">
        <div class="mb-3 d-flex">
            <img src="{{asset('img/OJK_Logo.png')}}" width="15%" alt="">
            <div class="text-center">
                <h2>Daftar Isi Kotak</h2>
            </div>
        </div>
        <div class="mt-3">
            <h4>Unit Pengelola : {{$box->unit->unit_kerja}}</h4>
            <h4>Nomor Kotak : {{$box->nomor_kotak}}</h4>
        </div>
        <div class="mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nomor Berkas</th>
                        <th>Uraian informasi berkas</th>
                        <th>tahun</th>
                        <th>jumlah</th>
                        <th>k.Klasifikasi</th>
                        <th>keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$box->records->first()->nomor_berkas}}</td>
                        <td>{{$box->records->first()->uraian}}</td>
                        <td>{{$box->records->first()->durasi}}</td>
                        <td>{{$box->records->first()->jumlah}}</td>
                        <td>{{$box->records->first()->nomor_berkas}}</td>
                        <td>{{$box->records->first()->classification->kode}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Dibuat Oleh</th>
                        <th>Diperiksa Oleh</th>
                        <th>Tgl.Dioindahkan ke unit kearsipan</th>
                        <th>Nomor berita acara pemindahan arsip interaktif</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <td style="padding-top:100px; border-left: 0px; border-right: 0px;"></td>
                        <td style="padding-top:100px; border-left: 0px; border-right: 0px;"></td>
                        <td style="padding-top:100px; border-left: 0px; border-right: 0px;"></td>
                        <td style="padding-top:100px; border-left: 0px; border-right: 0px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection