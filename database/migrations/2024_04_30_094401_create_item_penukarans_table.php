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
        Schema::create('item_penukarans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->float('harga');
            $table->integer('stamp');
            $table->string('satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_penukarans');
    }
};
