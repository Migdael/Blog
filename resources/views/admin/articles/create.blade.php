@extends('admin.template.main');

@section('title', 'Crear Articulo')

@section('tituloContenido', 'Crear Articulo')

@section('contenido')


{!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}

<div class="form-group">
	{!! Form::label('title', 'Titulo') !!}
	{!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Titulo del Articulo', 'required' ])!!}
</div>

<div class="form-group">
	{!! Form::label('category_id', 'Categoria') !!}
	{!! Form::select('category_id', $categorias, null, ['class' => 'form-control select-categoria', 'required' ] )!!}
</div>

<div class="form-group">
	{!! Form::label('content', 'Contenido') !!}
	{!! Form::textarea('content',null, ['class' => 'form-control textarea-content'])!!}
</div>

<div class="form-group">
	{!! Form::label('tags', 'Tags') !!}
	{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple' => 'Seleccione una Opcion', 'required' ] )!!}
</div>

<div class="form-group">
	{!! Form::label('image', 'Imagen') !!}
	{!! Form::file('image',null, ['class'=>'file'])!!}
</div>

<div class="form-group">
	{!! Form::submit('Agregar Articulo', ['class' => 'btn btn-primary'])!!}
</div>


{!! Form::close() !!}

@endsection

@section('js')
<script>
	
	$('.select-tag').chosen({
		placeholder_text_multiple: "Seleccione maximo 5 tags",
		no_results_text: "Uups, no se encuentra!",
		max_selected_options: 3
	});

	$('.select-categoria').chosen({

	});


	$('.textarea-content').trumbowyg();


</script>
@endsection
