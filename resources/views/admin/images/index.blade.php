@extends('admin.template.main');

@section('title', 'Imagenes')

@section('tituloContenido', 'Imagenes')

@section('contenido')

 <div class="row">
 	@foreach ($imagenes as $image)
 		
 		<div class="col-md-4">
 			<div class="panel panel-success">
                <div class="panel-body">
             
                	<img src="/imagenes/articulos/{{ $image->name }}" class="img-responsive">
    
                </div>
              <div class="pnanel-success panel-footer">{{ $image->article->title  }}</div>
            </div>
 		</div>
 	@endforeach


 </div>

 {!! $imagenes -> render() !!}
@endsection