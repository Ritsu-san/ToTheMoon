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
        Schema::create('destinations', function (Blueprint $table) {
           $table->id();
        $table->string('destination');
        $table->string('mainimg');
        $table->string('video');
        $table->double('price');
        $table->string('foodimg1');
        $table->string('foodimg2');
        $table->string('foodimg3');
        $table->string('tourspots1');
        $table->string('tourspots2');
        $table->string('tourspots3');
        $table->string('fooddescription');
        $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
};
