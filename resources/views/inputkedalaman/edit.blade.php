@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h4>Form input kedalaman</h4>
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