<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    //
    protected $table = 'kontak';
    protected $fillable = ['kode','kelompok','alamat','tipe', 'iddaerah', 'nama','telp', 'kota','deskripsi'];
    protected $primaryKey  = 'kode';
    // public $timestamps = false;
    public $incrementing = false;

}
