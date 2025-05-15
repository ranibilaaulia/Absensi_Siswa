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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip')->unique();
            $table->string('no_telp');
            $table->string('alamat');
            $table->string('status');
            $table->string('mata_pelajaran');
            $table->string('username');
            $table->string('password');
            $table->string('jk',1)->comment('Jenis Kelamin: L = Laki-laki, P = Perempuan');
            $table->date('tanggal_bergabung');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
