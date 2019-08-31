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
           <div class="ui right floated green button" data-tooltip="This Button will create a new Supervisor, to help in the registration process." data-position="left center"><i class="user plus icon"></i> Create New A Supervisor</div>
           <div class="ui right floated inverted violet button"><i class="address card outline icon"></i> View Printed ID cards</div>
        </div>
          <table class="ui striped table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Date Joined</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Lilki</td>
                <td>jhlilk22@yahoo.com</td>
                <td>September 14, 2013</td>
                <td>
                  <button class="ui blue button" data-tooltip="View this member Details"><i class="eye icon"></i> View</button>
                  <button class="ui green button" data-tooltip="Edit this member Details"><i class="clipboard icon"></i> Edit</button>
                  <button class="ui purple button" data-tooltip="Reprint this member Id card"><i class="undo icon"></i> Re-Print ID Card</button>
                  <button class="ui red button" data-tooltip="Delete this user from database"><i class="trash alternate outline icon"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jamie Harington</td>
                <td>jamieharingonton@yahoo.com</td>
                <td>January 11, 2014</td>
                 <td>
                  <button class="ui blue button" data-tooltip="View this member Details"><i class="eye icon"></i> View</button>
                  <button class="ui green button" data-tooltip="Edit this member Details"><i class="clipboard icon"></i> Edit</button>
                  <button class="ui purple button" data-tooltip="Reprint this member Id card"><i class="undo icon"></i> Re-Print ID Card</button>
                  <button class="ui red button" data-tooltip="Delete this user from database"><i class="trash alternate outline icon"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Jill Lewis</td>
                <td>jilsewris22@yahoo.com</td>
                <td>May 11, 2014</td>
                 <td>
                  <button class="ui blue button" data-tooltip="View this member Details"><i class="eye icon"></i> View</button>
                  <button class="ui green button" data-tooltip="Edit this member Details"><i class="clipboard icon"></i> Edit</button>
                  <button class="ui purple button" data-tooltip="Reprint this member Id card"><i class="undo icon"></i> Re-Print ID Card</button>
                  <button class="ui red button" data-tooltip="Delete this user from database"><i class="trash alternate outline icon"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>John Lilki</td>
                <td>jhlilk22@yahoo.com</td>
                <td>September 14, 2013</td>
                 <td>
                  <button class="ui blue button" data-tooltip="View this member Details"><i class="eye icon"></i> View</button>
                  <button class="ui green button" data-tooltip="Edit this member Details"><i class="clipboard icon"></i> Edit</button>
                  <button class="ui purple button" data-tooltip="Reprint this member Id card"><i class="undo icon"></i> Re-Print ID Card</button>
                  <button class="ui red button" data-tooltip="Delete this user from database"><i class="trash alternate outline icon"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>John Lilki</td>
                <td>jhlilk22@yahoo.com</td>
                <td>September 14, 2013</td>
                 <td>
                  <button class="ui blue button" data-tooltip="View this member Details"><i class="eye icon"></i> View</button>
                  <button class="ui green button" data-tooltip="Edit this member Details"><i class="clipboard icon"></i> Edit</button>
                  <button class="ui purple button" data-tooltip="Reprint this member Id card"><i class="undo icon"></i> Re-Print ID Card</button>
                  <button class="ui red button" data-tooltip="Delete this user from database"><i class="trash alternate outline icon"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Jamie Harington</td>
                <td>jamieharingonton@yahoo.com</td>
                <td>January 11, 2014</td>
                 <td>
                  <button class="ui blue button" data-tooltip="View this member Details"><i class="eye icon"></i> View</button>
                  <button class="ui green button" data-tooltip="Edit this member Details"><i class="clipboard icon"></i> Edit</button>
                  <button class="ui purple button" data-tooltip="Reprint this member Id card"><i class="undo icon"></i> Re-Print ID Card</button>
                  <button class="ui red button" data-tooltip="Delete this user from database"><i class="trash alternate outline icon"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>Jill Lewis</td>
                <td>jilsewris22@yahoo.com</td>
                <td>May 11, 2014</td>
                 <td>
                  <button class="ui blue button" data-tooltip="View this member Details"><i class="eye icon"></i> View</button>
                  <button class="ui green button" data-tooltip="Edit this member Details"><i class="clipboard icon"></i> Edit</button>
                  <button class="ui purple button" data-tooltip="Reprint this member Id card"><i class="undo icon"></i> Re-Print ID Card</button>
                  <button class="ui red button" data-tooltip="Delete this user from database"><i class="trash alternate outline icon"></i> Delete</button>
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>John Lilki</td>
                <td>jhlilk22@yahoo.com</td>
                <td>September 14, 2013</td>
                 <td>
                  <button class="ui blue button" data-tooltip="View this member Details"><i class="eye icon"></i> View</button>
                  <button class="ui green button" data-tooltip="Edit this member Details"><i class="clipboard icon"></i> Edit</button>
                  <button class="ui purple button" data-tooltip="Reprint this member Id card"><i class="undo icon"></i> Re-Print ID Card</button>
                  <button class="ui red button" data-tooltip="Delete this user from database"><i class="trash alternate outline icon"></i> Delete</button>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="ui grid">
            <div class="six wide column"></div>
            <div class="four wide column">
                <div class="ui pagination menu">
                  <a class="active item">
                    1
                  </a>
                  <a class="item">
                    2
                  </a>
                  <a class="item">
                    3
                  </a>
                  <a class="disabled item">
                    ...
                  </a>
                  <a class="item">
                    10
                  </a>
                </div>
            </div>
            <div class="six wide column"></div>
          </div>

          
    </div>
</div>

@endsection
