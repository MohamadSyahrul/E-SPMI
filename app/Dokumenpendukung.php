<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumenpendukung extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'id_standar','nama','dokumen','tgl_upload'
    ];
    public function standar()
    {
        return $this->belongsTo( Standar::class, 'id_standar', 'id' );
    }
}
