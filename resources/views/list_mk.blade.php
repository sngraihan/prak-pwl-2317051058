@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('success'))
        <div class="alert alert-success">
             {{ session('success') }}
            <button class="close-btn" onclick="this.parentElement.remove()">×</button>
        </div>
    @endif

    <h1>Daftar Mata Kuliah</h1>
    <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah Baru</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mks as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td style="display:flex; gap:10px; align-items:center;">
                        <a href="{{ route('matakuliah.edit', $mk->id) }}" 
                           style="background:linear-gradient(135deg,#93c5fd,#3b82f6);
                                  color:white;
                                  border:none;
                                  padding:6px 14px;
                                  border-radius:8px;
                                  font-weight:600;
                                  text-decoration:none;
                                  transition:0.2s;">
                             Edit
                        </a>

                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" 
                              style="display:inline;" 
                              onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    style="background:linear-gradient(135deg,#fca5a5,#ef4444);
                                           color:white;
                                           border:none;
                                           padding:6px 14px;
                                           border-radius:8px;
                                           font-weight:600;
                                           cursor:pointer;
                                           transition:0.2s;">
                                 Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        a[href*="edit"]:hover, button[type="submit"]:hover {
            filter: brightness(1.1);
            transform: scale(1.03);
        }

        .alert {
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:12px 16px;
            margin-bottom:15px;
            border-radius:10px;
            font-weight:600;
            animation: fadeIn 0.3s ease-in;
        }
        .alert-success {
            background:#0f5132;
            color:#d1fae5;
        }
        .close-btn {
            background:none;
            border:none;
            font-size:18px;
            color:inherit;
            cursor:pointer;
        }
        @keyframes fadeIn {
            from {opacity:0; transform:translateY(-5px);}
            to {opacity:1; transform:translateY(0);}
        }
    </style>

    <script>
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(el => el.remove());
        }, 3000);
    </script>
</div>
@endsection
