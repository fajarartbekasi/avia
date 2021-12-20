@extends('layouts.app')

@section('content')

<div class="content py-3 px-3 pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3 mb-3">
            <li class="breadcrumb-item"><a href="#">Formulir Rekam Arsip</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    @role('admin')
    <div class="alert alert-danger">
        <h6>Perhatian</h6>
        <ul>
            <li>Untuk mengisi input kedalaman silahkan klik button pada kolom nomor portapel</li>
            <li>Untuk Melihat Detail Rekap Arsip silahkan klik Uraian klasifikasi</li>
            <li>Untuk mengisi daftar isi berkas silahkan klik nomor berkas</li>
            <li>Untuk mengisi Daftar isi berkas silahkan isi kedalam terlebih dahulu</li>
            <li>Untuk cek detail arsip klik kode klasifikasi</li>
            <li>Untuk cetak label silahkan klik nomor kotak</li>
        </ul>
    </div>
    @endrole
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 shadow-sm">
                    <div class="row">
                        @role('admin')
                        <div class="col-md-6">
                            <h6 class="mb-3">Cetak data berdasarkan tanggal</h6>
                            <form action="{{route('cetak-periode.rekap-arsip')}}" method="get">
                                <div class="row ">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="date" name="tgl_awal" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="date" name="tgl_akhir" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <button class="btn btn-outline-info">Cetak data</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endrole
                        <div class="col-md-6">
                            <h6 class="mb-3">Search :</h6>
                            <form action="{{route('search')}}" method="get">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="" placeholder="Mau cari apa?">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <button class="btn btn-outline-info">Cari data</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped" style="width: 240%; table-layout:fixed;">
                            <thead>
                                <tr>
                                    <th>Nomor Berkas</th>
                                    <th>Nomor Kotak</th>
                                    <th>Nomor Portapel</th>
                                    <th>Uraian Informasi Berkas</th>
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
                                    @role('admin')
                                    <th>Options</th>
                                    @endrole
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($records as $record)
                                <tr>
                                    @role('admin')
                                    <td>
                                        <a href="{{route('daftar-isi.create', $record->box->id)}}" class="btn btn-outline-info btn-sm">
                                            {{$record->nomor_berkas}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('label-arsip.show', $record->id)}}" class="btn btn-outline-info btn-sm">
                                            {{$record->box->nomor_kotak}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('form-input.kedalaman',$record->id)}}" class="btn btn-outline-info btn-sm">
                                            {{$record->nomor_portapel}}
                                        </a>
                                    </td>
                                    @endrole
                                    @role('petugas')
                                    <td>
                                        {{$record->nomor_berkas}}
                                    </td>
                                    <td>
                                        {{$record->box->nomor_kotak}}
                                    </td>
                                    <td>
                                        {{$record->nomor_portapel}}
                                    </td>
                                    @endrole
                                    <td>
                                        {{$record->info_berkas}}
                                    </td>
                                    <td>{{$record->durasi}}</td>
                                    <td>{{$record->jumlah}}</td>
                                    <td>{{$record->jenis}}</td>
                                    <td>{{$record->media}}</td>
                                    <td>{{$record->contents->first()->created_at->format('Y-m-d') ?? '-'}}</td>
                                    @role('admin')
                                        <td>
                                            <a href="{{route('rekap-arsip.show', $record->id)}}" class="btn btn-outline-info btn-sm">
                                                {{$record->classification->kode_klasifikasi}}
                                            </a>
                                        </td>
                                    @endrole
                                    @role('petugas')
                                    <td>
                                        {{$record->classification->kode_klasifikasi}}
                                    </td>
                                    @endrole
                                    <td>
                                        {{$record->classification->uraian_klasifikasi}}
                                    </td>
                                    <td>
                                        {{$record->aktif}}
                                    </td>
                                    <td>
                                        {{$record->in_aktif}}
                                    </td>
                                    <td>
                                        {{$record->tindak_lanjut}}
                                    </td>
                                    <td>
                                        {{$record->lokasi}}
                                    </td>
                                    @role('admin')
                                    <td >
                                        <a href="{{route('daftar-arsip.show', $record->id)}}" class="btn btn-outline-info btn-sm">Daftar
                                            Arsip
                                        </a>
                                    </td>
                                    @endrole
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{$records->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
