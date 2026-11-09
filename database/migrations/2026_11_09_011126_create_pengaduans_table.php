<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('ruangan');
            $table->string('description');
            $table->timestamp('when');
            $table->enum('status', ['menunggu', 'proses', 'selesai'])->defaut('menunggu');
            $table->foreignId('category_id')->on('categories')->onDeleteCascade()->onUpdateCascade();
            $table->foreignId('siswa_id')->on('siswa')->onDeleteCascade()->onUpdateCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
