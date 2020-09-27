<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id',
		'name',
		'brand_id',
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function modelToBrand() {
		return $this->belongsTo(\App\Models\Brand::class);
	}
}