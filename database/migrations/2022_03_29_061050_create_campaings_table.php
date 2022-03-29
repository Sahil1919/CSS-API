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
        Schema::create('campaings', function (Blueprint $table) {

		$table->id('campaing_id')->increments();
		$table->integer('assigned_to')->length(7)->unsigned();
		$table->string('campaing_name');

        });
    }

    public function down()
    {
        Schema::dropIfExists('campaings');
    }
};
