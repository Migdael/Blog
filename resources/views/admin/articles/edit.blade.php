@extends('admin.template.main');

@section('title', 'Editar Articulo')

@section('tituloContenido', 'Editar Articulo ' . $articulo->title)

@section('contenido')


{!! Form::open(['route' => ['articles.update', $articulo], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('title', 'Titulo') !!}
	{!! Form::text('title', $articulo->title, ['class' => 'form-control', 'placeholder' => 'Titulo del Articulo', 'required' ])!!}
</div>

<div class="form-group">
	{!! Form::label('category_id', 'Categoria') !!}
	{!! Form::select('category_id', $categorias, $articulo->Category->id, ['class' => 'form-control select-categoria', 'required' ] )!!}
</div>

<div class="form-group">
	{!! Form::label('content', 'Contenido') !!}
	{!! Form::textarea('content',$articulo->content, ['class' => 'form-control textarea-content'])!!}
</div>

<div class="form-group">
	{!! Form::label('tags', 'Tags') !!}
	{!! Form::select('tags[]', $tags, $misTags, ['class' => 'form-control select-tag', 'multiple' => 'Seleccione una Opcion', 'required' ] )!!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary'])!!}
</div>


{!! Form::close() !!}

@endsection

@section('js')
<script>
	
	$('.select-tag').chosen({
		placeholder_text_multiple: "Seleccione maximo 3 tags",
		no_results_text: "Uups, no se encuentra!",
		max_selected_options: 3
	});

	$('.select-categoria').chosen({

	});

	$('.textarea-content').trumbowyg();


</script>
@endsection