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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('issuer');
            $table->string('certificate_number')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('expiration_date')->nullable();
            $table->text('certificate_file')->nullable();
            $table->string('credential_url')->nullable();
            $table->text('description')->nullable();
            $table->integer('sort_order');
            $table->string('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
