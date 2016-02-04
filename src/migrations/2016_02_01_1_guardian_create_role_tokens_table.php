<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuardianCreateRoleTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('role_tokens'))
			
			Schema::create ('role_tokens', function (Blueprint $table)
			{
				$table->increments ('id');
				$table->string ('slug', 64);
				$table->string ('description', 256);
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists ('role_tokens');
	}

}
