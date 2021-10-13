@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h4>Data Upload</h4>

                        @role('admin')
                            <a href="{{route('upload.form')}}" class="btn btn-info">Upload File</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection