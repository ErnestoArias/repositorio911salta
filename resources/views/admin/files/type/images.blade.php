@extends('admin.layouts.app')

@section('page','Imágenes')


@section ('content')

<div class="container">
	<div class="row">

	@forelse($images as $image)

	<div class="col-sm-6 col-md-4">

		<div class="card" style="width: 18rem;">

			<img class="card-img-top" src="{{ asset('storage')  }}/{{ $folder }}/image/{{ $image->name }}.{{ $image->extension }}">

			<div class="card-body">
				<a href="{{ asset('storage')  }}/{{ $folder }}/image/{{ $image->name }}.{{ $image->extension }}" target="_blank" class="btn btn-primary"><i class="fas fa-eye"></i> Ver
				</a>

				
							<form action="{{ route('file.destroy', $image->id) }}" method="POST">
								@csrf
								<input type="hidden" name="_method" value="PATCH">
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
    <form action="{{ route('file.destroy', $image->id) }}" method="POST">
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
	


		</div>
</div>
	</div>	

	@empty
					<div class="container">
    <div class="alert alert-warning -{{ session('info')[0] }}" role="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">X
        </span>
        <strong>Atención!</strong> No tienes ninguna imagen
    </div>
</div>
	@endforelse

	</div>

</div>	

@endsection