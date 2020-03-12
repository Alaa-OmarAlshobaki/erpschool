<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImportStudent extends FormRequest
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
      'student_admission_no.required'=>__('dashboard.dashboard.validation.student_admission_no_required'),
      'student_admission_no.unique'=>__('dashboard.dashboard.validation.student_admission_no_unique'),
      'student_admission_no.numeric'=>__('dashboard.dashboard.validation.student_admission_no_numeric'),
      'student_admission_date.required'=>__('dashboard.dashboard.validation.student_admission_date_required'),
      'student_firstname.required'=>__('dashboard.dashboard.validation.student_firstname_required'),
      'student_middlename.required'=>__('dashboard.dashboard.validation.student_middlename_required'),
      'student_lastname.required'=>__('dashboard.dashboard.validation.student_lastname_required'),
      'email.required'=>__('dashboard.dashboard.validation.email_required'),
      'email.unique'=>__('dashboard.dashboard.validation.email_unique'),
      'email.email'=>__('dashboard.dashboard.validation.email_email'),
      'password.required'=>__('dashboard.dashboard.validation.password_required'),
      'password.min'=>__('dashboard.dashboard.validation.password_min'),
      'phone.required'=>__('dashboard.dashboard.validation.phone_required'),
      'phone.min'=>__('dashboard.dashboard.validation.phone_min'),
      'phone.unique'=>__('dashboard.dashboard.validation.phone_unique'),
      'phone.numeric'=>__('dashboard.dashboard.validation.phone_numeric'),
      'gender.required'=>__('dashboard.dashboard.validation.gender_required'),
      'city.required'=>__('dashboard.dashboard.validation.city_required'),
      'state.required'=>__('dashboard.dashboard.validation.state_required'),
      'street.required'=>__('dashboard.dashboard.validation.street_required'),
      'placeOfBirth.required'=>__('dashboard.dashboard.validation.placeOfBirth_required'),
      'ID_number.required'=>__('dashboard.dashboard.validation.ID_number_required'),
      'ID_number.numeric'=>__('dashboard.dashboard.validation.ID_number_numeric'),
      'ID_number.unique'=>__('dashboard.dashboard.validation.ID_number_unique'),
      'statuse.required'=>__('dashboard.dashboard.validation.statuse_required'),
      'avatar.required'=>__('dashboard.dashboard.validation.avatar_required'),
      'guardians_id.required'=>__('dashboard.dashboard.validation.guardians_id_required'),





          ];
    }

    public function rules()
    {
        return [
               //
               'student_admission_no'=>'numeric|required|unique:students,student_admission_no,'.$this->id,
               'student_admission_date' =>'required',
               'student_firstname'=>'required',
               'student_middlename'=>'required',
               'student_lastname'=>'required',
               'email'=>'required|email|unique:students,email,'.$this->id,
               'password'=>'required|min:12',
               'phone'=>'required|min:11|numeric|unique:students,phone,'.$this->id,
               'gender'=>'required',
               'city'=>'required',
               'state'=>'required',
               'street'=>'required',
               'placeOfBirth'=>'required',
               'ID_number'=>'numeric|required|unique:students,ID_number,'.$this->id,
               'statuse'=>'required',
               'avatar'=>'required',
               'guardians_id'=>'required',
            //
        ];
    }
}
