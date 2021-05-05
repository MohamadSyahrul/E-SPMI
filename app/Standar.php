<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standar extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'id_unit', 'id_sn','kode_sn','nama','id_penanggung_jawab','tgl_standar'
    ];
}
