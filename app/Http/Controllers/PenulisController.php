<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index(){
        $penulis = Penulis::all();

        return view('penulis')->with(['penulis' => $penulis]);
    }

    public function detail($penulisId){
        $penulis = Penulis::find($penulisId);
        $materis = $penulis->materis;

        return view('penulis-detail')->with(['penulis' => $penulis, 'materis' => $materis]);
    }
}
