@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3">
            <li class="breadcrumb-item"><a href="#">Klasifikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body ">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="pt-3 pb-3">
                        <a href="{{route('classification.create')}}" class="btn btn-outline-info">Tambah Klasifikasi</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Klasifikais</th>
                                    <th>Uraian Klasifikasi</th>
                                    <th>Aktif</th>
                                    <th>In Aktif</th>
                                    <th>Tindak Lanjut</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($classifications as $classification)
                                <tr>
                                    <td>{{$classification->kode_klasifikasi}}</td>
                                    <td>{{$classification->uraian_klasifikasi}}</td>
                                    <td>{{$classification->aktif}}</td>
                                    <td>{{$classification->in_aktif}}</td>
                                    <td>{{$classification->tindak_lanjut}}</td>
                                    <td><a href="{{route('classification.edit', $classification->id)}}" class="btn btn-outline-info btn-sm">Edit
                                            Kode Klasifikasi</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">Maaf data belum tersedia</td>
                                </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{$classifications->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
