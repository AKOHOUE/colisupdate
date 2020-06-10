  <!DOCTYPE html>
  <html>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globally Express</title>
       <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/assets/css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="/assets/css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
    </head>

    <body>

    @include('front/layouts/header')
    @yield('content')
    @include('front/layouts/footer')



 <!--JavaScript at end of body for optimized loading-->
       <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="/assets/js/init.js"></script>
    </body>
  </html>
