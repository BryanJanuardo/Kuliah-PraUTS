<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($kategoriId){
        $kategori = Kategori::find($kategoriId);

        return view('materi-kategori')->with(['kategori' => $kategori]);
    }
}
