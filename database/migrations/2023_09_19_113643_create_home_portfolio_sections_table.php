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
        Schema::create('home_portfolio_sections', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_title')->nullable();
            $table->string('portfolio_desc')->nullable();
            $table->string('portfoliostatus')->default('Show');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_portfolio_sections');
    }
};
