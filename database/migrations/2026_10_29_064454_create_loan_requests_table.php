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
        Schema::create('loan_requests', function (Blueprint $table) {
            $table->id()->primary();
            $table->foreignId('equipment_id')->constrained('equipments.id')->cascadeOnDelete();
            $table->VARCHAR('borrower_name', 100);
            $table->VARCHAR('borrower_nim', 10);
            $table->VARCHAR('borrower_email', 100);
            $table->DATE('loan_date');
            $table->DATE('expected_return_date');
            $table->text('purpose');
            $table->enum('status', ['diajukan', 'disetujui', 'ditolak', 'selesai'])->default('diajukan');
            $table->INTEGER('total_estimated_fee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_requests');
    }
};
