<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicStoreRequest extends FormRequest
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
            'title' => 'required|min:3',
            'description' => 'required|min:50',
            'thumb' => 'nullable|url',
            'price' => 'required|numeric',
            'series' => 'required|min:5',
            'sale_date' => 'required|date_format:Y/m/d',
            'type' => 'required|min:5',
        ];
    }
}
