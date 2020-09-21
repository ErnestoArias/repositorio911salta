@extends('admin.layouts.app')

@section('page','Videos')


@section ('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12 table responsive">
				<table class="table table-hover">
					<head>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Nombre</th>
							<th scope="col">Subido</th>
							<th scope="col">Ver</th>
							<th scope="col">Eliminar</th>
						</tr>
					</head>
					<tbody>
					@foreach($videos as $video)
					<tr>
						<th scope="row">{{ $video->id }}</th>
						<th scope="row">{{ $video->name }}</th>
						<th scope="row">{{ $video->created_at }}</th>
						<th scope="row">
			
							<a href="{{ asset('storage')  }}/{{ $folder }}/video/{{ $video->name }}.{{ $video->extension }}" open><i class="fas fa-eye"></i> Ver</a>

						</th>
						<th scope="row"><a href="#"><i class="fas fa-trash"></i> Eliminar</a></th>
					</tr>
					</tbody>
					@endforeach		

				</table>
			</div>
	</div>
</div>	

@endsection


