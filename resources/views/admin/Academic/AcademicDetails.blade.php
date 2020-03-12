@extends('layout.index')

@section('content')

<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class=" d-flex justify-content-center">@lang('dashboard.dashboard.Academic_Details') </h1>
      </header>
      <div class="row">
   
   
        {{-- <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>@lang('dashboard.dashboard.Academic_Details')</h4>
            </div>
            <div class="card-body">
              <p>@lang('dashboard.dashboard.Academic_Year_Details')</p>
              <form>
                <div class="form-group">
                  <label>@lang('dashboard.dashboard.Start_Year')</label>
                  <input type="number"  min="1900" max="2099" step="1" value="2020" placeholder="" class="form-control">
                </div>
                <div class="form-group">       
                  <label>@lang('dashboard.dashboard.Start_Month')</label>
                  <input type="month" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group">       
                    <label>@lang('dashboard.dashboard.End_Year')</label>
                    <input type="number"  min="1900" max="2099"  step="1" value="2020"  placeholder="" class="form-control">
                </div>
                <div class="form-group">       
                    <label>@lang('dashboard.dashboard.End_Month')</label>
                    <input type="month" placeholder="" value="select month" class="form-control">
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">@lang('dashboard.dashboard.Active_Deactive') <br><small class="text-primary">@lang('dashboard.dashboard.enter_a_value_for_Status')</small></label>
                    <div class="col-sm-10">
                   
                      <div>
                        <input id="optionsRadios1" type="radio" checked="" value="0" name="optionsRadios">
                        <label for="optionsRadios1">@lang('dashboard.dashboard.Active')</label>
                      </div>
                      <div>
                        <input id="optionsRadios2" type="radio" value="1" name="optionsRadios">
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
        </div> --}}
        <div class="col-lg-12">
            <div class="card">
                <div class="card-status bg-blue"></div>
                <div class="card-header">
                    <h3 class="card-title float-left">
                       
                    </h3> 
                   
                  <a href="{{route('createAcademic')}}" class="btn btn-primary float-right" role="button"><i class="fe fe-plus"></i>@lang('dashboard.dashboard.Create')</a>
                    <h1 class="d-flex justify-content-center">@lang('dashboard.dashboard.Manage_Academic_Details')</h1>
                    </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table table-striped table-bordered" id="roles">
                            <thead>
                                <tr>
                                     <td width="1%"> @lang('dashboard.dashboard.id')</td>
                                    <td> @lang('dashboard.dashboard.Start_Year')</td>
                                    <td>@lang('dashboard.dashboard.Start_Month')</td>
                                    <td>@lang('dashboard.dashboard.End_Year')</td>
                                    <td>@lang('dashboard.dashboard.End_Month')</td>
                                     <td>@lang('dashboard.dashboard.status')</td>
                                    <td>@lang('dashboard.dashboard.action')</td>
                                   
                                    
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div> 
               
            </div>

    <script>
   
        
            $(function() {
                $('#roles').on('draw.dt', function() {
                    $('[data-toggle="tooltip"]').tooltip();
                })
                $('#roles').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{route("dashboard.Academic.datatable")}}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'Start_Year', name: 'Start_Year' },
                        { data: 'Start_Month', name: 'Start_Month' },
                        { data: 'End_Year', name: 'End_Year' },
                        { data: 'End_Month', name: 'End_Month' },
                        { data: 'status', name: 'status' },
                        { data: 'actions', name: 'actions' },
                    ],
                    initComplete: function () {
                        $(".activation").change(function(event) {
                            let id = $(this).data("id");
                            let url = $(this).data("url");
                            $.ajax({
                                type: "POST",
                                url: url,
                                headers: {
                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                                },
                                data: { id: id },
                                success: function(data) {
                                    if(data.success){
                                    toastr.success(data.msg)
                                    }
        
                                }
                            });
                        });
                    } 
                });
            });
            </script>
          </div>
      </div>
      

@endsection