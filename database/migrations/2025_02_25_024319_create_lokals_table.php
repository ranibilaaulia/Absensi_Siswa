
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
        Schema::create('lokals', function (Blueprint $table) {
            $table->id();

            $table->string('tingkat_kelas'); 
            $table->string('tahun_ajaran');  
            $table->bigInteger('id_guru')->unsigned();
            $table->bigInteger('id_jurusan')->unsigned();
            $table->insert('nama'); // Nama lokal
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokals');
    }
};
// Compare this snippet from database/migrations/2025_02_25_024319_create_jurusans_table.php: