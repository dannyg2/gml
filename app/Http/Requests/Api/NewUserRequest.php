<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class NewUserRequest extends FormRequest
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
            'name'=>'required|alpha|max:100|min:5',
            'last_name'=>'required|alpha|max:100',
            'document_number'=>'required|integer|unique:App\Models\User,document_number',
            'email'=>'required|email|max:100|unique:App\Models\User,email',
            'country'=>'required',
            'address'=>'required|max:180',
            'movil'=>'required|integer|digits:10',
        ];
    }
}
