<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('user_id');
            $table->biginteger('roommaster_id');
            $table->biginteger('roomname_id');
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
        Schema::dropIfExists('room_members');
    }
}
