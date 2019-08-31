<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NAFECMLSS | Portal</title>

         <!-- Styles -->
        <link href="{{ asset('static/dist/semantic-ui/semantic.min.css') }}" rel="stylesheet">
        <link href="{{ asset('static/stylesheets/default.css') }}" rel="stylesheet">
        <link href="{{ asset('static/stylesheets/pandoc-code-highlight.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('static/dist/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('static/dist/semantic-ui/semantic.min.js') }}"></script>
        <script src="{{ asset('static/custom.js') }}"></script>

        
    </head>
    <body>
<div class="ui text container">
  <div class="ui top attached info icon message">
    <i class="help circle icon"></i>
    <div class="content">
     <h3 class="ui header">Quick Information.</h3>
      <p>Please fill this form as complete and as accurate as possible. All required fields(*) must be filled out properly and all entry data should be strictly followed.</p>
    </div>
  </div>
  <div class="ui divider"></div><br>

  <h4 class="ui horizontal header divider">
    <a href="#">REGISTERATION FORM</a>
  </h4>
  <form id="reg_form">
  <div class="ui form">
  <div class="inline fields">
    <div class="eight wide field">
      <label>Salutation:</label>
      <div class="field">
          <select class="ui fluid search dropdown" name="salutation">
            @if( $salutations->count() > 0 )
              @foreach( $salutations as $salutation )
                <option value="{{ $salutation->name }}">{{ $salutation->name }}</option>
              @endforeach
            @endif
          </select>
           @if($errors->has('salutation'))
            <p style="color:red">{{$errors->first('salutation')}}*</p>
          @endif
        </div>
    </div>
  </div>
  <div class="ui divider"></div>
  <div class="inline fields">
    <div class="eight wide field">
      <label>Surname:</label>
         <div class="field">
        <input type="text" name="surname"{{ (Input::old('surname')) ? ' value="'. e(Input::old('surname')).'"' : '' }} placeholder="Last Name" >
        @if($errors->has('surname'))
            <p style="color:red">{{$errors->first('surname')}}*</p>
          @endif
      </div>
    </div>
  </div>
  <div class="inline fields">
    <div class="eight wide field">
      <label>Firstname:</label>
         <div class="field">
        <input type="text" name="firstname"{{ (Input::old('firstname')) ? ' value="'. e(Input::old('firstname')).'"' : '' }} placeholder="First Name">
        @if($errors->has('firstname'))
            <p style="color:red">{{$errors->first('firstname')}}*</p>
          @endif
      </div>
    </div>
  </div>
  <div class="inline fields">
    <div class="eight wide field">
      <label>Other name:</label>
         <div class="field">
        <input type="text" name="othername"{{ (Input::old('othername')) ? ' value="'. e(Input::old('othername')).'"' : '' }} placeholder="Other Name">
        @if($errors->has('othername'))
            <p style="color:red">{{$errors->first('othername')}}*</p>
          @endif
      </div>
    </div>
  </div>
  <div class="inline fields">
    <div class="eight wide field">
      <label>Initials:</label>
         <div class="field">
        <input type="text" name="initials"{{ (Input::old('initials')) ? ' value="'. e(Input::old('initials')).'"' : '' }}  placeholder="First letter of your names">
         @if($errors->has('initials'))
            <p style="color:red">{{$errors->first('initials')}}*</p>
          @endif
      </div>
    </div>
  </div>
  <div class="inline fields">
    <label for="fruit">Gender:</label>
       <div class="field">
          <select class="ui fluid search dropdown" name="gender"{{ (Input::old('gender')) ? ' value="'. e(Input::old('gender')).'"' : '' }} >
            <option{{ (Input::old('gender')) ? ' value="'. e(Input::old('gender')).'"' : '' }}>{{ (Input::old('gender')) ? ' '. e(Input::old('gender')).'' : '' }}</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select>
          @if($errors->has('gender'))
            <p style="color:red">{{$errors->first('gender')}}*</p>
          @endif
        </div></div>
  <div class="inline fields">
    <div class="eight wide field">
      <label>Date of Birth:</label>
        <div class="field">
          <input type="date" name="dob"  {{ Input::old('dob') ? ' value="'. e(Input::old('dob')).'"' : '' }} placeholder="dob">
          @if($errors->has('dob'))
              <p style="color:red">{{$errors->first('dob')}}*</p>
            @endif
        </div>
      </div>
    </div>
     <h5 class="ui horizontal header divider">
          <a href="#">OTHER DETAILS</a>
        </h5>
        <div class="inline fields">
      <div class="field eight wide">
        <label>Institution:</label>
        <select class="ui fluid dropdown" name="institution">
          @if( $institution->count() > 0 )
            @foreach( $institution as $institution )
              <option value="{{ $institution->name }}">{{ $institution->name }}</option>
            @endforeach
          @endif
        </select>
         @if($errors->has('institution'))
              <p style="color:red">{{$errors->first('institution')}}*</p>
            @endif
      </div></div>
         <div class="inline fields">
      <div class="field eight wide">
        <label>Zone:</label>
        <select class="ui fluid dropdown" name="zone">
          @if( $zones->count() > 0 )
            @foreach( $zones as $zone )
              <option value="{{ $zone->name }}">{{ $zone->name }}</option>
            @endforeach
          @endif
        </select>
         @if($errors->has('zone'))
              <p style="color:red">{{$errors->first('zone')}}*</p>
            @endif
      </div></div>
         <div class="inline fields">
      <div class="field eight wide">
        <label>Position:</label>
        <select class="ui fluid dropdown" name="position">
          @if( $positions->count() > 0 )
            @foreach( $positions as $position )
              <option value="{{ $position->name }}">{{ $position->name }}</option>
            @endforeach
          @endif
        </select>
         @if($errors->has('position'))
              <p style="color:red">{{$errors->first('position')}}*</p>
            @endif
      </div></div>
        <div class="inline fields">
      <div class="field eight wide">
        <label>Bible Study Group:</label>
        <select class="ui fluid dropdown" name="bible_study_group" >
          @if( $bibleStudies->count() > 0 )
            @foreach( $bibleStudies as $bibleStudy )
              <option value="{{ $bibleStudy->name }}">{{ $bibleStudy->name }}</option>
            @endforeach
          @endif
        </select>
         @if($errors->has('bible_study_group'))
              <p style="color:red">{{$errors->first('bible_study_group')}}*</p>
            @endif
      </div></div>
    <div class="inline fields">
      <div class="field eight wide">
        <label>Hostels:</label>
            <select class="ui fluid dropdown" name="hostel">
          @if( $hostels->count() > 0 )
            @foreach( $hostels as $hostel )
              <option value="{{ $hostel->name }}"">{{ $hostel->name }}&nbsp;&nbsp;&nbsp;{{ $hostel->hostel_type }}</option>
            @endforeach
          @endif
        </select>
         @if($errors->has('hostel'))
              <p style="color:red">{{$errors->first('hostel')}}*</p>
            @endif
      </div></div>
      
     <h5 class="ui horizontal header divider">
          <a href="#">HOW CAN WE REACH YOU ?</a>
        </h5>
    
    <div class="inline fields">
      <div class="eight wide field">
        <label>Mobile Contact:</label>
           <div class="field">
          <input type="text" name="mobile_contact"{{ (Input::old('mobile_contact')) ? ' value="'. e(Input::old('mobile_contact')).'"' : '' }}  placeholder="Mobile Contact">
          @if($errors->has('mobile_contact'))
              <p style="color:red">{{$errors->first('mobile_contact')}}*</p>
            @endif
        </div>
      </div>
    </div>
    
     <div class="inline fields">
      <div class="eight wide field">
        <label>Email:</label>
           <div class="field">
          <input type="email" name="email"{{ (Input::old('email')) ? ' value="'. e(Input::old('email')).'"' : '' }}  placeholder="Email address">
           @if($errors->has('email'))
              <p style="color:red">{{$errors->first('email')}}*</p>
            @endif
        </div>
      </div>
    </div>
   
    <div class="ui divider"></div>
    {{ Form::token() }}
    <button class="ui vertical animated button primary" id="register" tabindex="0">
      <div class="visible content">Register</div>
      <div class="hidden content">
        Submit
      </div>
    </button>
    
    <button class="ui vertical animated button primary" type="reset" id="register" tabindex="0" style="margin-left:100px">
      <div class="visible content">Clear fields</div>
      <div class="hidden content">
        Empty fields
      </div>
    </button>
    </div> 
    </div>
    </div>
  </form>
@stop

@section('script')
  @parent
  <script type="text/javascript">
    var form = jQuery('#reg_form'),
      modal_content = jQuery('#modal_content');

    jQuery('#register').on('click', function(e) {
      console.log('here');
      e.preventDefault();
      jQuery.ajax({
        type: "POST",
        url: "{{ URL::route('account-create-post') }}",
        data: form.serialize()
      }).done(function( response ) {
        console.log(response);
        if ( response != '' || response != undefined ) {
          if ( response.code == '200' ) {
            console.log("update was successful");
            modal_content.html(response.message);
            $('.ui.modal')
              .modal('show')
            ;
          } else {
            console.log("update was not successful");
            modal_content.html(response.message);
            $('.ui.modal')
              .modal('show')
            ;
          }
        }
      });
    });
  </script>
    </body>
</html>
