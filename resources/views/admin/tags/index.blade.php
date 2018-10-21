@extends('admin.template.main');

@section('title', 'Tags')

@section('tituloContenido', 'Lista de  Tags')

@section('contenido')

 <a href="/admin/tags/create" class="btn btn-info"><i class="fa fa-navicon"></i> Nuevo Tag</a>

 <!--BUSCADOR -->
{!! Form::open(["/admin/tags", 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

	<div class="input-group">
		{!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Buscar Tag..', 'aria-describedby' =>'search'])!!}
		<span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>	  
	</div>

{!! Form::close() !!}

 <!--FIN DEL BUSCADOR -->
 <hr class="box box-info">
<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Accion</th>

	</thead>

	<tbody>
		@foreach ($tags as $tag)
			<tr>
				<td>{{ $tag -> id }}</td>
				<td>{{ $tag -> name }}</td>
				
			<td> 
					<a href="/admin/tags/{{ $tag -> id }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

					<a href="/admin/tags/destroy/{{ $tag -> id }}" onclick="return confirm('¿Seguro que deseas elimar el tag {{ $tag -> name }}?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
				</td>
				
			</tr>
		@endforeach
	</tbody>
</table>

{!! $tags -> render() !!}
@endsection