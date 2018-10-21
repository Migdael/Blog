<!DOCTYPE html>
<html ">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/AdminLTE.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/_all-skins.min.css') }}">

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>MCV</b>Blog</a>
  </div>
  <!-- /.login-logo -->
  @yield('contenido')
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>

  <script src="{{asset('js/jQuery-2.1.4.min.js') }}"></script>
  <script src="{{asset('js/bootstrap.min.js') }}"></script>
  <script src="{{asset('js/jquery.min.js') }}"></script>
  <script src="{{asset('js/jquery.slimscroll.min.js') }}"></script>
  <script src="{{asset('js/fastclick.js') }}"></script>
  <script src="{{asset('js/adminlte.min.js') }}"></script>
  <script src="{{asset('js/demo.js') }}"></script>
</html>