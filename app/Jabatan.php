<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'kode_jabatan', 'nama'
    ];
}
