@extends('layout.index')

@section('content')

<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class=" d-flex justify-content-center">@lang('dashboard.dashboard.Academic_Details') </h1>
      </header>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>@lang('dashboard.dashboard.Academic_Details')</h4>
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
                
              <p>@lang('dashboard.dashboard.Academic_Year_Details')</p>
              <form action="{{route('store.Academic')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label>@lang('dashboard.dashboard.Start_Year')</label>
                <input type="date"  min="1900" max="2099" step="1" name="Start_Year" value="" placeholder="" class="form-control">
                </div>
                <div class="form-group">       
                  <label>@lang('dashboard.dashboard.Start_Month')</label>
                  <input type="date" name="Start_Month" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group">       
                    <label>@lang('dashboard.dashboard.End_Year')</label>
                    <input type="date"  min="1900" max="2099" name="End_Year" step="1" value=""  placeholder="" class="form-control">
                </div>
                <div class="form-group">       
                    <label>@lang('dashboard.dashboard.End_Month')</label>
                    <input type="date" placeholder=""  value="" name="End_Month"  class="form-control">
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">@lang('dashboard.dashboard.Active_Deactive') <br><small class="text-primary">@lang('dashboard.dashboard.enter_a_value_for_Status')</small></label>
                    <div class="col-sm-10">
                   
                      <div>
                        <input id="optionsRadios1"  type="radio" checked="" value="0" name="status">
                        <label for="optionsRadios1">@lang('dashboard.dashboard.Active')</label>
                      </div>
                      <div>
                        <input id="optionsRadios2"  type="radio"  value="1" name="status">
                        <label for="optionsRadios2">@lang('dashboard.dashboard.Deactive')</label>
                      </div>
                    </div>
                  </div>
                <div class="form-group">       
                  <input type="submit" value="@lang('dashboard.dashboard.save')" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
 
      </div>
      

@endsection