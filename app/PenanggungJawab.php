<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenanggungJawab extends Model
{
    protected $primaryKey = "id";
    protected $table = "penanggung_jawab";

    protected $fillable = [
        'nik', 'id_jabatan','nama','email','no_hp','profil'
    ];
    public function jabatan()
    {
        return $this->belongsTo( Jabatan::class, 'id_jabatan', 'id' );
    }
    public function Unit()
    {
    	return $this->hasOne(Unit::class, 'id_penanggung_jawab', 'id');
    }
    public function job_desk()
    {
    	return $this->hasMany(JobDesk::class, 'id_penanggung_jawab', 'id');
    }
    public function standar()
    {
    	return $this->hasOne(Standar::class, 'id_penanggung_jawab', 'id');
    }
    
}
