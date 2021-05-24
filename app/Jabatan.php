<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $primaryKey = "id";
    protected $table = "jabatan";
    protected $fillable = [
        'kode_jabatan', 'nama'
    ];
    public function PenanggungJawab()
    {
    	return $this->hasMany(PenanggungJawab::class, 'id_jabatan', 'id');
    }
}
