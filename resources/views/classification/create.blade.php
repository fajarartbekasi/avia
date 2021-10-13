@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3">
            <li class="breadcrumb-item"><a href="#">Classification</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah classification</li>
        </ol>
    </nav>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-header bg-white border-bottom">
                    <h4>Masukan data klasifikasi dibawah ini dengan benar</h4>
                </div>
                <div class="card-body">

                    <form action="{{route('classification.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                                <label for="">Kode Klasifikasi</label>
                                <input type="text" name="kode" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Uraian Klasifikasi</label>
                                <textarea name="uraian" id="" class="form-control" cols="30"></textarea>
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