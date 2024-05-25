<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suplier extends Model
{
    use HasFactory;

    protected $table = 'suplier';
    protected $primaryKey = 'id_suplier';
    public $incrementing = true;
    protected $fillable = ['id_suplier','nama_suplier', 'no_telpon', 'perusahaan'];
    public $timestamps = false;
}
