@extends('layout.index')

@section('content')

<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class=" d-flex justify-content-center">@lang('dashboard.dashboard.Student_Import') </h1>
      </header>
      <div class="row">
      
        <div class="col-lg-12">
            <div class="card">
                <div class="card-status bg-blue"></div>
                <div class="card-header">
                    <h3 class="card-title float-left">
                       
                    </h3> 
                   
                <a href="{{route('createStudent')}}" class="btn btn-primary float-right" role="button"><i class="fe fe-plus"></i>@lang('dashboard.dashboard.Create')</a>
                    <h1 class="d-flex justify-content-center">@lang('dashboard.dashboard.Manage_Academic_Details')</h1>
                    </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table table-striped table-bordered" id="roles">
                            <thead>
                                <tr>
                                     <td width="1%"> @lang('dashboard.dashboard.id')</td>
                                     <td> @lang('dashboard.dashboard.student_admission_no')</td>
                                    <td> @lang('dashboard.dashboard.student_admission_date')</td>
                                    <td>@lang('dashboard.dashboard.student_firstname')</td>
                                    <td>@lang('dashboard.dashboard.student_middlename')</td>
                                    <td>@lang('dashboard.dashboard.student_lastname')</td>
                                     <td>@lang('dashboard.dashboard.email')</td>
                                     <td>@lang('dashboard.dashboard.password')</td>
                                     <td>@lang('dashboard.dashboard.phone')</td>
                                    <td>@lang('dashboard.dashboard.gender')</td>
                                    <td>@lang('dashboard.dashboard.city')</td>
                                     <td>@lang('dashboard.dashboard.state')</td>
                                     <td>@lang('dashboard.dashboard.street')</td>
                                     <td>@lang('dashboard.dashboard.placeOfBirth')</td>
                                    <td>@lang('dashboard.dashboard.ID_number')</td>
                                    <td>@lang('dashboard.dashboard.statuse')</td>
                                     <td>@lang('dashboard.dashboard.avatar')</td>
                                     <td>@lang('dashboard.dashboard.guardians_id')</td>
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
                    ajax: '{{route("dashboard.importstudent.datatable")}}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'student_admission_no', name: 'student_admission_no' },
                        { data: 'student_admission_date', name: 'student_admission_date' },
                        { data: 'student_firstname', name: 'student_firstname' },
                        { data: 'student_middlename', name: 'student_middlename' },
                        { data: 'student_lastname', name: 'student_lastname' },
                        { data: 'email', name: 'email' },
                        { data: 'password', name: 'password' },
                        { data: 'phone', name: 'phone' },
                        { data: 'gender', name: 'gender' },
                        { data: 'city', name: 'city' },
                        { data: 'state', name: 'state' },
                        { data: 'street', name: 'street' },
                        { data: 'placeOfBirth', name: 'placeOfBirth' },
                        { data: 'ID_number', name: 'ID_number' },
                        { data: 'statuse', name: 'statuse' },
                        {data: 'avatar', name: 'avatar',render: function(data, type, full, meta){
                                                                  return "<img src= "+ '/public/uploads/' +data+" width='70' class='img-thumbnail' />";
                                                            //    return "<img src= "+'/storage/images/'+data+" width='70' class='img-thumbnail' />";
                                                            }, orderable: false},
                        { data: 'guardians_id', name: 'guardians_id' },
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