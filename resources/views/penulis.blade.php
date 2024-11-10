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
        <h2>Our Writers</h2>
        <div style="display: flex; justify-content: center; align-items: center;">
            @foreach ($penulis as $p)
                <a href="{{ route('penulis.detail', ['penulisId' => $p->id]) }}">
                    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column">
                        <img style="width: 20rem; height: 20rem; border-radius: 99999px" src="{{ asset('assets/home.jpg') }}" alt="">
                        <h3>{{ $p->Nama }}</h3>
                        <p>{{ $p->Spesialisasi }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @endsection
</body>
</html>
