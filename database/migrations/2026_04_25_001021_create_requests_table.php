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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained()->cascadeOnDelete();
            $table->foreignId('requester_id')->constrained('users')->cascadeOnUpdate();
            $table->foreignId('owner_id')->constrained('users')->cascadeOnDelete();
            $table->enum('status', [
                'pending',
                'approved',
                'rejected',
                'borrowed',
                'returned',
                'overdue',
                'damaged'
            ])->default('pending');

            $table->timestamp('request_date')->useCurrent();
            $table->timestamp('approved_date')->nullable();
            
            $table->date('due_date')->nullable();
            $table->date('actual_return_date')->nullable();

            // RETURN CONDITION
            $table->text('return_condition_description')->nullable();
            $table->string('return_condition_image')->nullable();

            // PENALTY
            $table->decimal('penalty_amount', 10, 2)->nullable();
            $table->enum('penalty_status', ['paid','unpaid'])->default('unpaid');

            // DISPUTE
            $table->enum('dispute_status', ['none','reported','resolved'])->default('none');
            $table->text('dispute_note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
