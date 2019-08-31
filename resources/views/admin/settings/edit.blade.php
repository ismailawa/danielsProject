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

       <form class="form-horizontal" method="POST" action="{{route('settings.update', $setting->id)}}">
                      {{method_field('PUT')}}
                      {{ csrf_field() }}
         <!-- contents come here -->
            <div class="ui top attached tabular menu">
                <a class="item" data-tab="first">Basic Settings</a>
                <a class="item active" data-tab="second">Advance Settings</a>
              </div>
              <div class="ui bottom attached tab segment" data-tab="first">
                <div class="ui grid">
                  <div class="nine wide column">

                    <div class="ui form">
                  <div class="inline fields" >
                    <label data-tooltip="Application name refers to the name that the app will carry" data-position="top left" data-inverted="">Application Name <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <strong><input type="text" placeholder="Name of the Software" value="{{$setting->appname}}" style="color: #00bcd4" name="appname"></strong>
                    </div>
                  </div>
<br>
                <div class="inline fields">
                    <label data-tooltip="Application name refers to the name that the app will carry" data-position="top left" data-inverted="">Hosting Institution Name <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                     <strong> <input type="text" placeholder="Name of the Software" value="{{$setting->hostinstitution}}" style="color: #00bcd4" name="hostinstitution"></strong>
                    </div>
                  </div>
<br>
                  <div class="inline fields">
                    <label data-tooltip="NAFECMLSS Theme refers to the theme for NAFECMLSS" data-position="top left" data-inverted="">NAFECMLSS Theme <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <strong><textarea rows="2" style="color: #00bcd4" name="apptheme">{{$setting->apptheme}}</textarea></strong>
                    </div>
                  </div>
<br>
                  <div class="inline fields">
                    <label data-tooltip="NAFECMLSS Theme refers to the motto for NAFECMLSS" data-position="top left" data-inverted="">NAFECMLSS Motto <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <strong><textarea rows="3" style="color: #00bcd4" name="appmotto">{{$setting->appmotto}}</textarea></strong>
                    </div>
                  </div>
<br>
                  <div class="inline fields">
                    <label data-tooltip="Brief info about NAFECMLSS" data-position="top left" data-inverted="">About NAFECMLSS <i class="question circle outline icon"></i></label>
                    <div class="seven wide field">
                      <strong><textarea rows="6" style="color: #00bcd4" name="aboutapp">{{$setting->aboutapp}}</textarea></strong>
                    </div>
                  </div>
<br>
                </div>
                  </div>
                <div class="ui form">
                  <div class="ten wide column">
                    <h4 class="ui dividing header">Host Institution Logo</h4>
                    <img class="disabled medium ui avatar image" src="{{ asset('images/elliot.jpg') }}">
                    <br><br>
                  </div>
                </div>
                  
                </div>


                <div class="ui grid">
                  <div class="seven wide column"></div>
                  <div class="three wide column">
                     <button type="submit" class="ui green button">Update Settings</button>
                  </div>
                  
                </div>

              </div>

              <!-- begin second tab -->
              <div class="ui bottom attached tab segment active" data-tab="second">
                    <div class="ui grid">
                  <div class="nine wide column">

                    <div class="ui form">
                    <form>
                      <div class="inline fields">
                    <label data-tooltip="Add new hostel to the existing list" data-position="top left" data-inverted="">Add Hostels List <i class="question circle outline icon"></i></label>
                    <div class="ten wide field">
                      <div class="ui form">
                        <div class="inline field">
                          <input type="text" name="hostel" placeholder="Additional Hostels"> <button class="ui green button">Add to List</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    </form>

<!-- begin of Biblestudy form -->
                    <form>
                      <div class="inline fields">
                    <label data-tooltip="Add new bible study group to the existing list" data-position="top left" data-inverted="">Add Bible Study List <i class="question circle outline icon"></i></label>
                    <div class="ten wide field">
                      <div class="ui form">
                        <div class="inline field">
                          <input type="text" name="hostel" placeholder="Additional Biblestudy"> <button class="ui green button">Add to List</button>
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
                          <input type="text" name="hostel" placeholder="Additional Institution"> <button class="ui green button">Add to List</button>
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
                          <input type="text" name="hostel" placeholder="Additional Position"> <button class="ui green button">Add to List</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    </form>
                    <!-- end of Position form -->

<hr>
                    <!-- begin of logo upload -->
                    <form method="post" enctype="multipart/form-data">
                      <div class="inline fields">
                    <label data-tooltip="Upload a logo of the host institution" data-position="top left" data-inverted="">Upload logo <i class="question circle outline icon"></i></label>
                    <div class="ten wide field">
                      <div class="ui form">
                        <div class="inline field">
                         <input type="file" name="select_file"> <input type="submit" name="upload" class="ui green button">
                         Formats: <b>jpg &nbsp;|&nbsp;png&nbsp;|&nbsp;gif</b>
                        </div>
                      </div>
                    </div>
                  </div>
                    </form>
                    <!-- end of logo upload -->
                  </div></div>
                  <div class="five wide column">
                   <!-- logo area -->
                  </div>
                </div>


                <div class="ui grid">
                  <div class="seven wide column"></div>
                  <!-- <div class="three wide column">
                    <a class="ui green button" href="#">
                      Update Settings
                    </a>
                  </div> -->
                  <div class="seven wide column"></div>
                </div>
              </div>
         <!-- end contents here -->

       </form>
    </div>
</div>

@endsection
