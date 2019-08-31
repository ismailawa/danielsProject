<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NAFECMLSS | Portal</title>

         <!-- Styles -->
        <link href="{{ asset('static/dist/semantic-ui/semantic.min.css') }}" rel="stylesheet">
        <link href="{{ asset('semantics/components/icon.css') }}" rel="stylesheet">
        <link href="{{ asset('semantics/components/accordion.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('static/stylesheets/default.css') }}" rel="stylesheet">
        <link href="{{ asset('static/stylesheets/pandoc-code-highlight.css') }}" rel="stylesheet"> -->

        <!-- Scripts -->
        <script src="{{ asset('static/dist/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('static/dist/semantic-ui/semantic.min.js') }}"></script>
        <!-- <script src="{{ asset('semantics/components/accordion.js') }}"></script> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

         <style type="text/css">
            .hidden.menu {
              display: none;
            }
            
            .masthead.segment {
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
              display: block;
            }

            .inner-content{
              padding-left: 10px
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
              /*.masthead.segment {
                min-height: 350px;
              }*/
              .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
              }
              .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
              }
            }
            .bigicon{
              font-size: 50px;
            }
    </style>
    </head>
    <body>
        

    <!--Sidebar Menu-->
    <div class="ui vertical inverted labeled icon sidebar menu">
      <a class="item"  href="{{ route('admin.dashboard') }}">
      <i class="home icon"></i> Home
    </a>
    <a class="item" href="{{ route('profile.index') }}">
      <i class="smile icon"></i> Profile
    </a>
    <a class="item" href="{{ route('members.index') }}">
      <i class="users icon"></i> Members
    </a>
    <a class="item" href="{{ route('admin.backup') }}">
      <i class="hdd icon"></i> Backup Database
    </a>
    <a class="item" href="{{ route('settings.index') }}">
      <i class="cogs icon"></i> Manage Settings
    </a>
    </div>

    <!--Page Contents-->
    <div class="pusher">
      <div class="ui inverted vertiacl masthead center aligned segment">
        <div class="ui">
          <div class="ui medium secondary inverted pointing menu">
            <a class="toc item"><b><h4><i class="sidebar icon"></i> MENU</h4></b></a>
            <!-- floated side dropdown -->
            <div class="ui right dropdown link item">
            	<i class="user icon"></i> 
            	{{ Auth::user()->name }}
            	<i class="dropdown icon"></i>
	            <div class="menu">
	              <a href="#" class="item"><i class="smile icon"></i> Profile</a>
	              <div class="ui fitted divider"></div>
	              <a class="item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                 	document.getElementById('logout-form').submit();">
                 	<i class="sign out alternate icon"></i> Sign Out
            	  </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
	            </div>
          	</div>
          <!-- end floated side dropdown -->
          </div>
        </div>
      </div>

      @yield('content')
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

      // dropdown js
      $('.ui.dropdown')
		  .dropdown()
		;
        $('.ui.accordion')
      .accordion()
    ;
    $('.ui.checkbox')
      .checkbox()
    ;
    $('.menu .item')
  .tab()
;
    </script>
    </body>
</html>