<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_details extends Model
{
	use SoftDeletes;

    public function order()
	{
	    return $this->belongsTo(Orders::class);
	}

	public function product()
	{
	    return $this->belongsTo(Products::class);
	}
}
