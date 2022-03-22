<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name'=>'required',
            'author'=>'required',
            'description'=>'required|min:20',
            'category'=>'required',
            'publisher'=>'required',
            'qty'=>'required'
        ];
    }
}
