<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>P.A| @yield ('title', 'default')</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/AdminLTE.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/_all-skins.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen/chosen.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/trumbowyg/ui/trumbowyg.css') }}">


</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini" style="background-image: url('/imagenes/fondo.jpg');">
<div class="wrapper">

@include('admin.template.partials.nav')
 


<div class="box">
        <div class="box-header with-border" style="background-color: #c7ced3">
          <h3 class="box-title">@yield ('tituloContenido', 'Inicio')</title> </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body" style="">
			<section>

        @include('flash::Message')
        @include('admin.template.partials.errors')
			@yield('contenido')
      
			</section>
         
        </div>
        <!-- /.box-body -->

        </div>

        <!-- /.box-footer-->
      </div>

        <div class="box-footer" style="background-color: #c7ced3">
           <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2018 CV Desarrollo <a href="https://adminlte.io">mcv@gmail.com</a>.</strong> All rights
      reserved.
    </div>
	
	<script src="{{asset('js/jQuery-2.1.4.min.js') }}"></script>
	<script src="{{asset('js/bootstrap.min.js') }}"></script>
	<script src="{{asset('js/jquery.min.js') }}"></script>
	<script src="{{asset('js/jquery.slimscroll.min.js') }}"></script>
	<script src="{{asset('js/fastclick.js') }}"></script>
	<script src="{{asset('js/adminlte.min.js') }}"></script>
	<script src="{{asset('js/demo.js') }}"></script>
  <script src="{{asset('plugins/chosen/chosen.jquery.js') }}"></script>
  <script src="{{asset('plugins/trumbowyg/trumbowyg.js') }}"></script>

    @yield('js')

</body>
</html>