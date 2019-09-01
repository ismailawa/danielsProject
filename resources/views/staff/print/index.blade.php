@extends('layouts.main-app')

@section('head')
  @parent
  <title>Print ID Cards - Registeration System</title>
@stop
  
@section('content')
  <!-- Print layout of four. Best to use Tables -->
  <!-- <div align="center"><br>
    <h3 align="center">National Fellowship Of Christian Medical Laboratory Science Student<br><b class="motto">National Conference Unijos 2016</b></h3>
      <img src="img/uj logo.png" style="width:100px">&nbsp;&nbsp;
        <img src="img/logo11-e1397054965747.jpg" style="width:110px"><h2 align="center">Identity Card Panel</h2>
  </div> -->
      
      <br>
      <table border="2" width="100%" class="ui">
      @if( $members->count() > 0 )
          <form id="printForm">
          <?php $counter = 1; ?>
          @foreach( $members as $member )
         
            @if($counter == 1 || $counter == 3 || $counter == 5 || $counter == 7)
              <tr>
            @endif

            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td><td>
              <table width="100%">
                <tr>
                  <td width="5%" style="background: #90caf9;"><img src="images/smalllogo.png" style="width:30px"></td>
                  <td style="background: #90caf9;" colspan="3">
                    <p style="text-align:center; font-weight: bolder; color:#000">
                    <span style="color: #000; ">SOMETHING GOES HERE</span>
                  </td>
                </tr>
                <tr>
                  <td colspan="2"><p style="border: 1px solid black; margin-top: 1px; padding:5px;">ID No: <b>{{ $member->id }}</b></p></td>
                  <td colspan="3">
                    <p style="background: #4caf50; border: 1px solid black; margin-top: 1px; padding:5px; text-align:center; font-weight: bold;">IDENTITY CARD</p>
                  </td>
                </tr>
                
                <tr>
                  <p>
                  <td colspan="2"><p style="font-size:12px;">NAME:</p></td>
                  <td colspan="3">
                  <p><b style="font-size:17px; text-transform: uppercase;">{{ $member->surname }}</b>&nbsp;<b style="font-size:15px; font-family:Tekton Pro; text-transform: uppercase;">{{ $member->firstname }}</b></p>
                  </td></p>
                </tr>
                <tr>
                  <td colspan="2"><p style="font-size:12px;">DEPARTMENT:</p></td>
                  <td colspan="3">
                    <p><b style="font-size:14px; font-family:Tekton Pro">{{ $member->department }}</b></p>
                  </td>
                </tr>
                <br>
              </table>
            </td>

            @if($counter == 2 || $counter == 4 || $counter == 6 || $counter == 8)
              </tr>
            @endif

            @if($counter == 8)
              <?php $counter = 1; ?>
            @endif

            <?php $counter++; $regID = Crypt::encrypt($member->id) ?>

            <input type="hidden" name="{{ 'rid_' . $counter }}" value="{{ $regID }}">
            
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          @endforeach
          </form>
      @else
          <div class="noprint">
              <h3 class="center">No ID Card to Print.</h3>
          </div>
      @endif
      </table>

      <div class="noprint">
        <br>
        <button class="ui vertical animated button primary" id="refresh" tabindex="0" style="margin-left:100px">
          <div class="visible content">Refresh Page</div>
          <div class="hidden content">
            Refresh Page
          </div>
        </button>
        <button class="ui vertical animated button primary" id="print" tabindex="0" style="margin-left:30%">
          <div class="visible content">Print</div>
          <div class="hidden content">
            Print
          </div>
        </button>
        @include("layouts.modal")
      </div>
@endsection

@section('script')
  @parent
  <script type="text/javascript">
    var form = jQuery('#printForm'),
    modal_content = jQuery('#modal_content');

    jQuery('#refresh').on('click', function(e) {
        e.preventDefault();
        location.reload();
     });

    jQuery('#print').on('click', function(e) {
        e.preventDefault();
        window.print();
        jQuery.ajax({
          type: "POST",
          url: "{{ URL::route('staff.print-post') }}",
          data: form.serialize()
        }).done(function( response ) {
          console.log(response);
          if ( response != '' || response != undefined ) {
            if ( response.code == '200' ) {
              console.log("print update was successful");
              // modal_content.html(response.message);
              // $('.ui.modal')
              //   .modal('show')
              // ;
            } else {
              console.log("print update was not successful");
              // modal_content.html(response.message);
              // $('.ui.modal')
              //   .modal('show')
              // ;
            }
          }
        });
      });
  </script>
@stop