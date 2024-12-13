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
        Schema::create('option', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assesment_id')
                ->references('id')
                ->on('assesment')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->char('type');
            $table->string('uraian');
            $table->boolean('is_true');
            $table->integer('score');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
