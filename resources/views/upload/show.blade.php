@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="card-body">
                        <h4>Detail Upload</h4>
                        <img src="{{ url('storage/'. $showUpload->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{$showUpload->record->classification->kode}}</h5>
                            <p class="card-text">{{$showUpload->judul}}</p>
                            <a href="{{route('upload.download', $showUpload->id)}}" class="btn btn-primary" >Go somewhere</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection