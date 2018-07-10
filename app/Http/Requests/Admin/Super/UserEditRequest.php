<?php

namespace rni\Http\Requests\Admin\Super;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'password' => 'alphanum|min:6|confirmed',
            'fullname' => 'required',
            'phoneNumber' => 'numeric',
            'handphoneNumber' => 'numeric',
            'identityNumber' => 'numeric',  
            'roleId' => 'required',
        ];
    }
}
