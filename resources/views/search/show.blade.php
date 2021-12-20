@extends('layouts.app')

@section('content')

<div class="content pt-3 py-3">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
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
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($records as $record)
                                <tr>
                                    <td>
                                        {{$record->nomor_berkas}}
                                    </td>
                                    <td>
                                        {{$record->box->nomor_kotak}}
                                    </td>
                                    <td>
                                        {{$record->nomor_portapel}}
                                    </td>
                                    <td>
                                        {{$record->info_berkas}}
                                    </td>
                                    <td>{{$record->durasi}}</td>
                                    <td>{{$record->jumlah}}</td>
                                    <td>{{$record->jenis}}</td>
                                    <td>{{$record->media}}</td>
                                    <td>{{$record->contents->first()->created_at->format('Y-m-d') ?? '-'}}</td>
                                    <td>
                                        {{$record->classification->kode_klasifikasi}}
                                    </td>
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

                                </tr>
                                @empty

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
