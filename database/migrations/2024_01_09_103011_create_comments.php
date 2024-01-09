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
        Schema::create('coments', function (Blueprint $table) {
            $table->uuid();
            $table->string("content", 300)->nullable(false);
            $table->timestamp("creation_date")->nullable(true);
            $table->timestamp("modification_date")->nullable(true);
            $table->uuid('meows_id');

            // $table->primary('id');
            $table->foreign('meows_id')->references('id')->on('meows');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coments');
    }
};
