<?php

namespace App\Http\Requests\Sitting;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class SittingUpdateRequest extends FormRequest
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
        'title.required' =>__('Please Insert Data'),
        'description.required' =>__('Please Insert Data'),
        'logo.required' =>__('Please Insert Photo'),
        'image.required' =>__('Please Insert Photo'),
        'email.required' =>__('Please Insert Data'),
        'call.required' =>__('Please Insert Data'),
        'vist.required' =>__('Please Insert Data'),
        'icon.required' =>__('Please Insert Data'),
        'facebook.required' =>__('Please Insert Data'),
        'instagram.required' =>__('Please Insert Data'),
        'twitter.required' =>__('Please Insert Data'),
        'linkdein.required' =>__('Please Insert Data'),
        'image.max' =>__('size too large 3 mb'),
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
            'title' => 'required|max:255',
            'description' => 'sometimes',
            'logo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'backgroundlogin' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'icon' => 'sometimes|image|mimes:ico|max:3000',
            'email' => 'sometimes|max:255',
            'phone' => 'sometimes|max:50',
            'location' => 'sometimes|max:255',
            'link' => 'sometimes|max:400',
            'facebook' => 'sometimes|max:400',
            'linkedin' => 'sometimes|max:400',
        ];
    }
}
