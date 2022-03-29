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
        Schema::create('tickets', function (Blueprint $table) {

		$table->id('_id')->increments();
		$table->string('campaing_name');
		$table->string('manager');
		$table->string('ticket_title');
		$table->string('ticket_description',1000);

        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
