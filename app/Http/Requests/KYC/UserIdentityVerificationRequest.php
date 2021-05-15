<?php

namespace App\Http\Requests\KYC;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserIdentityVerificationRequest extends FormRequest
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
            'identification_type' => [
                'required',
                'integer',
                Rule::in(array_keys(identification_type_with_id()))
            ],
            'front_image' => [
                'required',
                'image',
                'mimes:jpeg,png',
                'max:2048',
            ],
            'back_image' => [
                Rule::requiredIf(function () {
                    return ($this->identification_type != IDENTIFICATION_TYPE_WITH_ID_PASSPORT);
                }),
                'image',
                'mimes:jpeg,png',
                'max:2048',
            ],
        ];
    }
}
