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
        Schema::create('favourites', function (Blueprint $table) {
            $table->id();
            $table->string('propertyName')->nullable();
            $table->string('propertyPic');
            $table->string('type')->nullable();
            $table->string('area')->nullable();
            $table->string('district')->nullable();
            $table->string('location')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->string('publishFunction')->nullable();
            $table->string('typeOfLot')->nullable();
            $table->string('typeOfHold')->nullable();
            $table->string('size')->nullable();
            $table->string('facingDirection')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('washroom')->nullable();
            $table->string('furniture')->nullable();
            $table->string('gateGuarded')->nullable();
            $table->string('extension')->nullable();
            $table->string('renovation')->nullable();
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
        Schema::dropIfExists('favourites');
    }
};
