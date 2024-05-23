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
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bidding_id')->unsigned();
            $table->bigInteger('entity_id')->unsigned();
            $table->decimal('bid_amount', 10,2);
            $table->timestamps();
            $table->foreign('bidding_id')->references('id')->on('biddings');
            $table->foreign('entity_id')->references('id')->on('entities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bids');
    }
};
