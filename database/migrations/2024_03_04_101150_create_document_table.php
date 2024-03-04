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
        Schema::create('document', function (Blueprint $table) {
            $table->bigIncrements('file_id'); // Primary key
            $table->string('title');
            $table->text('description');
            $table->string('file');
            $table->dateTime('created_at')->useCurrent(); // Current datetime
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document');
    }
};
