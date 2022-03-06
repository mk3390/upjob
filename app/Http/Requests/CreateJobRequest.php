<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'title'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'speciality_id'=>'required',
            'edit_scope'=>'required',
            'time'=>'required',
            'level_experience'=>'required',
            'budget'=>'required'
        ];
    }
}
