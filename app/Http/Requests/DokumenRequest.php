<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokumenRequest extends FormRequest
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
            'id_standar' => 'required',
            'nama' => 'required',
            'dokumen' => 'required|mimes:doc,docx,pdf',
            'tgl_upload' => 'required'
        ];
    }
}
