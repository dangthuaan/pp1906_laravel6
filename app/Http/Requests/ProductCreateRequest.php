<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
//use App\Providers\AppServiceProvider;

class ProductCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::check()) {
            return true;
        }

        return false;
    }   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:products|max:255', //unique: chỉ cho phép 1 giá trị duy nhất, ko có trùng lặp
            'author' => 'required', //'author' => ['nullable']
            'publisher' => 'required',
            'publish_date' => 'required|date',
            'language' => 'required|string',
            'price' => 'required|integer',
        ];
    }

    public function messages()
{
    return [
        'title.unique' => 'The book title has already been taken!'
    ];
}
}
