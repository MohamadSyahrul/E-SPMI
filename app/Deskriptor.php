<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deskriptor extends Model
{
    protected $primaryKey = "id";
    protected $table = "deskriptors";
    protected $fillable = [
        'id_standar', 'id_butir','deskripsi','pengendali_dokumen'
    ];
    public function butir()
    {
    	return $this->belongsTo(Butirstandar::class, 'id_butir', 'id');
    }
    public function standar()
    {
    	return $this->belongsTo(Standar::class, 'id_standar', 'id');
    }
}
