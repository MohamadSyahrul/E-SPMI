<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $primaryKey = "id";
    protected $table = "unit";
    protected $fillable = [
        'kode_unit', 'nama','id_jabatan','id_penanggung_jawab'
    ];

    public function jabatan_unit()
    {
        return $this->belongsTo( Jabatan::class, 'id_jabatan', 'id' );
    }
    public function penanggung_jawab()
    {
        return $this->belongsTo( PenanggungJawab::class, 'id_penanggung_jawab', 'id' );
    }
    public function standar()
    {
    	return $this->hasOne(Standar::class, 'id_unit', 'id');
    }
}
