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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->date('birthday');
            $table->string('gender');
            $table->text('address');
            $table->string('email');
            $table->string('no_telp');
            $table->foreignId('departemen_id')->constrained(table: 'departements', indexName: 'employees_departement_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('position_id')->constrained(table: 'positions', indexName: 'employees_position_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('salary');
            $table->date('join_date');
            $table->string('status');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
