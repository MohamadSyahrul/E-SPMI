<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standar extends Model
{
    protected $primaryKey = "id";
    protected $table = "standar";
    protected $fillable = [
        'id_unit', 'id_sn','kode_standar','nama','id_penanggung_jawab','tgl_standar'
    ];

    public function unit_standar()
    {
        return $this->belongsTo( Unit::class, 'id_unit', 'id' );
    }
    public function penanggung_jawab_standar()
    {
        return $this->belongsTo( PenanggungJawab::class, 'id_penanggung_jawab', 'id' );
    }
    public function standar_nasional_s()
    {
        return $this->belongsTo( StandarNasional::class, 'id_sn', 'id' );
    }
    public function jadwal()
    {
        return $this->hasMany( Jadwal::class, 'id_standar', 'id' );
    }
    public function dokumen()
    {
        return $this->hasOne( Dokumenpendukung::class, 'id_standar', 'id' );
    }
}
