@extends('admin.template.main');

@section('title', 'Crear Articulos')

@section('tituloContenido', 'Articulos')

@section('contenido')
<a href="/admin/articles/create" class="btn btn-info"><i class="fa fa-navicon"></i> Nuevo Articulo</a>

<!--BUSCADOR -->
{!! Form::open(["/admin/articles", 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

	<div class="input-group">
		{!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Buscar Articulo..', 'aria-describedby' =>'search'])!!}
		<span class="input-group-addon" id="search"><span class="fa fa-search" aria-hidden="true"></span></span>	  
	</div>

{!! Form::close() !!}

 <!--FIN DEL BUSCADOR -->

<table class="table table-striped">
	<thead>
		<th>ID</th>
		<th>Titulo</th>
		<th>Categoria</th>
		<th>Usuario</th>
		<th>Accion</th>

	</thead>

	<tbody>
		@foreach ($articulos as $article)
			<tr>
				<td>{{ $article -> id }}</td>
				<td>{{ $article -> title }}</td>
				<td>{{ $article -> category->name }}</td>
				<td>{{ $article -> user->name }}</td>
				
			<td> 
					  <a href="/admin/articles/{{$article->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

					<a href="/admin/articles/destroy/{{ $article -> id }}" onclick="return confirm('¿Seguro que deseas elimar el articulo {{ $article -> title }}?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
					
				</td>
				
			</tr>
		@endforeach
	</tbody>
</table>

{!! $articulos -> render() !!}

@endsection