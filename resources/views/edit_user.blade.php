@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="h3">Edit Pengguna</h1>

    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ $user->nama }}" required>
                </div>

                <div class="col-md-6">
                    <label for="npm" class="form-label">NIM</label>
                    <input type="text" id="npm" name="npm" class="form-control" value="{{ $user->nim }}" required>
                </div>

                <div class="col-md-6">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select id="kelas_id" name="kelas_id" class="form-select" required>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}" {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                                {{ $kelasItem->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/user" class="btn btn-outline-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
