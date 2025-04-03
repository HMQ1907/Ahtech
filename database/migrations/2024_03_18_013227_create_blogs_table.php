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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title_vi', 255);
            $table->string('title_en', 255);
            $table->string('short_description_vi', 255);
            $table->string('short_description_en', 255);
            $table->string('image', 255)->nullable();
            $table->string('slug', 255)->unique();
            $table->longText('content_vi')->nullable();
            $table->longText('content_en')->nullable();
            $table->tinyInteger('is_active')->default('1');
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
