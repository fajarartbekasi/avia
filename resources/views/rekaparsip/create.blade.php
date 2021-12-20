@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3 mb-3">
            <li class="breadcrumb-item"><a href="#">Kotak Arsip</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Rekam Arsip</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 pb-5 mb-3">
            <div class="card border-0 shadow-sm">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="card-header bg-white border-bottom">
                    <h4>Masukan data rekam arsip dengan benar</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('rekap-arsip.store', $box->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nomor Kotak</label>
                                    <input type="hidden" name="box_id" id="" value="{{$box->id}}" class="form-control">
                                    <input type="text" name="" id="" value="{{$box->nomor_kotak}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nomor Portapel</label>
                                    <input type="text" name="nomor_portapel" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nomor Berkas</label>
                                    <input type="text" name="nomor_berkas" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Uraian Informasi Berkas</label>
                                    <input type="text" name="info_berkas" id="" class="form-control">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kurun Waktu</label>
                                    <input type="text" name="durasi" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jumlah</label>
                                    <input type="text" name="jumlah" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Kode Klasifikasi</label>
                                    <select name="classification_id" id="kodeklas" class="form-control">
                                        <option value="">Silahkan Masukan Kode Klasifikasi</option>
                                        @foreach($class as $clas)
                                            <option value="{{$clas->id}}" class="col-4">{{$clas->kode_klasifikasi}} - {{Illuminate\Support\Str::limit($clas->uraian_klasifikasi, 70)}} - {{$clas->aktif}} - {{$clas->in_aktif}} - {{$clas->tindak_lanjut}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Uraian</label>
                                    <input type="text" name="uraian" id="desc"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Aktif</label>
                                    <input type="text" name="aktif" id="aktif" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">In Aktif</label>
                                    <input type="text" name="in_aktif" id="in_aktif" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tindak Lanjut akhir</label>
                                    <input type="text" name="tindak_lanjut" id="tindak_lanjut" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Media Arsip</label>
                                    <select name="media" id="" class="form-control">
                                        <option value="">Silahkan Pilih jenis media</option>
                                        <option value="CD">CD</option>
                                        <option value="Disket">Disket</option>
                                        <option value="Kertas">Kertas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jenis Arsip</label>
                                    <select name="jenis" id="" class="form-control">
                                        <option value="">Silahkan Pilih Jenis Arsip</option>
                                        <option value="Asli">Asli</option>
                                        <option value="Asli & Copy">Asli & Copy</option>
                                        <option value="Copy">Copy</option>
                                        <option value="Salinan">Salinan</option>
                                        <option value="Tembusan">Tembusan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Lokasi Penyimpanan</label>
                                    <input type="text" name="lokasi" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nomor Register SKA</label>
                                    <input type="text" name="reg_ska" id="" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <button type="submit" class="btn btn-outline-info">Simpan rekam arsip</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
