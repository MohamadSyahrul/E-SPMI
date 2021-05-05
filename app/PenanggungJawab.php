<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenanggungJawab extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'nip', 'id_jabatan','nama','email','no_hp','profil'
    ];
}
