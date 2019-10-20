<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranLomba extends FormRequest
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
            //
            'nisn' => 'required',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'id_kegiatan' => 'required',
            'pengantar' => 'required',
            'cerita' => 'required',
            'email_guru' => 'required'
        ];
    }
}
