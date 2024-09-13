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
        Schema::create('dailys', function (Blueprint $table) {
            $table->id();
            $table->string('namapekerja');
            $table->enum('kategoripekerjaan', ['PM Check','Troubleshooting','Instalasi','Repair','Event','Perjalanan Pulang']);
            $table->biginteger('nounit');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dailys');
    }
};
