@extends('layouts.app')


@section('content')
<div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb pt-3">
            <li class="breadcrumb-item"><a href="#">Invitations</a></li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-header bg-white border-bottom">
                    <div class="mt-3 mb-3">
                        <a href="{{route('invitations.create')}}" class="btn btn-info">Tambah User Baru</a>
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