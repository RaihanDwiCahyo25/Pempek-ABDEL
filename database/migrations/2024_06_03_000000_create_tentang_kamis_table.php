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
        Schema::create('tentang_kamis', function (Blueprint $table) {
            $table->id();
            
            // Header Section
            $table->string('section_subtitle')->default('Tentang Kami');
            $table->string('section_title')->default('Cerita Rasa Pempek Abdel');
            
            // Section 1
            $table->longText('section1_content')->nullable();
            $table->string('section1_image')->nullable();
            
            // Section 2
            $table->longText('section2_content')->nullable();
            $table->string('section2_image')->nullable();
            
            // Section 3
            $table->longText('section3_content')->nullable();
            $table->string('section3_image')->nullable();
            
            // Meta SEO (opsional)
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentang_kamis');
    }
};
