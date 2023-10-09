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
            $table->string('event_name');
            $table->string('event_slug');
            $table->date('event_date');
            $table->string('event_cost');
            $table->string('event_contact');
            $table->string('event_mail');
            $table->string('event_location');
            $table->string('event_map_location');
            $table->string('event_time');
            $table->string('btn_name');
            $table->string('event_front_image');
            $table->string('event_details_image');
            $table->longText('description');
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
