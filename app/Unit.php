<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'kode_unit', 'nama','id_jabatan','id_penanggung_jawab'
    ];
}
