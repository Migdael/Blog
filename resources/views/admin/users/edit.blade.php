@extends('admin.template.main');

@section('title', 'Editar Usuario')

@section('tituloContenido', 'Editar Usuario ' . $user->name )

@section('contenido')

{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required' ])!!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Correo Electronico') !!}
	{!! Form::email('email',$user->email, ['class' => 'form-control', 'placeholder' => 'Ejemplo@gmail.com', 'required' ])!!}
</div>

<div class="form-group">
	{!! Form::label('type', 'Tipo') !!}
	{!! Form::select('type', [ '' => 'Seleccione un nivel..', 'member' => 'Miembro', 'admin' => 'Administrador'],$user->type,['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-warning'])!!}
</div>


{!! Form::close() !!}

@endsection