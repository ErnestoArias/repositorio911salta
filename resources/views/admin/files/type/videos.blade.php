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
					@forelse($videos as $video)
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
									<button class="btn btn-danger pull-right " type="submit" data-toggle="modal" data-target="#delete"> <i class="fas fa-trash"></i> Eliminar
									
										</button> 

																		<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Está seguro que desea eliminar?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Está seguro que desea eliminar? Los archivos eliminados no podrán recupérse del servidor</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> <i class="fas fa-times"></i>Cerrar</button>
    <form action="{{ route('file.destroy', $video->id) }}" method="POST">
                            										@csrf
                            										<input type="hidden" name="_method" value="PATCH">
                            										<button class="btn btn-danger pull-right" type="submit"> <i class="fas fa-trash"></i> COnfirmar
                            									
                            										</button> 
                            
                            							</form>
      </div>
    </div>
  </div>
</div>

					<!--FIN Modal -->

								</form>
						</tr>
						</tbody>
					
					@empty
					<div class="container">
    <div class="alert alert-warning -{{ session('info')[0] }}" role="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">X
        </span>
        <strong>Atención!</strong> No tienes ningún video
    </div>
</div>
					@endforelse		

				</table>
			</div>
	</div>
</div>	

@endsection


