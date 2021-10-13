@extends('layouts.app')

@section('content')
<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3 mb-3">
            <li class="breadcrumb-item"><a href="#">Kotak Arsip</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Kotak arsip</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 pb-5">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('kotak-arsip.update', $boxs->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nomor Kontak</label>
                                    <input type="text" name="nomor_kotak" id=""  class="form-control">
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