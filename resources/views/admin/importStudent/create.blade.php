@extends('layout.index')

@section('content')

<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class=" d-flex justify-content-center">@lang('dashboard.dashboard.Edit_Student_Import') </h1>
      </header>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>@lang('dashboard.dashboard.Student_Import') </h4>
            </div>
            <div class="card-body form-inline">
              <p>@lang('dashboard.dashboard.Profile_information')</p>
            <form action="{{route('import.student')}}" method="POST" enctype="multipart/form-data">
                @csrf  
                
             
             <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="img_url">@lang('dashboard.dashboard.img')</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="avatar" id="img_url">
                    <label class="custom-file-label"></label>
                </div>
            </div>
                {{-- <div class="form-group col-2">       
                    <img src=""  class="img-fluid rounded-circle hoverable rounded float-left" alt="Responsive image">
                </div> --}}
                </div>
                <div class="form-group col-4">
                  <label>@lang('dashboard.dashboard.student_admission_no')</label>
                <input type="number" name="student_admission_no" value="" placeholder="student admission no" class="form-control">
                </div>
                <div class="form-group col-4">       
                  <label>@lang('dashboard.dashboard.student_admission_date')</label>
                <input type="date" name="student_admission_date" placeholder="" value="" class="form-control">
                </div>
                
                <div class="form-group col-4">       
                    <label>@lang('dashboard.dashboard.student_firstname')</label>
                <input type="text" name="student_firstname"  placeholder="" value="" class="form-control">
                </div>
                <div class="form-group col-4">       
                    <label>@lang('dashboard.dashboard.student_middlename')</label>
                <input type="text" name="student_middlename" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group col-4">       
                    <label>@lang('dashboard.dashboard.student_lastname')</label>
                <input type="text" name="student_lastname" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group col-6">       
                    <label>@lang('dashboard.dashboard.email')</label>
                <input type="email" name="email" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group col-6">       
                    <label>@lang('dashboard.dashboard.password')</label>
                <input type="password" name="password" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group col-6">       
                    <label>@lang('dashboard.dashboard.phone')</label>
                <input type="tel"name="phone" value=""  placeholder="" class="form-control">
                </div>
                <div class="form-group col-6">       
                    <label>@lang('dashboard.dashboard.placeOfBirth')</label>
                <input type="text" placeholder="" name="placeOfBirth" value="" class="form-control">
                </div>
                <div class="col-12">
                    <label>@lang('dashboard.dashboard.gender')</label>
                    <div class="i-checks">
                        <input   id="radioCustom1" type="radio" value="0" name="gender" class="form-control-custom radio-custom">
                        <label for="radioCustom1"> @lang('dashboard.dashboard.female') </label>
                      </div>
                      <div class="i-checks">
                        <input  id="radioCustom2" type="radio" checked="" value="1" name="gender" class="form-control-custom radio-custom">
                        <label for="radioCustom2">@lang('dashboard.dashboard.male')</label>
                      </div>
                </div>
                
           
                   <!-- Default checked -->
                   <div class="form-group col-12">   
                    <div class="custom-control custom-switch">
                      <input  type="checkbox" class="custom-control-input"  id="customSwitch1" name="statuse" value="1" checked>
                      <label class="custom-control-label" for="customSwitch1">@lang('dashboard.dashboard.statuse')</label>
                    </div>
                   </div>
                <div class="form-group col-3">       
                    <label>@lang('dashboard.dashboard.city')</label>
                <input type="text" name="city" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group col-3">       
                    <label>@lang('dashboard.dashboard.state')</label>
                <input type="text" name="state" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group col-3">       
                    <label>@lang('dashboard.dashboard.street')</label>
                <input type="text" name="street" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group col-3">       
                    <label>@lang('dashboard.dashboard.ID_number')</label>
                <input type="number" name="ID_number" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group col-3">       
                  <label>@lang('dashboard.dashboard.guardian')</label>
              <input type="hidden" name="guardians_id" placeholder="" value="" class="form-control">
              </div>

                {{-- <div class="form-group row">
                    <label class="col-6 form-control-label">@lang('dashboard.dashboard.guardian')</label>
                    <div class="col-6 mb-3">
                      <select name="guardians_id" class="form-control">
                          @foreach($guardian as $data)
                      <option value="{{$data->id}}">{{$data->fnameForFather}}</option>
                    @endforeach
                      </select>
                    </div>
                </div> --}}

                <div class="col-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                     
                    </div>
                    <div class="card-body form-inline">
                     
                        <div class="form-group col-6">
                          <label for="inlineFormInput" class="col-3" > @lang('dashboard.dashboard.fnameForFather')</label>
                          <input id="inlineFormInput"  class="col-8" name="fnameForFather" type="text" placeholder="" class="mr-3 form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup"  class="col-3">@lang('dashboard.dashboard.lnameForFather')</label>
                          <input id="inlineFormInputGroup"  class="col-8" name="lnameForFather" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup"  class="col-3" >@lang('dashboard.dashboard.fnameForMother')</label>
                          <input id="inlineFormInputGroup"  class="col-8" name="fnameForMother" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group  col-6">
                          <label for="inlineFormInputGroup"  class="col-3">@lang('dashboard.dashboard.lnameForMother')</label>
                          <input id="inlineFormInputGroup"  class="col-8" name="lnameForMother" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup"  class="col-3" >@lang('dashboard.dashboard.email')</label>
                          <input id="inlineFormInputGroup"  class="col-8" name="email" type="email" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup"  class="col-3" >@lang('dashboard.dashboard.password')</label>
                          <input id="inlineFormInputGroup"  class="col-8" name="password" type="password" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-4">
                          <label for="inlineFormInputGroup" class="col-6" >@lang('dashboard.dashboard.city')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="city" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-4">
                          <label for="inlineFormInputGroup" class="col-6">@lang('dashboard.dashboard.state')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="state" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-4">
                          <label for="inlineFormInputGroup" class="col-6" >@lang('dashboard.dashboard.street')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="street" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup" class="col-6" >@lang('dashboard.dashboard.ID_number_Father')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="ID_number_Father" type="number" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup" class="col-6" >@lang('dashboard.dashboard.ID_number_Mather')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="ID_number_Mather" type="number" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group  col-6">
                          <label for="inlineFormInputGroup" class=" col-6" >@lang('dashboard.dashboard.placeOfBirthMather')</label>
                          <input id="inlineFormInputGroup" class=" col-6" name="placeOfBirthMather" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group  col-6">
                          <label for="inlineFormInputGroup" class=" col-6" >@lang('dashboard.dashboard.placeOfBirthFather')</label>
                          <input id="inlineFormInputGroup" class=" col-6" name="placeOfBirthFather" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group  col-6">
                          <label for="inlineFormInputGroup" class=" col-6">@lang('dashboard.dashboard.birthdateForMa')</label>
                          <input id="inlineFormInputGroup" class=" col-6" name="birthdateForMa" type="date" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup" class=" col-6" >@lang('dashboard.dashboard.birthdateForFa')</label>
                          <input id="inlineFormInputGroup" class=" col-6" name="birthdateForFa" type="date" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup"  class="col-6">@lang('dashboard.dashboard.fatherJob')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="fatherJob" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup" class="col-6" >@lang('dashboard.dashboard.motherJob')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="motherJob" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup" class="col-6" >@lang('dashboard.dashboard.qualificationFather')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="qualificationFather" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-6">
                          <label for="inlineFormInputGroup" class="col-6">@lang('dashboard.dashboard.qualificationMather')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="qualificationMather" type="text" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-4">
                          <label for="inlineFormInputGroup" class="col-6"> @lang('dashboard.dashboard.Average_year_income')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="Average_year_income" type="number" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-4">
                          <label for="inlineFormInputGroup" class="col-6">@lang('dashboard.dashboard.phone')</label>
                          <input id="inlineFormInputGroup" class="col-6"  name="phone" type="tel" placeholder="" class="mr-3 form-control form-control">
                        </div>
                        <div class="form-group col-4">
                          <label for="inlineFormInputGroup" class="col-6">@lang('dashboard.dashboard.mobile')</label>
                          <input id="inlineFormInputGroup" class="col-6" name="mobile" type="tel" placeholder="" class="mr-3 form-control form-control">
                        </div>
                      
                     
                    </div>
                  </div>
                </div>
               
                <div class="form-group">       
                    <input type="submit" value="@lang('dashboard.dashboard.save')" class="btn btn-primary">
                  </div>
                <div class="form-group row">
                     <div class="col-sm-10">
                
                 </div>
                  </div>
              
              </form>
            </div>
            </div>
          </div>
        </div> 
        </div>
 
      </div>
      

@endsection