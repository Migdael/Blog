@extends('admin.template.main');

@section('title', 'Editar Categoria')

@section('tituloContenido', 'Editar Categoria ' . $categories->name )

@section('contenido')

{!! Form::open(['route' => ['categories.update', $categories], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name',$categories->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required' ])!!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-warning'])!!}
</div>


{!! Form::close() !!}

@endsection