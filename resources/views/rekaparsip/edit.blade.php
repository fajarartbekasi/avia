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
                    <form action="{{route('daftar-arsip.update', $record->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nomor Kotak</label>
                                    <input type="hidden" name="box_id" id="" value="{{$record->id}}" class="form-control">
                                    <input type="text" name="" id="" value="{{$record->box->nomor_kotak}}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nomor Portapel</label>
                                    <input type="text" name="nomor_portapel" value="{{$record->nomor_portapel}}" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nomor Berkas</label>
                                    <input type="text" name="nomor_berkas" value="{{$record->nomor_berkas}}" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Uraian Informasi Berkas</label>
                                    <input type="text" name="info_berkas" value="{{$record->info_berkas}}" id="" class="form-control">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kurun Waktu</label>
                                    <input type="text" name="durasi" id="" value="{{$record->durasi}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jumlah</label>
                                    <input type="text" name="jumlah" id="" value="{{$record->jumlah}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Kode Klasifikasi</label>
                                    <select name="classification_id" id="kodeklas" class="form-control">
                                        <option value="">Silahkan Masukan Kode Klasifikasi</option>
                                        @foreach($class as $clas)
                                        <option value="{{$clas->id}}" class="col-4">{{$clas->kode_klasifikasi}} -
                                            {{Illuminate\Support\Str::limit($clas->uraian_klasifikasi, 70)}} -
                                            {{$clas->aktif}} - {{$clas->in_aktif}} - {{$clas->tindak_lanjut}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Uraian</label>
                                    <input type="text" name="uraian" id="desc" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Aktif</label>
                                    <input type="text" name="aktif" id="aktif" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">In Aktif</label>
                                    <input type="text" name="in_aktif" id="in_aktif" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Tindak Lanjut akhir</label>
                                    <input type="text" name="tindak_lanjut" id="tindak_lanjut" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Media Arsip</label>
                                    <select name="media" id="" class="form-control">

                                        <option value="CD" {{$record->media == 'CD' ? 'selected' : ''}}>CD</option>
                                        <option value="Disket" {{$record->media == 'Disket' ? 'selected' : ''}}>Disket</option>
                                        <option value="Kertas" {{$record->media == 'Kertas' ? 'selected' : ''}}>Kertas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jenis Arsip</label>
                                    <select name="jenis" id="" class="form-control">
                                        <option value="Asli" {{$record->media == 'Asli' ? 'selected' : ''}}>Asli</option>
                                        <option value="Asli & Copy" {{$record->media == 'Asli & Copy' ? 'selected' : ''}}>Asli & Copy</option>
                                        <option value="Copy" {{$record->media == 'Copy' ? 'selected' : ''}}>Copy</option>
                                        <option value="Salinan" {{$record->media == 'Salinan' ? 'selected' : ''}}>Salinan</option>
                                        <option value="Tembusan" {{$record->media == 'Tembusan' ? 'selected' : ''}}>Tembusan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Lokasi Penyimpanan</label>
                                    <input type="text" name="lokasi" value="{{$record->lokasi}}" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nomor Register SKA</label>
                                    <input type="text" name="reg_ska" value="{{$record->reg_ska}}" id="" class="form-control">
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
