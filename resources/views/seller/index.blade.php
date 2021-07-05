@extends('template.layout')

@section('content')
	<div class="card">
		<div class="card-header create-title">
			<h1>Vendedores</h1>
			<div class="btn_criar">
				<a class="btn btn-success" href="{{ route('seller.create') }}">Criar</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-dark">

				<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col">Data de criacão</th>
					<th scope="col"></th>
				</tr>
				</thead>
				<tbody>

						@foreach($sellers as $seller)
						<tr onclick="window.location='{{ route('seller.create') }}'">
							<td>{{ $seller->id }}</td>
							<td>{{ $seller->name }}</td>
							<td>{{ $seller->email }}</td>
							<td>{{ $seller->created_at }}</td>
							<td>
								<a href="#">editar</a>
								<a href="#">remover</a>
							</td>
						</tr>
						@endforeach

			</table>
		</div>
	</div>
@endsection
