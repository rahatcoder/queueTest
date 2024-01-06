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
            $table->bigIncrements('products_id');
            $table->string('products_title',100)->nullable();
            $table->string('products_amount')->nullable();
            $table->string('products_date')->nullable();
            $table->integer('products_creator')->nullable();
            $table->integer('products_editor')->nullable();
            $table->string('products_slug',30)->nullable();
            $table->integer('products_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};