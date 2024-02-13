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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('image', 500)->nullable();
            $table->string('grade')->nullable();
            $table->string('size')->nullable();
            $table->string('pack')->nullable();
            $table->longText('discription')->nullable();
            $table->timestamps();

        });

        Schema::table('missions', function (Blueprint $table) {
            $table->longText('pir')->nullable();
        });

        Schema::create('raws', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->longText('page')->nullable();
            $table->timestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->longText('meas')->nullable();
            $table->timestamps();

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('missions');
        Schema::dropIfExists('raws');
        Schema::dropIfExists('contacts');
   

    }
};
