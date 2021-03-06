@extends('layouts.app')

@section('content')
<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3 mb-3">
            <li class="breadcrumb-item"><a href="#">Rekap Arsip</a></li>
            <li class="breadcrumb-item active" aria-current="page">Input Kedalaman</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom">
                    <h4>Masukan Data dibawah ini dengan benar</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('update.kedalaman', $box->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Dokumen</label>
                                    <input type="date" name="tgl_doc" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah Lembar</label>
                                    <input type="text" name="jumlah_lembar" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">Simpan data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
