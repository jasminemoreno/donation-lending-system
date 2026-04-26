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
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            // owner of item
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // basic info
            $table->string('title');
            $table->text('description')->nullable();

            // donation or lending
            $table->enum('type', ['lending', 'donating']);

            // category for filtering (Furniture, Books, etc.)
            $table->string('category');

            // barangay-only location (fixed choices)
            $table->enum('location', [
                'Alipao',
                'Anahaw',
                'Budlingin',
                'Camp Eduard',
                'Ferlda',
                'Gamuton',
                'Don Julio Ouano',
                'Ombong',
                'Poblacion',
                'Pongtud',
                'San Juan',
                'San Pedro',
            ]);

            // availability status
            $table->enum('item_status', ['available', 'unavailable'])
                  ->default('available');

            // condition details
            $table->text('condition_description')->nullable();
            $table->string('condition_image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};