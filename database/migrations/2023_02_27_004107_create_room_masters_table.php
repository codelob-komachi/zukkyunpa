<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('user_id');
            $table->string('roomname');
            $table->integer('status')->default(1);
            // $table->tinyint('delflag');
            $table->datetime('created');
            $table->datetime('modified');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_masters');
    }
}
