<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomLogsTable extends Migration
{
    public function up()
    {
        Schema::create('room_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('room_id');
            $table->integer('state_id');
            $table->integer('bed_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('room_logs');
    }
}
