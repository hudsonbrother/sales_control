@extends('template.layout')

@section('content')
	<div class="card">
		<div class="card-header">
			<h1>{{ $title }}</h1>
		</div>
		<div class="card-body">
			<form method="POST" action=" {{ route('sales.store') }}" enctype="multipart/form-data" class="mt-4">
				@csrf
				<div class="form-group">
					<label for="name">Olá {{ $seller->name }}</label>
				</div>

				<input type="hidden" name="seller_id" value=" {{ $seller->id }}">

				<div class="form-group">
					<label for="amount">Valor da Venda</label>
					<div class="input-group">
						<div class="input-group-text">R$</div>
						<input type="number" class="form-control" id="amount" name="amount">
					</div>
				</div>

				 <div class="btm_submit">
					 <button type="submit" class="btn btn-primary">Enviar</button>
				 </div>
			</form>
		</div>
	</div>
@endsection
