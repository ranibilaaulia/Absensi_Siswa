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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nisn')->unique();
            $table->enum('jk',['L','P']);
            $table->string('alamat');
            $table->string('no_telp');  
            $table->string('nama_orgtua');
            $table->bigInteger('lokal_id')->unsigned(); 
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
