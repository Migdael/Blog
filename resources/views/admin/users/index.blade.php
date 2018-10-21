@extends('admin.template.main');

@section('title', 'Crear Usuario')

@section('tituloContenido', 'Lista de  Usuarios')

@section('contenido')
 <a href="/admin/users/create" class="btn btn-info"><i class="fa fa-user-plus"></i> Nuevo Usuario</a>
<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Tipo</th>
		<th>Accion</th>

	</thead>

	<tbody>
		@foreach ($users as $user)
			<tr>
				<td>{{ $user -> id }}</td>
				<td>{{ $user -> name }}</td>
				<td>{{ $user -> email }}</td>
				
				<td>
				@if ($user -> type == "admin")
				<span class="label label-danger">{{ $user -> type }}</span>
				@else
				<span class="label label-primary">{{ $user -> type }}</span>
				@endif
				</td>
				<td> 
					<a href="/admin/users/{{ $user -> id }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

					<a href="/admin/users/{{ $user -> id }}/destroy" onclick="return confirm('¿Seguro que deseas elimar al usuario {{ $user -> name }}?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>


<div class="text-center">
	{!! $users -> render() !!}
</div>

@endsection