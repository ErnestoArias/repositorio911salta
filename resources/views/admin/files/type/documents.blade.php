@extends('admin.layouts.app')

@section('page','Documentos')


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
							<th scope="col">Descargar</th>
							<th scope="col">Eliminar</th>
						</tr>
					</head>
					<tbody>
					@foreach($documents as $document)
					<tr>
						<th scope="row">
							@if($document->extension == 'pdf' || $document->extension == 'PDF')
							<img class="img-responsive" src="{{ asset('img/files/pdf.svg') }}">
							@endif
							@if($document->extension == 'docx' || $document->extension == 'DOCX')
							<img class="img-responsive" src="{{ asset('img/files/pdf.svg') }}">
							@endif
						</th>
						<th scope="row">{{ $document->name }}</th>
						<th scope="row">{{ $document->created_at->diffForHumans() }}</th>
						<th scope="row">
			
							<a class="btn btn-primary" target="_blank" href="{{ asset('storage')  }}/{{ $folder }}/document/{{ $document->name }}.{{ $document->extension }}" open><i class="fas fa-download"></i> Descargar</a>

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


