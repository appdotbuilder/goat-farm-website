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
        Schema::create('gallery_items', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Gallery item title');
            $table->text('description')->nullable()->comment('Gallery item description');
            $table->enum('type', ['image', 'video'])->comment('Media type');
            $table->string('file_url')->comment('File URL');
            $table->string('thumbnail_url')->nullable()->comment('Thumbnail URL for videos');
            $table->integer('sort_order')->default(0)->comment('Display order');
            $table->boolean('is_featured')->default(false)->comment('Whether item is featured');
            $table->timestamps();
            
            $table->index('type');
            $table->index('sort_order');
            $table->index('is_featured');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_items');
    }
};