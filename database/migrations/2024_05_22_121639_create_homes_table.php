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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('title_uz')->nullable();
            $table->text('title_ru')->nullable();
            $table->text('title_en')->nullable();
            $table->text('short_content_uz')->nullable();
            $table->text('short_content_ru')->nullable();
            $table->text('short_content_en')->nullable();
            $table->string('first_photo')->nullable();
            $table->string('second_photo')->nullable();
            $table->string('third_photo')->nullable();
            $table->string('fourth_photo')->nullable();
            $table->string('fifth_photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
