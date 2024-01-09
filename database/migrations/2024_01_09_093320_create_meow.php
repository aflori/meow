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
        Schema::create('meows', function (Blueprint $table) {
            $table->primary('id');
            $table->uuid('id');
            $table->string("content", 300)->nullable(false);
            $table->timestamp("creation_date")->nullable(true);
            $table->timestamp("modification_date")->nullable(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meow');
    }
};
