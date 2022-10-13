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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('patiekalas_id');
            // // $table->foreign('patiekalas_id')->references('id')->on('patiekalai')->onDelete('cascade');
            // $table->foreign('patiekalas_id')->references('id')->on('patiekalai');
            $table->unsignedBigInteger('patiekalas_id');
            $table->foreign('patiekalas_id')->references('id')->on('patiekalai')->onDelete('cascade');
            $table->text('post');
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
        Schema::dropIfExists('comments');
    }
};