@extends('layouts.app')

@section('content')
<div class="content pt-3 px-3">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" style="width: 140%; table-layout-fixed;">
                            <thead>
                                <tr>
                                    <th>Nomor Item Arsip</th>
                                    <th>Nomor Berkas</th>
                                    <th>Kode Klasifikasi</th>
                                    <th>Uraian Informasi Arsip</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah</th>
                                    <th>Media</th>
                                    <th>Jenis</th>
                                    <th>Registrasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contents as $content)
                                <tr>
                                    <td>{{$content->nomor_item_arsip}}</td>
                                    <td>{{$content->record->nomor_berkas}}</td>
                                    <td>{{$content->record->classification->kode_klasifikasi}}</td>
                                    <td>{{$content->record->classification->uraian_klasifikasi}}</td>
                                    <td>{{$content->record->tgl_doc}}</td>
                                    <td>{{$content->record->jumlah}}</td>
                                    <td>{{$content->record->media}}</td>
                                    <td>{{$content->record->jenis}}</td>
                                    <td>{{$content->created_at->format('Y-m-d')}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center">Maaf Daftar isi berkas belum tersedia</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
