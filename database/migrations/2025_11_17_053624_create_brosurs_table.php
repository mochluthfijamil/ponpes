<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('brosurs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('file'); // file brosur (pdf / jpg / png)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brosurs');
    }
};
