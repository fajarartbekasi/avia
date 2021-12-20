@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-3 mb-3">
                <li class="breadcrumb-item"><a href="#">Satuan Kerja</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Satuan</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-header border-bottom bg-white">
                        <h4>Masukan Data Satuan Dibawah Ini Dengan Benar</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('satuan-kerja.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Unit</label>
                                <input type="text" name="kode_unit" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Unit Kerja</label>
                                <input type="text" name="unit_kerja" class="form-control" id="">
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-info">
                                    Simpan Satuan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
