<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_chats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sex');
            $table->string('messanger')->unique();
            $table->string('instagram')->unique();
            $table->string('skype')->unique();
            $table->string('level');
            $table->string('country');
            $table->string('topic');
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
        Schema::dropIfExists('public_chats');
    }
}
