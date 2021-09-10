@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Nomor Kotak
                                </th>
                                <th>
                                    Nomor Portgal
                                </th>
                                <th>
                                    Options
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($records as $record)
                            <tr>
                                <td>{{$record->box->nomor_kotak}}</td>
                                <td>{{$record->nomor_portagel}}</td>
                                <td>
                                    <a href="{{route('rekap-arsip.show', $record->id)}}" class="btn btn-outline-info btn-sm">View Detail Rekap Arsip</a>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection