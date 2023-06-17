<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->foreignId('author_id')->constrained();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('isbn')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('entities');
    }
};
