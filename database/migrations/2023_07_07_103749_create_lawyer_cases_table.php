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
        Schema::create('lawyer_cases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_id');
             $table->unsignedBigInteger('lawyer_id');
            $table->timestamps();

             $table->foreign('case_id')->references('id')->on('casses')->onDelete('RESTRICT');
             $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyer_cases');
    }
};
