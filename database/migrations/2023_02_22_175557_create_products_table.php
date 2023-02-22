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
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('product');
            $table->text('description');
            $table->string('image');
            $table->string('value');
            $table->string('value_discount');
            $table->string('weight');
            $table->string('dimension_x');
            $table->string('dimension_y');
            $table->string('dimension_z');
            $table->string('sku');
            $table->integer('stock');
            $table->integer('slug');
            $table->integer('active');
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
