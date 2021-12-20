@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3">
            <li class="breadcrumb-item"><a href="#">Klasifikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Klasifikasi</li>
        </ol>
    </nav>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom">
                    <h4>Masukan data klasifikasi dibawah ini dengan benar</h4>
                </div>
                <div class="card-body">

                    <form action="{{route('classification.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                                <label for="">Kode Klasifikasi</label>
                                <input type="text" name="kode_klasifikasi" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Uraian kode Klasifikasi</label>
                                <textarea name="uraian_klasifikasi" id="" class="form-control" cols="30"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Aktif</label>
                                <input type="text" name="aktif" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">In Aktif</label>
                                <input type="text" name="in_aktif" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tindak Lanjut</label>
                                <input type="text" name="tindak_lanjut" id="" class="form-control">
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-info">Simpan klasifikasi</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
