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
        Schema::create('home_blog_sections', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title')->nullable();
            $table->string('blog_desc')->nullable();
            $table->string('blogstatus')->default('Show');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_blog_sections');
    }
};
