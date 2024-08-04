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
        Schema::create('provinsis', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi');
            $table->decimal('year_2019', 10, 3);
            $table->decimal('year_2020', 10, 3);
            $table->decimal('year_2021', 10, 3);
            $table->decimal('year_2022', 10, 3);
            $table->decimal('year_2023', 10, 3);
            $table->integer('cluster')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinsis');
    }
};
