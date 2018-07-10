<?php

namespace rni\Http\Requests\Admin\Super;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => 'required|alphanum|min:6|confirmed',
            'fullname' => 'required',
            'phoneNumber' => 'numeric',
            'handphoneNumber' => 'numeric',
            'identityNumber' => 'numeric',
            'roleId' => 'required',
        ];
    }
}
