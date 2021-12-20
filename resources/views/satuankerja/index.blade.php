@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3 mb-3">
            <li class="breadcrumb-item"><a href="#">Satuan Kerja</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="pt-2">
                        <a href="{{route('satuan-kerja.create')}}" class="btn btn-info">Tambah Satuan Kerja</a>
                    </div>
                    <div class="pt-4">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Unit</th>
                                    <th>Unit Kerja</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($units as $unit)
                                    <tr>
                                        <td>{{$unit->kode_unit}}</td>
                                        <td>{{$unit->unit_kerja}}</td>
                                        <td>
                                            <form action="{{route('satuan-kerja.delete', $unit->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('satuan-kerja.edit', $unit->id)}}" class="btn btn-outline-info btn-sm">Edit Satuan Kerja</a>
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus Satuan Kerja</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty

                                    <tr >
                                        <td colspan="3">Maaf Data Belum terisi</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{$units->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
