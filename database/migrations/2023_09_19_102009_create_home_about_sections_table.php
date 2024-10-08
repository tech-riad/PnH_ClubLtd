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
        Schema::create('home_about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('abouttitle')->nullable();
            $table->string('aboutdesc')->nullable();
            $table->string('aboutstatus')->default('Show');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_about_sections');
    }
};
