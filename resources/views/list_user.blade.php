@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0">Daftar Pengguna</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah</a>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            @include('components.user-table', ['users' => $users])
        </div>
    </div>
@endsection