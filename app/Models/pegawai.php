<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    public $incrementing = true;
    protected $fillable = ['id_pegawai','nama_pegawai', 'alamat','no_telpon'];
    public $timestamps = false;
}
