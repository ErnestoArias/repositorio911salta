@extends('admin.layouts.app')

@section('page','Videos')


@section ('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12 table responsive">
				<table class="table table-hover">
					<head>
						<tr>
							<th scope="col"></th>
							<th scope="col">Nombre</th>
							<th scope="col">Subido</th>
							<th scope="col">Ver</th>
							<th scope="col">Eliminar</th>
						</tr>
					</head>
					<tbody>
					@foreach($videos as $video)
					<tr>
						<th scope="row">
							@if($video->extension == 'mp4' || $video->extension == 'MP4')
							<img class="img-responsive" src="{{ asset('img/files/mpeg.svg') }}">
							@endif
							@if($video->extension == 'avi' || $video->extension == 'AVI')
							<img class="img-responsive" src="{{ asset('img/files/avi.svg') }}">
							@endif
						</th>
						<th scope="row">{{ $video->name }}</th>
						<th scope="row">{{ $video->created_at->diffForHumans()  }}</th>
						<th scope="row">
			
							<a class="btn btn-primary" target="_blank" href="{{ asset('storage')  }}/{{ $folder }}/video/{{ $video->name }}.{{ $video->extension }}" open><i class="fas fa-eye"></i> Descargar</a>

						</th>
						<th scope="row">
						<a class="btn btn-danger" href="#"><i class="fas fa-trash"></i> Eliminar</a></th>
					</tr>
					</tbody>
					@endforeach		

				</table>
			</div>
	</div>
</div>	

@endsection


