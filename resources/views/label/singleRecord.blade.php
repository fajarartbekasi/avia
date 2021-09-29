@extends('layouts.cetak')


@section('content')

<div class="container bg-white">
    <div class=" bg-white">
        <div class="mb-3 d-flex">
            <img src="{{asset('img/OJK_Logo.png')}}" width="15%" alt="">
            <div class="text-center">
                <h3>Label Berkas</h3>
            </div>
        </div>
        <div>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>{{$record->box->nomor_kotak}}</td>
                        <td>{{$record->box->unit->first()->kode_unit}}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            {{$record->classification->uraian}}, {{$record->aktif}}, {{$record->in_aktif}}, {{$record->tindak_lanjut}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection