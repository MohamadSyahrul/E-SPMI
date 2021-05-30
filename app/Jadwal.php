<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'kode_jadwal','id_standar','id_auditor','prodi','tahun','tgl_mulai','tgl_selesai'
    ];

    public function standar()
    {
        return $this->belongsTo( Standar::class, 'id_standar', 'id' );
    }
    public function auditor()
    {
        return $this->belongsTo( User::class, 'id_auditor', 'id' );
    }
}
