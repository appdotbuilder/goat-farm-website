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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->comment('Client name');
            $table->string('client_title')->nullable()->comment('Client title or position');
            $table->string('client_company')->nullable()->comment('Client company');
            $table->text('testimonial')->comment('Testimonial content');
            $table->string('client_photo')->nullable()->comment('Client photo URL');
            $table->integer('rating')->default(5)->comment('Rating out of 5');
            $table->boolean('is_featured')->default(false)->comment('Whether testimonial is featured');
            $table->integer('sort_order')->default(0)->comment('Display order');
            $table->timestamps();
            
            $table->index('is_featured');
            $table->index('sort_order');
            $table->index('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};