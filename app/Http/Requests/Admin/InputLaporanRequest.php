<?php

namespace rni\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InputLaporanRequest extends FormRequest
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
            'deskripsiSingkat' => 'required',
            'deskripsi' => 'required',
            'kategoriLaporan' => 'required',
            'kategoriPengirim' => 'required',
            'fullname' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric',
            'handphoneNumber' => 'numeric',
            'identityNumber' => 'numeric',
            'jalurId' => 'required',            
        ];
    }
}
