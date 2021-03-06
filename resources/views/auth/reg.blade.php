@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Register</div>
          @if(session()->has('message'))
            <div class="alert alert-success">
              {{ session()->get('message') }}
            </div>
          @endif

          <div class="panel-body">
                @isset($url)
                <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                @else
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @endisset
                    @csrf

              <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                <label for="firstName" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                  <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required
                         autofocus>

                  @if ($errors->has('firstName'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Username</label>

                <div class="col-md-6">
                  <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required
                         autofocus>

                  @if ($errors->has('lastName'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                         required>
                </div>
              </div>
              <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="phone" class="col-md-4 control-label">phone</label>
    
                    <div class="col-md-6">
                      <input id="email" type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required>
    
                      @if ($errors->has('phone'))
                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                      @endif
                    </div>
                  </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    Register
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


{{-- @isset($url)
<form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
@else
<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
@endisset
    @csrf --}}