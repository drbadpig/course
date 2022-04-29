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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('age');
            $table->unsignedInteger('gender');
            $table->string('passport')->unique();
            $table->string('address');
            $table->date('date_of_birth');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('worker_id')->unique()->nullable()->after('password');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_worker_id_foreign');
            $table->dropColumn('worker_id');
        });

        Schema::dropIfExists('workers');
    }
};
