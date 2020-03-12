@extends('layout.index')

@section('content')

<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class=" d-flex justify-content-center">@lang('dashboard.dashboard.Edit_Student_Import') </h1>
      </header>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>@lang('dashboard.dashboard.Student_Import') </h4>
            </div>
            <div class="card-body">
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error) 
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
              <p>@lang('dashboard.dashboard.Profile_information')</p>
            <form action="{{route('updateImportStu',$importStudent->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
             <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="img_url">@lang('dashboard.dashboard.img')</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="avatar" id="img_url">
                    <label class="custom-file-label"></label>
                </div>
            </div>
                <div class="form-group col-2"> 
                  {{-- {{url("/storage/images/".$importStudent->avatar)}}       --}}
                <img src="{{url("/public/uploads/".$importStudent->avatar)}}"  class="img-fluid rounded-circle hoverable rounded float-left" alt="Responsive image">
                </div>
                </div>
                <div class="form-group col-4">
                  <label>@lang('dashboard.dashboard.student_admission_no')</label>
                <input type="number" name="student_admission_no" value="{{$importStudent->student_admission_no}}" placeholder="student admission no" class="form-control">
                </div>
                <div class="form-group col-4">       
                  <label>@lang('dashboard.dashboard.student_admission_date')</label>
                <input type="date" name="student_admission_date" placeholder="{{$importStudent->student_admission_date}}" value="{{$importStudent->student_admission_date}}" class="form-control">
                </div>
                <div class="form-group col-4">       
                    <label>@lang('dashboard.dashboard.student_firstname')</label>
                <input type="text" name="student_firstname"  placeholder="" value="{{$importStudent->student_firstname}}" class="form-control">
                </div>
                <div class="form-group col-4">       
                    <label>@lang('dashboard.dashboard.student_middlename')</label>
                <input type="text" name="student_middlename" placeholder="" value="{{$importStudent->student_middlename}}" class="form-control">
                </div>
                <div class="form-group col-4">       
                    <label>@lang('dashboard.dashboard.student_lastname')</label>
                <input type="text" name="student_lastname" placeholder="" value="{{$importStudent->student_lastname}}" class="form-control">
                </div>
                <div class="form-group col-6">       
                    <label>@lang('dashboard.dashboard.email')</label>
                <input type="email" name="email" placeholder="" value="{{$importStudent->email}}" class="form-control">
                </div>
                <div class="form-group col-6">       
                    <label>@lang('dashboard.dashboard.password')</label>
                <input type="password" name="password" placeholder="" value="{{$importStudent->password}}" class="form-control">
                </div>
                <div class="form-group col-6">       
                    <label>@lang('dashboard.dashboard.phone')</label>
                <input type="tel"name="phone" value="{{$importStudent->phone}}"  placeholder="" class="form-control">
                </div>
                <div class="form-group col-6">       
                    <label>@lang('dashboard.dashboard.placeOfBirth')</label>
                <input type="text" placeholder="" name="placeOfBirth" value="{{$importStudent->placeOfBirth}}" class="form-control">
                </div>
                <div class="col-12">
                    <label>@lang('dashboard.dashboard.gender')</label>
                    <div class="i-checks">
                        <input  {{$importStudent->gender==0?"checked":""}} id="radioCustom1" type="radio" value="0" name="gender" class="form-control-custom radio-custom">
                        <label for="radioCustom1"> @lang('dashboard.dashboard.female') </label>
                      </div>
                      <div class="i-checks">
                        <input  {{$importStudent->gender==1?"checked":""}} id="radioCustom2" type="radio" checked="" value="1" name="gender" class="form-control-custom radio-custom">
                        <label for="radioCustom2">@lang('dashboard.dashboard.male')</label>
                      </div>
                </div>
                
           
                   <!-- Default checked -->
                   <div class="form-group col-12">   
                    <div class="custom-control custom-switch">
                      <input  type="checkbox" class="custom-control-input" value="1"  id="customSwitch1" name="statuse" checked>
                      <label class="custom-control-label" for="customSwitch1">@lang('dashboard.dashboard.statuse')</label>
                    </div>
                   </div>
                <div class="form-group col-3">       
                    <label>@lang('dashboard.dashboard.city')</label>
                <input type="text" name="city" placeholder="" value="{{$importStudent->city}}" class="form-control">
                </div>
                <div class="form-group col-3">       
                    <label>@lang('dashboard.dashboard.state')</label>
                <input type="text" name="state" placeholder="" value="{{$importStudent->state}}" class="form-control">
                </div>
                <div class="form-group col-3">       
                    <label>@lang('dashboard.dashboard.street')</label>
                <input type="text" name="street" placeholder="" value="{{$importStudent->street}}" class="form-control">
                </div>
                <div class="form-group col-3">       
                    <label>@lang('dashboard.dashboard.ID_number')</label>
                <input type="number" name="ID_number" placeholder="" value="{{$importStudent->ID_number}}" class="form-control">
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Select</label>
                  <div class="col-sm-10 mb-3">
                    <select name="guardians_id" class="form-control">
                      @foreach($guardian as $data)
                    <option value="{{$data->id}}">{{$data->fnameForFather}} </option>
                     @endforeach
                    </select>
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