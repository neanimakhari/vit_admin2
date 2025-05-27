<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 512);
            $table->string('last_name', 512);
            $table->string('date_of_birth', 512);
            $table->string('gender', 512);
            $table->string('phone_number', 512);
            $table->string('email_address', 512);
            $table->string('address', 512);
            $table->string('license_number', 512);
            $table->string('license_expiry_date', 512);
            $table->longText('profile_picture')->nullable();
            $table->string('password', 512);
            $table->string('otp', 512)->nullable();
            $table->boolean('isActive')->nullable();
            $table->string('device_id', 512)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}; 