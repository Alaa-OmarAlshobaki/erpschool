<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInstit extends FormRequest
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
      'Institution_Name.required'=>__('dashboard.dashboard.validation.Institution_Name_required'),
      'Institution_Name.unique'=>__('dashboard.dashboard.validation.Institution_Name_unique'),
      'Institution_Address.required'=>__('dashboard.dashboard.validation.Institution_Address_required'),
      'Institution_Email.required'=>__('dashboard.dashboard.validation.Institution_Email_required'),
      'Institution_Email.unique'=>__('dashboard.dashboard.validation.Institution_Email_unique'),
      'Institution_Mobile.required'=>__('dashboard.dashboard.validation.Institution_Mobile_required'),
      'Institution_Mobile.unique'=>__('dashboard.dashboard.validation.Institution_Mobile_unique'),
      'Institution_Fax.required'=>__('dashboard.dashboard.validation.Institution_Fax_required'),
      'Institution_Fax.unique'=>__('dashboard.dashboard.validation.Institution_Fax_unique'),
      'Country.required'=>__('dashboard.dashboard.validation.Country_required'),
      'Currency_Type.required'=>__('dashboard.dashboard.validation.Currency_Type_required'),
      'Currency_Type.numeric'=>__('dashboard.dashboard.validation.Currency_Type_numeric'),
      'Language.required'=>__('dashboard.dashboard.validation.Language_required'),
      'codechek.required'=>__('dashboard.dashboard.validation.codechek_required'),
      'Institution_Code.required'=>__('dashboard.dashboard.validation.Institution_Code_required'),
      'Institution_Code.numeric'=>__('dashboard.dashboard.validation.Institution_Code_numeric'),
      'Institution_Code.unique'=>__('dashboard.dashboard.validation.Institution_Code_unique'),
      'timezone.required'=>__('dashboard.dashboard.validation.timezone_required'),
      





          ];
    }






    public function rules()
    {
        // dd($this->Institution_Name);
        return [
            //
            'Institution_Name'=>'required|unique:institutions,Institution_Name,'.$this->id,
            'Institution_Address' =>'required',
            'Institution_Email'=>'required|email',
            'Institution_Mobile'=>'required|unique:institutions,Institution_Mobile,'.$this->id,
            'Institution_Fax'=>'required|unique:institutions,Institution_Fax,'.$this->id,
            'Country'=>'required',
            'Currency_Type'=>'required',
            'Language'=>'required',
            'codechek'=>'required',
            'Institution_Code'=>'numeric|required|unique:institutions,Institution_Code,'.$this->id,
            'timezone'=>'required',

        ];
    }
}
