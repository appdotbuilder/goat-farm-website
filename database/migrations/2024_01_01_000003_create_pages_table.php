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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->comment('URL slug for the page');
            $table->string('title')->comment('Page title');
            $table->text('content')->comment('Page content in HTML format');
            $table->json('meta_data')->nullable()->comment('Additional page metadata');
            $table->boolean('is_active')->default(true)->comment('Whether the page is published');
            $table->timestamps();
            
            $table->index('slug');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};