<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicle_incomes', function (Blueprint $table) {
            $table->id();
            $table->string('starting_km', 512);
            $table->string('end_km', 512);
            $table->integer('income');
            $table->integer('petrol_poured')->nullable();
            $table->integer('petrol_litres')->nullable();
            $table->string('logged_on', 512);
            $table->string('vehicle', 512)->nullable();
            $table->integer('driver_id')->nullable();
            $table->string('driver_name', 512)->nullable();
            $table->string('expense_detail', 512)->nullable();
            $table->integer('expense_price')->nullable();
            $table->longText('expense_image')->nullable();
            $table->longText('petrol_slip')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicle_incomes');
    }
}; 