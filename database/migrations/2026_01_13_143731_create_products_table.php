<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('category'); // perfume or thawb
            $table->text('description')->nullable();

            $table->decimal('price', 8, 2);
            $table->integer('stock')->default(0);

            $table->string('image')->nullable(); // e.g. products/filename.jpg

            // thawb-specific (optional, used only when category = thawb)
            $table->string('size')->nullable();  // S/M/L/XL or 54, etc.
            $table->string('color')->nullable(); // Black, White, etc.

            // perfume-specific (optional, used only when category = perfume)
            $table->string('notes')->nullable(); // Sweet, Woody, etc.

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
