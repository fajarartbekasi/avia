@extends('layouts.app')

@section('content')
    <div class="content pt-3 px-3">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-0">
                        <div class="row">
                            @role('admin')
                            <div class="col-md-6">
                                <h6>Cetak data berdasarkan tanggal</h6>
                                <div class="pt-3">
                                    <form action="{{route('cetak-periode.daftar-isi-berkas')}}" method="get">
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
                            </div>
                            @endrole
                            <div class="col-md-6">
                                <h6>Search :</h6>
                                <div class="pt-3">
                                    <form action="{{route('search.daftar-isi')}}" method="get">
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
                    </div>
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
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
                            {{$contents->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
