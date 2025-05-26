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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->text('descripcion')->nullable();
        //    $table->string('estado')->default('abierto'); COMENTADO POR MAL FUNCIONAMIENTO (REHACER)
            $table->unsignedBigInteger('provincia_id');
        //    $table->unsignedBigInteger('usuario_id'); COMENTADO POR MAL FUNCIONAMIENTO (REHACER)
            $table->timestamps();

            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('cascade');

        //    $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');    COMENTADO POR MAL FUNCIONAMIENTO (REHACER)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');

        Schema::table('tikets', function (Blueprint $table) {
        $table->dropForeign(['provincia_id']);
        $table->dropColumn('provincia_id');
    });
    }
};
