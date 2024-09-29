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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('services')->nullOnDelete()->cascadeOnUpdate();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->mediumText('body')->nullable();
            $table->string('image')->nullable();
            $table->text('gallery')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->decimal('price', 12, 2)->default(0);
            $table->bigInteger('order')->default(0);
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->timestamps();

            $table->index('slug');
            $table->index('status');
            $table->index(['slug', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
