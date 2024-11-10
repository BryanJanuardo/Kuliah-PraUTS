<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;


class MateriController extends Controller
{
    public function index(){
        $materis = Materi::all();

        return view('home')->with(['materis' => $materis]);
    }

    public function detail($kategoriId, $materiId){
        $materi = Materi::find($materiId);

        return view('detail')->with(['materi' => $materi]);
    }

    public function popular(){
        $materis = Materi::orderBy('Tanggal', 'desc')->paginate(3);

        return view('popular')->with(['materis' => $materis]);
    }

    public function search($query){
        $materi = Materi::where('Nama', 'LIKE', '%' . $query . '%')->first();
        // dd($materi);
        return view('search')->with(['materi' => $materi]);
    }
}
