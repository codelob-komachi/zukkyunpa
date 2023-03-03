<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('roomname_id');
            $table->biginteger('user_id');
            $table->biginteger('comment_num');
            $table->text('content');
            $table->integer('status')->default(1);
            // $table->tinyint('delflag');
            $table->datetime('created');
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
        Schema::dropIfExists('talks');
    }
}
