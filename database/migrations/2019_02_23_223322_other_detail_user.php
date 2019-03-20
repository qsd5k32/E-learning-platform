<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OtherDetailUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('identity_national_number',20)->unique();
            $table->string('birthday',20)->unique();
            $table->string('birthday_place',20)->unique();
            $table->longText('resume')->comment('for teacher')->nullable();
            $table->string('photo')->comment('for both teacher and student')->nullable();
            $table->string('phone_number',15)->comment('optional')->nullable();
            $table->string('address')->comment('optional')->nullable();
            $table->softDeletes();
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
        //
    }
}
