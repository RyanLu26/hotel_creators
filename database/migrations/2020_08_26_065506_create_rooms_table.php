<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('rnumber');
            $table->string('name');
            $table->string('photo');
            $table->string('description');
            $table->integer('rate');
            $table->unsignedBigInteger('roomtype_id');
            $table->timestamps();

            $table->foreign('roomtype_id')
                  ->references('id')
                  ->on('room_types')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
