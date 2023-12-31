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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();

            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password')->nullable()->unique();
            $table->string('address')->nullable();
            $table->string('contact_number')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
