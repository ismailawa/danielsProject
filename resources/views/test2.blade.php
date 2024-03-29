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
        <!-- <link href="{{ asset('static/stylesheets/default.css') }}" rel="stylesheet">
        <link href="{{ asset('static/stylesheets/pandoc-code-highlight.css') }}" rel="stylesheet"> -->

        <!-- Scripts -->
        <script src="{{ asset('static/dist/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('static/dist/semantic-ui/semantic.min.js') }}"></script>

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
    <h2>Semantics Grid System Example</h2>
<div class="ui grid">
    <div class="four wide column"><strong>Grid Column 1</strong></div>
    <div class="four wide column"> <strong>Grid Column 2</strong></div>
    <div class="four wide column"> <strong>Grid Column 3</strong></div>
    <div class="four wide column"> <strong>Grid Column 4</strong></div>
</div>
    </body>
</html>
