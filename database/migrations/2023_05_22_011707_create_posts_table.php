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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500)->nullable();
            $table->string('slug', 500)->nullable();
            $table->text('description', 500)->nullable();
            $table->text('content', 500)->nullable();
            $table->string('image', 500)->nullable();
            $table->enum('posted', ['yes', 'not'])->nullable()->default('not');
            $table->timestamps();
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
