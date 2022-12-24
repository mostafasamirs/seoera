<?php

namespace App\Http\Requests\Languages;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class LanguagesRequest extends FormRequest
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
            'title.required' => __('Please Insert Data'),
            'image.required' => __('Please Insert Data'),
            'slogan.required' => __('Please Insert Data'),

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
            'title' => ['required', 'max:255', 'unique:languages'],
            'slogan' => ['required', 'unique:languages', 'max:255'],
            // 'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
            'image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:3000'],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {

            $rules = [
                'title' => 'sometimes|max:255|unique:languages,title,'.$this->language->id.'',
                'slogan' => 'sometimes|max:255|unique:languages,slogan,'.$this->language->id.'',
                'image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:3000'],
            ];
        } //end of if

        return $rules;
    } //end of rules




}
