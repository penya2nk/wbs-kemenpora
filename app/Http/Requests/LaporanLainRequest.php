<?php

namespace rni\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaporanLainRequest extends FormRequest
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
            'email' => 'email',
            'phoneNumber' => 'numeric',
            'handphoneNumber' => 'numeric',
            'identityNumber' => 'numeric',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }
}
