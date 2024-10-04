<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order', function (Blueprint $table) {
        $table->id();
           $table->foreignId('product_id')->constrained()->onDelete('cascade');
           $table->integer('quantity');
           $table->decimal('total_price', 10, 2);
           $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};