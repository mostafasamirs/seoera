<?php

namespace App\Http\Requests\Client;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ClientProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        App::setlocale(Auth::user()->lang);
        return true;

    }

    public function messages()
    {
      return [
        'name.required' =>__('Please Insert Data'),
        'email.required' =>__('Please Insert Data'),
        'phone.required' =>__('Please Insert Data'),
        'password.required' =>__('Please Insert Data'),
        'password_confirmation.required' =>__('Please Insert Data'),
        'address.required' =>__('Please Insert Data'),
        'lang.required' =>__('Please Insert Data'),
        'image.required' =>__('Please Insert Photo'),

      ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'sometimes|max:50|unique:clients,phone,'.$this->id.'',
            'email' => 'sometimes|max:255|unique:clients,email,'.$this->id.'',
            'password' => 'sometimes|confirmed|max:255',
            'address' => 'sometimes|max:255',
            'language_id' => 'sometimes|max:255',
            'created_by' => 'sometimes|max:255',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'image.max' =>__('size too large 5 mb'),

        ];
    }
}
