<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GuardianCreateRoleRoleTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up ()
	{
		if (!Schema::hasTable('role_role_token'))
		
			Schema::create ('role_role_token', function (Blueprint $table)
			{
				$table->increments ('id');
				$table->integer ('role_id');
				$table->integer ('role_token_id');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down ()
	{
		Schema::dropIfExists ('role_role_token');
	}

}
