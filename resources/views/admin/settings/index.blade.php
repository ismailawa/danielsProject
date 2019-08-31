@extends('layouts.custom-app')

@section('content')
@foreach ($settings as $setting)
@endforeach
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
                  <div class="inline fields" >
                    <label data-tooltip="Application name refers to the name that the app will carry" data-position="top left" data-inverted="">Application Name <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <strong><input type="text" placeholder="Name of the Software" value="{{$setting->appname}}" style="color: blue" disabled="true"></strong>
                    </div>
                  </div>
<br>
                <div class="inline fields">
                    <label data-tooltip="Application name refers to the name that the app will carry" data-position="top left" data-inverted="">Hosting Institution Name <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                     <strong> <input type="text" placeholder="Name of the Software" value="{{$setting->hostinstitution}}" style="color: blue" disabled="true"></strong>
                    </div>
                  </div>
<br>
                  <div class="inline fields">
                    <label data-tooltip="NAFECMLSS Theme refers to the theme for NAFECMLSS" data-position="top left" data-inverted="">NAFECMLSS Theme <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <strong><textarea rows="2" style="color: blue" disabled="true">{{$setting->apptheme}}</textarea></strong>
                    </div>
                  </div>
<br>
                  <div class="inline fields">
                    <label data-tooltip="NAFECMLSS Theme refers to the motto for NAFECMLSS" data-position="top left" data-inverted="">NAFECMLSS Motto <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <strong><textarea rows="3" style="color: blue" disabled="true">{{$setting->appmotto}}</textarea></strong>
                    </div>
                  </div>
<br>
                  <div class="inline fields">
                    <label data-tooltip="Brief info about NAFECMLSS" data-position="top left" data-inverted="">About NAFECMLSS <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <strong><textarea rows="6" style="color: blue" disabled="true">{{$setting->aboutapp}}</textarea></strong>
                    </div>
                  </div>
<br>
                </div>
                  </div>
                <div class="ui form">
                  <div class="ten wide column">
                    <h4 class="ui dividing header">Host Institution Logo</h4>
                    <img class="disabled medium ui avatar image" src="{{ asset('images/elliot.jpg') }}">
                  </div>
                  <br>
                    <a class="ui primary button" href="{{ route('admin.upload') }}" style="margin-left: 80px">
                      Upload New logo
                    </a>
                </div>
                </div>


                <div class="ui grid">
                  <div class="seven wide column"></div>
                  <div class="three wide column">
                    <a class="ui green button" href="{{route('settings.edit', $setting->id)}}">
                      Edit Settings
                    </a>
                  </div>
                  <div class="six wide column"></div>
                </div>

              </div>
              </form>

              <!-- begin second tab -->
              <div class="ui bottom attached tab segment" data-tab="second">
                    <div class="ui grid">
                  <div class="ten wide column">

                    <div class="ui form">
                      <div class="inline fields">
                    <label data-tooltip="Add new hostel to the existing list" data-position="top left" data-inverted="">Add Hostels List <i class="question circle outline icon"></i></label>
                    <div class="ten wide field">
                      <div class="ui form">
                        <div class="inline field">
                          <input type="text" name="hostel" disabled="true" placeholder="Additional Hostels"> <a class="ui green button" href="{{ route('hostels.create') }}">Add a Hostel</a>
                        </div>
                      </div>
                    </div>
                  </div>

<!-- begin of Biblestudy form -->
                    <form>
                      <div class="inline fields">
                    <label data-tooltip="Add new bible study group to the existing list" data-position="top left" data-inverted="">Add Bible Study List <i class="question circle outline icon"></i></label>
                    <div class="ten wide field">
                      <div class="ui form">
                        <div class="inline field">
                          <input type="text" name="hostel" disabled="true" placeholder="Additional Biblestudy"> <a class="ui green button" href="{{ route('biblestudy.create') }}">Add a Bible Study Group</a>
                        </div>
                      </div>
                    </div>
                  </div>
                    </form>
                    <!-- end of biblestudy form -->

                    <!-- begin of institution form -->
                    <form>
                      <div class="inline fields">
                    <label data-tooltip="Add new Institution to the existing list" data-position="top left" data-inverted="">Add Institution List <i class="question circle outline icon"></i></label>
                    <div class="ten wide field">
                      <div class="ui form">
                        <div class="inline field">
                          <input type="text" name="hostel" disabled="true" placeholder="Additional Institution"> <a class="ui green button" href="{{ route('institutions.create') }}">Add an Institution</a>
                        </div>
                      </div>
                    </div>
                  </div>
                    </form>
                    <!-- end of Institution form -->
                    <!-- begin of position form -->
                    <form>
                      <div class="inline fields">
                    <label data-tooltip="Add new position to the existing list" data-position="top left" data-inverted="">Add Position List <i class="question circle outline icon"></i></label>
                    <div class="ten wide field">
                      <div class="ui form">
                        <div class="inline field">
                          <input type="text" name="hostel" disabled="true" placeholder="Additional Position"><a class="ui green button" href="{{ route('positions.create') }}">Add a new Position</a>
                        </div>
                      </div>
                    </div>
                  </div>
                    </form>
                    <!-- end of Position form -->
<hr>
                    <!-- begin of logo upload -->
                    <form>
                      <div class="inline fields">
                    <label data-tooltip="Upload a logo of the host institution" data-position="top left" data-inverted="">Upload logo <i class="question circle outline icon"></i></label>
                    <div class="ten wide field">
                      <div class="ui form">
                        <div class="inline field">
                         <input type="file" name="upload" disabled="true"><a class="ui green button" href="{{ route('positions.create') }}">Upload</a>
                        </div>
                      </div>
                    </div>
                  </div>
                    </form>
                    <!-- end of logo upload -->
                    
                  
                  <div class="five wide column">
                   <!-- logo area -->
                  </div>
                </div>

              </div>

         <!-- end contents here -->
    </div>
   
</div>

@endsection
