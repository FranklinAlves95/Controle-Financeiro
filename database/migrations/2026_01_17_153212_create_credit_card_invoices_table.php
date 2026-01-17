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
        Schema::create('credit_card_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('credit_card_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->date('reference_month'); // Mês de referência da fatura
            $table->decimal('amount', 10, 2)->default(0); // Valor total da fatura
            $table->enum('status', ['open', 'closed', 'paid'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_card_invoices');
    }
};
