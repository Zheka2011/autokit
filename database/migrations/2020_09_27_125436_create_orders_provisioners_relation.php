<?php

/**
 * Laravel Schematics
 *
 * WARNING: removing @tag value will disable automated removal
 *
 * @package Laravel-schematics
 * @url     https://github.com/mtolhuys/laravel-schematics
 * @author  Maarten Tolhuijs <mtolhuys@protonmail.com>
 * @tag     laravel-schematics-orders-relation
 * @tag     laravel-schematics-provisioners-relation
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersProvisionersRelation extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	public function up() {
		Schema::table('provisioners', static function (Blueprint $table) {
			$table->increments('id')->change();
		});

		Schema::table('orders', static function (Blueprint $table) {

			$table->foreign('provisioner_id')->references('id')->on('provisioners');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('orders', static function (Blueprint $table) {
			$table->dropForeign(['provisioners_id']);
		});
	}
}
