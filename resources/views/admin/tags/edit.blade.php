@extends('admin.template.main');

@section('title', 'Editar Tag')

@section('tituloContenido', 'Editar Tag ' . $tag->name )

@section('contenido')

{!! Form::open(['route' => ['tags.update', $tag], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name',$tag->name, ['class' => 'form-control', 'placeholder' => 'Nombre del tag', 'required' ])!!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-warning'])!!}
</div>


{!! Form::close() !!}

@endsection