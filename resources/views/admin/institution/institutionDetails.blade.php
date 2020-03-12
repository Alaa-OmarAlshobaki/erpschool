
@extends('layout.index')

@section('content')

<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class=" d-flex justify-content-center">@lang('dashboard.dashboard.Institution_Details') </h1>
      </header>
      <div class="row">
        <div class="col-lg-9">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>@lang('dashboard.dashboard.Institution_Details')</h4>
            </div>
            <div class="card-body ">
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
              <form class="form-row" action="{{route('update.Institution',$institutiondata->id)}}" method="POST">
                @csrf
                <div class="form-group col-md-6">
                  <label>@lang('dashboard.dashboard.Institution_Name')</label>
                  @foreach($info as $inform) 
                <input type="text" name="Institution_Name" value="{{$inform['Institution_Name']}}" placeholder="Institution_Name" class="form-control">
              
                  {{-- <input type="text" name="Institution_Name" value="{{$data->firstName}}" placeholder="Institution_Name" class="form-control">
               --}}
                </div>
                <div class="form-group col-md-6">       
                  <label>@lang('dashboard.dashboard.Institution_Address')</label>
                <input type="text" value="{{$inform['Institution_Address']}}"  name="Institution_Address" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>@lang('dashboard.dashboard.Institution_Email')</label>
                <input type="email" name="Institution_Email" value="{{$inform['Institution_Email']}}" placeholder="Institution_Email" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>@lang('dashboard.dashboard.Institution_Phone')</label>
                <input type="tel" name="Institution_Phone" value="{{$inform['Institution_Phone']}}" placeholder="Institution_Phone" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>@lang('dashboard.dashboard.Institution_Mobile')</label>
                <input type="tel" name="Institution_Mobile"  value="{{$inform['Institution_Mobile']}}" placeholder="Institution_Mobile" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>@lang('dashboard.dashboard.Institution_Fax')</label>
                <input type="text" name="Institution_Fax" value="{{$inform['Institution_Fax']}}"  placeholder="Institution_Fax" class="form-control">
                </div>
            
                <div class="form-group col-md-6">
                    <label>@lang('dashboard.dashboard.Country')</label>
                <input type="text" name="Country"  value="{{$inform['Country']}}" placeholder="Country" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>@lang('dashboard.dashboard.Currency_Type')</label>
                <input type="text" value="{{$inform['Currency_Type']}}" name="Currency_Type" placeholder="Currency_Type" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>@lang('dashboard.dashboard.Language')</label>
                <input type="text" name="Language" placeholder="Language" value="{{$inform['language']}}" class="form-control">
                </div>
                 {{-- <div class="form-group col-md-6">
                  <label>@lang('dashboard.dashboard.Admin_Contact_Person')</label>
                  @foreach($data as $info)
                  <input type="text" name="Admin_Contact_Person"  value="{{$info['firstName']}}"  placeholder="Admin_Contact_Person" class="form-control">
                   @endforeach
                </div> --}}
                <div class="i-checks col-md-12">
                <input id="checkboxCustom2" type="checkbox" name="codechek" value="1" checked="" class="form-control-custom">
                    <label for="checkboxCustom2">@lang('dashboard.dashboard.Institution_code_check')</label>
                </div>
                <div class="form-group col-md-3">
                    <label>@lang('dashboard.dashboard.Institution_Code')</label>
                <input type="text"  value="{{$inform['Institution_Code']}}"  name="Institution_Code" placeholder="Institution_Code" class="form-control">
                </div>
                <div class="form-group row">
                    <label class="col-sm-6 form-control-label">@lang('dashboard.dashboard.Timezone')</label>
                    <div class="col-sm-10 mb-3">
                      <select class="form-control" name="timezone">
                        <option  value="0">Please, select timezone </option>
                        @foreach($timezone as $time)
                        <option value="{{$time['zone']}}"> ({{$time['GMT_difference']. ' ) '.$time['zone']}}</option>
                        @endforeach
                       </select>
                    </div>
                </div>
                @endforeach
        
                <div class="form-group col-md-12">       
                  <input type="submit" value="@lang('dashboard.dashboard.save')" class="btn btn-primary">
                </div>
              </form>
              
            </div>
          </div>
        </div>
        
        
        <div class="col-lg-3">
            <div class="card  d-flex align-items-center">
              <div class="card-header d-flex align-items-center">
                @foreach($info as $alldata)
                <h1>{{$alldata['Institution_Name']}}</h1>
            
              </div>
         
              <div class="card-body d-flex align-items-center">
              <p><img style="width: 100%;"  src="{{url("/storage/images/".$alldata['logo'])}}"  class="rounded-circle"></p>
           
              </div>
              <h6>{{$alldata['Institution_Email']}}</h6>
              <h6>{{$alldata['Institution_Phone']}}</h6>
            
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       @lang('dashboard.dashboard.more_detiailes')
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse hidden" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body row col-12">
                     <h6 class="col-6">@lang('dashboard.dashboard.school_Name')</h6> <h6 class="col-6">{{$alldata['Institution_Name']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.address')</h6> <h6 class="col-6">{{$alldata['Institution_Address']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.email')</h6> <h6 class="col-6">{{$alldata['Institution_Email']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.Phone')</h6> <h6 class="col-6">{{$alldata['Institution_Phone']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.Mobile')</h6> <h6 class="col-6">{{$alldata['Institution_Mobile']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.Fax')</h6> <h6 class="col-6">{{$alldata['Institution_Fax']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.Country')</h6> <h6 class="col-6">{{$alldata['Country']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.Currency_Type')</h6> <h6 class="col-6">{{$alldata['Currency_Type']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.language')</h6> <h6 class="col-6">{{$alldata['language']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.Code')</h6> <h6 class="col-6">{{$alldata['Institution_Code']}}</h6>
                     <h6 class="col-6">@lang('dashboard.dashboard.Timezone')</h6> <h6 class="col-6">{{$alldata['Timezone']}}</h6>
                     @endforeach
                   
                    </div>
                  </div>
                </div>
            </div>
            
           </div>
           
          </div>
      </div>
    </div>
</section>




@endsection