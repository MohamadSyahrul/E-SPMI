<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDesk extends Model
{
    protected $primaryKey = "id";
    protected $table = "job_desk";
    protected $fillable = [
        'kode_job', 'id_jabatan','id_penanggung_jawab','deskripsi','tgl_terima'
    ];

    public function jabatan_jd()
    {
        return $this->belongsTo( Jabatan::class, 'id_jabatan', 'id' );
    }
    public function penanggung_jawab_jd()
    {
        return $this->belongsTo( PenanggungJawab::class, 'id_penanggung_jawab', 'id' );
    }
}
