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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category'); // Kaos, Hoodie, Jacket, dll
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->string('sku')->unique();
            $table->integer('stock')->default(0);
            $table->json('sizes')->nullable(); // ['S', 'M', 'L', 'XL', 'XXL']
            $table->json('colors')->nullable(); // ['Hitam', 'Putih', 'Merah']
            $table->json('images')->nullable(); // Array of image paths
            $table->string('main_image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('views')->default(0);
            $table->decimal('rating', 2, 1)->default(0);
            $table->integer('reviews_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
