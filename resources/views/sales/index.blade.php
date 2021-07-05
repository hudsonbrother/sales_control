@extends('template.layout')

@section('content')
	<div class="card">
		<div class="card-header create-title">
			<h1>{{ $title }}</h1>
			<div class="btn_criar">
				<a class="btn btn-success" href="{{ route('seller.create') }}">Criar Vendedor</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-dark">

				<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Id do vendedor</th>
					<th scope="col"></th>
				</tr>
				</thead>
				<tbody>
					@foreach($sellers as $seller)
					<tr>
						<td>{{ $seller->id }}</td>
						<td>{{ $seller->name }}</td>
						<td><a class="btn btn-primary" href="{{ route('sales.show', ['seller_id' => $seller->id ]) }}">Gerar Relatório</a></td>
					</tr>
					@endforeach

			</table>
		</div>
	</div>
@endsection
