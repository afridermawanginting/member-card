<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Member Card | {{ $title }} </title>

  <!-- Bootstrap core CSS -->

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> -->

  <link rel="shortcut icon" type="image/png" href="{{ $base_url }}/assets/img/card.png">
  <link href="{{$base_url}}/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- <link href="{{$base_url}}/assets/fonts/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="{{$base_url}}/assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{$base_url}}/assets/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{$base_url}}/assets/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="{{$base_url}}/assets/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="{{$base_url}}/assets/css/floatexamples.css" rel="stylesheet" type="text/css" />

  <script src="{{$base_url}}/assets/js/jquery.min.js"></script>
  <script src="{{$base_url}}/assets/js/nprogress.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    @yield('header-script')
</head>
