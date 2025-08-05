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
            $table->string('name')->comment('Product name');
            $table->text('description')->comment('Product description');
            $table->enum('category', ['goats', 'milk', 'processed_products', 'training_services'])->comment('Product category');
            $table->decimal('price', 10, 2)->nullable()->comment('Product price');
            $table->string('image_url')->nullable()->comment('Product image URL');
            $table->boolean('is_available')->default(true)->comment('Whether the product is available');
            $table->integer('sort_order')->default(0)->comment('Display order');
            $table->timestamps();
            
            $table->index('category');
            $table->index('is_available');
            $table->index('sort_order');
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