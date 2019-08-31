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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            .full-height {
                height: 2vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
        </style>
         <style type="text/css">
            .hidden.menu {
              display: none;
            }
            
            .masthead.segment {
              min-height: 600px;
              padding: 1em 0em;
            }
            .masthead .logo.item img {
              margin-right: 1em;
            }
            .masthead .ui.menu .ui.button {
              margin-left: 0.5em;
            }
            .masthead h1.ui.header {
              margin-top: 2em;
              margin-bottom: 0em;
              font-size: 4em;
              font-weight: normal;
            }
            .masthead h2 {
              font-size: 1.7em;
              font-weight: normal;
            }
            
            .ui.vertical.stripe {
              padding: 8em 0em;
            }
            .ui.vertical.stripe h3 {
              font-size: 2em;
            }
            .ui.vertical.stripe .button + h3,
            .ui.vertical.stripe p + h3 {
              margin-top: 3em;
            }
            .ui.vertical.stripe .floated.image {
              clear: both;
            }
            .ui.vertical.stripe p {
              font-size: 1.33em;
            }
            .ui.vertical.stripe .horizontal.divider {
              margin: 3em 0em;
            }
            
            .quote.stripe.segment {
              padding: 0em;
            }
            .quote.stripe.segment .grid .column {
              padding-top: 5em;
              padding-bottom: 5em;
            }
            
            .footer.segment {
              padding: 5em 0em;
            }
            
            .secondary.pointing.menu .toc.item {
              display: none;
            }
            
            @media only screen and (max-width: 700px) {
              .ui.fixed.menu {
                display: none !important;
              }
              .secondary.pointing.menu .item,
              .secondary.pointing.menu .menu {
                display: none;
              }
              .secondary.pointing.menu .toc.item {
                display: block;
              }
              .masthead.segment {
                min-height: 350px;
              }
              .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
              }
              .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
              }
            }
    </style>
    </head>
    <body>
     @foreach ($settings as $setting)
@endforeach
        <div class="ui large top fixed hidden menu">
          <div class="ui container">
            <a class="active item">Home</a>
            <div class="right menu">
            <div class="item">
              <a href="{{ url('/login') }}" class="ui button">Log in</a>
            </div>
            </div>
          </div>
        </div>

    <!--Sidebar Menu-->
    <div class="ui vertical inverted sidebar menu">
      <img class="item" src="{{ asset('images/smalllogo.png') }}" style="height: 100px; width: 100px">
      <a class="active item">Home</a>
       @if (Route::has('login'))
            @if (Auth::check())
              <a href="{{ url('/home') }}" class="item">Dashboard</a>
              @else
              <a href="{{ url('/login') }}" class="item">Login</a>
            @endif
        @endif
    </div>

    <!--Page Contents-->
    <div class="pusher">
      <div class="ui inverted vertical masthead center aligned segment">
        <div class="ui container">
          <div class="ui large secondary inverted pointing menu">
            <a class="toc item"><i class="sidebar icon"></i></a>
            <img class="item" src="{{ asset('images/smalllogo.png') }}" style="height: 100px; width: 100px">
            <a class="active item">Home</a>
            <div class="right item">
              @if (Route::has('login'))
                    @if (Auth::check())
                        <a href="{{ url('/home') }}" class="ui inverted green basic button">Dashboard</a>
                    @else
                    <a href="{{ url('/login') }}" class="ui inverted teal basic button">Log In</a>
                    <a href="{{ url('/register') }}" class="ui inverted purple button disabled">Sign Up</a>
                    @endif
              @endif
             </div>
          </div>
        </div>
        <img src="{{ asset('images/slide1.png') }}" style="height: 470px">
        <div class="ui text container">
          <h2>
            <b style="color: red">Motto:</b> Presenting Everyman Perfect in Christ Jesus. (<i>Col. 1:28b</i>)
          </h2>
        </div>
      </div>


      <br><br>

      <div class="ui container">
        <!-- start container -->

        <div class="ui three column divided grid">
          <div class="row">
            <div class="column">
               <div class="ui fluid image">
                <center style="font-size: 20px; font-weight: bold;">About NAFECMLSS</center>
                   <p style="font-size: 16px;">{{$setting->aboutapp}}</p>
                </div>
            </div>
            <div class="column">
               <div class="ui fluid image">
                   <center style="font-size: 20px; font-weight: bold;">NAFECMLSS Vision</center>
                   <p style="font-size: 16px;">{{$setting->vision}}</p>
                </div>
            </div>
            <div class="column">
               <div class="ui fluid image">
                   <center style="font-size: 20px; font-weight: bold;">NAFECMLSS Mission</center>
                   <p style="font-size: 16px;">{{$setting->mission}}</p>
                </div>
            </div>
          </div>
        </div>

          <br>

          <div style="color:blue" align="right"> Powered by: <strong style="color:green">DOC Technologies</strong></div>
          
        <!-- inner container -->
        <!-- <div class="ui container">
            <div class="ui three column grid">
          <div class="row">
            <div class="column">
               
            </div>
            <div class="column">
               <div class="ui large image">
                   <img src="{{ asset('images/centered-paragraph.png') }}">
                </div>
            </div>
            <div class="column">
               
            </div>
          </div>
        </div>
        </div> -->
        <!-- end inner container -->

        <!-- end of container -->
    </div>

        <div class="flex-center position-ref full-height">
          <!-- default login and register links -->
           <!--  @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->
            
            <!-- End test -->
        </div>


        <script>
      $(document)
        .ready(function() {
          // fix menu when passed
          $('.masthead')
            .visibility({
              once: false,
              onBottomPassed: function() {
                $('.fixed.menu').transition('fade in');
              },
              onBottomPassedReverse: function() {
                $('.fixed.menu').transition('fade out');
              }
            })
          ;
      
          // create sidebar and attach to menu open
          $('.ui.sidebar')
            .sidebar('attach events', '.toc.item')
          ;
        })
      ;

    </script>
    </body>
</html>
