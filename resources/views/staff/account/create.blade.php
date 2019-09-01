@extends('layouts.main-app')

@section('content')
<div class="ui text container">
  <div class="ui top attached info icon message">
    <i class="help circle icon"></i>
    <div class="content">
     <h3 class="ui header">Quick Information.</h3>
      <p>Please fill this form as complete and as accurate as possible. All required fields(*) must be filled out properly and all entry data should be strictly followed.</p>
    </div>
  </div>
  <h4 class="ui horizontal header divider">
    <a href="#">REGISTERATION FORM</a>
  </h4>
  <!-- form starts here -->
  <form id="reg_form">
  	<div class="ui form">
  		<div class="inline fields">
		    <div class="eight wide field">
		      <label>Salutation:</label>
		      <div class="field">
		          <select class="ui fluid search dropdown" name="salutation">
		          	@if( $salutations->count() > 0 )
			          	@foreach ($salutations as $salutation)
			          	<option value="{{ $salutation->name }}">{{ $salutation->name }}</option>
						@endforeach
					@endif
					@if($errors->has('salutation'))
			            <p style="color:red">{{$errors->first('salutation')}}*</p>
			        @endif
		            
	            </select>
		        </div>
		    </div>
  		</div>
  		<div class="ui divider"></div>
  		<div class="inline fields">
		    <div class="eight wide field{{ $errors->has('surname') ? ' has-error' : '' }}">
		      <label>Surname:</label>
		      <div class="field">
		          <input type="text" name="surname" value="{{ old('surname') }}" required autofocus placeholder="Surname">
		          @if ($errors->has('surname'))
						<span class="help-block">
							<strong>{{ $errors->first('surname') }}</strong>
						</span>
                    @endif
		      </div>
		    </div>
  		</div>
  		<div class="inline fields">
		    <div class="eight wide field{{ $errors->has('name') ? ' has-error' : '' }}">
		      <label>Firstname:</label>
		      <div class="field">
		          <input type="text" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="Firstname">
		          @if ($errors->has('firstname'))
						<span class="help-block">
							<strong>{{ $errors->first('firstname') }}</strong>
						</span>
                  @endif
		      </div>
		    </div>
  		</div>
  		<div class="inline fields">
		    <div class="eight wide field{{ $errors->has('othername') ? ' has-error' : '' }}">
		      <label>Othername:</label>
		      <div class="field">
		          <input type="text" name="othername" value="{{ old('othername') }}" required autofocus placeholder="middle name">
		          @if ($errors->has('othername'))
						<span class="help-block">
							<strong>{{ $errors->first('othername') }}</strong>
						</span>
                  @endif
		      </div>
		    </div>
  		</div>
  		<div class="inline fields">
		    <div class="eight wide field{{ $errors->has('initials') ? ' has-error' : '' }}">
		      <label>Initials:</label>
		      <div class="field">
		          <input type="text" name="initials" value="{{ old('initials') }}" required autofocus placeholder="First letter of your name">
		          @if ($errors->has('initials'))
						<span class="help-block">
							<strong>{{ $errors->first('initials') }}</strong>
						</span>
                  @endif
		      </div>
		    </div>
		  </div>
		 <div class="inline fields">
		    <div class="eight wide field{{ $errors->has('department') ? ' has-error' : '' }}">
		      <label>Department:</label>
		      <div class="field">
		          <input type="text" name="department" value="{{ old('department') }}" required autofocus placeholder="Department Name">
		          @if ($errors->has('department'))
							<span class="help-block">
								<strong>{{ $errors->first('department') }}</strong>
							</span>
                  @endif
		      </div>
		    </div>
  		</div>
  		<div class="inline fields">
		    <div class="eight wide field">
		      <label>Gender:</label>
		      <div class="field">
		          <select class="ui fluid search dropdown" name="gender">
		          	<option>Select</option>
		            <option value="Male">Male</option>
		            <option value="Female">Female</option>
	            </select>
		        </div>
		    </div>
  		</div>
  		<div class="inline fields">
		    <div class="eight wide field">
		      <label>Date of Birth:</label>
		      <div class="field">
		          <input type="date" name="dob" placeholder="mm/dd/yy">
		      </div>
		    </div>
  		</div>
  		 <h5 class="ui horizontal header divider">
          <a href="#">HOW CAN WE REACH YOU ?</a>
        </h5>
        <div class="inline fields">
		    <div class="eight wide field">
		      <label>Mobile Contact:</label>
		      <div class="field">
		          <input type="text" name="mobile" placeholder="+234-XXX-XXX-XXX">
		      </div>
		    </div>
  		</div>
  		<div class="inline fields">
		    <div class="eight wide field">
		      <label>Contact Email:</label>
		      <div class="field">
		          <input type="email" name="email" placeholder="hello@example.com">
		      </div>
		    </div>
  		</div>
  		<div class="ui divider"></div>

  		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
  		

  		<button class="ui vertical animated button primary" id="register" tabindex="0">
      <div class="visible content">Register</div>
      <div class="hidden content">
        Submit
      </div>
    </button>

    <button class="ui vertical animated button primary" type="reset" id="register" tabindex="0" style="margin-left:450px">
      <div class="visible content">Clear fields</div>
      <div class="hidden content">
        Empty fields
      </div>
    </button>
<br><br><br>
  	</div>
  </form>
  <!-- form ends here -->

  @include("layouts.modal")
</div>
@endsection
@section('script')
  @parent
  <script type="text/javascript">
  	// console.log($('.ui.modal'));
  	// console.log($('.ui'));
  	// console.log($('.modal'));
  	// $('.ui.modal')
   //            .modal('show')
   //          ;

    var form = jQuery('#reg_form'),
    modal_content = jQuery('#modal_content');

    jQuery('#register').on('click', function(e) {
      console.log('here');
      e.preventDefault();
      jQuery.ajax({
        type: "POST",
        url: "{{ URL::route('staff.create-post') }}",
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
@stop