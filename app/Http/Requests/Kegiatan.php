<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kegiatan extends FormRequest
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
            'nama_kegiatan' => 'required|min:10',
            'id_jenis_kegiatan' => 'required',
            'tanggal' => 'required',
            'foto' => 'required',
            'keterangan' => 'required',
            'nama_pembuat' => 'required'
        ];
    }
}
