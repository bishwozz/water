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
        Schema::create('logos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image', 500)->nullable();
            $table->timestamps();
        });

        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->longText('page')->nullable();
            $table->timestamps();
        });
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('head')->nullable();
            $table->string('ware')->nullable();
            $table->string('phone')->nullable();
            $table->string('reg')->nullable();
            $table->string('pan')->nullable();
            $table->timestamps();
        });
        Schema::create('companys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->timestamps();
        });

        Schema::create('missions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->timestamps();
        });

        Schema::create('directors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('image', 500)->nullable();
            $table->longText('des')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logos');
        Schema::dropIfExists('abouts');
        Schema::dropIfExists('settings');
        Schema::dropIfExists('missions');
        Schema::dropIfExists('companys');
        Schema::dropIfExists('directors');

    }
};
