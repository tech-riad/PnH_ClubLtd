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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name')->nullable();
            $table->string('event_slug')->nullable();
            $table->date('event_date')->nullable();
            $table->string('event_cost')->nullable();
            $table->string('event_contact')->nullable();
            $table->string('event_mail')->nullable();
            $table->string('event_location')->nullable();
            $table->string('event_map_location')->nullable();
            $table->string('event_time')->nullable();
            $table->string('btn_name')->nullable();
            $table->string('btn_link')->nullable();
            $table->string('event_front_image')->nullable();
            $table->string('event_details_image')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
