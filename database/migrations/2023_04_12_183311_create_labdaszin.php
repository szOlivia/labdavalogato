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
        Schema::create('labdaszin', function (Blueprint $table) {
            $table->id('sz_id');
            $table->string('szinek', 10);
            $tadle->integer('darab');
            $table->date('datum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labdaszin');
    }
};
