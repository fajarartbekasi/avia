@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 >Form upload scan</h5>
                    <form action="{{route('upload.file')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Kode clasifikasi</label>
                                <select name="record_id" class="form-control" id="">
                                    <option value="">Pilih kode clasifikasi</option>
                                    @foreach($records as $record)
                                        <option value="{{$record->id}}">{{$record->classification->kode}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Nama Berkas</label>
                                <input type="text" name="judul" id="" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="">File</label>
                                <input type="file" name="image" id="" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-info mt-3">Simpan file</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection