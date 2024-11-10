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
    @if ($materi == null)
    <div style="display: flex; justify-content: center; align-items: center; width: 100%; flex-direction: column">
        <h2>Not Found</h2>
        <a href="{{ route('home') }}" class="btn btn-primary">Back Home</a>
    </div>
    @else
        <h2>{{ $materi->kategori->Nama }}</h2>
        <div style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column">
            <img style="width: 100%; height: 400px" src="{{ asset('assets/home.jpg') }}" alt="">
            <div><span>{{ $materi->Tanggal }}</span> | by: <span>{{ $materi->penulis->Nama }}</span></div>
            <p>{{ $materi->Konten }}
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit libero quos quo. Beatae maxime incidunt aperiam dignissimos, itaque rerum iure dolor enim? Voluptate dolorum earum odit corrupti ipsam asperiores. Sint!
            </p>
        </div>
    @endif
    @endsection
</body>
</html>
