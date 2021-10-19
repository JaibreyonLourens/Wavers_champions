<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBattlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('battles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('waver1_id');
            $table->foreignId('waver2_id');
            $table->integer('winner_id');
            $table->boolean('is_approved');
            $table->timestamps();


            $table->foreign('waver1_id')
                ->references('id')
                ->on('users');

            $table->foreign('waver2_id')
                ->references('id')
                ->on('users');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('battles');
    }
}
