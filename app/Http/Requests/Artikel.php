<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Artikel extends FormRequest
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
            'judul_artikel' => 'required|min:10',
            'tanggal' => 'required',
            'foto' => 'required|image|max:500|mimes:jpeg,jpg,bmp,png',
            'isi' => 'required|min:100',
            'author' => 'required'
        ];
    }
}
