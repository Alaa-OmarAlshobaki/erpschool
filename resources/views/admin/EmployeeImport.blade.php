@extends('layout.index')

@section('content')

<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class=" d-flex justify-content-center">@lang('dashboard.dashboard.Employee_Import') </h1>
      </header>
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>@lang('dashboard.dashboard.Employee_Import') </h4>
            </div>
            <div class="card-body">
              <p>@lang('dashboard.dashboard.Profile_information')</p>
              <form>
             
                <div class="form-group">       
                    <label>@lang('dashboard.dashboard.firstName')</label>
                    <input type="text"  placeholder="" class="form-control">
                </div>
                <div class="form-group">       
                    <label>@lang('dashboard.dashboard.lastName')</label>
                    <input type="text" placeholder="" value="" class="form-control">
                </div>
               
                <div class="form-group">       
                    <label>@lang('dashboard.dashboard.email')</label>
                    <input type="email" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group">       
                    <label>@lang('dashboard.dashboard.password')</label>
                    <input type="password" placeholder="" value="" class="form-control">
                </div>
                <div class="form-group row">
                     <div class="col-sm-10">
                
                 </div>
                  </div>
              
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-status bg-blue"></div>
                <div class="card-header">
                    <h3 class="card-title float-left">
                       
                    </h3> 
                   
                        <a href="" class="btn btn-primary float-right" role="button"><i class="fe fe-plus"></i>@lang('dashboard.dashboard.Create')</a>
                    <h1 class="d-flex justify-content-center">@lang('dashboard.dashboard.Manage_Academic_Details')</h1>
                    </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table table-striped table-bordered" id="roles">
                            <thead>
                                <tr>
                                     <td width="1%"> @lang('dashboard.dashboard.id')</td>
                                    <td> @lang('dashboard.dashboard.student_admission_date')</td>
                                    <td>@lang('dashboard.dashboard.student_firstname')</td>
                                    <td>@lang('dashboard.dashboard.student_middlename')</td>
                                    <td>@lang('dashboard.dashboard.student_lastname')</td>
                                     <td>@lang('dashboard.dashboard.email')</td>
                                     <td>@lang('dashboard.dashboard.password')</td>
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
                    ajax: '',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'student_admission_no', name: 'student_admission_no' },
                        { data: 'student_admission_date', name: 'student_admission_date' },
                        { data: 'student_firstname', name: 'student_firstname' },
                        { data: 'student_middlename', name: 'student_middlename' },
                        { data: 'student_lastname', name: 'student_lastname' },
                        { data: 'email', name: 'email' },
                        { data: 'password', name: 'password' },
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