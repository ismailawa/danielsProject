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
            <div class="ui top attached tabular menu">
                <a class="item active" data-tab="first">Basic Settings</a>
                <a class="item" data-tab="second">Advance Settings</a>
              </div>
              <div class="ui bottom attached tab segment active" data-tab="first">
                <div class="ui grid">
                  <div class="nine wide column">

                    <div class="ui form">
                  <div class="inline fields">
                    <label data-tooltip="Application name refers to the name that the app will carry" data-position="top left" data-inverted="">Application Name <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <input type="text" placeholder="Name of the Software">
                    </div>
                  </div>
<br>
                  <div class="inline fields">
                    <label data-tooltip="NAFECMLSS Theme refers to the theme for NAFECMLSS" data-position="top left" data-inverted="">NAFECMLSS Theme <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <textarea rows="2"></textarea>
                    </div>
                  </div>
<br>
                  <div class="inline fields">
                    <label data-tooltip="NAFECMLSS Theme refers to the motto for NAFECMLSS" data-position="top left" data-inverted="">NAFECMLSS Motto <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <textarea rows="3"></textarea>
                    </div>
                  </div>
<br>
                  <div class="inline fields">
                    <label data-tooltip="Brief info about NAFECMLSS" data-position="top left" data-inverted="">About NAFECMLSS <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <textarea rows="6"></textarea>
                    </div>
                  </div>
<br>
                </div>
                  </div>
                <div class="ui form">
                  <div class="ten wide column">
                    <h4 class="ui dividing header">Uploaded Logo</h4>
                    <img class="disabled medium ui avatar image" src="{{ asset('images/elliot.jpg') }}">
                    <br><br>
                    <div class="inline fields">
                    <label data-tooltip="Select a new logo to be uploaded" data-position="top left" data-inverted="">Upload Logo <i class="question circle outline icon"></i></label>
                    <div class="ten wide field">
                      <input type="file">
                    </div>
                  </div>
                  </div>
                </div>
                  
                </div>


                <div class="ui grid">
                  <div class="seven wide column"></div>
                  <div class="three wide column">
                    <button class="ui green button">
                      Save and Exit
                    </button>
                  </div>
                  <div class="seven wide column"></div>
                </div>

              </div>

              <!-- begin second tab -->
              <div class="ui bottom attached tab segment" data-tab="second">
                    <div class="ui grid">
                  <div class="seven wide column">

                    <div class="ui form">
                  <div class="inline fields">
                    <label data-tooltip="Application name refers to the name that the app will carry" data-position="top left" data-inverted="">Enable Supervisor Registration <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <div class="ui form segment">
                        <div class="inline field">
                          <div class="ui toggle checkbox">
                            <input type="checkbox" tabindex="0" class="hidden">
                            <label><strong>Enable</strong></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <form class="ui form">
                 <div class="field">
                  <label>Add Fillable Fields:</label>
                  <div class="ui multiple search selection dropdown">
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
              </form>
<br>
                </div>
                  </div>
                  <div class="five wide column">
                   <!-- logo area -->
                  </div>
                </div>


                <div class="ui grid">
                  <div class="seven wide column"></div>
                  <div class="three wide column">
                    <button class="ui green button">
                      Save and Exit
                    </button>
                  </div>
                  <div class="seven wide column"></div>
                </div>
              </div>
         <!-- end contents here -->
    </div>
</div>

@endsection
