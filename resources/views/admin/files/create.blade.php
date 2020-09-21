@extends('admin.layouts.app')

@section('page','Subir Archivo')

@section ('content')

<form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row d-flex flex-row justify-content-center align-items-center pt-5">
		
		<div class="form-group">
		<label for="file">
			Selecciona un archivo para subir
		</label>
		<input type="file" class="form-control-file" name="file" required>
	</div>

<div class="form-group">
<button type="submit" class="btn btn-primary file">Subir Archivo</button>

</div>	

	</div>
</form>

@endsection