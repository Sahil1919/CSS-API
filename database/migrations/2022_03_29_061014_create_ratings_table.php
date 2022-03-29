<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {

		$table->integer('ticket_id')->length(7)->unsigned();
		$table->integer('rating')->length(1)->unsigned();
		$table->string('feedback',200);
		$table->integer('to')->length(7)->unsigned();
		$table->integer('from')->length(7)->unsigned();

        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
