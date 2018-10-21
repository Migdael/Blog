<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Invitado</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/AdminLTE.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/_all-skins.min.css') }}">


</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav" style="background-image: url('/imagenes/fondo.jpg');">
<div class="wrapper">

@include('front/componentes/nav')

  <!-- Full Width Column -->
  <div class="content-wrapper" style="background-image: url('/imagenes/fondo.jpg');">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        @yield('contenido')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2018 CV Desarrollo <a href="https://adminlte.io">mcv@gmail.com</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->




  
</body>

  <script src="{{asset('js/jQuery-2.1.4.min.js') }}"></script>
  <script src="{{asset('js/bootstrap.min.js') }}"></script>
  <script src="{{asset('js/jquery.min.js') }}"></script>
  <script src="{{asset('js/jquery.slimscroll.min.js') }}"></script>
  <script src="{{asset('js/fastclick.js') }}"></script>
  <script src="{{asset('js/adminlte.min.js') }}"></script>
  <script src="{{asset('js/demo.js') }}"></script>
</html>