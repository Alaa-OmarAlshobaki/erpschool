<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAcademic extends FormRequest
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
    public function messages(){
        return[
            'Start_Year.required'=>__('dashboard.dashboard.validation.Start_Year_required'),
            'Start_Month.required'=>__('dashboard.dashboard.validation.Start_Month_required'),
            'End_Year.required'=>__('dashboard.dashboard.validation.End_Year_required'),
            'End_Month.required'=>__('dashboard.dashboard.validation.End_Month_required'),
            'status.required'=>__('dashboard.dashboard.validation.status_required')
            




          ];
    }

    public function rules()
    {
        return [
            'Start_Year'=>'required',
            'Start_Month' =>'required',
            'End_Year'=>'required',
            'End_Month'=>'required',
            'status'=>'required',
        ];
    }
}
