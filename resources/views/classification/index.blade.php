@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pt-3 pb-3">
                <a href="{{route('classification.create')}}" class="btn btn-outline-info">Tambah classification</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Uraian</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($classifications as $classification)
                        <tr>
                            <td>{{$classification->kode}}</td>
                            <td>{{$classification->uraian}}</td>
                            <td><a href="{{route('classification.edit', $classification->id)}}" class="btn btn-outline-warning btn-sm">Edit Kode</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Maaf data belum tersedia</td>
                        </tr>

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection