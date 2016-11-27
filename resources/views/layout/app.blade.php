<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>SMKN 10 JAKARTA</title>

  <!-- CSS  -->
  <link href="{{url('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
  <link href="{{ url('https://fonts.googleapis.com/css?family=Gloria+Hallelujah') }}" rel="stylesheet">
  <link href="{{url('materialize/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{url('materialize/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

	@yield('content')
	<!--  Scripts-->
  <script src="{{url('https://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
  <script src="{{url('materialize/js/materialize.js')}}"></script>
  <script src="{{url('materialize/js/init.js')}}"></script>
  <script type="text/javascript">
    $(".dropdown-button").dropdown();
  </script>
</body>
</html>