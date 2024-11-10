<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
        <div style="display: flex; justify-content: left; align-items: center;">
            <img style="width: 100px; height: 100px;" src="{{ asset('assets/home.jpg') }}" alt="">
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                <h3>{{ $penulis->Nama }}</h3>
                <p>{{ $penulis->Spesialisasi }}</p>
            </div>
        </div>

        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            @foreach ($materis as $materi)
                <div class="card" style="width: 50rem; margin-top: 20px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $materi->Nama }}</h5>
                        <div><span>{{ $materi->Tanggal }}</span> | by: <span>{{ $materi->penulis->Nama }}</span></div>
                        <p class="card-text">{{ $materi->Deskripsi }}</p>
                        <a href="{{ route('materi.detail', ['kategoriId' => $materi->kategori->id, 'materiId' => $materi->id]) }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
</body>
</html>
