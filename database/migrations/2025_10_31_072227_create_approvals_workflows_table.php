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
        Schema::create('approvals_workflows', function (Blueprint $table) {
        $table->id();
        $table->foreignId('doc_id')->constrained('documents')->onDelete('cascade');
        $table->foreignId('approver_id')->constrained('users')->onDelete('cascade');
        $table->enum('status', ['pending', 'approved', 'rejected', 'returned_for_revision'])->default('pending');
        $table->text('comments')->nullable();
        $table->timestamp('requested_at')->useCurrent();
        $table->timestamp('responded_at')->nullable();
        $table->integer('sequence_order')->nullable();
    });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvals_workflows');
    }
};
