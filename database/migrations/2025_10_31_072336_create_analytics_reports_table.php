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
        Schema::create('analytics_reports', function (Blueprint $table) {
         $table->id();
    $table->enum('event_type', [
        'document_upload',
        'approval_granted',
        'login',
        'access_denied',
        'document_viewed'
    ])->nullable();
    $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
    $table->foreignId('doc_id')->nullable()->constrained('documents')->onDelete('set null');
    $table->json('event_details')->nullable();
    $table->timestamp('event_timestamp')->useCurrent();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytics_reports');
    }
};
