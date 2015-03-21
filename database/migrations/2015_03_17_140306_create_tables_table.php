<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tables', function(Blueprint $table)
		{
			$table->increments('id');
                       
                        $table->string('name');
                        $table->string('email');
                        
                        $table->string('job');
                        $table->integer('salary');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tables');
	}

}
