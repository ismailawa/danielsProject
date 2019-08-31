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
  <div class="active section">App Settings</div>
</div>
    <div class="ui raised segment">
      <h2 class="ui header">Application Settings</h2>
         <!-- contents come here -->

         <div class="ui grid segment">
          <div class="eight wide column">
             <h4 class="ui dividing header">Basic App Settings</h4>
            <form class="ui form">
              <div class="nine wide field">
                <label>App Name</label>
                <input type="text" name="first-name" placeholder="Application Name">
              </div>
              <br>
              <div class="ui grid">
                <div class="nine wide column">
                  <div class="field">
                    <label>Upload Logo</label>
                    <input type="file" name="first-name" placeholder="Application Name">
                    <button class="ui primary button">
                      Upload
                    </button>
                  </div>
                </div>
                <div class="four wide column">
                  <div class="field">
                    <label>Logo</label>
                    <img class="ui big avatar image" src="{{ asset('images/square-image.png') }}">
                  </div>
                </div>
              </div>


              <div class="ui grid">
                <div class="eight wide column">
                  <div class="field">
                    <label>About NAFECMLSS</label>
                    <textarea placeholder="About NAFECMLSS Details"></textarea>
                  </div>
                </div>
                <div class="seven wide column">
                  <div class="field">
                   <label>NAFECMLSS Mission</label>
                    <textarea placeholder="NAFECMLSS Mission"></textarea>
                  </div>
                </div>
              </div>

              <br>
              <div class="ui grid">
                <div class="eight wide column">
                  <div class="field">
                    <label>NAFECMLSS Theme</label>
                  <textarea placeholder="About NAFECMLSS Details"></textarea>
                  </div>
                </div>
                <div class="seven wide column">
                  <div class="field">
                   <label>NAFECMLSS Motto</label>
                    <textarea placeholder="NAFECMLSS Motto"></textarea>
                  </div>
                </div>
              </div>
              <br>
              <button class="ui green button">
                Edit Basic Settings
              </button>
            </form>
          </div>
          <div class="eight wide column">
             <h4 class="ui dividing header">Advance Settings</h4>
              <div class="ui segment">
                <div class="field">
                  <div class="ui toggle checkbox">
                    <input type="checkbox" name="gift" tabindex="0" class="hidden">
                    <label><Strong>Enable Registration of New Supervisor</Strong></label>
                  </div>
                </div>
              </div>
              <br>
              <form class="ui form">
                 <div class="field">
                  <label>Add Fillable Fields:</label>
                  <div class="ui fluid multiple search selection dropdown">
                    <input type="hidden" name="receipt">
                    <i class="dropdown icon"></i>
                    <div class="default text">Select Fillable Form Fields</div>
                    <div class="menu">
                      <div class="item" data-value="Gender" data-text="Gender">
                        <img class="ui mini avatar image" src="../images/avatar/small/jenny.jpg">
                        Gender
                      </div>
                      <div class="item" data-value="Date of Birth" data-text="Date of Birth">
                        <img class="ui mini avatar image" src="../images/avatar/small/elliot.jpg">
                        Date of Birth
                      </div>
                      <div class="item" data-value="Zone" data-text="Zone">
                        <img class="ui mini avatar image" src="../images/avatar/small/stevie.jpg">
                        Zone
                      </div>
                      <div class="item" data-value="Position" data-text="Position">
                        <img class="ui mini avatar image" src="../images/avatar/small/christian.jpg">
                        Position
                      </div>
                      <div class="item" data-value="Bible Study Group" data-text="Bible Study Group">
                        <img class="ui mini avatar image" src="../images/avatar/small/matt.jpg">
                        Bible Study Group
                      </div>
                      <div class="item" data-value="Hostel" data-text="Hostel">
                        <img class="ui mini avatar image" src="../images/avatar/small/justen.jpg">
                        Hostel
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui button" tabindex="0">Save Feilds</div>
              </form>
          </div>
        </div>


         <!-- end contents here -->
    </div>
</div>

@endsection
