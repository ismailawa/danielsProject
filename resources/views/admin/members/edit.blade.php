@extends('layouts.custom-app')
<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <strong style="font-size:20px">Edit User</strong>
              </div>

              <div class="panel-body">
                  <!-- User Form -->
                  <form class="form-horizontal" method="POST" action="{{route('members.update', $member->id)}}">
                      {{method_field('PUT')}}
                      {{ csrf_field() }}
                    <div style="margin:15px">
                      <div class="form-group">
                          <label for="email">First Name</label>
                          <strong><input type="text" class="form-control" id="email" value="{{$member->firstname}}" name="firstname"></strong>
                      </div>
                      <div class="form-group">
                          <label for="email">Last Name</label>
                          <strong><input type="text" class="form-control" id="surname" value="{{$member->surname}}" name="surname"></strong>
                      </div>
                      <div class="form-group">
                          <label for="email">Bible Study Group</label>
                          <strong><input type="text" class="form-control" id="surname" value="{{$member->biblestudygroup}}" name="biblestudygroup"></strong>
                      </div>
                      <div class="form-group">
                          <label for="email">Email address</label>
                          <strong><input type="email" class="form-control" id="email" value="{{$member->email}}" name="email"></strong>
                      </div>
                      <div class="form-group">
                          <label for="email">Institution</label>
                          <strong><input type="text" class="form-control" id="surname" value="{{$member->institution}}" name="institution"></strong>
                      </div>
                      <div class="form-group">
                          <label for="email">Hostel</label>
                          <strong><input type="text" class="form-control" id="surname" value="{{$member->hostel}}" name="hostel"></strong>
                      </div>
                      <div class="form-group">
                          <label for="email">Position</label>
                          <strong><input type="text" class="form-control" id="surname" value="{{$member->position}}" name="position"></strong>
                      </div>
                      <input type="text" name="print_flag" hidden="true" value="0">

                      <button type="submit" class="btn btn-default">Update User</button>
                       <button type="submit" style="margin-left: 400px" class="ui blue button">Reprint ID Card</button>
                    </div>

                  </form>
                  <!-- end of user form -->
              </div>
          </div>
      </div>
  </div>

</div>
@endsection

@section('scripts')
  <script type="text/javascript">
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true
      }
    });
  </script>
@endsection
