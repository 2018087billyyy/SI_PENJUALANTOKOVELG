<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';
    protected $primaryKey = 'id_pembelian';
    public $incrementing = true;
    protected $fillable = ['id_pembelian','id_suplier', 'id_barang','total'];
    public $timestamps = false;
}
