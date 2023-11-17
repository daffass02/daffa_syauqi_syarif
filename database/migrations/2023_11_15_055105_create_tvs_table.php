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
        Schema::create('tvs', function (Blueprint $table) {
            $table->id();
            $table->String("no_seri");
            $table->String("merek");
            $table->date("tanggal_diterbitkan")->default(Now());
            $table->String("model");
            $table->String("harga");
            $table->String("deskripsi");
            $table->String("layar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tvs');
    }
};
