@extends('layouts.custom-app')
<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <strong style="font-size:20px">View User Details</strong>
                  <div class="navbar-right btn custom-nav-right"><strong>&nbsp;</strong></div>
                  <a class="navbar-right btn btn-success custom-nav-right" href="{{ route('members.edit', $member->id) }}"><strong>Edit User</strong></a>
              </div>

              <div class="panel-body">
                  <!-- User Form -->
                  <form class="form-horizontal" method="POST" action="#">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Salutation</label>

                          <div class="col-md-6">
                              <label for="name" class="col-md-6 control-label"><strong style="color: #000"><strong style="color: #000">{{$member->salutation}}</strong></strong></label>
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">First Name</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->firstname}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Last Name</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->surname}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->email}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Gender</label>

                          <div class="col-md-6">
                              <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->gender}}</strong></label>
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Date of Birth</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->dob}}</strong></label>                          </div>
                      </div>
                      
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Institution</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->institution}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Zone</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->zone}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Position</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->position}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Bible Study Group</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->biblestudygroup}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Hostel</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->hostel}}</strong></label>                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">Mobile Number</label>

                          <div class="col-md-6">
                            <label for="name" class="col-md-6 control-label"><strong style="color: #000">{{$member->mobile}}</strong></label>                          </div>
                      </div>
                      
                  </form>
                  <!-- end of user form -->
              </div>
          </div>
      </div>
  </div>

</div>
@endsection
