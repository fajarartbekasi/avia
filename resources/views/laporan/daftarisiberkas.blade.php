@extends('layouts.cetak')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="container">
            <div class="">
                <h5>
                    {{ config('app.name', 'Laravel') }}
                    <br>
                    <br>
                    Laporan periode daftar isi berkas
                    <br>
                    @if (request('tgl_awal'))
                    <small>Dari tanggal {{ request('tgl_awal') }} &nbsp; - {{ request('tgl_akhir') }}</small>
                    @endif
                </h5>
            </div>
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nomor Item Arsip</th>
                            <th>Nomor Berkas</th>
                            <th>Kode Klasifikasi</th>
                            <th>Uraian Infomasi Arsip</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Media</th>
                            <th>Jenis</th>
                            <th>Registrasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($records as $get )
                        <tr>
                            <td>{{$get->nomor_item_arsip}}</td>
                            <td>{{$get->record->nomor_berkas}}</td>
                            <td>{{$get->record->classification->kode_klasifikasi}}</td>
                            <td>{{$get->uraian_informasi_arsip}}</td>
                            <td>{{$get->record->tgl_doc}}</td>
                            <td>{{$get->record->jumlah}}</td>
                            <td>{{$get->record->media}}</td>
                            <td>{{$get->record->jenis}}</td>
                            <td>{{$get->created_at->format('Y-m-d')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
