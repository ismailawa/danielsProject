@extends('layouts.custom-app')

@section('content')

<div class="ui basic segment">
    <div class="ui container breadcrumb">
  <a class="section" href="{{ url('/') }}">
      <i class="home icon"></i>
  </a>
  <div class="divider"> / </div>
  <div class="section">Admin Dashboard</div>
  <div class="divider"> / </div>
  <div class="active section">Members</div>
</div>
    <div class="ui raised segment">
      <h3 class="ui header">Manage Members</h3>
         <!-- contents come here -->
         <div class="ui clearing segment">
           <a class="ui right floated green button" data-tooltip="This Button will create a member." data-position="left center" href="{{ route('staff.create') }}"><i class="user plus icon"></i> Register A New Member</a>
           <div class="ui right floated inverted violet button"><i class="address card outline icon"></i> View Printed ID cards</div>
        </div>
          <table class="ui striped table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Date Registered</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            	@foreach ($members as $member)
               <tr>
                <td>{{$member->id}}</td>
                <th>{{$member->firstname}} {{$member->surname}}</th>
                <td>{{$member->email}}</td>
                <td>{{$member->created_at->toFormattedDateString()}}</td>
                <td>
            		<a href="{{route('members.show', $member->id)}}" class="ui blue button" data-tooltip="View this Member Details"><i class="eye icon"></i> View</a>
            		<a href="{{route('members.edit', $member->id)}}" data-tooltip="Edit this member Details" class="ui green button"><i class="clipboard icon"></i> Edit</a>
            		<a href="{{route('members.edit', $member->id)}}" class="ui blue button" data-tooltip="Reprint this member Id card"><i class="eye icon"></i> Re-Print ID Card</a>
            		<a href="{{route('members.destroy', $member->id)}}" class="ui red button" data-tooltip="Delete this member from database"><i class="trash alternate outline icon"></i> Delete</a>
                </td>
              </tr>
            	@endforeach
            </tbody>
          </table>

          <div class="ui grid">
            <div class="six wide column"></div>
            <div class="four wide column">
                {{ $members->links()}}
            </div>
            <div class="six wide column"></div>
          </div>

          
    </div>
</div>

@endsection
