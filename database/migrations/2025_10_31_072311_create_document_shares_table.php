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
        Schema::create('document_shares', function (Blueprint $table) {
        $table->id();
        $table->foreignId('doc_id')->constrained('documents')->onDelete('cascade');
        $table->string('shared_with_email', 150)->nullable();
        $table->string('share_link', 255)->nullable();
        $table->timestamp('expires_at')->nullable();
        $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
        $table->timestamp('created_at')->useCurrent();
        $table->integer('access_count')->default(0);
    });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_shares');
    }
};
