<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Profil</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .card {
            width: 250px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }

        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #ccc;
            object-fit: cover;
        }

        .info {
            margin-top: 20px;
        }

        .info div {
            background: #e0e0e0;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="card">
        <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil">

        <div class="info">
            <div>Nama: {{ $nama }}</div>
            <div>Kelas: {{ $kelas }}</div>
            <div>NPM: {{ $npm }}</div>
        </div>
    </div>
</body>

</html>