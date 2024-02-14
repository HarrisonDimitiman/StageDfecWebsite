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
        Schema::create('customization_l_c_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('location');
            $table->string('phone_number');
            $table->string('email');
            $table->string('twitter_link');
            $table->string('fb_link');
            $table->string('instagram_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customization_l_c_d_s');
    }
};
