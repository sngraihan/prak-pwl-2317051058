@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
             {{ session('success') }}
            <button class="close-btn" onclick="this.parentElement.remove()">×</button>
        </div>
    @endif

    <div class="d-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0">Daftar Pengguna</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah</a>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            @include('components.user-table', ['users' => $users])
        </div>
    </div>

    <style>
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
@endsection
