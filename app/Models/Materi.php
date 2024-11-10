<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';

    protected $fillable = [
        'Nama',
        'Tanggal',
        'Deskripsi',
        'Konten'
    ];

    protected function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    protected function penulis(){
        return $this->belongsTo(Penulis::class, 'penulis_id');
    }
}
