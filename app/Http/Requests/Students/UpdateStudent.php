<?php

namespace App\Http\Requests\Students;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudent extends FormRequest
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
            'first_name'    => ['required', 'string'],
            'second_name'   => ['required', 'string'],
            'third_name'    => ['required', 'string'],
            'last_name'     => ['required', 'string'],
            'email'         => 'required|email|unique:students,email,'.$this->route('student'),
        ];
    }
}
