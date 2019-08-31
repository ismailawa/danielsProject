@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <strong style="font-size:20px">View Settings Details</strong>
                  <div class="navbar-right btn custom-nav-right"><strong>&nbsp;</strong></div>
                  <a class="navbar-right btn btn-success custom-nav-right" href="{{ route('settings.edit', $setting->id) }}"><strong>Edit Settings</strong></a>
              </div>

              <div class="panel-body">
                  <!-- User Form -->
                  <form class="form-horizontal" method="POST" action="#">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Salutation</label>

                          <div class="col-md-6">
                              <label for="name" class="col-md-6 control-label"><strong style="color: #000"><strong style="color: #000">{{$setting->appname}}</strong></strong></label>
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">First Name</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$setting->appname}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Last Name</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$setting->appname}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$setting->hostinstitution}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Gender</label>

                          <div class="col-md-6">
                              <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$setting->hostinstitution}}</strong></label>
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Date of Birth</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$setting->hostinstitution}}</strong></label>                          </div>
                      </div>
                      
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Institution</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$setting->hostinstitution}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Zone</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$setting->hostinstitution}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Position</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-4 control-label"><strong style="color: #000">{{$setting->hostinstitution}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Bible Study Group</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-4 control-label"><strong style="color: #000">{{$setting->hostinstitution}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Hostel</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-4 control-label"><strong style="color: #000">{{$setting->hostinstitution}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Mobile Number</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-4 control-label"><strong style="color: #000">{{$setting->hostinstitution}}</strong></label>                          </div>
                      </div>
                      
                  </form>
                  <!-- end of user form -->
              </div>
          </div>
      </div>
  </div>

</div>
@endsection
