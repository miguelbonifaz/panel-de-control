<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeAgregaCampoProfesionEnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('profesiones', function (Blueprint $table) {
			$table->increments('id');
			$table->string('profesion', 100)->nullable();
			$table->timestamps();
		});

        Schema::table('users', function (Blueprint $table) {
			$table->integer('profesion_id')->unsigned()->nullable();
			$table->foreign('profesion_id')->references('id')->on('profesiones')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
			$table->dropForeign(['profesion_id']);
			$table->dropColumn('profesion_id');
		});
    }
}
