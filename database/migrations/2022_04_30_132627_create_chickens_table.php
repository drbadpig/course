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
        Schema::create('chickens', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_birth');
            $table->double('weight');
            $table->boolean('state');
            $table->unsignedBigInteger('breed_id');
            $table->unsignedBigInteger('cage_id')->unique();
            $table->unsignedBigInteger('worker_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('breed_id')->references('id')->on('breeds');
            $table->foreign('cage_id')->references('id')->on('cages');
            $table->foreign('worker_id')->references('id')->on('workers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chickens');
    }
};
