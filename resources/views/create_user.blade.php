@extends('layouts.app')

@section('content')
    <div>
        <h1>Buat Pengguna Baru</h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama"><br>
            </div>

            <div class="mb-3">
                <label for="npm">NPM:</label><br>
                <input type="text" id="npm" name="npm"><br>
            </div>

            <div class="mb-3">
                <label for="kelas_id">Kelas:</label><br>
                <select name="kelas_id" id="kelas_id">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select><br>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection