@extends('admin.template.main')

@section('title', 'Tags')
@section('article_title', 'Lista de tags')

@section('content')
	<!-- BUSCADOR -->
		{!! Form::open(['route' => 'admin.tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
			<div class="input-group">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag', 'aria-describedby' => 'search']) !!}
				<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
			</div>
		{!! Form::close() !!}
		<br><br><br><br>
	<!-- FIN BUSCADOR -->
	<table class="table table-striped">
		<thead>
			<th>ID</th>	
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->id }}</td>
					<td>{{ $tag->name }}</td>
					<td>
						<a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
						<a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('¿Realmente quieres eliminar este tag?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div><a href="{{ route('admin.tags.create') }}" class="btn btn-primary">Crear nuevo tag
	</a></div>
	<div class="text-center">{!! $tags->render() !!}</div>
@endsection