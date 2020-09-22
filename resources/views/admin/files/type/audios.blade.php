@extends('admin.layouts.app')

@section('page','Audios')


@section ('content')

<div class="container">
	<div class="row">


	@forelse($audios as $audio)

		<div class="col-sm-12 col-md-4 pb-4">


				<audio src="{{ asset('storage')  }}/{{ $folder }}/audio/{{ $audio->name }}.{{ $audio->extension }}" controls>
				</audio>


			<button class="btn btn-danger pull-right mt-1" type="submit" data-toggle="modal" data-target="#delete"> <i class="fas fa-trash"></i> Eliminar
									
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
    <form action="{{ route('file.destroy', $audio->id) }}" method="POST">
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


			</div>

@empty
					<div class="container">
    <div class="alert alert-warning -{{ session('info')[0] }}" role="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">X
        </span>
        <strong>Atención!</strong> No tienes ningún audio
    </div>
</div>
	@endforelse

	</div>

</div>	


@endsection




<!-- Button trigger modal -->


