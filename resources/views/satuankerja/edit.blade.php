@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3 mb-3">
            <li class="breadcrumb-item"><a href="#">Satuan Kerja</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Satuan</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-header border-bottom bg-white">
                    <h4>Silahkan Edit data satuan dibawah ini dengan benar</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('satuan-kerja.update', $unit->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Kode Unit</label>
                            <input type="text" name="kode_unit" class="form-control" value="{{$unit->kode_unit}}" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Unit Kerja</label>
                            <input type="text" name="unit_kerja" class="form-control" value="{{$unit->unit_kerja}}" id="">
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-info">
                                Update Satuan kerja
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection