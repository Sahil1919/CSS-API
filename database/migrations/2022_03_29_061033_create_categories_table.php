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
        Schema::create('Category', function (Blueprint $table) {

		$table->integer('_id')->length(7)->unsigned();
		$table->string('value');
		$table->integer('parent_category')->length(7)->unsigned();

        });
    }

    public function down()
    {
        Schema::dropIfExists('Category');
    }
};
