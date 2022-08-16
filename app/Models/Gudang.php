<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = ['nama_barang', 'stock', 'keterangan', 'tgl'];
    protected $table = 'gudangs';
}
