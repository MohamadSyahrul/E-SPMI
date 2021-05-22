<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandarNasional extends Model
{
    protected $table = "standar_nasional";
    protected $primaryKey = "id";
    protected $fillable = [
        'kode_sn', 'nama_sn','tanggal_sn'
    ];
}
