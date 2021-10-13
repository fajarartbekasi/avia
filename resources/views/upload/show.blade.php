@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center pt-3">
        <div class="row ">
            <div class="col-md-8">
                <div class="card border-0" style="width: 18rem;">
                    <div class="card-header border-bottom bg-white">
                        <h4>Detail Upload</h4>
                    </div>
                    <div class="card-body">
                        <img src="{{ url('storage/'. $showUpload->image) }}" class="card-img-top"  alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{$showUpload->record->classification->kode}}</h5>
                            <p class="card-text">{{$showUpload->judul}}</p>
                            <a href="{{route('upload.download', $showUpload->id)}}" class="btn btn-primary" >Download File</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection