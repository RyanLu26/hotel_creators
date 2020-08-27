<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('cin_date');
            $table->date('cout_date');
            $table->integer('adult');
            $table->integer('child');
            $table->unsignedBigInteger('roomtype_id');
            $table->unsignedBigInteger('guest_id');
            $table->timestamps();

              $table->foreign('roomtype_id')
                  ->references('id')
                  ->on('room_types')
                  ->onDelete('cascade');


            $table->foreign('guest_id')
                  ->references('id')
                  ->on('guests')
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
        Schema::dropIfExists('reservations');
    }
}
