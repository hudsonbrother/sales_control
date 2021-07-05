<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index() {
		$title = "Lista de Vendedores";

		$sellers = Seller::all();

		return view('seller.index', ['title' =>  $title, 'sellers' => $sellers]);
	}

	public function create()
	{
		$title = "Criar Vendedor";
		return view('seller.create', ['title' =>  $title]);
	}

	public function store(Request $request) {
		try {
			$seller = new Seller();
			$seller->name = $request->name;
			$seller->email = $request->email;
			$seller->save();

			return redirect()->route('seller.index');
		} catch (Exception $e) {
			return route('seller.error');
		}
	}
}
