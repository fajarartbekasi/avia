@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row justify-content-center" style="margin-top:-50px;">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-body">
                                    <div class="alert alert-danger" role="alert">
                                        Silahkan masukan data dibawah ini dengan benar dan lengkap.
                                    </div>
                                    <form action="{{route('satuan-kerja.store')}}" method="post">
                                        @csrf
                                        <div class="row d-flex align-items-center" >
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Kode Unit</label>
                                                    <input type="text" name="kode_unit" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Unit Kerja</label>
                                                    <input type="text" name="unit_kerja" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <button type="submit" class="btn btn-info">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM11 7C11 6.44772 10.5523 6 10 6C9.44771 6 9 6.44772 9 7L9 10.5858L7.70711 9.29289C7.31658 8.90237 6.68342 8.90237 6.29289 9.29289C5.90237 9.68342 5.90237 10.3166 6.29289 10.7071L9.29289 13.7071C9.68342 14.0976 10.3166 14.0976 10.7071 13.7071L13.7071 10.7071C14.0976 10.3166 14.0976 9.68342 13.7071 9.29289C13.3166 8.90237 12.6834 8.90237 12.2929 9.29289L11 10.5858V7Z" fill="#4A5568"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
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
                                                <a href="{{route('satuan-kerja.edit', $unit->id)}}" class="btn btn-outline-warning btn-sm">Edit Satuan</a>
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus Satuan</button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection