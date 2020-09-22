<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provisioners extends Model {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id',
		'name',
		'contrakt',
		'white',
		'comment',
		'del',
		'created_at',
		'updated_at',
		'shipping',
		'api',
	];

}