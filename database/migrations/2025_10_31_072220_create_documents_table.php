333333<?php

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
        Schema::create('documents', function (Blueprint $table) {
        $table->id();
        $table->string('title', 255);
        $table->text('description')->nullable();
        $table->string('file_path', 255);
        $table->string('file_type', 50)->nullable();
        $table->enum('status', ['draft', 'pending_approval', 'approved', 'rejected', 'archived'])->default('draft');
        $table->unsignedBigInteger('created_by')->nullable();
        $table->unsignedBigInteger('updated_by')->nullable();
        $table->unsignedBigInteger('parent_doc_id')->nullable();
        $table->timestamps();

        $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
        $table->foreign('parent_doc_id')->references('id')->on('documents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
