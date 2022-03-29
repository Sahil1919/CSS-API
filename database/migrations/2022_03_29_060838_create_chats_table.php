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
        Schema::create('Chat', function (Blueprint $table) {

		$table->integer('ticket_id')->length(7)->unsigned();
		$table->integer('type')->length(1)->unsigned();
		$table->integer('from')->length(7)->unsigned();
		$table->string('value');

        });
    }

    public function down()
    {
        Schema::dropIfExists('Chat');
    }
};
