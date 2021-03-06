<?php

namespace App\Http\Requests\BankManagement;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BankAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $request = [
            'bank_name' => [
                'required',
                'max:255',
            ],
            'iban' => [
                'required',
                'max:255',
            ],
            'swift' => [
                'required',
                'max:255',
            ],
            'account_holder' => [
                'required',
                'max:255',
            ],
            'bank_address' => [
                'required',
                'max:255',
            ],
            'account_holder_address' => [
                'required',
                'max:255',
            ],
            'country_id' => [
                'required',
                Rule::exists('countries', 'id')
                    ->where('is_active', ACTIVE),
            ],
            'is_active' => [
                'required',
                Rule::in(array_keys(active_status())),
            ],
        ];

        if ($this->has('reference_number')) {
            $request['reference_number'] = [
                'required',
                'max:255'
            ];
        }

        return $request;
    }
}
