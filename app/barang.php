<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Barang extends Model
{
    use Sortable;
    //
    protected $table = 'barang';
    protected $fillable = ['kode','kelompok','golongan','tipe','nama','merk','deskripsi', 'jenis', 'hbeli', 'harga1', 'harga2', 'harga3', 'harga4', 'harga5'];
    protected $primaryKey  = 'kode';
    // public $timestamps = false;
    public $incrementing = false;
    public $sortable = ['kode', 'nama', 'jenis', 'merk','harga1'];
}
