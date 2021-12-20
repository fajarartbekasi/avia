@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pt-3 mb-3">
                <li class="breadcrumb-item"><a href="#">Upload</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom">
                        <h4>Data Upload</h4>
                    </div>
                    <div class="card-body">
                        @role('admin')
                            <a href="{{route('upload.form')}}" class="btn btn-info mb-3">Upload File</a>
                        @endrole

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Classifikasi</th>
                                    <th>Nama file</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($uploads as $upload)
                                    <tr>
                                        <td>{{$upload->record->classification->kode}}</td>
                                        <td>{{$upload->judul}}</td>
                                        <td>
                                            <a href="{{route('upload.show', $upload->id)}}" class="btn btn-info btn-sm">Show File</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$uploads->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
