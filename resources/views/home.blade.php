@extends('layouts.app')

@section('content')

<div class="container pt-3">
    <div class="mb-3 pt-3">
        <div class="d-flex">
            <h4 class="mr-1">Hello</h4>
            <h4>Selamat datang kembali <h4 class="text-info ml-1">{{ Auth::user()->name }}</h4></h4>
        </div>

    </div>
    <nav aria-label="breadcrumb ">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <div class="row">
        @role('admin')
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-secondary">Total</h6>
                                <h5>Classification</h5>
                            </div>
                            <div>
                                <h5 class="text-info">{{$classifications}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-secondary">Total</h6>
                                <h5>Unit</h5>
                            </div>
                            <div>
                                <h5 class="text-info">{{$units}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-secondary">Total</h6>
                                <h5>Kotak</h5>
                            </div>
                            <div>
                                <h5 class="text-info">{{$boxs}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-secondary">Total</h6>
                                <h5>Rekam Arsip</h5>
                            </div>
                            <div>
                                <h5 class="text-info">{{$records}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-secondary">Total</h6>
                                <h5>User</h5>
                            </div>
                            <div>
                                <h5 class="text-info">{{$users}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-secondary">Total</h6>
                                <h5>Daftar isi berkas</h5>
                            </div>
                            <div>
                                <h5 class="text-info">{{$contents}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endrole

        @role('petugas')
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-secondary">Total</h6>
                                <h5>Rekam Arsip</h5>
                            </div>
                            <div>
                                <h5 class="text-info">{{$records}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-secondary">Total</h6>
                                <h5>Daftar isi berkas</h5>
                            </div>
                            <div>
                                <h5 class="text-info">{{$contents}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="text-secondary">Total</h6>
                                <h5>Upload</h5>
                            </div>
                            <div>
                                <h5 class="text-info">{{$uploads}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endrole
    </div>
</div>

@endsection
