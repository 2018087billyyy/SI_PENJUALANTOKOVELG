<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemasukan extends Model
{
    use HasFactory;

    protected $table = 'pemasukan';
    protected $primaryKey = 'id_pemasukan';
    public $incrementing = true;
    protected $fillable = ['id_pemasukan','id_pegawai', 'id_penjualan','uang_masuk'];
    public $timestamps = false;
}
