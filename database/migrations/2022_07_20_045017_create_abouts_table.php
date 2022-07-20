<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('position');
            $table->string('desp_1');
            $table->string('desp_2');
            $table->string('twt');
            $table->string('insta');
            $table->string('fb');
            $table->string('youtube');
            $table->string('p_email');
            $table->string('off_email');
            $table->string('phone');
            $table->string('img');

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
        Schema::dropIfExists('abouts');
    }
};
