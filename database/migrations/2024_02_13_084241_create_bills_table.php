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
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Company')->nullable();
            $table->string('pan')->nullable();
            $table->string('product')->nullable();
            $table->string('quan')->nullable();
            $table->float('price')->nullable();
            $table->float('vat')->nullable();
            $table->float('total');
            $table->timestamps();
        });

        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product')->nullable();
            $table->string('quan')->nullable();
            $table->string('sold')->nullable();
            $table->string('impo')->nullable();
            $table->string('stock')->nullable();
            $table->string('total');
            $table->timestamps();
        });

        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Company')->nullable();
            $table->string('pan')->nullable();
            $table->string('product')->nullable();
            $table->string('quan')->nullable();
            $table->float('price')->nullable();
            $table->float('vat')->nullable();
            $table->float('total');
            $table->timestamps();
        });

        Schema::create('imports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product')->nullable();
            $table->string('quan')->nullable();
            $table->string('sold')->nullable();
            $table->string('expo')->nullable();
            $table->string('stock')->nullable();
            $table->string('total');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
        Schema::dropIfExists('stores');
        Schema::dropIfExists('sales');
        Schema::dropIfExists('imports');

    }
};
