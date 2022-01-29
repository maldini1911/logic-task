<?php

namespace App\Http\Requests\StudentGrades;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentGrade extends FormRequest
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
        // return [
        //     'grade'              => 'requried',
        //     'seating_number'     => 'required',
        //     'student_id'        => 'required|email|unique:providers',
        // ];
    }
}
