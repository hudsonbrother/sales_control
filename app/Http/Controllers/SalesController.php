<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SalesController extends Controller
{
	public function index() {
		$title = "Selecione o Vendedor";
		$sellers = Seller::all();

		return view('sales.index', ['title' =>  $title, 'sellers' => $sellers]);
	}

    public function select() {
		$title = "Registrar Vendas";

		$sellers = Seller::all();

		return view('sales.selectSeller', ['title' =>  $title, 'sellers' => $sellers]);
	}

	public function create(Request $request) {
		$title = "Registrar Vendas";

		$seller = json_decode($request->seller);

		return view('sales.create', ['title' =>  $title, 'seller' => $seller]);
	}

	public function store(Request $request) {

		try {
			$sales = new Sales();
			$sales->amount = $request->amount;
			$sales->seller_id = $request->seller_id;

			$sales->save();

			return redirect()->route('sales.select');
		} catch (Exception $e) {
			return route('sales.error');
		}
	}

	public function show(Request $request) {
		$title = "Relatório de Vendas";

		$sales = Sales::where('seller_id', $request->seller_id)->get();

		return view('sales.show', ['title' =>  $title, 'sales' => $sales, 'seller_id' => $request->seller_id]);
	}
}
