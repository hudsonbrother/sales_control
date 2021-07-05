<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Sales;

class Seller extends Model
{
    protected $fillable = ['name', 'email'];

    public function sales() {
    	return $this->belongsTo('sales', 'seller_id', 'id');
	}
}
