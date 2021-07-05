@extends('template.layout')

@section('content')
	<div class="card">
		<div class="card-header">
			<h1>{{ $title }}</h1>
		</div>
		<div class="card-body">
			<form method="POST" action=" {{ route('seller.store') }}" enctype="multipart/form-data" class="mt-4">
				@csrf
				<div class="form-group">
					<label for="name">Nome do vendedor</label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="email">Email do vendedor</label>
					<input type="email" class="form-control" id="email" name="email">
				</div>
				 <div class="btm_submit">
					 <button type="submit" class="btn btn-primary">Criar</button>
				 </div>
			</form>
		</div>
	</div>
@endsection
