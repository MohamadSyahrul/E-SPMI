<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDesk extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'kode_job', 'id_jabatan','id_penanggung_jawab','deskripsi','tgl_terima'
    ];
}
