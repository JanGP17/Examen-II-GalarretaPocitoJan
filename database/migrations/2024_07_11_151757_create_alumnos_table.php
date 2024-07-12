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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 50)->nullable()->index();
            $table->string('curso', 50)->nullable()->index();
            $table->decimal('nota_1', 6, 2)->default(0);
            $table->decimal('nota_2', 6, 2)->default(0);
            $table->decimal('promedio', 6, 2);
            $table->string('condicion', 50);
            $table->date('fecha_reg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
