<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StaffRequest extends FormRequest
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
            'dateBirth'  =>  'required|date',
            'name' => 'required|min:2|max:255',
            'Surname' => 'required|min:2|max:255',
            'Education' => 'required|min:3|max:255',
            'Post' => 'required|min:1|max:255',
            'Salary' => 'required|min:1|max:255'
        ];
    }
}
