@extends('template.layout')

@section('content')
	<div class="card">
		<div class="card-header">
			<h1>{{ $title }}</h1>
		</div>
		<div class="card-body">
			<form method="POST" action=" {{ route('sales.create') }}" enctype="multipart/form-data" class="mt-4">
				@csrf
				<div class="form-group">
					<label for="seller">Selecione o vendedor</label>
					<select class="form-control" id="seller" name="seller">
							<option selected> </option>
						@foreach($sellers as $seller)
							<option value="{{ json_encode($seller) }}"> {{ $seller->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="btm_submit">
					<button type="submit" class="btn btn-primary">Entrar</button>
				</div>
			</form>
		</div>
	</div>
@endsection
