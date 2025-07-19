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
        Schema::create('shopproducts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');  // Foreign key for brand (assumes 'brands' table exists)
            $table->text('description')->nullable();  // Product description
            $table->integer('price')->nullable();  // Product price (two decimal places)
            $table->integer('quantity');  // Available quantity of the
            $table->string('thumbnail')->nullable(); // <-- add this line

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopproducts');
    }
};
