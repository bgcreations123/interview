<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier_products extends Model
{
	use SoftDeletes;
	
    public function supplier()
	{
	    return $this->belongsTo(Suppliers::class);
	}

	public function product()
	{
	    return $this->belongsTo(Products::class);
	}
}
