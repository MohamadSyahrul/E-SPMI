<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Butirstandar extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'kode_butir', 'id_standar','isi','indikator','tgl_butir'
    ];
}
