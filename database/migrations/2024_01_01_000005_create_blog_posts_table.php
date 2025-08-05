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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Blog post title');
            $table->string('slug')->unique()->comment('URL slug for the blog post');
            $table->text('excerpt')->nullable()->comment('Short excerpt of the post');
            $table->longText('content')->comment('Blog post content in HTML format');
            $table->string('featured_image')->nullable()->comment('Featured image URL');
            $table->enum('status', ['draft', 'published'])->default('draft')->comment('Post status');
            $table->timestamp('published_at')->nullable()->comment('Publication date');
            $table->unsignedBigInteger('user_id')->comment('Author user ID');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->index('slug');
            $table->index('status');
            $table->index('published_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};