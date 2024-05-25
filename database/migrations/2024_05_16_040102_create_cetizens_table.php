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
        Schema::create('cetizens', function (Blueprint $table) {
            $table->id();
            $table->string('image', 1000)->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->integer('age');
            $table->date('bod');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cetizens');
    }
};
