<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
                    $table->increments('id');
                    $table->string('login', 25)->unique();
                    $table->string('password', 60);
                    $table->string('name', 25);
                    $table->string('surname', 25);
                    $table->string('lastname', 25);
                    $table->string('email')->unique();
                    $table->string('phone');
                    $table->string('foto');
                    $table->date('birthday');
                    $table->string('zipcode', 6);
                    $table->text('address');
                    $table->text('institution');
                    $table->text('position');
                    $table->boolean('status')->default('1');
                    $table->boolean('is_premium')->default('0');
                    $table->boolean('is_blocked')->default('0');
                    $table->integer('last_ip');
                    $table->dateTime('last_login');
                    $table->rememberToken();
                    $table->timestamps();
                    $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
