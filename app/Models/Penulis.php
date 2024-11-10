<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = 'penulis';

    protected $fillable = [
        'Nama',
        'Spesialisasi'
    ];

    protected function materis(){
        return $this->hasMany(Materi::class);
    }
}
