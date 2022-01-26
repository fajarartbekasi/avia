@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-header">
                    <h6>Silahkan masukan data untuk daftar isi dibawah ini</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('daftar-isi.update', $content->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nomor Item Arsip</label>
                            <input type="text" name="nomor_item_arsip" value="{{$content->nomor_item_arsip}}" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Berkas</label>
                            <input type="text" class="form-control" value="{{$content->record->nomor_berkas}}" id="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Kode Klasifikasi</label>
                            <input type="text" class="form-control"
                                value="{{$content->record->classification->kode_klasifikasi}}" id="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Uraian Item Arsip</label>
                            <textarea name="uraian_informasi_arsip" id="" class="form-control">
                                {{$content->uraian_informasi_arsip}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="text" class="form-control" value="{{$content->record->tgl_doc}}" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="text" class="form-control" value="{{$content->record->jumlah_lembar}}"
                                id="">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Arsip</label>
                            <input type="text" name="" class="form-control" value="{{$content->record->jenis}}"
                                id="">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-info">Simpan Daftar Berkas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
