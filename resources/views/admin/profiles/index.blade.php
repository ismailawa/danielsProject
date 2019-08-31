@extends('layouts.custom-app')

@section('content')
@foreach ($admins as $admin)
@endforeach
<div class="ui basic segment">
    <div class="ui container breadcrumb">
  <a class="section" href="{{ url('/') }}">
      <i class="home icon"></i>
  </a>
  <div class="divider"> / </div>
  <div class="section">Admin Dashboard</div>
  <div class="divider"> / </div>
  <div class="active section">Profile</div>
</div>
    <div class="ui raised segment">
      <h3 class="ui header">Admin Profile</h3>
         <!-- contents come here -->
         <div class="ui grid">
          <div class="eight wide column">
            <div class="ui card">
                <div class="image">
                  <img src="{{ asset('images/profile2.png') }}">
                </div>
                <div class="content">
                  <a class="header"><i style="font-size: 13px">Admin Name:</i> </a>
                  <hr>
                  <div class="meta">
                    <span class="date"><strong>Registered on</strong></span>
                  </div>
                  <div class="description">
                    Mobile: <strong></strong>
                  </div>
                  <div class="description">
                    Position: <strong>PRESIDENT</strong>
                  </div>
                </div>
          </div>
        </div>
          <div class="eight wide column">
            <h3>Edit Profile</h3>
            <form class="ui form">
              <div class="nine wide field">
                <label>Name</label>
                <input type="text" name="first-name" disabled="true" style="font-size:18px; color:#017d89" value={{$admin->name}}>
              </div>
              <div class="nine wide field">
                <label>Email</label>
                <input type="text" name="last-name" disabled="true" style="font-size:18px; color:#017d89" value={{$admin->email}}>
              </div>
               <div class="nine wide field">
                <label>Mobile Number</label>
                <input type="text" name="last-name" disabled="true" style="font-size:18px; color:#017d89" value={{$admin->mobile}}>
              </div>
              <div class="nine wide field">
                <label>Position</label>
                <input type="text" name="last-name" disabled="true" style="font-size:18px; color:#017d89" value="PRESIDENT">
              </div>
               <div class="nine wide field">
                <label>Updated at</label>
                <input type="text" name="last-name" disabled="true" style="font-size:18px; color:#017d89" value={{$admin->updated_at}}>
              </div>
               <a class="ui inverted green button" href="{{route('profile.edit', $admin->id)}}">Edit</a>
               <div class="ui animated fade green button" tabindex="0">
                <div class="visible content">View ID Card</div>
                <div class="hidden content">
                  Add to Print List
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="ui grid">
          <div class="eight wide column">
            <div class="ui segment">
                  <div class="ui accordion">
                    <div class="title active">
                      <i class="dropdown icon"></i>
                      <b style="font-size: 18px">View Previlleges</b>
                    </div>
                    <div class="content">
                      <div class="ui checkbox">
                        <input type="checkbox" tabindex="0" class="hidden" checked="true">
                        <label><strong>Register Co-ordinators</strong></label>
                      </div>
                      <div class="ui checkbox">
                        <input type="checkbox" tabindex="0" class="hidden" checked="true">
                        <label><strong>Print ID Cards</strong></label>
                      </div>
                      <div class="ui checkbox">
                        <input type="checkbox" tabindex="0" class="hidden" checked="true">
                        <label><strong>Manage Members</strong></label>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
            
         <!-- end contents come here -->
    </div>
</div>

@endsection
