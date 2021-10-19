<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wavers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('waver_name')->nullable();
            $table->string('email');
            $table->unsignedBigInteger('wins');
            $table->unsignedBigInteger('losses');
            $table->unsignedBigInteger('points');
            $table->string('profile_picture')->nullable();
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
        Schema::dropIfExists('wavers');
    }
}
