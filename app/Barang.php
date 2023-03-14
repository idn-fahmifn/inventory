<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $guarded = [];

    public function ruangan()
    {
        return $this->belongsTo('App\Ruangan', 'id_ruangan');
    }
    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }
}
