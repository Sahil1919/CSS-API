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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id('_id')->increments();
            $table->integer('role')->length(1)->unsigned();
            $table->string('name',64);
            $table->string('password',64);
            $table->string('email',64);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
};
