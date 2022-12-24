<?php

namespace App\Http\Requests\Producer;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProducersRequest extends FormRequest
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
          'salary.required' =>__('Please Insert Data'),
          'description.required' =>__('Please Insert Data'),
         'image.required' =>__('Please Insert Data'),
         'discount.required' =>__('Please Insert Data'),

      ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        $rules = [
            'name' => 'required|max:255',
            'public_unpublic' => 'required|max:255',
            'language_id' => 'required|max:255',
            'salary' => 'sometimes|max:50',
            'description' => 'sometimes',
            'discount' => 'sometimes|max:50',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:3000',

        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {

            $rules = [
                'name' => 'required|max:255',
                'public_unpublic' => 'required|max:255',
                'language_id' => 'required|max:255',
                'salary' => 'sometimes|max:50',
                'discount' => 'sometimes|max:50',
                'description' => 'sometimes',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
                ];

        }//end of if

        return $rules;

    }//end of rules




}

