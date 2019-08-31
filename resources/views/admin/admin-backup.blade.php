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
  <div class="active section">Database Backup</div>
</div>
    <div class="ui raised segment">
      <h3 class="ui header">Backup Database</h3>
         <!-- contents come here -->
         <div style="font-size: 15px"><strong><i class="info circle icon"></i>Instructions on how to Upload Backup</strong></div>
          <div class="ui small steps">
              <div class="step">
                <i class="paper plane icon"></i>
                <div class="content">
                  <div class="title"><u>Click the Backup Button</u></div>
                  <div class="description">Click the Backup button to download a <br> copy of the database locally</div>
                </div>
              </div>
              <div class="active step">
                <i class="eye icon"></i>
                <div class="content">
                  <div class="title">Locate the 'sql' file</div>
                  <div class="description">Locate an sql copy of <br>the database file named "nafecmlss"</div>
                </div>
              </div>
              <div class="step">
                <i class="pencil icon"></i>
                <div class="content">
                  <div class="title">Navigate to the server Admin page</div>
                  <div class="description">Type "<i>localhost/phpmyadmin</i>" on the browser <br> to enter the server Admin panel</div>
                </div>
              </div>
              <div class="active step">
                <i class="thumbs up icon"></i>
                <div class="content">
                  <div class="title">Upload Downloaded 'sql' file</div>
                  <div class="description">Click on Database, enter database <br>name "<i>nafecmlss</i>". Click the "<i>Create</i>" button. <br>Finally Import the downloaded sql file.</div>
                </div>
              </div>
          </div>

          <div class="ui grid">
              <div class="three column row">
                <div class="column"></div>
                <div class="column">
                  <div class="ui animated fade massive green button" tabindex="0" align="center">
                    <div class="visible content">Create Backup Now</div>
                    <div class="hidden content">
                      <i class="download icon"></i> BACKUP 
                    </div>
                  </div>
                </div>
                <div class="column"></div>
              </div>
          </div>
          
         <!-- end contents here -->
    </div>
</div>

@endsection
