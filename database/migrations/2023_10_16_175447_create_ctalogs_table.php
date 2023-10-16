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
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('body')->nullable();
            $table->unsignedInteger('parent-id')->nullable(); //нет отрицательных значений. Просто интеджер - от 0 до 64, а это убирает отрицательные и за счет этого увеличивается диапазон в 2 раза
            $table->timestamps(); // время обновления и создания записи
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctalogs');
    }
};
