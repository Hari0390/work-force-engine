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
        Schema::create('work_providers', function (Blueprint $table) {
            $table->id('wp_id');
            $table->integer('user_id');
            $table->string('company_name',20);
            $table->string('email')->unique();
            $table->string('address',50);
            $table->integer('contact_no');
            $table->string('qalification',50);
            $table->integer('salary');
            $table->integer('experience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_providers');
    }
};
