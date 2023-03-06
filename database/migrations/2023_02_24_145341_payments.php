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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('gor_id');
            $table->string('id_lapangan');
            $table->string('jam_mulai');
            $table->string('jam_selesai');
            $table->string('tanggal');
            $table->string('subtotal');
            $table->string('durasi_sewa');
            $table->string('foto_struk');
            $table->string('status');
            $table->string('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
