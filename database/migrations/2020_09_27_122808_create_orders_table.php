<?php

/**
 * Laravel Schematics
 *
 * WARNING: removing @tag value will disable automated removal
 *
 * @package Laravel-schematics
 * @author  Maarten Tolhuijs <mtolhuys@protonmail.com>
 * @url     https://github.com/mtolhuys/laravel-schematics
 * @tag     laravel-schematics-orders-model
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('orders', static function (Blueprint $table) {
			$table->increments('id');
			$table->date('date_end')->nullable();
			$table->integer('car_id')->unsigned()->nullable();
			$table->integer('client_id')->unsigned()->nullable();
			$table->integer('zip_id')->unsigned();
			$table->integer('amt');
			$table->decimal('cost');
			$table->decimal('sum_cost');
			$table->decimal('price');
			$table->decimal('sum_price');
			$table->integer('provisioner_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('status_id')->unsigned();
			$table->text('comment')->nullable();
			$table->decimal('margin');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('orders');
	}
}
