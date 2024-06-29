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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('kendaraan_id');
            $table->integer('supir_id');
            $table->string('keterangan');
            $table->date('tanggal_pengajuan');
            $table->date('tanggal_selesai')->nullable();
            $table->string('status');
            $table->decimal('total_service', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
