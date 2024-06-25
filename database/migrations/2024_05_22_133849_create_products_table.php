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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('type_id');
            $table->text('name_uz')->nullable();
            $table->text('name_ru')->nullable();
            $table->text('name_en')->nullable();
            $table->text('size')->nullable();
            $table->text('manufacturer')->nullable();
            $table->text('tonna_metr')->nullable();
            $table->text('metr_tonna')->nullable();
            $table->text('price')->nullable();
            $table->text('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_of_products');
    }
};
