<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';
    public $incrementing = true;
    protected $fillable = ['id_penjualan','nama_customer', 'id_barang','total'];
    public $timestamps = false;
}
