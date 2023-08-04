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
        Schema::create('ruas_coordinates', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ruas_id');
            $table->foreign('ruas_id')->references('id')->on('ruas');

            $table->string('coordinates');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruas_coordinates');
    }
};
