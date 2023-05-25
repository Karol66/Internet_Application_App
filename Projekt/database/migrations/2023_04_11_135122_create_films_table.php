<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('film_length');
            $table->date('release_date');
            $table->string('country');
            $table->string('type');
            $table->double('price');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE films ADD image MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
