@extends('admin.template.main');

@section('title', 'Categorias')

@section('tituloContenido', 'Lista de  Categorias')

@section('contenido')

 <a href="/admin/categories/create" class="btn btn-info"><i class="fa fa-navicon"></i> Nueva Categoria</a>

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Accion</th>

	</thead>

	<tbody>
		@foreach ($categories as $category)
			<tr>
				<td>{{ $category -> id }}</td>
				<td>{{ $category -> name }}</td>
				
			<td> 
					<a href="/admin/categories/{{$category->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

					<a href="/admin/categories/destroy/{{ $category -> id }}" onclick="return confirm('¿Seguro que deseas elimar la categoria {{ $category -> name }}?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
				</td>
				
			</tr>
		@endforeach
	</tbody>
</table>

{!! $categories -> render() !!}
@endsection