@extends('template.layout')

@section('content')
	<div class="card">
		<div class="card-header create-title">
			<h1>{{ $title }}</h1>
			<div class="btn_criar">
				<a class="btn btn-success" href="{{ route('sales.select') }}">Criar venda</a>
			</div>
		</div>
		<div class="card-body">
			@if (count($sales) === 0)
					<h3>Esse Vendedor não possui vendas</h3>
			@else
			<table class="table table-dark">
				<thead>
					<tr>
						<th scope="col">Id da Venda</th>
						<th scope="col">Id do vendedor</th>
						<th scope="col">Nome do vendedor</th>
						<th scope="col">Email do vendedor</th>
						<th scope="col">Comissão do vendedor</th>
						<th scope="col">Valor da Venda</th>
						<th scope="col">Data da Venda</th>
						<th scope="col"></th>
					</tr>
				</thead>
				@foreach($sales as $sale)
				<tbody>
					<tr>
						<td>{{ $sale->id }}</td>
						<td>{{ $sale->seller_id }}</td>
						<td>{{ $sale->seller->name}}</td>
						<td>{{ $sale->seller->email}}</td>
						<td>{{ 'R$ '.number_format($sale->Commission($sale->amount), 2, ',', '.' )}}</td>
						<td>{{ 'R$ '.number_format($sale->amount, 2, ',', '.' )}}</td>
						<td>{{ $sale->created_at}}</td>

					</tr>
				</tbody>
				@endforeach
			</table>
			@endif
		</div>
	</div>
@endsection
