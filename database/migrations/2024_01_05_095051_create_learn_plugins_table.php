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
        Schema::create('learn_plugins', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('name')->unique();
            $table->string('plugin_url')->nullable();
            $table->string('implemented_url')->nullable();
            $table->string('use')->nullable();
            $table->enum('status',['Pending','In Progress','Implemented'])->default('Pending');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learn_plugins');
    }
};
