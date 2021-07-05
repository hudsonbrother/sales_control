<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;

class Sales extends Model
{
	const COMMISSION = 8.5;
    protected $fillable = ['seller_id', 'amount'];

    public function seller()
	{
		return $this->belongsTo(Seller::class);
	}

	public function commission($amount) {
		$commission = $amount / 100 * self::COMMISSION;

		return $commission;
	}

}
