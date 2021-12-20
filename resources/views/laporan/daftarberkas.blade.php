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
                    Laporan periode daftar berkas
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
                            <th>No. Berkas</th>
                            <th>No. Kotak</th>
                            <th>No. Portapel</th>
                            <th>Info Berkas</th>
                            <th>Kurun</th>
                            <th>Jumlah</th>
                            <th>Jenis</th>
                            <th>Media</th>
                            <th>Keterangan</th>
                            <th>Kode Klasifikasi</th>
                            <th>Uraian</th>
                            <th>Aktif</th>
                            <th>In Aktif</th>
                            <th>Tindak Lanjut</th>
                            <th>Lokasi Penyimpanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($records as $get )
                        <tr>
                            <td>{{$get->record->nomor_berkas}}</td>
                            <td>{{$get->record->box->nomor_kotak}}</td>
                            <td>{{$get->record->nomor_portapel}}</td>
                            <td>{{$get->record->info_berkas}}</td>
                            <td>{{$get->record->durasi}}</td>
                            <td>{{$get->record->jumlah}}</td>
                            <td>{{$get->record->jenis}}</td>
                            <td>{{$get->record->media}}</td>
                            <td>{{$get->created_at->format('Y-m-d')}}</td>
                            <td>{{$get->record->classification->kode_klasifikasi}}</td>
                            <td>{{$get->record->classification->uraian_klasifikasi}}</td>
                            <td>{{$get->record->aktif}}</td>
                            <td>{{$get->record->in_aktif}}</td>
                            <td>{{$get->record->tindak_lanjut}}</td>
                            <td>{{$get->record->lokasi}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
