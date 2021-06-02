<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Butirstandar extends Model
{
    protected $primaryKey = "id";
    protected $table = "butirstandars";
    protected $fillable = [
        'kode_butir', 'id_standar','isi','indikator','tgl_butir'
    ];
    public function standar_btr()
    {
    	return $this->belongsTo(Standar::class, 'id_standar', 'id');
    }
    public function deskriptor()
    {
    	return $this->hasMany(Deskriptor::class, 'id_butir', 'id');
    }
    
}
