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
        Schema::create('e_c_u_s', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->string('nom_enseignant');
            $table->integer('masse_horaire_total');
            $table->integer('masse_horaire_ecoulee');
            $table ->foreignId('ue_id')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_c_u_s');
    }
};
