@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('classification.update', $classification->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Kode Klasifikasi</label>
                                <input type="text" name="kode" id="" value="{{$classification->kode}}" class="form-control">
                            </div>
                            <div class="col-md-8">
                                <label for="">Kode Klasifikasi</label>
                                <textarea name="uraian" id="" class="form-control" cols="30">
                                    {{$classification->uraian}}
                                </textarea>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-info">Simpan klasifikasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection