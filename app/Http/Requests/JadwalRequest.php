<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_standar'  => 'required',
            'id_auditor'  => 'required',
            'prodi'  => 'required',
            'tahun'  => 'required',
            'tgl_mulai'  => 'required',
            'tgl_selesai'  => 'required'
        ];
    }
}
