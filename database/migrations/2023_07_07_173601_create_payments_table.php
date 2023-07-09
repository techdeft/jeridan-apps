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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('case_id');
            $table->unsignedBigInteger('lawyer_id');
            $table->unsignedBigInteger('payment_method');
            $table->unsignedBigInteger('payment_details');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('case_id')->references('id')->on('casses')->onDelete('restricted');
            $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('restricted');
             $table->foreign('payment_method')->references('id')->on('payment_methods')->onDelete('restricted');
            $table->foreign('payment_details')->references('id')->on('payment_details')->onDelete('restricted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
