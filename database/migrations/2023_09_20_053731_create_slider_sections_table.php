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
        Schema::create('slider_sections', function (Blueprint $table) {
            $table->id();
            $table->string('welcome_text')->nullable();
            $table->string('slider_title')->nullable();
            $table->longText('slider_description')->nullable();
            $table->string('slider_image')->nullable();
            $table->string('slider_profile_image')->nullable();
            $table->string('slider_profile_button_name')->nullable();
            $table->string('slider_profile_button_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider_sections');
    }
};
