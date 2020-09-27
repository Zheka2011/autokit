<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id',
		'name',
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function brandToModel() {
		return $this->hasMany(\App\Models\BrandModel::class);
	}
}