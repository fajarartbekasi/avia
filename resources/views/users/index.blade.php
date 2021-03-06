@extends('layouts.app')


@section('content')
<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3">
            <li class="breadcrumb-item"><a href="#">Data Pengguna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom">
                    <div class="mt-3 mb-3">
                        <a href="{{route('invitations.create')}}" class="btn btn-info">Tambah Pengguna Baru</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table teble-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>
                                        <a href="{{route('invitations.edit',$user->id)}}">
                                            {{$user->name}}
                                        </a>
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->roles->implode('name',',')}}</td>
                                    <td>
                                        <form action="{{route('invitations.destroy', $user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('invitations.edit', $user->id)}}" class="btn btn-outline-info btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">
                                        Maaf untuk semetara data belum tersedia
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
