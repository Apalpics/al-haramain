<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // who placed the order (nullable so guest checkout can work later if you want)
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            // customer details (simple checkout)
            $table->string('customer_name');
            $table->string('phone')->nullable();
            $table->text('address');

            // order status + totals
            $table->string('status')->default('pending'); // pending, paid, cancelled, shipped etc
            $table->decimal('total', 10, 2)->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
