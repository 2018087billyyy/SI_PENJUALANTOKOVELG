<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    public $incrementing = true;
    protected $fillable = ['id_customer','nama_customer', 'alamat','no_telpon'];
    public $timestamps = false;
}
