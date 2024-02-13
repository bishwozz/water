<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('waters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('sec')->nullable();
            $table->string('image', 500)->nullable();
            $table->longText('discription')->nullable();
            $table->longText('dis')->nullable();

            $table->timestamps();

        });

      

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waters');

    }
};
